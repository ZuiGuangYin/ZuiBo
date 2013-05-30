<?php
class MetaPlugin extends Zend_Controller_Plugin_Abstract {
	public function dispatchLoopStartup($req) {
		$s = new MySmarty();
		$db = DbManager::getConnection();
		$stt = $db->prepare('SELECT * FROM metadata WHERE module=:module AND controller=:controller AND action=:action');
		$stt->bindValue(':module', $req->getModuleName());
		$stt->bindValue(':controller', $req->getControllerName());
		$stt->bindValue(':action', $req->getActionName());
		$stt->execute();
		$sess = new Zend_Session_Namespace('myApp');
		if(($row = $stt->fetch()) !== FALSE) {
			$sess->title = $row['title'];
			$sess->keywords = $row['keywords'];
			$sess->description = $row['description'];
			if($row['roles'] != ''){
				$this->checkRoles($sess->roles, $row['roles']);
			}
		} else {
			$sess->title = '';
			$sess->keywords = '';
			$sess->description = '';
		}
	}

	private function checkRoles($my, $page) {
		$flag = FALSE;
		$roles = explode(',', $page);
		foreach($roles as $role) {
			if(trim($my) == trim($role)) { $flag = TRUE; }
		}
		if(!$flag){
			$res = $this->getResponse();
			$res->setBody('没有访问权限。');
			$res->outputBody();
			exit(0);
		}
	}
}
