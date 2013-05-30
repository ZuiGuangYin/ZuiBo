<?php
define('APP', './application');

require_once 'Zend/Controller/Action.php';
require_once 'Zend/Controller/Front.php';
require_once 'Zend/Registry.php';
require_once 'Zend/Session.php';
require_once 'Zend/Cache.php';
require_once APP.'/DbManager.class.php';
require_once APP.'/MySmarty.class.php';
require_once APP.'/CheckUtil.class.php';
require_once APP.'/AuthPlugin.class.php';
require_once APP.'/MetaPlugin.class.php';
require_once APP.'/DispatchPlugin.class.php';

$front = Zend_Controller_Front::getInstance();
$front->setControllerDirectory(
	array(
		'default'  => APP.'/default/controllers',
		'friend'       => APP.'/friend/controllers',
		'blog'       => APP.'/blog/controllers',
		'message'  => APP.'/message/controllers' 
	)
);

$front->registerPlugin(new DispatchPlugin());
$front->registerPlugin(new AuthPlugin());
$front->registerPlugin(new MetaPlugin());
$front->setParam('noViewRenderer', TRUE);
$front->dispatch();
