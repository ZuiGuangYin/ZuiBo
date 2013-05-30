<?php
class AuthPlugin extends Zend_Controller_Plugin_Abstract {
	private $_db;

	public function __construct() {
		$this->_db = DbManager::getConnection();
	}
	
	public function __destruct(){
		$this->_db->closeConnection();
	}
	private function getMail($key){
	
		$mail = $this->_db->fetchOne('SELECT mail  FROM autologin WHERE loginkey = ? AND expire > ? ',array($key,date('Y-m-d G:i:s')));
		if($mail == NULL){
		 $mail='';
		}else{
			$stt = $this->_db->prepare('UPDATE user SET lastlogin=:lastlogin WHERE mail=:mail');
			$stt->bindParam(':lastlogin' ,date('Y-m-d H:i:s'));
			$stt->bindParam(':mail' ,$mail);
			$stt->execute();
		}
		return $mail;
	}
	
	public function dispatchLoopStartup($req) {
		$sess = new Zend_Session_Namespace('myApp');
		if($sess->isLogined!=TRUE){
			if (isset($_COOKIE["autoLoginKey"]) && $_COOKIE["autoLoginKey"]!='' ) {
				$mail=$this->getMail($_COOKIE["autoLoginKey"]);
				if($mail !=''){
					$sess->isLogined = TRUE;
					$info= $this->_db->fetchRow('SELECT uid,csstype  FROM user WHERE mail = ? ',array($mail));
					$sess->uid = $info['uid'];
					$sess->css = $info['csstype'];
					$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : 'http://localhost/sns';
					$sess->url=$domain;
					if($req->getModuleName()=='default' && $req->getControllerName()=='index' && $req->getActionName()=='index'){
						$req->setModuleName('default');
						$req->setControllerName('index');
						$req->setActionName('home');
					}
				}else{
					if(!(($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'login')||
					   ($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'check')||	
						($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'register')||	
						($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'registercom')||	
						($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'register1')||	
						($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'register1com')||	
						($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'register2')||	
						($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'register2com')
					)){
						$req->setModuleName('default');
						$req->setControllerName('index');
						$req->setActionName('index');
					}
				}
			}else{
				if(!(($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'login')||
				   ($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'check')||	
					($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'register')||	
					($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'registercom')||	
					($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'register1')||	
					($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'register1com')||	
					($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'register2')||	
					($req->getModuleName() == 'default' &&$req->getControllerName() == 'index' &&$req->getActionName() == 'register2com')
				)){
					$req->setModuleName('default');
					$req->setControllerName('index');
					$req->setActionName('index');
				}
			}
		}else{
			if($req->getModuleName()=='default' && $req->getControllerName()=='index' && $req->getActionName()=='index'){
				$req->setModuleName('default');
				$req->setControllerName('index');
				$req->setActionName('home');
			}
		}
	}
}
