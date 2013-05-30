<?php
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
require_once APP.'/default/models/Index.class.php';
class Friend {
	private $_db;
	private $_num;

	public function __construct() {
		$this->_db = DbManager::getConnection();
		$this->_num=0;
	}

	public function __destruct(){
		$this->_db->closeConnection();
	}
	public function makeGroupList($req,$s){
		$sess = new Zend_Session_Namespace('myApp'); 
		//铁哥们个数
		$cnt1 = $this->_db->fetchOne('SELECT count(*) FROM friend WHERE uid = ? and fflg = 1',array( $sess->uid));
		$s->assign('fcnt', $cnt1);
		//全部用户个数
		$cnt2 = $this->_db->fetchOne('SELECT count(*) FROM friend WHERE uid = ? ',array( $sess->uid));
		$s->assign('allcnt', $cnt2);
		//无组用户个数
		$cnt3 = $this->_db->fetchOne('SELECT count(*) FROM friend WHERE uid = ? and grpflg=0 ',array( $sess->uid));
		$s->assign('nocnt', $cnt3);
		//检索组
		$stt = $this->_db->prepare('SELECT gname ,gid FROM mygroup WHERE uid =:uid ORDER BY sort');
		//$this->log('SELECT gname ,gid FROM mygroup WHERE uid ='.$sess->uid);
		$stt->bindValue(':uid', $sess->uid);
		$stt->execute();
		$result = $stt->fetchAll();
		for($i=0;$i< count($result);$i++){
			$result[$i]['cnt'] = $this->_db->fetchOne('SELECT count(f.uid) FROM groupuser AS f INNER JOIN mygroup AS g ON f.gid = g.gid WHERE g.uid = ? and f.gid = ? ',array( $sess->uid,$result[$i]['gid']));
		}
		$s->assign('allmygroups', $result);
		$s->assign('groupamount', count($result));
		$gid = $req->getQuery('gid');
		$fflg = $req->getQuery('fflg');
		if($fflg==null||$fflg=='') $fflg=0;
		if($gid=='') $gid ='all';
		$s->assign('gid', $gid);
		$s->assign('fflg', $fflg);
		if($gid > 0){
			$listtitle = $this->_db->fetchOne('SELECT gname FROM mygroup WHERE gid =?',array($gid));
			$cnt = $this->_db->fetchOne('SELECT count(f.uid) FROM groupuser AS f INNER JOIN mygroup AS g ON f.gid = g.gid WHERE g.uid = ? and f.gid = ? ',array( $sess->uid,$gid));
			$s->assign('listtitle', $listtitle."(".$cnt.")");
		}
	}
	public function getGroupInfo($req,$s){
		$gid = $req->getQuery('gid');
		$mode = $req->getQuery('mode');
		$info = $this->_db->fetchRow('SELECT gid , gname ,introduce,uid FROM mygroup WHERE gid = ?',array($gid));
		$stt = $this->_db->prepare('SELECT uid FROM groupuser WHERE gid = :gid') ;
		$stt->bindValue(':gid', $gid);
		$stt->execute();
		$result=$stt->fetchAll();
		$truecnt=count($result);
		$str='';
		for($i=0;$i< $truecnt-1;$i++){
			$str = $str.$result[$i]['uid'];
		}
		$str = $str.$result[$truecnt-1]['uid'];
		$info['members']=$str;
		$s->assign('info', $info);
		$s->assign('mode', $mode);
	}
	public function getMemberList($req,$s){
		$sess = new Zend_Session_Namespace('myApp'); 
		$userid=$sess->uid;
		$mode = $req->getQuery('mode');
		$page = $req->getQuery('pageno');
		if($page==null||$page=='') $page=1;
		$start = ($page - 1) * 12;
		$cond='f.uid = :uid';
		$sql="SELECT f.fuid as uid,if(u.smallimg is null,'images/noimage_member40.gif',u.smallimg) as img,u.nick_name as nick_name FROM friend AS f INNER JOIN user AS u ON u.uid=f.fuid WHERE ".$cond."  ORDER BY u.lastlogin DESC  LIMIT ".$start.", 12";
		$stt = $this->_db->prepare($sql) ;
		$stt->bindValue(':uid', $userid);
		$stt->execute();
		$result=$stt->fetchAll();
		$truecnt=count($result);
		for($i=0;$i< $truecnt;$i++){
			$result[$i]['cnt'] = $this->_db->fetchOne('SELECT count(*) FROM friend WHERE uid = ? ',array($result[$i]['uid']));
		}
		$roop = floor($truecnt/3);
		$resi = $result%3;

		if($resi > 0) $roop +=1;
		if($resi < 3) $result[$truecnt]['uid']='';
		if($resi < 2) $result[$truecnt+1]['uid']='';
		
		for($i = 0; $i < $roop; $i++) {
			$pages[$i]['index']=$i+1;
			$row=array();
			for($j=$i*3;$j< ($i+1)*3;$j++){
				$row[$j-$i*3]['cnt']=$result[$j]['cnt'];
				$row[$j-$i*3]['uid']=$result[$j]['uid'];
				$row[$j-$i*3]['img']=$result[$j]['img'];
				$row[$j-$i*3]['nick_name']=$result[$j]['nick_name'];
				$row[$j-$i*3]['flg']=0;
				$cntuid =0;
				if($mode == 'edit'){
					$cntuid = $this->_db->fetchOne('SELECT count(uid) FROM groupuser WHERE uid = ? and gid =? ',array($result[$j]['uid'],$req->getQuery('gid')));

					$row[$j-$i*3]['flg']=$cntuid;

				}
				//$this->log('flg'.$j.'='.$row[$j-$i*3]['flg']);

			}
			$res[$i]['row']=$row;
			$row=null;
		}
		$s->assign('friendlist', $res);
		$s->assign('pages', $pages);
		$s->assign('currentpage', $page);
	}
	//求两个日期的差值
	private function datediff ($interval, $date1, $date2)
	{
	   // 得到两日期之间间隔的秒数
	   $timedifference = $date2 - $date1;
	   switch ($interval) {
		   case "w": $retval = bcdiv($timedifference ,604800); break;
		   case "d": $retval = bcdiv($timedifference,86400); break;
		   case "h": $retval = bcdiv($timedifference,3600); break;
		   case "n": $retval = bcdiv($timedifference,60); break;
		   case "s": $retval = $timedifference; break;
	   }
	   return $retval;
	}
	public function getFriendList($req,$s){
		$sess = new Zend_Session_Namespace('myApp'); 
		$idx = new MainIndex();
		$s->assign('topmenu', $idx->getMenuInfo($req->getBaseUrl(),$sess->owner));
		if($sess->owner==$sess->uid) $this->getFriendListMine($req,$s);
		else $this->getFriendListOther($req,$s);
	}
	public function getFriendListMine($req,$s){
		$sess = new Zend_Session_Namespace('myApp'); 
		$this->makeGroupList($req,$s);
		//朋友一览
		$gid = $req->getQuery('gid');
		$fflg = $req->getQuery('fflg');
		if($gid=='') $gid ='all';
		if($fflg=='') $fflg ='0';
		$page = $req->getQuery('pageno');
		if($page==null||$page=='') $page=1;
		$start = ($page - 1) * 12;
		if($fflg=='1'){
			$cond='f.uid = :uid and f.fflg = 1 ';
			$sql="SELECT f.fuid as uid,if(u.img is null,'images/noimage_member76.gif',u.img) as img,u.nick_name as nick_name,u.lastlogin FROM friend AS f INNER JOIN user AS u ON u.uid=f.fuid WHERE ".$cond."  ORDER BY u.cdate LIMIT ".$start.", 12";
		}else{
			if($gid == 'all'){
				$cond='f.uid = :uid';
				$sql="SELECT f.fuid as uid,if(u.img is null,'images/noimage_member76.gif',u.img) as img,u.nick_name as nick_name,u.lastlogin FROM friend AS f INNER JOIN user AS u ON u.uid=f.fuid WHERE ".$cond."  ORDER BY u.cdate  LIMIT ".$start.", 12";
			}else if($gid =='unclassified' ){
				$cond='f.uid = :uid and f.grpflg=0 ';
				$sql="SELECT f.fuid as uid,if(u.img is null,'images/noimage_member76.gif',u.img) as img,u.nick_name as nick_name,u.lastlogin FROM friend AS f INNER JOIN user AS u ON u.uid=f.fuid WHERE ".$cond."  ORDER BY u.cdate  LIMIT ".$start.", 12";
			}else{
				$cond='g.uid = :uid and f.gid = :gid';
				$sql="SELECT f.uid as uid,if(u.img is null,'images/noimage_member76.gif',u.img) as img,u.nick_name as nick_name,u.lastlogin FROM (groupuser AS f INNER JOIN mygroup AS g ON f.gid = g.gid ) INNER JOIN user AS u ON u.uid=f.uid WHERE ".$cond."  ORDER BY u.cdate  LIMIT ".$start.", 12";
			}
		}
		
		$stt = $this->_db->prepare($sql);
		if($fflg=='1'){
			$stt->bindValue(':uid', $sess->owner);
		}else{
			if($gid == 'all'){
				$stt->bindValue(':uid', $sess->owner);
			}else if($gid =='unclassified' ){
				$stt->bindValue(':uid', $sess->owner);
			}else{
				$stt->bindValue(':uid', $sess->owner);
				$stt->bindValue(':gid', $gid);
			}
		}
		$stt->execute();
		$result = $stt->fetchAll();
		$truecnt=count($result);
		for($i=0;$i< $truecnt;$i++){
			$result[$i]['class']='iconState01';
			if($this->datediff ("s",strtotime($result[$i]['lastlogin']),time())<3600) $result[$i]['class']='iconState03'; 
			if($this->datediff ("s",strtotime($result[$i]['lastlogin']),time())<1440*60) $result[$i]['class']='iconState02'; 
			$result[$i]['cnt'] = $this->_db->fetchOne('SELECT count(*) FROM friend WHERE uid = ? ',array($result[$i]['uid']));
		}

		$roop = floor($truecnt/4);
		$resi = $truecnt%4;
		

		if($resi > 0) $roop +=1;
		if($resi < 4) $result[$truecnt]['uid']='';
		if($resi < 3) $result[$truecnt+1]['uid']='';
		if($resi < 2) $result[$truecnt+2]['uid']='';

		$s->assign('friendlist', $result);
		for($i = 0; $i < $roop; $i++) {
			$pages[$i]['index']=$i+1;
			if($page==$pages[$i]['index'])
				$pages[$i]['url']='';
			else
				$pages[$i]['url']='/'.$sess->owner.'/listfriend?gid='.$gid.'&fflg='.$fflg.'&pageno='.$pages[$i]['index'];
			
		}
		$vstart=$start+1;
		if($truecnt==0) $vstart=0;
		$s->assign('pages', $pages);
		$s->assign('currentpage', $page);
		$s->assign('start', $vstart);
		$s->assign('end', $start+$truecnt);
	}
	public function getFriendListOther($req,$s){
		$page = $req->getQuery('pageno');
		if($page==null||$page=='') $page=1;
		$start = ($page - 1) * 50;
		$mode = $req->getQuery('mode');
		$sess = new Zend_Session_Namespace('myApp'); 
		if($mode ==null||$mode==''){
			$cond='f.uid = :uid';
			$sql="SELECT f.fuid as uid,if(u.img is null,'images/noimage_member76.gif',u.img) as img,u.nick_name as nick_name,u.lastlogin FROM friend AS f INNER JOIN user AS u ON u.uid=f.fuid WHERE ".$cond."  ORDER BY u.cdate   LIMIT ".$start.", 50";
		}else{
			$sql="SELECT f1.fuid as uid,if(u.img is null,'images/noimage_member76.gif',u.img) as img,u.nick_name as nick_name,u.lastlogin FROM ((SELECT fuid FROM friend WHERE uid = :uid1 ) as f1 INNER JOIN (SELECT fuid FROM friend WHERE uid=:uid2) as f2 ON f1.fuid = f2.fuid) INNER JOIN user as u ON u.uid=f1.fuid ORDER BY u.cdate   LIMIT ".$start.", 50";
		}
		$stt = $this->_db->prepare($sql);
		if($mode ==null||$mode==''){
			$stt->bindValue(':uid', $sess->owner);
		}else{
			$stt->bindValue(':uid1', $sess->owner);
			$stt->bindValue(':uid2', $sess->uid);
		}
		$stt->execute();
		$result = $stt->fetchAll();
		$truecnt=count($result);
		$roop = floor($truecnt/5);
		$resi = $truecnt%5;
		if($resi > 0) $roop +=1;
		for($i=0;$i< $truecnt;$i++){
			$result[$i]['bottomflg']=0;
			$line = floor(($i+1)/5);
			$curresi = ($i+1)%5;
			if($curresi > 0) $line +=1;
			if($line==$roop) $result[$i]['bottomflg']=1;
			$result[$i]['class']='iconState01';
			if($this->datediff ("s",strtotime($result[$i]['lastlogin']),time())<3600) $result[$i]['class']='iconState03'; 
			if($this->datediff ("s",strtotime($result[$i]['lastlogin']),time())<1440*60) $result[$i]['class']='iconState02'; 
			$result[$i]['cnt'] = $this->_db->fetchOne('SELECT count(*) FROM friend WHERE uid = ? ',array($result[$i]['uid']));
		}
		$s->assign('friendlist', $result);
		
		for($i = 0; $i < $roop; $i++) {
			$pages[$i]['index']=$i+1;
			if($page==$pages[$i]['index'])
				$pages[$i]['url']='';
			else
				$pages[$i]['url']='/'.$sess->owner.'/listfriend?pageno='.$pages[$i]['index'].'&mode='.$mode;
			
		}
		$vstart=$start+1;
		if($truecnt==0) $vstart=0;
		$s->assign('pages', $pages);
		$s->assign('currentpage', $page);
		$s->assign('start', $vstart);
		$s->assign('end', $start+$truecnt);
		$idx = new MainIndex();
		$s->assign('friendflg', $idx->isFriend($sess->owner));
		$s->assign('mode', $mode);

	}
	public function getFriendConfigInfo($req,$s){
		$sess = new Zend_Session_Namespace('myApp');
		$fuid=$req->getPost('fuid');
		$info=$this->_db->fetchRow("SELECT f.fuid as fuid,if(u.img is null,'images/noimage_member76.gif',u.img) as img,u.nick_name as nick_name,f.memo as memo,f.fflg as fflg,f.new_friend_blog as new_friend_blog FROM friend AS f INNER JOIN user AS u ON u.uid=f.fuid WHERE f.uid=? and f.fuid=?",array($sess->uid,$fuid));
		$introduce = $this->_db->fetchRow("SELECT relationship ,contents FROM introduce_by_friend WHERE fuid=? and uid=?",array($fuid,$sess->uid));
		$info['relationship']=$introduc['relationship'];
		$info['contents']=$introduc['contents'];
		//所属组
		$stt = $this->_db->prepare('SELECT g.gid as gid ,g.gname as gname FROM groupuser AS gu INNER JOIN mygroup AS g ON g.gid = gu.gid WHERE gu.uid = :fuid AND g.uid = :uid ORDER BY g.sort ') ;
		$stt->bindValue(':fuid', $fuid);
		$stt->bindValue(':uid', $sess->uid);
		$stt->execute();
		$result=$stt->fetchAll();
		$info['mygroups']=$result;
		$groupcnt=count($result);
		$s->assign('groupamount', count($result));
		$str='';
		for($i = 0; $i < $groupcnt-1; $i++) {
			$str = $str.$result[$i]['gid'].',';
		}
		$str = $str.$result[$groupcnt-1]['gid'];
		$info['groups']=$str;
		//$this->log($str);
		//非所属组
		$stt = $this->_db->prepare('SELECT g.gid,g.gname FROM mygroup AS g  WHERE g.uid = :uid and g.gid NOT IN (SELECT g.gid   FROM groupuser AS gu INNER JOIN mygroup AS g ON g.gid = gu.gid WHERE gu.uid = :fuid AND g.uid = :uid) ORDER BY g.sort') ;
		$stt->bindValue(':fuid', $fuid);
		$stt->bindValue(':uid', $sess->uid);
		$stt->execute();
		$result=$stt->fetchAll();

		$info['othergroups']=$result;
		$info['cnt']=$this->_db->fetchOne('SELECT count(fuid) FROM friend WHERE uid =?',array($fuid));
		$intro=$this->_db->fetchRow('SELECT relationship ,contents FROM introduce_by_friend WHERE uid =? and fuid=?',array($sess->uid,$fuid));
		$info['relationship']=$intro['relationship'];
		$info['contents']=$intro['contents'];
		$s->assign('info', $info);
	}
	public function deleteFriend($req,$s){
		$sess = new Zend_Session_Namespace('myApp');
		$fuid=$req->getPost('fuid');

		$this->_db->query('DELETE FROM groupuser  WHERE uid=? and gid IN (SELECT gid FROM mygroup WHERE uid=?)',array($fuid,$sess->uid));
		$this->_db->query('DELETE FROM friend  WHERE fuid=? and uid=?',array($fuid,$sess->uid));
		$this->_db->query('DELETE FROM introduce_by_friend  WHERE fuid=? and uid=?',array($fuid,$sess->uid));
		$s->assign('result', 1);

	}
	public function getPager($s, $current,$cnt,$gid) {
		$oth = $cnt % 3 ;
		$amount = floor($cnt / 3);
		if($oth > 0) $amount +=1 ;
		for($i = 0; $i < $amount; $i++) {

			$result[$i]['gid']=$gid;
			$result[$i]['index']=$i+1;
		}
		$s->assign('pages', $result);
		$s->assign('currentpage', $current);
	}
	public function createNewGroup($req){
		$data = $req->getPost();
		$gid = $data['gid'];
		
		$sess = new Zend_Session_Namespace('myApp');
		$sort=$this->_db->fetchOne('SELECT max(sort) FROM mygroup WHERE uid =?',array($sess->uid));
		if($gid == null || $gid ==''){
			$this->_db->insert('mygroup',
				array(
					'gname'=>$data['gname'],
					'introduce'=>$data['introduce'],
					'uid'=>$sess->uid,
					'sort'=>$sort+1,
					'cdat'=>date('Y-m-d H:i:s'),
					'udat'=>date('Y-m-d H:i:s')
				)
			);
			$gid= $this->_db->fetchOne('SELECT LAST_INSERT_ID() AS gid');
		}else{
			$this->_db->query('UPDATE mygroup SET gname=?,introduce=?,udat=? WHERE gid =?',array($data['gname'],$data['introduce'],date('Y-m-d H:i:s'),$gid));
			$this->_db->query('DELETE FROM groupuser WHERE gid=?',array($gid));
		}

		$members = explode(',',$data['members']);
		if(is_array($members)){
			foreach($members as $fuid){
				$this->_db->insert('groupuser',
					array(
						'gid'=>$gid,
						'uid'=>$fuid,
						'cdat'=>date('Y-m-d H:i:s'),
						'udat'=>date('Y-m-d H:i:s')
					)
				);
				$this->_db->query('UPDATE friend SET grpflg = 1,udat = ? WHERE fuid = ? and uid = ? and grpflg = 0',array(date('Y-m-d H:i:s'),$fuid,$sess->uid));
			}
		}
		return $gid;
	}
	public function createNewGroupBySetting($req,$s){
		$sess = new Zend_Session_Namespace('myApp');
		$data = $req->getPost();
		$sort=$this->_db->fetchOne('SELECT max(sort) FROM mygroup WHERE uid =?',array($sess->uid));
		$this->_db->insert('mygroup',
			array(
				'gname'=>$data['gname'],
				'uid'=>$sess->uid,
				'sort'=>$sort+1,
				'cdat'=>date('Y-m-d H:i:s'),
				'udat'=>date('Y-m-d H:i:s')
			)
		);
		$s->assign('result', $this->_db->fetchOne('SELECT LAST_INSERT_ID() AS gid'));
	}
	public function saveSetting($req){
		$sess = new Zend_Session_Namespace('myApp');
		$data = $req->getPost();
		//登录组
		$fuid = $data['fuid'];
		$members = explode(',',$data['groups']);
		$this->_db->query('DELETE FROM groupuser  WHERE uid=? and gid IN (SELECT gid FROM mygroup WHERE uid=?)',array($fuid,$sess->uid));
		if(is_array($members)){
			foreach($members as $gid){
				//$this->log('gid='.$gid);
				$this->_db->insert('groupuser',
					array(
						'gid'=>$gid,
						'uid'=>$fuid,
						'cdat'=>date('Y-m-d H:i:s'),
						'udat'=>date('Y-m-d H:i:s')
					)
				);
				$this->_db->query('UPDATE friend SET grpflg = 1,udat = ? WHERE fuid = ? and uid = ? and grpflg = 0',array(date('Y-m-d H:i:s'),$fuid,$sess->uid));
			}
		}
		$fflg=$data['fflg'];
		if($fflg =='') $fflg=0;
		$new_friend_blog=$data['new_friend_blog'];
		if($new_friend_blog =='') $new_friend_blog=0;

		$this->_db->query("UPDATE friend SET fflg = ? ,new_friend_blog=?,memo=? ,udat=? WHERE fuid=? and uid=? ",array($data['fflg'],$data['new_friend_blog'],$data['memo'],date('Y-m-d H:i:s'),$fuid,$sess->uid));
		//追加介绍
		$idx = new MainIndex();
		if($data['contents']!='') $idx->addIntroduce($req);
	}
	public function deleteGroup($req){
		$gid = $req->getPost('gid');
		$this->_db->query('DELETE FROM groupuser WHERE gid=?',array($gid));
		$this->_db->query('DELETE FROM mygroup WHERE gid=?',array($gid));
	}
	public function addFriend($req){
		$fuid = $req->getQuery('fid');
		$sess = new Zend_Session_Namespace('myApp');
		$this->_db->insert('friend',
			array(
				'uid'=>$sess->uid,
				'fuid'=>$fuid,
				'cdat'=>date('Y-m-d H:i:s'),
				'udat'=>date('Y-m-d H:i:s')
			)
		);
	}

	public function kbnmaster($kind){
		$stt=$this->_db->prepare('select id ,name from kbn_master where kind=:kind order by id');
		$stt->bindParam(':kind' ,$kind);
		$stt->execute();
		$result = $stt->fetchAll();
		return $result;
	}

	
	
	private function getKbnName($kind,$id){
		return $this->_db->fetchOne('SELECT name FROM kbn_master  WHERE kind=? and id=? ',array($kind,$id));
	}

	public function log($str){

		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$logger = new Zend_Log($writer);
		$logger->addFilter(Zend_Log::DEBUG);
		$logger->log($str, Zend_Log::DEBUG);
	}
}