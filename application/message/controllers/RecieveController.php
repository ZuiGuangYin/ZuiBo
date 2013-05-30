<?php
require_once APP.'/default/models/Index.class.php';
require_once APP.'/message/models/Message.class.php';
class Message_RecieveController extends Zend_Controller_Action {
	public function indexAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setHeaderInfo($s,$req);
		$mes= new Message();
		$mes->getMessagelist($s,$req);
		$s->simpleDisplay($req);
	}
	public function deleteAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$mes= new Message();
		$mes->delMessage($req->getPost());
		$this->_redirect('/messagelist?mode='.$req->getPost('mode'));
	}
	public function deleteoneAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$mes= new Message();
		$mes->delMessageOne($req->getPost('mid'),$req->getPost('mode'),$req->getPost('modeflg'));
		$this->_redirect('/messagelist?mode='.$req->getPost('mode'));
	}
	public function recoverallAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$mes= new Message();
		$mes->recoverAll($req->getPost());
		$this->_redirect('/messagelist?mode='.$req->getPost('mode'));
	}
	public function recoverAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$mes= new Message();
		$mes->recoverMessage($req->getPost('mid'),$req->getPost('modeflg'));
		$this->_redirect('/messagelist?mode='.$req->getPost('mode'));
	}
}
