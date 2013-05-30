<?php
require_once 'Zend/Cache.php';
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
class DispatchPlugin extends Zend_Controller_Plugin_Abstract {
	private $_db;

	public function __construct() {
		$this->_db = DbManager::getConnection();
	}
	
	public function __destruct(){
		$this->_db->closeConnection();
	}
	public function dispatchLoopStartup($req) {
		$sess = new Zend_Session_Namespace('myApp');
		$module=$req->getModuleName();
		$userid=$req->getControllerName();

		if($module == 'default' && $userid != 'auth' &&$userid != 'index'&& $userid != 'error'&& $userid != 'about' ){
			$this->setTrueAction($req);
			
		}else{
			$sess->owner = $sess->uid;
		}
		$sess->css=$this->_db->fetchOne('SELECT csstype  FROM user WHERE uid = ?  ',array($sess->owner));
	}

	private function setTrueAction($req){
		$module=$req->getModuleName();
		$userid=$req->getControllerName();
		$alias=$req->getActionName();
		if($this->checkAlias($userid)==TRUE) {
			$alias=$userid;
			$userid = '';
		}
		$sess = new Zend_Session_Namespace('myApp');
		$sess->alias = $alias;

		$cache = Zend_Cache::factory('Core', 'File', 
			array('lifetime' => null, 'automatic_serialization' => TRUE),
			array('cache_dir' => './application/tmp/')
		);
		$db = DbManager::getConnection();
		if(!$allalias = $cache->load('alias')) {
			$allalias = $this->setAlias($db);
			$cache->save($allalias, 'alias');
		}

		$req->setModuleName('default');
		$req->setControllerName('index');
		$req->setActionName('index');
		if($this->checkAlias($alias)==TRUE){
			$c=1;
		}else{
			$c = $db->fetchOne('select count(uid) as c from user where uid=?',array($userid));
		}		
		$dispatch=$allalias[$alias];

		if($c > 0 && is_array($dispatch)){
			$req->setModuleName($dispatch['module']);
			$req->setControllerName($dispatch['controller']);
			$req->setActionName($dispatch['action']);
			if($userid != '') 
				$sess->owner = $userid;
			else
				$sess->owner = $sess->uid;
		}
	}
	
	private function setAlias($db){
		$stt = $db->prepare('SELECT alias,module,controller,action FROM metadata WHERE alias <> :alias order by id');
		$stt->bindValue(':alias', '');
		$stt->execute();
		while($row = $stt->fetch()){
			$tmp = array(
				'module' => $row['module'],
				'controller' => $row['controller'],
				'action' => $row['action']);
			$result[$row['alias']] = $tmp;
		}
		return $result;	
	}
	private  function checkAlias($alias) {
		$db = DbManager::getConnection();
		$stt = $db->prepare('SELECT alias FROM metadata WHERE flag=:flag');
		$stt->bindValue(':flag', '1');
		$stt->execute();
		$flag = FALSE;
		$str ='';
		while($row = $stt->fetch()){
			if($row['alias'] == $alias){
			 	$flag = TRUE; 
				break;
			}
		}
		return $flag;
	
	}
	public function log($str){
		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$logger = new Zend_Log($writer);
		$logger->addFilter(Zend_Log::DEBUG);
		$logger->log($str, Zend_Log::DEBUG);
	}
}