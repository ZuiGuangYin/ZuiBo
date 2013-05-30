<?php
require_once 'Zend/Auth/Adapter/DbTable.php';
require_once APP.'/default/models/Index.class.php';
require_once APP.'/default/models/Search.class.php';
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
class SearchController extends Zend_Controller_Action {
	public function mailAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setContentsInfo($s,$req);
		$mail=$req->getPost('mail');
		if($mail!=null && $mail!=''){
			$sch = new Search();
			$sch->searchByMail($req,$s);
		}

		$s->simpleDisplay($this->getRequest(),'default.tpl');
	}
	public function indexAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setContentsInfo($s,$req);
		

		$s->simpleDisplay($this->getRequest(),'default.tpl');
	}
	public function bymailAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setContentsInfo($s,$req);
		$sch = new Search();
		$sch->setMailaddInfo($req,$s);
		

		$s->simpleDisplay($this->getRequest(),'default.tpl');
	}
	public function bymailcomAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setContentsInfo($s,$req);
		$sch = new Search();
		$sch->setMailaddInfo($req,$s);
		

		$s->simpleDisplay($this->getRequest(),'default.tpl');
	}
	public function addAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$sch = new Search();
		$sch->addFriendByMail($req,$s);
		
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
