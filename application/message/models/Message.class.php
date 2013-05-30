<?php
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
class Message {
	private $_db;

	public function __construct() {
		$this->_db = DbManager::getConnection();
		$this->_num=0;
	}

	public function __destruct(){
		$this->_db->closeConnection();
	}
	public function getMessagelist($s,$req){
		$sess = new Zend_Session_Namespace('myApp');
		$userid=$sess->uid;
		$mode=$req->getQuery('mode');
		
		$sql="SELECT sendby as userid,cdat,title,readflg,mid ,'recieve' as mode FROM recievemessage WHERE uid= :uid and  delflg=0 ORDER BY cdat DESC ";
		if($mode=='draft'){
			$sql="SELECT sendto as userid,cdat,title,mid,'send' as mode  FROM sendmessage WHERE uid= :uid and delflg=0 and sendedflg=0  ORDER BY cdat DESC  ";
			$csql='SELECT COUNT(*) AS C FROM sendmessage WHERE uid= :uid and  delflg=0 and sendedflg=0  ';
		}else if($mode=='sended'){
			$sql="SELECT sendto as userid,cdat,title,mid ,'send' as mode FROM sendmessage WHERE uid= :uid and delflg=0 and sendedflg=1  ORDER BY cdat DESC  ";
			$csql='SELECT COUNT(*) AS C FROM sendmessage WHERE uid= :uid and delflg=0 and sendedflg=1  ';
		}else if($mode=='delitem'){
			$sql="SELECT sendby as userid,cdat,title,readflg,mid,mode FROM  delMessage WHERE uid= :uid ORDER BY cdat DESC  ";
			$csql="SELECT COUNT(*) AS C FROM elMessage WHERE uid= :uid ";
		}
		$stt = $this->_db->prepare($sql) ;

		$stt->bindValue(':uid', $userid);
		$stt->execute();
		$result=$stt->fetchAll();
		
		for($i = 0; $i < count($result); $i++) {
			if($mode=='draft')
				$result[$i]['url']='/send?mid='.$result[$i]['mid'].'&flg='.$result[$i]['mode'].'&mode='.$mode;
			else
				$result[$i]['url']='/show?mid='.$result[$i]['mid'].'&flg='.$result[$i]['mode'].'&mode='.$mode;
			$result[$i]['index']=$i;
			$result[$i]['nick_name'] = $this->_db->fetchOne('SELECT nick_name FROM user WHERE uid = ?',array($result[$i]['userid']));
		}
		$s->assign('messagelist', $result);
		$s->assign('max',count($result));
		$s->assign('mode', $mode);

	}
	public function getInfoForCreate($req,$s){
		$mid = $req->getQuery('mid');
		if($mid != null && $mid !=''){
			$info = $this->_db->fetchRow("SELECT * FROM sendmessage WHERE mid = ?",array($mid));
			$info1 = $this->_db->fetchRow("SELECT if(smallimg is null,'images/noimage_member76.gif',img) as img,nick_name FROM user WHERE uid = ?",array($info['sendto']));
			$info['img']=$info1['img'];
			$info['nick_name']=$info1['nick_name'];
			$info['mode']=1;
		}
		$rmid = $req->getPost('mid');
		if($rmid != null && $rmid !=''){
			$info = $this->_db->fetchRow("SELECT * FROM recievemessage WHERE mid = ?",array($rmid));
			$info1 = $this->_db->fetchRow("SELECT if(smallimg is null,'images/noimage_member76.gif',img) as img,nick_name,uid FROM user WHERE uid = ?",array($info['sendby']));
			$info['img']=$info1['img'];
			$info['mid']='';
			$info['replyflg']='reply';
			$info['sendto']=$info['sendby'];
			$info['nick_name']=$info1['nick_name'];
			$info['uid']=$info1['uid'];
			$info['title']='RE:'.$info['title'];
			$info['contents']='&gt;'.ereg_replace("\n","\n&gt;", htmlspecialchars($info['contents']))."\n";
			$info['mode']=1;
		}
		$fuid = $req->getQuery('fid');
		if($fuid != null && $fuid !=''){
			$info1 = $this->_db->fetchRow("SELECT if(smallimg is null,'images/noimage_member76.gif',img) as img,nick_name,uid FROM user WHERE uid = ?",array($fuid));
			$info['img']=$info1['img'];
			$info['mid']='';
			$info['replyflg']='';
			$info['sendto']=$fuid;
			$info['nick_name']=$info1['nick_name'];
			$info['uid']=$info1['uid'];
			$info['mode']=1;
		}
		$uid = $req->getPost('sendto');
		if($uid != null && $uid !=''){
			$info = $this->_db->fetchRow("SELECT if(smallimg is null,'images/noimage_member76.gif',img) as img,nick_name,uid FROM user WHERE uid = ?",array($uid));
			$info['sendto']=$uid;
			$info['title']=$req->getPost('title');
			$info['contents']=$req->getPost('contents');
			$info['mode']=$req->getPost('mode');
			$info['mid']=$req->getPost('mid');
			
		}else{
			$info['mode']=1;
		}
		$s->assign('info', $info);
		$this->getFriendlist($req,$s);
	}
	public function getFriendlist($req,$s){
		$sess = new Zend_Session_Namespace('myApp');
		$userid=$sess->uid;
	
		$sql="SELECT gid ,gname  FROM mygroup WHERE uid= :uid  ORDER BY gid  ";
		$stt = $this->_db->prepare($sql) ;
		$stt->bindValue(':uid', $userid);
		$stt->execute();
		$result=$stt->fetchAll();
		$allres[0]['gid']=0;
		$allres[0]['gname']='全部';
		$allres[0]['cnt']=$this->_db->fetchOne('SELECT count(fuid) FROM friend WHERE uid = ?',array($userid));

		for($i = 0; $i < count($result); $i++) {
			$result[$i]['cnt']=$this->_db->fetchOne('SELECT count(uid) FROM groupuser WHERE gid = ?',array($result[$i]['gid']));
			$allres[$i+1]=$result[$i];

		}
		$s->assign('grouplist', $allres);
		$gid = $req->getPost('gid');
		$page = $req->getPost('pageno');
		if($gid==null||$gid=='') $gid=0;
		if($page==null||$page=='') $page=1;
		$start = ($page - 1) * 3;
		$s->assign('curgid', $gid);
		if($gid == 0){
			$sql="SELECT fuid as uid FROM friend WHERE uid= :uid  ORDER BY cdat  LIMIT ".$start.", 3";
			$stt = $this->_db->prepare($sql) ;
			$stt->bindValue(':uid', $userid);
			$stt->execute();
			$result=$stt->fetchAll();
			$cnt =$this->_db->fetchOne("SELECT count(fuid) FROM friend WHERE uid = ?",array($userid)); 
			
		}else{

			$sql="SELECT uid  FROM groupuser WHERE gid= :gid  ORDER BY cdat  LIMIT ".$start.", 3";
			$stt = $this->_db->prepare($sql) ;
			$stt->bindValue(':gid', $gid);
			$stt->execute();
			$result=$stt->fetchAll();
			$cnt =$this->_db->fetchOne("SELECT count(uid) FROM groupuser WHERE gid = ?",array($gid));
		}
		for($i = 0; $i < count($result); $i++) {
			$result[$i]['cnt']=$this->_db->fetchOne('SELECT count(fuid) FROM friend WHERE uid = ?',array($result[$i]['uid']));
			$info = $this->_db->fetchRow("SELECT if(smallimg is null,'images/noimage_member40.gif',smallimg) as smallimg,nick_name FROM user WHERE uid = ?",array($result[$i]['uid']));
			$result[$i]['smallimg']=$info['smallimg'];
			$result[$i]['nick_name']=$info['nick_name'];

		}
		if(count($result)<1) $result[0]['uid']='';
		if(count($result)<2) $result[1]['uid']='';
		if(count($result)<3) $result[2]['uid']='';

		$s->assign('friendlist', $result);
		$this->getPager($s, $page,$cnt,$gid);	
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
	public function getFriendinfo($req,$s){
		$uid = $req->getPost('uid');
		$info = $this->_db->fetchRow("SELECT if(smallimg is null,'images/noimage_member76.gif',img) as img,nick_name,uid FROM user WHERE uid = ?",array($uid));
		$s->assign('info', $info);
	}
	public function confirmMessage($req,$s){
		$uid = $req->getPost('sendto');
		$info = $this->_db->fetchRow("SELECT if(smallimg is null,'images/noimage_member76.gif',img) as img,nick_name,uid FROM user WHERE uid = ?",array($uid));
		$info['sendto']=$uid;
		$info['title']=$req->getPost('title');
		$info['contents']=$req->getPost('contents');
		$info['mode']=$req->getPost('mode');
		$info['mid']=$req->getPost('mid');
		$s->assign('info', $info);
	}
	public function saveMessage($data) {
		$sess = new Zend_Session_Namespace('myApp');

		if($data['mid']==null || $data['mid']==''){
			$ins = $this->_db->prepare('INSERT INTO sendmessage(sendto,uid,title,sendedflg,contents,udat, cdat) VALUES( :sendto,:uid,:title,:sendedflg,:contents,:udat, :cdat)');
			$ins->bindValue(':sendto', $data['sendto']);
			$ins->bindValue(':uid', $sess->uid);
			$ins->bindValue(':title', $data['title']);
			$ins->bindValue(':sendedflg', $data['mode']=='1'?1:0);
			$ins->bindValue(':contents', $data['contents']);
			$ins->bindValue(':udat', date('Y-m-d H:i:s'));
			$ins->bindValue(':cdat', date('Y-m-d H:i:s'));
			$ins->execute();
		}else{
			$this->_db->query("UPDATE sendmessage SET sendto=?,title=?,contents=?,sendedflg=?,udat=? WHERE mid=?",array($data['sendto'],$data['title'],$data['contents'],$data['mode']=='1'?1:0,date('Y-m-d H:i:s'),$data['mid']));
		}

		if($data['mode']=='1'){
			$ins = $this->_db->prepare('INSERT INTO recievemessage(sendby,uid,title,contents,udat, cdat) VALUES( :sendby,:uid,:title,:contents,:udat, :cdat)');
			$ins->bindValue(':sendby',$sess->uid );
			$ins->bindValue(':uid', $data['sendto']);
			$ins->bindValue(':title', $data['title']);
			$ins->bindValue(':contents', $data['contents']);
			$ins->bindValue(':udat', date('Y-m-d H:i:s'));
			$ins->bindValue(':cdat', date('Y-m-d H:i:s'));
			$ins->execute();			

		}

	}
	
	public function setMessageInfo($req,$s){
		$sess = new Zend_Session_Namespace('myApp');
		$userid=$sess->owner;
		$mid=$req->getQuery('mid');
		$mode=$req->getQuery('mode');
		$flg=$req->getQuery('flg');
		if($mode=='recieve'){
			$stt = $this->_db->prepare('UPDATE recievemessage set readflg=1 WHERE mid= :mid') ;
			$stt->bindValue(':mid', $mid);
			$stt->execute();
		}
		
		if($flg=='recieve'){
			$sql='select title ,contents,sendby as uid, uid as sendto ,delflg,cdat,mid  from recievemessage where mid=?';
		}else{
			$sql='select title ,contents,uid  , sendto ,delflg,cdat,mid  from sendmessage where mid=?';
		}
		
		
		
		$message=$this->_db->fetchRow($sql, array($mid));
		$article=$message['contents'];
		$article= ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]", "<a href=\"\\0\">\\0</a>", nl2br(htmlspecialchars($article)));
		$message['contents']=$article;

