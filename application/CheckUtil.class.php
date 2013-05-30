<?php
require_once 'Zend/Validate.php';
require_once 'Zend/Validate/Between.php';
require_once 'Zend/Validate/Date.php';
require_once 'Zend/Validate/Digits.php';
require_once 'Zend/Validate/NotEmpty.php';
require_once 'Zend/Validate/Regex.php';
require_once 'Zend/Validate/StringLength.php';
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';

class CheckUtil {
	private $_error;
	private $_db;
	
	public function __destruct(){
		$this->_db->closeConnection();
	}

	function __construct(){
		$this->_error = array();
		$this->_db = DbManager::getConnection();
	}

	public function getError(){
		return $this->_error;
	}

	public function setError($err){
		$this->_error[] = $err;
	}
	public function showResult(){
		$str='';
		if(count($this->_error) > 0){
			//$s = new MySmarty();
			//$s->assign('errors', $this->_error);
			
			for($i=0;$i<count($this->_error);$i++){
				$str=$str.$this->_error[$i].'<br/>';
			}
			//$s->display('error.tpl');
			//exit(0);
			//return false;
		}
		return $str;
	}

	private function checkError($v, $value) {
		if(!$v->isValid($value)){
			foreach($v->getMessages() as $msg) { $this->_error[] = $msg; }
		}
	}

	public function requiredCheck($value, $err) {
		$v = new Zend_Validate_NotEmpty();
		$v->setMessage(str_replace('{0}', $err, '{0}必须输入。'));
		$this->checkError($v, $value);
	}

	public function lengthCheck($value, $max, $err){
		$v = new Zend_Validate_StringLength(0, $max);
		$v->setMessage(str_replace('{0}', $err, '在{0}中请输入 %max%个字符以内的字符串。'), Zend_Validate_StringLength::TOO_LONG);
		$this->checkError($v, $value);
	}

	public function numberTypeCheck($value, $err){
		$v = new Zend_Validate_Digits();
		$v->setMessage(str_replace('{0}', $err, '请在{0}中输入数字。'));
		$this->checkError($v, $value);
	}

	public function dateTypeCheck($value, $err){
		$v = new Zend_Validate_Date();
		$v->setMessage(str_replace('{0}', $err, '请在{0}中输入日期型数据。'));
		$this->checkError($v, $value);
	}

	public function dateNumberTypeCheck($year, $month, $day, $err){
		$d = $year + '-' + $month + '-' + $day;
		$this->dateTypeCheck($d, $err);
	}

	public function rangeCheck($value, $max, $min, $err) {
		$v = new Zend_Validate_Between($min, $max);
		$v->setMessage(str_replace('{0}', $err, '请在{0}中输入%min% 到 %max%范围间的数据。'));
		$this->checkError($v, $value);
	}

	public function regExCheck($value, $pattern, $err) {
		$v = new Zend_Validate_Regex($pattern);
		$v->setMessage(str_replace('{0}', $err, '请在{0}中输入正确形式的字符串。'));
		$this->checkError($v, $value);
	}

	public function compareCheck($value1, $value2, $err1, $err2) {
		if(is_null($value1) === FALSE && trim($value1) != ''
			&& is_null($value2) === FALSE && trim($value2) != ''){
			if($value1 >= $value2){
				$this->_error[] = '请在'.$err1.'输入比'.$err2.'小的值。';
			}
		}
	}
	
	public function checkUser($value){
		$count = $this->_db->fetchOne('SELECT COUNT(uid) AS c FROM user WHERE uid=?', array($value));

		if($count == 1||$value == 'default' ||$value == 'cloud' ||$value == 'rss' ||$value == 'bmsearch' 
		|| $value == 'entry'|| $value == 'submit'|| $value == 'bmlist'
		||$value=='auth'||$value=='register'||$value=='confirm'||$value=='do'||$value=='check'
		||$value=='enable'||$value=='sendmail'||$value=='resend'||$value=='rule'||$value=='privacy'
		||$value=='mainhelp'){
			$this->_error[] = '指定的用户名已经被注册，请选择其他的用户名 。';
		}
	}
	
	public function checkMail($value){
		$count = $this->_db->fetchOne('SELECT COUNT(uid) AS c FROM user WHERE mail=?', array($value));

		if($count == 1){
			$this->_error[] = '指定的邮件地址已经被登录 。';
		}
	}

	public function duplicateCheck($value, $sql, $err) {
		$db = DbManager::getConnection();
		$stt = $db->prepare($sql);
		$stt->bindValue(':value', $value);
		$stt->execute();
		if(($row = $stt->fetch()) !== FALSE) {
			$this->_error[] = $err.'重复了。';
		}
	}
	private function log($str){

		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$logger = new Zend_Log($writer);
		$logger->addFilter(Zend_Log::DEBUG);
		$logger->log($str, Zend_Log::DEBUG);
	}
}

