<?php
require_once 'Zend/Auth/Adapter/DbTable.php';
require_once APP.'/default/models/Index.class.php';
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
class AboutController extends Zend_Controller_Action {
	public function indexAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setSideInfo($s);
		$s->simpleDisplay($this->getRequest());
	}
	public function listAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		
		$idx = new MainIndex();
		$idx->getAllArticles($s);
		$s->simpleDisplay($req);
	}
	
	public function inviteAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		$idx->setSideInfo($s);
		$s->simpleDisplay($req);
	}
	public function articleAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		$idx->getArticles($s);
		$s->simpleDisplay($req);
	}
	public function dummyAction(){
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setHeaderInfo($s,$req);
		throw new Exception('画面显示失败。');
	}
	public function log($str){
		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$logger = new Zend_Log($writer);
		$logger->addFilter(Zend_Log::DEBUG);
		$logger->log($str, Zend_Log::DEBUG);
	}
}
