<?php
require_once 'Zend/Mail.php';
require_once 'Zend/Mail/Transport/Smtp.php';
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
class Register{
	private $_db;

	public function __construct() {
		$this->_db = DbManager::getConnection();
	}
	
	public function __destruct(){
		$this->_db->closeConnection();
	}

	private function encode($str){return mb_convert_encoding($str, 'ISO-2022-JP', 'auto');}

	
	public function authUser($uid){
		$flg = $this->_db->fetchOne('SELECT validflg FROM user WHERE uid = ?',array($uid));
		return $flg;	
	}
	public function setAutologin($data){
		$str=$data['persistent'];
		$sess = new Zend_Session_Namespace('myApp');  
		if($str ==1 ){
			
			session_set_cookie_params(365 * 24 * 3600); 
			session_start();
			$count = $this->_db->fetchOne('SELECT count(mail) AS COUNT FROM autologin WHERE trim(mail) = ?',array($data['mail']));

			$key = sha1( uniqid() . mt_rand() . time()); 
			$expire = time() + 3600 * 24 * 365;
			
			setcookie('autoLoginKey', $key, $expire,'/','127.0.0.1'); 
			
			if($count > 0){
				$stt = $this->_db->prepare('UPDATE autologin SET loginkey=:key, expire=:expire WHERE mail=:mail');
				$stt->bindParam(':key' ,$key);
				$stt->bindParam(':expire' ,date('Y-m-d G:i:s', $expire));
				$stt->bindParam(':mail' ,$data['mail']);
				$stt->execute();
			}else{
				$stt = $this->_db->prepare('INSERT INTO autologin VALUES (:mail,:key,:expire)');
				$stt->bindParam(':mail' ,$data['mail']);
				$stt->bindParam(':key' ,$key);
				$stt->bindParam(':expire' ,date('Y-m-d G:i:s', $expire));
				
				$stt->execute();
			}
			$this->_db->query('UPDATE user SET lastlogin = ? ,udate = ? where mail = ? ',array(date('Y-m-d H:i:s'),date('Y-m-d H:i:s'), $data['mail']));
			
		}else{
			//$sess->setExpirationSeconds(1800);
			session_set_cookie_params(0);
		}
	}
	public function delAutologin(){
		if (isset($_COOKIE["autoLoginKey"]) && $_COOKIE["autoLoginKey"]!='') {
			
			$stt = $this->_db->prepare('DELETE FROM autologin  WHERE loginkey=:key');
			$stt->bindParam(':key' ,$_COOKIE["autoLoginKey"]);
			$stt->execute();
			setcookie('autoLoginKey');
			setcookie('autoLoginKey','', time() - 60);
		}
		$sess = new Zend_Session_Namespace('myApp');
		$sess->isLogined = FALSE;
		$sess->uid = NULL;
		$sess->roles = NULL;
	}
	public function setConfigSession(){
		$sess = new Zend_Session_Namespace('myApp');
		
		$info=$this->_db->fetchRow('select bmflg,bmcount,entryusers,bmentrynum,tagflg,view from config where uid=?',array($sess->uid));
		$sess->bmflg = $info['bmflg'];
		$sess->bmcount = $info['bmcount'];
		$sess->entryusers = $info['entryusers'];
		$sess->bmentrynum = $info['bmentrynum'];
		$sess->tagflg = $info['tagflg'];
	}

	public function log($str){

		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$logger = new Zend_Log($writer);
		$logger->addFilter(Zend_Log::DEBUG);
		$logger->log($str, Zend_Log::DEBUG);
	}

} 

