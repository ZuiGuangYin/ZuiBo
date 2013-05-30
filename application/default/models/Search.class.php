<?php
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
class Search {
	private $_db;

	public function __construct() {
		$this->_db = DbManager::getConnection();
	}

	public function __destruct(){
		$this->_db->closeConnection();
	}
	public function searchByMail($req,$s){
		$sess = new Zend_Session_Namespace('myApp');
		$mail = $req->getPost('mail');
		$result=$this->_db->fetchRow('SELECT uid ,mail FROM user  WHERE mail = ? ',array($mail));

		if($result['uid']==$sess->uid){
			$result['flg']=2;
		}else{
			$cnt=$this->_db->fetchOne('SELECT count(*) FROM user WHERE mail=?',array($mail));
			if($cnt>0){
				$friendflg = $this->_db->fetchOne('SELECT count(f.fuid) FROM  friend as f INNER JOIN user AS u ON f.fuid = u.uid WHERE u.mail=? and f.uid=?',array($mail,$sess->uid));
				$result['flg']= $friendflg==1?3:1;
			}else{
				$result['flg']=0;
			}
		}
		$s->assign('info',$result );
	}
	public function getKbnName($kind,$id){
		return $this->_db->fetchOne('SELECT name FROM kbn_master  WHERE kind=? and id=? ',array($kind,$id));
	}
	public function setMailaddInfo($req,$s){
		$mail = $req->getQuery('mail');
		if($mail !=null&& $mail !='') $info['mail']=$mail;

		else $info = $req->getPost();
		
		$info['refuse_type_name']=$this->getKbnName('viewblog',$info['refuse_type']);
		$s->assign('info',$info );
		for($i = 0;$i < 12;$i++){
			$result1[$i]['val']=$i+1;
		}
		$s->assign('months',$result1 );

		$k=0;
		for($i = date('Y');$i>2009;$i--){
			$result3[$k]['val']=$i;
			$k+=1;
		}
		$s->assign('years',$result3 );
	}
	public function addFriendByMail($req,$s){
		$data = $req->getPost();
		$fuid=$this->_db->fetchOne('SELECT uid FROM user  WHERE mail=? ',array($data['mail']));
		$this->log($fuid);
		$sess = new Zend_Session_Namespace('myApp');
		if($data['message']!=''){

			$this->_db->insert('sendmessage',
				array(
					'sendto'=>$fuid,
					'uid'=>$sess->uid,
					'title'=>'你好',
					'sendedflg'=>1,
					'contents'=>$data['message'],
					'cdat'=>date('Y-m-d H:i:s'),
					'udat'=>date('Y-m-d H:i:s')
				)
			);


			$this->_db->insert('recievemessage',
				array(
					'sendby'=>$sess->uid ,
					'uid'=>$fuid,
					'title'=>'你好',
					'contents'=>$data['message'],
					'cdat'=>date('Y-m-d H:i:s'),
					'udat'=>date('Y-m-d H:i:s')
				)
			);
		}

		if($data['refuse_type']!=2)
			$this->_db->insert('friend',
				array(
					'uid'=>$sess->uid,
					'fuid'=>$fuid,
					'refuse_type'=>$data['refuse_type'],
					'cdat'=>date('Y-m-d H:i:s'),
					'udat'=>date('Y-m-d H:i:s')
				)
			);
		else
			$this->_db->insert('friend',
				array(
					'uid'=>$sess->uid,
					'fuid'=>$fuid,
					'refuse_type'=>$data['refuse_type'],
					'refuse_year'=>$data['refuse_year'],
					'refuse_month'=>$data['refuse_month'],
					'cdat'=>date('Y-m-d H:i:s'),
					'udat'=>date('Y-m-d H:i:s')
				)
			);

	}
	private function log($str){

		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$logger = new Zend_Log($writer);
		$logger->addFilter(Zend_Log::DEBUG);
		$logger->log($str, Zend_Log::DEBUG);
	}
}