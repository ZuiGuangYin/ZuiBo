<?php
require_once APP.'/friend/models/Friend.class.php';
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
class Friend_IndexController extends Zend_Controller_Action {
	public function listAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$fr= new Friend();
		$fr->getFriendList($req,$s);
		$s->simpleDisplay($req);
	}
	public function configAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$fr= new Friend();
		$fr->getFriendConfigInfo($req,$s);
		$s->simpleDisplay($req,'');
	}
	public function addAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$sess = new Zend_Session_Namespace('myApp');
		$fr= new Friend();
		$fr->addFriend($req);
		$this->_redirect('/'.$sess->uid.'/listfriend');
	}
	public function deleteAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$fr= new Friend();
		$fr->deleteFriend($req,$s);
		$s->simpleDisplay($req,'');
	}
	public function addgroupAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$fr= new Friend();
		$fr->createNewGroupBySetting($req,$s);
		$s->simpleDisplay($req,'');
	}
	public function savesettingAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$sess = new Zend_Session_Namespace('myApp');
		$fr= new Friend();
		$fr->saveSetting($req);
		$this->_redirect('/'.$sess->uid.'/listfriend');
	}
	
	public function log($str){
		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$logger = new Zend_Log($writer);
		$logger->addFilter(Zend_Log::DEBUG);
		$logger->log($str, Zend_Log::DEBUG);
	}
}
