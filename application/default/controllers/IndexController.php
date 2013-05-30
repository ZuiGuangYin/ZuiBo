<?php
require_once 'Zend/Auth/Adapter/DbTable.php';
require_once APP.'/default/models/Index.class.php';
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
class IndexController extends Zend_Controller_Action {
	public function homeAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		//$this->log('home=');
		$idx = new MainIndex();
		$idx->setContentsInfo($s,$req);
		$idx->showProfile($req,$s,2);
		//$idx->createHomeInfo($req,$s);

		$s->simpleDisplay($this->getRequest(),'default.tpl');
	}
	public function indexAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setContentsInfo($s,$req);

		$s->simpleDisplay($this->getRequest());
	}
	public function faviconAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$fullpath=$idx->getFaviconPath($req);
	}
	public function loginAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$db = DbManager::getConnection();
		$reg = new MainIndex();
		$auth = new Zend_Auth_Adapter_DbTable($db, 'user', 'mail', 'passwd', 'md5(?)');
		$auth->setIdentity($req->getPost('mail'))
			->setCredential($req->getPost('passwd'));
		$result = $auth->authenticate();
		if($result->isValid()&&($reg->authUser($req->getPost('mail'))==1)) {
			$info = $auth->getResultRowObject(NULL, 'passwd');
			$reg->setAutologin($req->getPost());
			$sess = new Zend_Session_Namespace('myApp');
			$sess->isLogined = TRUE;
			$sess->uid = $info->uid;
			//$sess->owner = $info->uid;
			//$sess->css = $info->csstype;
			$sess->setExpirationSeconds(1800);
			$s->assign('result','1');
			
		} else {
			$s->assign('result','0');
			
		}
		$s->simpleDisplay($req,'');
	}

	public function logoutAction() {
		$sess = new Zend_Session_Namespace('myApp');
		$action = $sess->currentAction;
		$controller = $sess->currentController;
		$module = $sess->currentModule;
		
		$reg = new MainIndex();
		$req = $this->getRequest();
		$reg->delAutologin();
		Zend_Session::destroy();
		
		$this->_redirect('/');
	}
	public function checkAction(){
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->enableUser($req->getQuery('key'));
		$this->_redirect('/');
	}
	public function registerAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$s->simpleDisplay($req,'');
	}
	public function registercomAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		$idx->setInfo($req->getPost(),$s);
		$s->simpleDisplay($req,'');
	}
	public function register1Action(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		if($idx->checkURL($req->getQuery('c'),$s))
			$s->simpleDisplay($req,'');
		else
			$this->_redirect('/register');
	}
	public function register1comAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		$idx->setConfirmInfo($req->getPost(),$s);
		$s->simpleDisplay($req,'');
	}
	public function register2Action(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		$idx->setRealInfo($req->getPost(),$s);
		$s->simpleDisplay($req,'');
	}
	public function register2comAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		$idx->setUpdInfo($req->getPost(),$s);
		$s->simpleDisplay($req,'');
	}
	public function changeAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		$sess = new Zend_Session_Namespace('myApp');
		$idx->modifyInfo($req->getPost());
		$this->_redirect('/'.$sess->uid.'/profile');
	}
	public function profileAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		$idx->showProfile($req,$s,3);
		$s->simpleDisplay($this->getRequest(),'default.tpl');
	}
	public function introduceAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		$idx->setContentsInfo($s,$req);
		$idx->getIntroduce($req,$s);
		$s->simpleDisplay($this->getRequest(),'default.tpl');
	}
	public function introducecomAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		$idx->setContentsInfo($s,$req);
		$idx->getIntroduce($req,$s);
		$s->simpleDisplay($this->getRequest(),'default.tpl');
	}
	public function addintroduceAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		$idx->addIntroduce($req);
		$fuid=$req->getPost('fuid');
		$this->_redirect('/'.$fuid.'/profile');
	}
	public function editAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		$idx->getProfileForedit($req,$s);
		$s->simpleDisplay($req,'default.tpl');
	}
	public function editcomAction(){
		$req = $this->getRequest();
		$s = new MySmarty();
		$idx = new MainIndex();
		$idx->comProfile($req,$s);
		$s->simpleDisplay($req,'default.tpl');
	}
	public function imgchangeAction() {
		$s = new MySmarty();
		$req = $this->getRequest();

		$sess = new Zend_Session_Namespace('myApp');
		$path0 = 'images/'.$sess->uid.'/';
		if(!is_dir($path0)){
			mkdir($path0);
		}
		$info = $req->getPost();
		$updfileboxname='myfile';
		$idx = new MainIndex();
		$name=mb_convert_encoding($_FILES[$updfileboxname]['name'],'UTF-8','AUTO');

		if($name !=NULL && $name !=''){
			$filename=substr($name,strrpos($name,'/'),strlen($name));
			$extname=substr($name,strrpos($name,'.'),strlen($name));
			$key = sha1( uniqid() . mt_rand() . time());
			$distname=$path0.$key.$extname;
			$smalldistname=$path0.$key.'_s40';
			$normaldistname=$path0.$key.'_s76';
			$largedistname=$path0.$key.'_s180';
			if(is_uploaded_file($_FILES[$updfileboxname]['tmp_name'])){
				move_uploaded_file($_FILES[$updfileboxname]['tmp_name'],$distname);
				$idx->createBreviaryImage($distname,'',$smalldistname,40,40);
				$idx->createBreviaryImage($distname,'',$normaldistname,76,76);
				$idx->createBreviaryImage($distname,'',$largedistname,180,180);
			}
			$info['filename'.$updfileboxname]=$filename;
			$info['smallimg']=$smalldistname.$extname;
			$info['img']=$normaldistname.$extname;
			$info['largeimg']=$largedistname.$extname;
		}
			
		
		$idx->changeImg($info,$s);
		$s->assign('img', $info['largeimg']);
		$s->simpleDisplay($req,'');
	}
	public function visitlogAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setContentsInfo($s,$req);

		$s->simpleDisplay($req,'default.tpl');
	}
	public function otherAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$idx = new MainIndex();
		$idx->setContentsInfo($s,$req);

		$s->simpleDisplay($req,'default.tpl');
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
