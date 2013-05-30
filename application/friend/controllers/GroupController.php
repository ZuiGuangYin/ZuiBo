<?php
require_once APP.'/default/models/Index.class.php';
require_once APP.'/friend/models/Friend.class.php';
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
class Friend_GroupController extends Zend_Controller_Action {
	public function addAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setHeaderInfo($s,$req);
		$fr= new Friend();
		$fr->makeGroupList($req,$s);
		$mode = $req->getQuery('mode');
		if($mode =='edit')  $fr->getGroupInfo($req,$s);
		$fr->getMemberList($req,$s);
		$s->simpleDisplay($req);
	}
	public function processAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$fr= new Friend();
		$gid = $fr->createNewGroup($req);
		$sess = new Zend_Session_Namespace('myApp');
		$this->_redirect('/'.$sess->uid.'/listfriend?gid='.$gid);
	}
	public function deleteAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$fr= new Friend();
		$gid = $fr->deleteGroup($req);
		$sess = new Zend_Session_Namespace('myApp');
		$this->_redirect('/'.$sess->uid.'/listfriend');
	}
	public function log($str){
		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$logger = new Zend_Log($writer);
		$logger->addFilter(Zend_Log::DEBUG);
		$logger->log($str, Zend_Log::DEBUG);
	}
}
