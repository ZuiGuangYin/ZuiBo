<?php
require_once APP.'/default/models/Index.class.php';
require_once APP.'/message/models/Message.class.php';
class Message_IndexController extends Zend_Controller_Action {
	public function createAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setHeaderInfo($s,$req);
		$mes= new Message();
		$mes->getInfoForCreate($req,$s);
		$s->simpleDisplay($req);
	}
	public function confirmAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setHeaderInfo($s,$req);
		$mes= new Message();
		$mes->confirmMessage($req,$s);
		$s->simpleDisplay($req);
	}
	public function sendAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$mes= new Message();
		$mes->saveMessage($req->getPost());
		if($req->getPost('mode')==1){
			$this->_redirect('/messagelist?mode=sended');
		}else{
			$this->_redirect('/messagelist?mode=draft');
		}
	}
	public function showAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setHeaderInfo($s,$req);
		$mes= new Message();
		$mes->setMessageInfo($req,$s);
		$s->simpleDisplay($this->getRequest());
	}
	public function listAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$mes= new Message();
		$mes->getFriendlist($req,$s);
		$s->simpleDisplay($req,'');
	}
	public function selectAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$mes= new Message();
		$mes->getFriendinfo($req,$s);
		$s->simpleDisplay($req,'');
	}
}
