<?php
require_once 'Smarty/Smarty.class.php';
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';

class MySmarty extends Smarty {
	public function __construct(){
		$this->Smarty();
		$this->template_dir = APP.'/common/templates/';
		$this->compile_dir = APP.'/common/templates_c/';
		$this->config_dir = APP.'/common/config/';
		$this->caching = FALSE;
		$this->default_modifiers = 'escape:"html"';
	}

	public function simpleDisplay($req, $master = 'master.tpl'){		
		
		$path = APP.'/'.$req->getModuleName().'/views/smarty/';
		$this->template_dir = $path.'templates/';
		$this->compile_dir = $path.'templates_c/';
		$name = $req->getControllerName().'/'.$req->getActionName().'.tpl';
		$this->assign('current', $name);
		$this->assign('base', $req->getBaseUrl());
		//$this->assign('sitemenu', Zend_Registry::get('sitemenu'));
		if($master == '' || $master == NULL) {
			$this->display($name);
		} else {
			$this->display($master);
		}
	}
	public function log($str){

		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$logger = new Zend_Log($writer);
		$logger->addFilter(Zend_Log::DEBUG);
		$logger->log($str, Zend_Log::DEBUG);
	}
}
