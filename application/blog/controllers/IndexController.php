<?php
require_once APP.'/blog/models/Blog.class.php';
require_once APP.'/default/models/Index.class.php';
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
class Blog_IndexController extends Zend_Controller_Action {
	public function indexAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$bl= new Blog();
		$bl->showBlogs($req,$s);
		$s->simpleDisplay($req);
	}
	public function addAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$bl= new Blog();
		$bl->addBlog($req,$s);
		$s->simpleDisplay($req);
	}
	public function doAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$bl= new Blog();
		$bl->addBlogInfo($req->getPost(),$s);
		$sess = new Zend_Session_Namespace('myApp');
		$this->_redirect("/".$sess->uid."/blog");
	}
	public function deleteAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$bl= new Blog();
		$bl->deleteBlogInfo($req->getPost());
		$sess = new Zend_Session_Namespace('myApp');
		$this->_redirect("/".$sess->uid."/blog");
	}
	public function confirmAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$sess = new Zend_Session_Namespace('myApp');
		$path0 = 'images/'.$sess->uid.'/';
		if(!is_dir($path0)){
			mkdir($path0);
		}
		$info = $req->getPost();
		$bl= new Blog();
		$bl->showNewComments($req,$s);
		for($i =1;$i<4;$i++){
			$updfileboxname='photo'.$i;
			$name=mb_convert_encoding($_FILES[$updfileboxname]['name'],'UTF-8','AUTO');
			if($name !=NULL && $name !=''){
				$filename=substr($name,strrpos($name,'/'),strlen($name));
				$extname=substr($name,strrpos($name,'.'),strlen($name));
				$key = sha1( uniqid() . mt_rand() . time());
				$distname=$path0.$key.$extname;
				$smalldistname=$path0.$key.'_s20';
				$normaldistname=$path0.$key.'_s240';
				if(is_uploaded_file($_FILES[$updfileboxname]['tmp_name'])){
					move_uploaded_file($_FILES[$updfileboxname]['tmp_name'],$distname);
					$info['small'.$updfileboxname]=$bl->createBreviaryImage($distname,'',$smalldistname,60,60);
					$info['normal'.$updfileboxname]=$bl->createBreviaryImage($distname,'',$normaldistname,240,180);
				}
				$info['file_'.$updfileboxname]=$filename;
				$info[$updfileboxname]=$distname;
			}
		}
		$idx = new MainIndex();
		$info['open_level_name']=$idx->getKbnName('level',$info['open_level']);
		$s->assign('info', $info);
		$s->assign('topmenu', $idx->getMenuInfo($req->getBaseUrl(),$sess->uid));
		$s->simpleDisplay($req);
	}
	public function viewAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$bl= new Blog();
		$bl->showBlogInfo($req,$s);
		$s->simpleDisplay($req);
	}
	public function editAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$bl= new Blog();
		$bl->showBlogInfo($req,$s);
		$s->simpleDisplay($req);
	}
	public function addcommentAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$bl= new Blog();
		$bl->addCommentInfo($req->getPost());
		$sess = new Zend_Session_Namespace('myApp');
		$this->_redirect("/".$sess->owner."/viewblog?bid=".$req->getPost('bid'));
	}
	public function delcommentAction(){
		$s = new MySmarty();
		$req = $this->getRequest();
		$bl= new Blog();
		$bl->delComment($req->getPost());
		$sess = new Zend_Session_Namespace('myApp');
		$this->_redirect("/".$sess->owner."/viewblog?bid=".$req->getPost('bid'));
	}
	public function deletepicAction() {
		$s = new MySmarty();
		$req = $this->getRequest();
		$bl= new Blog();
		$bl->deletepic($req,$s);
		$s->simpleDisplay($req,'');
	}
	public function deleteblogAction(){
		$s = new MySmarty();
		$req = $this->getRequest();
		$bl= new Blog();
		$bl->delOneBlog($req->getPost());
		$sess = new Zend_Session_Namespace('myApp');
		$this->_redirect("/".$sess->uid."/blog");
	}
	public function log($str){
		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$logger = new Zend_Log($writer);
		$logger->addFilter(Zend_Log::DEBUG);
		$logger->log($str, Zend_Log::DEBUG);
	}
}