		$info = $this->_db->fetchRow("SELECT if(smallimg is null,'images/noimage_member76.gif',img) as img,nick_name FROM user WHERE uid = ?",array($message['uid']));
		$message['img']=$info['img'];
		$message['nick_name']=$info['nick_name'];
		
		$s->assign('info', $message);
		$s->assign('mode', $mode);
		$s->assign('flg', $flg);
	}
	public function delMessage($data){
		$mode=$data['mode'];

		for($i=0;$i<$data['max'];$i++){
		   $mid=$data['mid'.$i];

		   if($mid !=NULL && $mid !='' ){
				$this->delMessageOne($mid,$mode,$data['mode'.$i]);
		   }		
		}
	}
	public function delMessageOne($mid,$mode,$modeflg){
		if($mode=='recieve'){
			$this->_db->query('UPDATE recievemessage set delflg=1 WHERE mid= ?',array($mid));
			
		}else if($mode=='draft' || $mode=='sended'){
			$this->_db->query('UPDATE sendmessage set delflg=1 WHERE mid= ?',array($mid));				
		}else{
		  if($modeflg == 'recieve'){
			$this->_db->query('DELETE FROM recievemessage WHERE mid= ?',array($mid));				  
		  }else{
			$this->_db->query('DELETE FROM sendmessage WHERE mid= ?',array($mid));				  
		  }
		}
	}
	public function recoverAll($data){
		for($i=0;$i<$data['max'];$i++){
		   $mid=$data['mid'.$i];

		   if($mid !=NULL && $mid !='' ){
				$this->recoverMessage($mid,$data['mode'.$i]);
		   }		
		}
	} 
	public function recoverMessage($mid,$modeflg){
		if($modeflg=='recieve'){
			$stt = $this->_db->query('UPDATE recievemessage set delflg=0 WHERE mid= ?',array($mid));
			
		}else{
			$this->_db->query('UPDATE sendmessage set delflg=0 WHERE mid= ?',array($mid));				
		}
	}
	public function delAll(){
		$sess = new Zend_Session_Namespace('myApp');
		$sql="SELECT mid,mode FROM (SELECT sendby ,cdat,title,uid,readflg,mid,'recieve' as mode FROM recievemessage WHERE delflg=1 union SELECT uid as sendby ,cdat,title,uid,'0' as readflg,mid,'send' as mode FROM sendmessage WHERE delflg=1) as delMessage  WHERE uid= :uid";
		$stt = $this->_db->prepare($sql) ;

		$stt->bindValue(':uid', $sess->uid);
		$stt->execute();
		$result=$stt->fetchAll();
			
		for($i=0;$i<count($result);$i++){

		  $modeflg=$result[$i]['mode'];
		  if($modeflg == 'recieve'){
		  	$stt = $this->_db->prepare('DELETE FROM recievemessage WHERE mid= :mid') ;

			$stt->bindValue(':mid', $result[$i]['mid']);
			$stt->execute();				  
		  }else{
		  	$stt = $this->_db->prepare('DELETE FROM sendmessage WHERE mid= :mid') ;

			$stt->bindValue(':mid', $result[$i]['mid']);
			$stt->execute();				  
		  }

		}		

	}
	public function log($str){

		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$logger = new Zend_Log($writer);
		$logger->addFilter(Zend_Log::DEBUG);
		$logger->log($str, Zend_Log::DEBUG);
	}
}