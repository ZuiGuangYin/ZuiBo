<?php
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
require_once 'Calendar/Month/Weekdays.php';
require_once APP.'/default/models/Index.class.php';
class Blog {
	private $_db;
	private $_num;

	public function __construct() {
		$this->_db = DbManager::getConnection();
		$this->_num=0;
	}

	public function __destruct(){
		$this->_db->closeConnection();
	}


	public function showBlogs($req,$s){
		$idx = new MainIndex();
		$sess = new Zend_Session_Namespace('myApp'); 
		$s->assign('topmenu', $idx->getMenuInfo($req->getBaseUrl(),$sess->owner));
		$s->assign('nick_name',  $this->_db->fetchOne('SELECT nick_name FROM user WHERE uid = ? ',array( $sess->uid)));

		$this->setCalendar($s,$req);
		$this->showOldBlog($req,$s);
		$this->showNewComments($req,$s);

		//检索博客
		$this->searchBlog($req,$s);
	}
	public function showNewComments($req,$s){
		$sess = new Zend_Session_Namespace('myApp');
		$sql = "SELECT c.contents as contents ,b.bid as bid FROM blog_comment AS c INNER JOIN blog_master AS b ON b.bid=c.bid  WHERE b.uid =:uid and c.uid <> :uid ORDER by bcid DESC Limit 6";
		if($sess->owner!=$sess->uid) $sql = "SELECT c.contents as contents ,b.bid as bid FROM blog_comment AS c INNER JOIN blog_master AS b ON b.bid=c.bid  WHERE b.uid =:uid and c.uid <> :uid and b.openlevel <> 0 ORDER by bcid DESC Limit 6";
		$stt = $this->_db->prepare($sql);
		$stt->bindValue(':uid', $sess->uid);
		$stt->execute();
		$result = $stt->fetchAll();
		for($i=1;$i<count($result);$i++){
			if(mb_strlen($result[$i]['contents'],'UTF-8') > 10) $result[$i]['contents']=mb_substr($result[$i]['contents'],0,10,'UTF-8').'...';
		}
		$s->assign('newcomments', $result);
	}
	private function searchBlog($req,$s){
		$num=$req->getQuery('num');
		if($num == NULL){ $num = 0; }
		$dat=$req->getQuery('dat');
		$sess = new Zend_Session_Namespace('myApp');
		if($dat != NULL && $dat != ''){
			$sql = "SELECT * FROM blog_master WHERE uid =:uid and DATE_FORMAT(cdat ,'%Y-%m-%d') =:cdat";
			if($sess->owner!=$sess->uid) $sql = "SELECT * FROM blog_master WHERE uid =:uid and DATE_FORMAT(cdat ,'%Y-%m-%d') =:cdat and openlevel!=0";
			$stt = $this->_db->prepare($sql);
			$stt->bindValue(':uid', $sess->owner);
			$stt->bindValue(':cdat', date('Y-m-d', $dat));
			$stt->execute();
			$result = $stt->fetchAll();
		}else{
			$sql ="SELECT * FROM blog_master WHERE uid =:uid and DATE_FORMAT(cdat ,'%Y-%m')=DATE_FORMAT(date_add(sysdate(),interval :num month),'%Y-%m')";
			if($sess->owner!=$sess->uid) $sql ="SELECT * FROM blog_master WHERE uid =:uid and DATE_FORMAT(cdat ,'%Y-%m')=DATE_FORMAT(date_add(sysdate(),interval :num month),'%Y-%m')  and openlevel!=0";
			$stt = $this->_db->prepare($sql);
			$stt->bindValue(':uid', $sess->owner);
			$stt->bindValue(':num', $num);
			$stt->execute();
			$result = $stt->fetchAll();
		}
		$idx = new MainIndex();
		for($i = 0; $i < count($result); $i++) {
			$str=preg_replace('@([\r\n])[\s]+@', '\1', $result[$i]['contents']);
			 $result[$i]['shortcontents']=mb_substr($str,0,500,'UTF-8');
			 $result[$i]['lastflg']=0;
			 if($i==count($result)-1) $result[$i]['lastflg']=1;
			 $result[$i]['comment_cnt']=$this->_db->fetchOne('SELECT count(*) FROM blog_comment WHERE bid = ?',array($result[$i]['bid']));
			 $result[$i]['openlevel_name']=$idx->getKbnName('level',$result[$i]['openlevel']);
		}
		$s->assign('allblogs', $result);
		$s->assign('blogcnt', count($result));
	}
	public function deleteBlogInfo($data){
		for($i=1;$i<=$data['max'];$i++){
		   $bid=$data['bid'.$i];

		   if($bid !=NULL && $bid !='' ){
			  	$stt = $this->_db->query('DELETE FROM blog_master  WHERE bid= ?',array($bid)) ;
		   }		
		}
	}
	public function addBlog($req,$s){
		$idx = new MainIndex();
		$sess = new Zend_Session_Namespace('myApp'); 
		$s->assign('topmenu', $idx->getMenuInfo($req->getBaseUrl(),$sess->uid));
		$this->setCalendar($s,$req);
		$this->showOldBlog($req,$s);
		$this->showNewComments($req,$s);
		$this->getAllgroups($req,$s);
	}
	private function getAllgroups($req,$s){
		//组
		$sess = new Zend_Session_Namespace('myApp');
		$stt = $this->_db->prepare('SELECT gname ,gid FROM mygroup WHERE uid =:uid');
		$stt->bindValue(':uid', $sess->uid);
		$stt->execute();
		$result = $stt->fetchAll();
		$s->assign('allgroups', $result);
	}
	public function showOldBlog($req,$s){
		$sess = new Zend_Session_Namespace('myApp'); 
		$curyear = date('Y');
		$curmonth=date('m');
		$elderYear = $this->_db->fetchOne('SELECT YEAR(cdate) FROM user where uid = ?',array($sess->uid));
		$elderMonth = $this->_db->fetchOne('SELECT MONTH(cdate) FROM user where uid = ?',array($sess->uid));
		$regdate = date('Y-m-d',$this->_db->fetchOne('SELECT cdate FROM user where uid = ?',array($sess->uid)));
		$k=0;
		for($i=$curyear;$i>=$elderYear;$i--){
			
			$result[$k]['year']=$i.'年';
			for($j=1;$j<=12;$j++){
				if(($i==$curyear&&$j>$curmonth)||($i==$elderYear&&$j< $elderMonth)) $info[$j]['url']='';
				else	
				$info[$j]['url']=$req->getBaseUrl().'/'.$sess->owner.'/blog?num='.$this->calInterval($i,$j);
				$info[$j]['fullmonth']=$i.'年'.$j.'月';
				$info[$j]['month']=$j.'月';
			}
			$result[$k]['info']=$info;
			
			$k+=1;
			$info=null;
		}
		$s->assign('oldblogs', $result);
	}
	private function calInterval($year,$month){
		$curyear = date('Y');
		$curmonth=date('m');
		return ($year-$curyear)*12 + ($month-$curmonth);
	}
	public function getCalendar($num,$req) {
		$sess = new Zend_Session_Namespace('myApp');
		$userid = $sess->owner;
		
		$suserid=$sess->uid;
		if($userid == NULL || $userid == '') $userid=$suserid;
		
		$result = array();
		
		$cal = new Calendar_Month_Weekdays(date('Y'), date('m') + $num, 0);
		$cal->build();
		while($d = $cal->fetch()){
			if($d->isEmpty()){
				$result[] = '';
			} else {
				$sql = "SELECT COUNT(*) AS c FROM blog_master WHERE DATE_FORMAT(cdat ,'%Y-%m-%d')=? and uid = ?";
				if($sess->owner!=$sess->uid) $sql = "SELECT COUNT(*) AS c FROM blog_master WHERE DATE_FORMAT(cdat ,'%Y-%m-%d')=? and uid = ? and openlevel <> 0";
				$count = $this->_db->fetchOne($sql, array(date('Y-m-d', $d->getTimestamp()),$userid));
				$result[] = array(
					'day' => $d->thisDay(),
					'timestamp' => $d->getTimestamp(),
					'count' => $count
				);
			}
		}
		return $result;
	}
	public function setCalendar($s,$req){
		$num=$req->getQuery('num');
		if($num == NULL){ $num = 0; }

		$result = $this->getCalendar($num,$req);
		$s->assign('current_num', $num);
		$s->assign('current_month',
			mktime(0, 0, 0, date('m') + $num, 1, date('Y')));
		$s->assign('calendar', $result);
	}
	public function addBlogInfo($data,$s){
		$sess = new Zend_Session_Namespace('myApp');
		if($data["bid"] != NULL && $data["bid"] != ''){
			
			$this->_db->query("UPDATE blog_master set title = ? ,contents=?,openlevel=?,opengid=?,udat=? WHERE bid = ?" ,array($data["title"],$data['contents'],$data['open_level'],$data['group_id']!='' ? $data['group_id'] : NULL,date('Y-m-d H:i:s'),$data["bid"] ));
			$bid=$data["bid"];
		}else{
			$this->_db->insert('blog_master',
				array(
					'title'=>$data['title'],
					'contents'=>$data['contents'],
					'openlevel'=>$data['open_level'],
					'opengid'=>$data['group_id']!='' ? $data['group_id'] : NULL,
					'uid'=>$sess->uid,
					'year'=>date('Y'),
					'month'=>date('m'),
					'day'=>date('d'),
					'cdat'=>date('Y-m-d H:i:s'),
					'udat'=>date('Y-m-d H:i:s')
				)
			);
			$bid = $this->_db->fetchOne('SELECT LAST_INSERT_ID() AS bid');
		}
		for($i = 1; $i<4;$i++){
			if($data["photo".$i] != NULL && $data["photo".$i] != ''){
				$this->_db->query('DELETE FROM picture WHERE sort=? and bid=? ',array($i,$bid));
				$this->_db->insert('picture',
					array(
						'title'=>$data['title'],
						'filename'=>$data['file_photo'.$i],
						'smallpath'=>$data['smallphoto'.$i],
						'path'=>$data['normalphoto'.$i],//240*180像素
						'largepath'=>$data['photo'.$i],
						'sort'=>$i,
						'bid'=>$bid,
						'uid'=>$sess->uid,
						'udat'=>date('Y-m-d H:i:s'),
						'cdat'=>date('Y-m-d H:i:s')
					)
				);
			}
		}
		if($data['friendlist'] !=NULL && $data['friendlist'] !=''){
			$friends = explode(',',$data['friendlist'] );
			for($i = 0; $i<count($friends);$i++){
				$this->_db->query('DELETE FROM open_friend_list WHERE bid = ? ' ,array($bid));
				$this->_db->insert('open_friend_list',
					array(
						'bid'=>$bid,
						'fuid'=>$friends[$i],
						'uid'=>$sess->uid,
						'cdat'=>date('Y-m-d H:i:s')
					)
				);
			}
		
		}
		$this->addMark(10,$sess->uid);
	}
	private function addMark($mark,$uid){
		$oldmark = $this->_db->fetchOne("select mark from user where uid=?",$uid);
		$mark += $oldmark;
		$level=1;
		if($mark > 20000){
			$level=7;
		}else if($mark > 10000){
			$level=6;
		}else if($mark > 5000){
			$level=5;
		}else if($mark > 1000){
			$level=4;
		}else if($mark > 500){
			$level=3;
		}else if($mark > 100){
			$level=2;
		}
		
		$this->_db->query('UPDATE user set mark = ?,level=?,udate=? where uid = ?',array($mark,$level,date('Y-m-d H:i:s'),$uid));
	}
	public function showBlogInfo($req,$s){
		$idx = new MainIndex();
		$sess = new Zend_Session_Namespace('myApp'); 
		$s->assign('topmenu', $idx->getMenuInfo($req->getBaseUrl(),$sess->owner));
		$s->assign('nick_name',  $this->_db->fetchOne('SELECT nick_name FROM user WHERE uid = ? ',array( $sess->owner)));
		$s->assign('userlevel',  $this->_db->fetchOne('SELECT level FROM user WHERE uid = ? ',array( $sess->uid)));

		$this->setCalendar($s,$req);
		$this->showOldBlog($req,$s);
		$this->showNewComments($req,$s);

		//检索博客
		$bloginfo=$this->_db->fetchRow('SELECT * FROM blog_master WHERE bid = ?',array($req->getQuery('bid')));
		$bloginfo['openlevel_name']=$idx->getKbnName('level',$bloginfo['openlevel']);
		$bloginfo['nextbid']=$this->_db->fetchOne('SELECT bid FROM blog_master WHERE uid = ? and bid > ? ORDER BY bid limit 1',array($sess->owner,$req->getQuery('bid')));

		$bloginfo['beforebid']=$this->_db->fetchOne('SELECT bid FROM blog_master WHERE uid = ? and bid < ? ORDER BY bid DESC limit 1',array($sess->owner,$req->getQuery('bid')));

		$k=0;
		for($i=1;$i<4;$i++){
			$info = $this->_db->fetchRow('SELECT * FROM picture WHERE bid=? and sort = ?',array($req->getQuery('bid'),$i));
			if($info == NULL) $result[$k]['no']='';
			foreach($info as $key=>$val){
				$result[$k][$key]=$val;
			}
			$k+=1;
		}

		$s->assign('bloginfo', $bloginfo);
		$s->assign('pictures', $result);

		$stt = $this->_db->prepare("SELECT * FROM blog_comment WHERE bid =:bid ");
		$stt->bindValue(':bid', $req->getQuery('bid'));
		$stt->execute();
		$result = $stt->fetchAll();
		for($i = 0; $i<count($result);$i++){
			$info = $this->_db->fetchRow("SELECT if(smallimg is null,'images/noimage_member40.gif',smallimg) as smallimg,nick_name FROM user WHERE uid = ?",array($result[$i]['uid']));
			$result[$i]['smallimg']=$info['smallimg'];
			$result[$i]['nick_name']=$info['nick_name'];

		}

		$s->assign('allcomments', $result);
		$s->assign('commentcnt', count($result));
        $sql = "SELECT bid ,title FROM blog_master WHERE uid =:uid ORDER BY bid DESC limit 3";
		if($sess->owner!=$sess->uid)  $sql = "SELECT bid ,title FROM blog_master WHERE uid =:uid and openlevel!=0 ORDER BY bid DESC limit 3";
		$stt = $this->_db->prepare($sql);
		$stt->bindValue(':uid', $sess->owner);
		$stt->execute();
		$result = $stt->fetchAll();
		$s->assign('newblogs', $result);
		if($sess->uid == $sess->owner)$this->getAllgroups($req,$s);

	}
	public function addCommentInfo($data){
		$sess = new Zend_Session_Namespace('myApp');
		
		$this->_db->insert('blog_comment',
			array(
				'contents'=>$data['contents'],
				'uid'=>$sess->uid,
				'bid'=>$data['bid'],
				'cdat'=>date('Y-m-d H:i:s'),
				'udat'=>date('Y-m-d H:i:s')
			)
		);
		
		$this->addMark(2,$sess->uid);
	}
	public function delComment($data){
		for($i=1;$i<=$data['max'];$i++){
		   $bid=$data['bcid'.$i];

		   if($bid !=NULL && $bid !='' ){
			  	 $this->_db->query('DELETE FROM blog_comment  WHERE bcid= ?',array($bid)) ;
		   }		
		}
	}
	public function deletepic($req,$s){
		$no = $req->getPost('no');
		$this->_db->query('DELETE FROM picture  WHERE no= ?',array($no)) ;
		$cn = $this->_db->fetchOne("SELECT count(*) FROM picture where no =?",array($no));
		$s->assign('result', $cn==0 ? 1 : 0);
	}
	public function delOneBlog($data){
		$bid = $data['bid'];
		$this->_db->query('DELETE FROM blog_master  WHERE bid= ?',array($bid));
		$this->_db->query('DELETE FROM blog_comment  WHERE bid= ?',array($bid));
		$this->_db->query('DELETE FROM picture  WHERE bid= ?',array($bid));
	}
	public function createBreviaryImage($srcImage,$path, $newName, $maxWidth=80, $maxHeight=80, $imgQuality=75) { 
		list($width, $height, $type, $attr) = getimagesize($srcImage); 
		switch ($type) { 
			case 1: $img = imagecreatefromgif($srcImage); break; 
			case 2: $img = imagecreatefromjpeg($srcImage); break; 
			case 3: $img = imagecreatefrompng($srcImage); break; 
		} 
		$scale = min($maxWidth/$width, $maxHeight/$height); 
		if($scale < 1) { 
			$newWidth = floor($scale*$width); 
			$newHeight = floor($scale*$height); 
		}else{
			$newWidth = $width; 
			$newHeight = $height; 
		}
		$newImg = imagecreatetruecolor($newWidth, $newHeight); 
		imagecopyresampled($newImg, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height); 
		/*$newName = md5(uniqid(rand(), true)); */
		switch($type) { 
			case 1: if(imagegif($newImg, $path.$newName.".gif", $imgQuality)) 
			return "$newName.gif"; break; 
			case 2: if(imagejpeg($newImg, $path.$newName.".jpg", $imgQuality)) 
			return "$newName.jpg"; break; 
			case 3: if(imagepng($newImg, $path.$newName.".png", $imgQuality)) 
			return "$newName.png"; break; 
			default: if(imagejpeg($newImg, $path.$newName.".jpg", $imgQuality)) 
			return "$newName.jpg"; break; 
		  } 
		imagedestroy($newImg); 
		 
		imagedestroy($img); 
		return false; 
	}
	public function log($str){

		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$logger = new Zend_Log($writer);
		$logger->addFilter(Zend_Log::DEBUG);
		$logger->log($str, Zend_Log::DEBUG);
	}
}