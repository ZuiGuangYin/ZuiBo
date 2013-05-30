<?php
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
require_once 'Zend/Mail.php';
require_once 'Zend/Mail/Transport/Smtp.php';
class MainIndex {
	private $_db;

	public function __construct() {
		$this->_db = DbManager::getConnection();
	}

	public function __destruct(){
		$this->_db->closeConnection();
	}
	public function setSideInfo($s){
		$stt1=$this->_db->prepare('select * from book_master  order by pubdate desc');
		
		$stt1->execute();
		$result = $stt1->fetchAll();
		$s->assign('newbooks',$result );
	}
	public function setContentsInfo($s,$req){

		$sess = new Zend_Session_Namespace('myApp'); 
		$s->assign('topmenu', $this->getMenuInfo($req->getBaseUrl(),$sess->owner));	
	}
	public function getProfileForedit($req,$s){
		$sess = new Zend_Session_Namespace('myApp'); 
		$s->assign('topmenu', $this->getMenuInfo($req->getBaseUrl(),$sess->owner));
		if($req->getPost('from')!=NULL && $req->getPost('from')!=''){
			$profile = $req->getPost();
		}else{
			$profile = $this->_db->fetchRow("SELECT nick_name, if(largeimg is null,'images/noimage_member180.gif',largeimg) as largeimg,lastlogin,mail,first_name,last_name,name_level,mobile,province,city,location_level,bornprovince,borncity,bornlocation_level,appeal,sex,sex_level,blandtype,occupy,occupy_level,company,company_level,school,school_level,year,age_level,month,day,birthday_level,profile_search_flg,mail_search_flg,cdate FROM user WHERE uid = ?",array($sess->owner));
			$stt = $this->_db->prepare('SELECT * FROM hobby where uid=:uid  ORDER BY hid  ');
			$stt->bindValue(':uid', $sess->owner);
			$stt->execute();
			$result = $stt->fetchAll();
			for($i = 0;$i < count($result);$i++){
				$profile['fav'.($i+1)]=$result[$i]['type'];
				$profile['fav'.($i+1).'_value']=$result[$i]['contents'];
			}
		}
		$s->assign('profile', $profile);
		$stt = $this->_db->prepare('SELECT ename,cname FROM interest_master ORDER BY no  ');
		$stt->execute();
		$result = $stt->fetchAll();
		for($i = 0;$i < count($result);$i++){
			$sql='SELECT  '.$result[$i]['ename'].' FROM interest WHERE uid = ?';
			$result[$i]['val']=$this->_db->fetchOne($sql,array($sess->owner));
		}
		$s->assign('interestthings', $result);
		$s->assign('allprovinces',$this->CreatePullDownByMaster('province'));
		$s->assign('allcitys',$this->CreatePullDownByMaster('city'));
		for($i = 0;$i < 12;$i++){
			$result1[$i]['val']=$i+1;
		}
		$s->assign('months',$result1 );
		for($i = 0;$i < 31;$i++){
			$result2[$i]['val']=$i+1;
		}
		$s->assign('days',$result2 );
		$k=0;
		for($i = 1996;$i>1914;$i--){
			$result3[$k]['val']=$i;
			$k+=1;
		}
		$s->assign('years',$result3 );
		$s->assign('blands',$this->CreatePullDownByMaster('bland'));
		$s->assign('occupies',$this->CreatePullDownByMaster('occupy'));
		$s->assign('interests',$this->CreatePullDownByMaster('hobby'));
	}
	private function CreatePullDownByMaster($kind){
		$stt = $this->_db->prepare('SELECT id,name FROM kbn_master where kind=:kind  ORDER BY id  ');
		$stt->bindValue(':kind',$kind);
		$stt->execute();
		$result = $stt->fetchAll();
		return $result;
	}
	public function comProfile($req,$s){
		$sess = new Zend_Session_Namespace('myApp'); 
		$s->assign('topmenu', $this->getMenuInfo($req->getBaseUrl(),$sess->owner));
		$profile = $req->getPost();
		$profile['sex_name']=$this->getKbnName('sex',$profile['sex']);
		$profile['province_name']=$this->getKbnName('province',$profile['province']);
		$profile['city_name']=$this->getKbnName('city',$profile['city']);
		$profile['bornprovince_name']=$this->getKbnName('province',$profile['bornprovince']);
		$profile['borncity_name']=$this->getKbnName('city',$profile['borncity']);
		$profile['bland_name']=$this->getKbnName('bland',$profile['blandtype']);
		$profile['occupy_name']=$this->getKbnName('occupy',$profile['occupy']);

		$profile['location_level_name']=$this->getKbnName('level',$profile['location_level']);
		$profile['sex_level_name']=$this->getKbnName('level',$profile['sex_level']);
		$profile['name_level_name']=$this->getKbnName('level',$profile['name_level']);
		$profile['birthday_level_name']=$this->getKbnName('level',$profile['birthday_level']);
		$profile['age_level_name']=$this->getKbnName('level',$profile['age_level']);
		$profile['bornlocation_level_name']=$this->getKbnName('level',$profile['bornlocation_level']);
		$profile['occupy_level_name']=$this->getKbnName('level',$profile['occupy_level']);
		$profile['company_level_name']=$this->getKbnName('level',$profile['company_level']);
		$profile['school_level_name']=$this->getKbnName('level',$profile['school_level']);

		$stt = $this->_db->prepare('SELECT ename,cname FROM interest_master ORDER BY no  ');
		$stt->execute();
		$result = $stt->fetchAll();
		$str='';
		for($i = 0;$i < count($result);$i++){
			//$this->log($result[$i]['ename'].'='.$profile[$result[$i]['ename']]);
			if($profile[$result[$i]['ename']]==1) $str=$str.$result[$i]['cname'].'，';
			$result[$i]['val']=$profile[$result[$i]['ename']];
		}
		$s->assign('allinterests', $result);
		$str=substr($str,0,strlen($str)-1);
		$profile['allinterests']=$str;

		$profile['fav1_name']=$this->getKbnName('hobby',$profile['fav1']);
		$profile['fav2_name']=$this->getKbnName('hobby',$profile['fav2']);
		$profile['fav3_name']=$this->getKbnName('hobby',$profile['fav3']);


		$profile['mail_search_flg_name']=$this->getKbnName('openflg',$profile['mail_search_flg']);
		$profile['profile_search_flg_name']=$this->getKbnName('openflg',$profile['profile_search_flg']);


		$s->assign('profile', $profile);

	}
	public function showProfile($req,$s,$colnum){
		$sess = new Zend_Session_Namespace('myApp'); 
		$s->assign('topmenu', $this->getMenuInfo($req->getBaseUrl(),$sess->owner));

		$stt = $this->_db->prepare("SELECT * FROM picture WHERE uid =:uid ORDER BY no desc limit 4");
		$stt->bindValue(':uid', $sess->owner);
		$stt->execute();
		$result = $stt->fetchAll();

		$s->assign('pictures', $result);
		$profile = $this->_db->fetchRow("SELECT nick_name, if(largeimg is null,'images/noimage_member180.gif',largeimg) as largeimg,lastlogin,mail,first_name,last_name,name_level,mobile,province,city,location_level,bornprovince,borncity,bornlocation_level,appeal,sex,sex_level,blandtype,occupy,occupy_level,company,company_level,school,school_level,year,age_level,month,day,birthday_level,csstype,profile_search_flg,mail_search_flg,cdate FROM user WHERE uid = ?",array($sess->owner));
		$profile['sex_name']=$this->getKbnName('sex',$profile['sex']);
		$profile['province_name']=$this->getKbnName('province',$profile['province']);
		$profile['city_name']=$this->getKbnName('city',$profile['city']);
		$profile['bornprovince_name']=$this->getKbnName('province',$profile['bornprovince']);
		$profile['borncity_name']=$this->getKbnName('city',$profile['borncity']);
		$profile['bland_name']=$this->getKbnName('bland',$profile['blandtype']);
		$profile['occupy_name']=$this->getKbnName('occupy',$profile['occupy']);
		$profile['friendcnt']=$this->_db->fetchOne('SELECT count(*) FROM friend WHERE uid = ?',array($sess->owner));
		$profile['friendflg']=$this->_db->fetchOne('SELECT count(*) FROM friend WHERE uid = ? and fuid=?',array($sess->uid,$sess->owner));
		$profile['newblogflg']=0;
		if($profile['friendflg']>0){ 
			$profile['newblogflg']=$this->_db->fetchOne('SELECT new_friend_blog FROM friend WHERE uid = ? and fuid=?',array($sess->uid,$sess->owner));
		}else{
			if($sess->uid==$sess->owner) $profile['newblogflg']=1;
		}

		$info = $this->_db->fetchRow('SELECT * FROM interest WHERE uid =?',array($sess->owner));
		$str='';
		foreach($info as $key=>$val){
			if($key !='uid' && $key !='udat' && $key !='cdat' && $val==1){
				$interest_name=$this->_db->fetchOne('SELECT cname FROM interest_master WHERE ename =?',array($key));
				$str = $str.$interest_name.'，';
			}
		}
		$str=substr($str,0,strlen($str)-1);
		$profile['interest']=$str;
		$s->assign('profile', $profile);

		//我的社群
		$stt = $this->_db->prepare("SELECT m.cid as cid,c.name as name ,if(c.smallimg is null,'images/noimage_member40.gif',c.smallimg) as smallimg FROM communitymember AS m INNER JOIN community AS c ON  m.cid = c.cid WHERE m.uid = :uid ORDER BY m.cdat desc limit 6");
		$stt->bindValue(':uid', $sess->owner);
		$stt->execute();
		$result = $stt->fetchAll();
		for($i = 0;$i < count($result);$i++){
			$result[$i]['membercnt']=$this->_db->fetchOne('SELECT count(*) FROM communitymember WHERE cid = ?',array($result[$i]['cid']));
		}
		$cnt=count($result);
		if($colnum==3){
			switch($cnt % 3 ){
				case 0:
					break;
				case 1:
					$result[$cnt]['cid']='';
					$result[$cnt+1]['cid']='';
					break;
				case 2:
					$result[$cnt]['cid']='';
					break;
			}
		}
		if($colnum==2){
			switch($cnt % 2 ){
				case 0:
					break;
				case 1:
					$result[$cnt]['cid']='';
					break;
			}
		}

		$s->assign('communities', $result);
		$s->assign('communitycnt', $this->_db->fetchOne('SELECT count(*) FROM communitymember WHERE uid = ?',array($sess->owner)));


		//我的社交圈
		$stt = $this->_db->prepare("SELECT f.fuid as fuid,u.nick_name as nick_name ,if(u.img is null,'images/noimage_member76.gif',u.img) as smallimg FROM friend AS f INNER JOIN user AS u ON  f.fuid = u.uid WHERE f.uid = :uid ORDER BY f.cdat desc limit 6");
		$stt->bindValue(':uid', $sess->owner);
		$stt->execute();
		$result = $stt->fetchAll();
		for($i = 0;$i < count($result);$i++){
			$result[$i]['friendcnt']=$this->_db->fetchOne('SELECT count(*) FROM friend WHERE uid = ?',array($result[$i]['fuid']));
		}
		$cnt=count($result);
		if($colnum==3){
			switch($cnt % 3 ){
				case 0:
					break;
				case 1:
					$result[$cnt]['fuid']='';
					$result[$cnt+1]['fuid']='';
					break;
				case 2:
					$result[$cnt]['fuid']='';
					break;
			}
		}
		if($colnum==2){
			switch($cnt % 2 ){
				case 0:
					break;
				case 1:
					$result[$cnt]['fuid']='';
					break;
			}
		}
		$s->assign('friends', $result);
		$s->assign('friendcnt', $this->_db->fetchOne('SELECT count(*) FROM friend WHERE uid = ?',array($sess->owner)));



		//最新微博
		$stt = $this->_db->prepare("SELECT m.contents as contents,m.cdat as cdat,p.smallpath as smallpath,p.path as path,p.no as no FROM microblog_master AS m LEFT JOIN picture AS p ON  m.mid = p.mid WHERE m.uid = :uid ORDER BY m.cdat desc limit 3");
		$stt->bindValue(':uid', $sess->owner);
		$stt->execute();
		$result = $stt->fetchAll();
		$s->assign('microblogs', $result);
		//朋友介绍
		$stt = $this->_db->prepare("SELECT if(u.smallimg is null,'images/noimage_member40.gif',u.smallimg) as smallimg,i.fuid as fuid,u.nick_name as nick_name,i.contents as contents,i.relationship FROM introduce_by_friend AS i INNER JOIN user AS u ON  i.uid = u.uid WHERE i.fuid = :uid ORDER BY i.cdat desc limit 2");
		$stt->bindValue(':uid', $sess->owner);
		$stt->execute();
		$result = $stt->fetchAll();
		$s->assign('introduces', $result);

		//最近的博客
		$stt = $this->_db->prepare("SELECT bid ,title FROM blog_master WHERE uid =:uid ORDER BY bid DESC limit 3");
		$stt->bindValue(':uid', $sess->owner);
		$stt->execute();
		$result = $stt->fetchAll();
		$s->assign('newblogs', $result);
	
	}
	public function setAutologin($data){
		$str=$data['persistent'];
		$sess = new Zend_Session_Namespace('myApp');  
		if($str ==1 ){
			session_set_cookie_params(365 * 24 * 3600); 
			session_start();
			$count = $this->_db->fetchOne('SELECT count(mail) AS COUNT FROM autologin WHERE trim(mail) = ?',array($data['mail']));

			$key = sha1( uniqid() . mt_rand() . time()); 
			$expire = time() + 3600 * 24 * 365;
			$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
			setcookie('autoLoginKey', $key , time()+60*60*24*365, '/', $domain, false);

			if($count > 0){
				$stt = $this->_db->prepare('UPDATE autologin SET loginkey=:key, expire=:expire WHERE mail=:mail');
				$stt->bindParam(':key' ,$key);
				$stt->bindParam(':expire' ,date('Y-m-d G:i:s', $expire));
				$stt->bindParam(':mail' ,$data['mail']);
				$stt->execute();
			}else{
				$stt = $this->_db->prepare('INSERT INTO autologin VALUES (:mail,:key,:expire)');
				$stt->bindParam(':mail' ,$data['mail']);
				$stt->bindParam(':key' ,$key);
				$stt->bindParam(':expire' ,date('Y-m-d G:i:s', $expire));
				
				$stt->execute();
			}
			$this->_db->query('UPDATE user SET lastlogin = ? ,udate = ? where mail = ? ',array(date('Y-m-d H:i:s'),date('Y-m-d H:i:s'), $data['mail']));
			
		}else{
			//$sess->setExpirationSeconds(1800);
			session_set_cookie_params(0);
		}
	}
	public function delAutologin(){
		if (isset($_COOKIE["autoLoginKey"]) && $_COOKIE["autoLoginKey"]!='') {
			
			$stt = $this->_db->prepare('DELETE FROM autologin  WHERE loginkey=:key');
			$stt->bindParam(':key' ,$_COOKIE["autoLoginKey"]);
			$stt->execute();
			setcookie('autoLoginKey');
			setcookie('autoLoginKey','', time() - 60);
			foreach ($_COOKIE as $key=>$val) unset($_COOKIE[$key]);
		}
		session_destroy();
	}
	public function authUser($mail){
		$flg = $this->_db->fetchOne('SELECT validflg FROM user WHERE mail = ?',array($mail));
		return $flg;	
	}
	public function enableUser($key){
	
		$stt = $this->_db->prepare('SELECT uid FROM user ORDER BY cdate desc');
		$stt->execute();
		$uid='';
		while($row = $stt->fetch()) {
			if(md5($row['uid']) == $key){
				$uid=$row['uid'];
				break ;
			}
		
		}
		//$this->log('uid='.$uid);
		if($uid !=''){
			$stt = $this->_db->prepare('UPDATE user SET validflg=1,udate=:udat WHERE uid=:uid');
			$stt->bindParam(':udat' ,date('Y-m-d H:i:s'));
			$stt->bindParam(':uid' ,$uid);
			$stt->execute();
		}
		return $uid;
	
	}
	public function getKbnName($kind,$id){
		return $this->_db->fetchOne('SELECT name FROM kbn_master  WHERE kind=? and id=? ',array($kind,$id));
	}
	public function getAllArticles($s){
		
		$stt = $this->_db->prepare('SELECT * FROM article  ORDER BY no desc');
		$stt->execute();
		$result = $stt->fetchAll();
		for($i = 0;$i < count($result);$i++){
			$result[$i]['kindname']=$this->getKbnName('kind1',$result[$i]['no']);
		}
		$s->assign('allarticles',$result );
		$this->setSideInfo($s);
	}
	public function getArticles($req,$s){
		$info = $this->_db->fetchRow('SELECT * FROM article WHERE no=?',array( $req ->getQuery('no')));
		$s->assign('info',$info );
		$this->setSideInfo($s);
	}
	public function checkURL($c,$s){
		//$this->log('md5_mail='.$c);
		$expire = time() - 3600 * 24 * 365;
		$cn = $this->_db->fetchOne('select count(*) from tempuser where md5_mail=? and cdate > ?',array($c,date('Y-m-d G:i:s',$expire)));
		if($cn > 0){
			$stt = $this->_db->prepare('SELECT id,name FROM kbn_master where kind=:kind  ORDER BY id  ');
            $stt->bindValue(':kind','province');
			$stt->execute();
			$result = $stt->fetchAll();
			$s->assign('allprovinces',$result );

			$stt = $this->_db->prepare('SELECT id,name FROM kbn_master where kind=:kind  ORDER BY id  ');
            $stt->bindValue(':kind','city');
			$stt->execute();
			$result = $stt->fetchAll();
			$s->assign('allcitys',$result );

            $s->assign('email',$this->_db->fetchOne('select mail from tempuser where md5_mail=? ',array($c)));
			$this->_db->query('update tempuser set validflg=1 where md5_mail=?',$c);
		}else{
			$this->_db->query('delete from tempuser where md5_mail=?',$c);
		}
		return $cn;

	}
	public function setConfirmInfo($info,$s){
		$info['name_level_name']=$this->getKbnName('level',$info['name_level']);
		$info['location_level_name']=$this->getKbnName('level',$info['location_level']);
		$info['sex_level_name']=$this->getKbnName('level',$info['sex_level']);
		$info['birthday_level_name']=$this->getKbnName('level',$info['birthday_level']);
		$info['age_level_name']=$this->getKbnName('level',$info['age_level']);
		$info['location_pref_name']=$this->getKbnName('province',$info['location_pref']);
		$info['location_area_name']=$this->getKbnName('city',$info['location_area']);
		$info['sex_name']=$this->getKbnName('sex',$info['sex']);
		$s->assign('info',$info );
	}
	public function modifyInfo($data) {
		$sess = new Zend_Session_Namespace('myApp');
		$this->_db->query('update user set 
		first_name = ? ,
		last_name = ? ,
		name_level = ? ,
		nick_name = ? ,
		province = ? ,
		city = ? ,
		location_level = ? ,
		bornprovince = ? ,
		borncity = ? ,
		bornlocation_level = ? ,
		sex = ? ,
		sex_level = ? ,
		blandtype = ? ,
		year = ? ,
		month = ? ,
		day = ? ,
		birthday_level = ? ,
		age_level = ? ,
		occupy = ? ,
		occupy_level = ? ,
		company = ? ,
		company_level = ? ,
		school = ? ,
		school_level = ? ,
		appeal = ? ,
		profile_search_flg = ? ,
		mail_search_flg = ? ,
		udate = ? 
		where uid=?',array(
			$data['first_name'],
			$data['last_name'],
			$data['name_level'],
			$data['nick_name'],
			$data['province'],
			$data['city'],
			$data['location_level'],
			$data['bornprovince']==''?NULL:$data['bornprovince'],
			$data['borncity']==''?NULL:$data['borncity'],
			$data['bornlocation_level'],
			$data['sex'],
			$data['sex_level'],
			$data['blandtype']==''?NULL:$data['blandtype'],
			$data['year'],
			$data['month'],
			$data['day'],
			$data['birthday_level'],
			$data['age_level'],
			$data['occupy']==''?NULL:$data['occupy'],
			$data['occupy_level'],
			$data['company'],
			$data['company_level'],
			$data['school'],
			$data['school_level'],
			$data['appeal'],
			$data['profile_search_flg'],
			$data['mail_search_flg'],
			date('Y-m-d H:i:s'),
			$sess->uid)
			);
		$stt = $this->_db->prepare('SELECT ename,cname FROM interest_master ORDER BY no  ');
		$stt->execute();
		$result = $stt->fetchAll();
		$sql = 'UPDATE interest SET ';
		$str='';
		$setdata=array();
		for($i = 0;$i < count($result);$i++){
			$strsub = $result[$i]['ename'].'=?,';
			$str=$str.$strsub;
			$flg=$data[$result[$i]['ename']]==''? 0 : $data[$result[$i]['ename']];
			$setdata[$i]=$flg;

		}
		$sql = $sql.$str;
		$setdata[count($result)]=date('Y-m-d H:i:s');
		$setdata[count($result)+1]=$sess->uid;
		$sql = $sql.'udat=? WHERE uid = ? ';
		$this->_db->query($sql,$setdata);
		$this->_db->query('DELETE FROM hobby WHERE uid = ?',array($sess->uid));
		for($i = 1;$i < 4;$i++){
			if($data['fav'.$i] !=NULL && $data['fav'.$i] !=''){
				$this->_db->insert('hobby',
					array(
						'uid'     => $sess->uid,
						'type'     => $data['fav'.$i],
						'contents'     => $data['fav'.$i.'_value'],
						'udat'    => date('Y-m-d H:i:s'),
						'cdat'    => date('Y-m-d H:i:s')
					)
				);
			}
		}

	}
	public function setInfo($data,$s) {
		$cn = $this->_db->fetchOne('select count(*) from tempuser where mail=? ',array($data['email']));
		if($cn > 0){
			
			$cn1 = $this->_db->fetchOne('select count(*) from tempuser where mail=? and validflg=1 ',array($data['email']));
			if($cn1 > 0){
				$s->assign('flg','0');
			}else{
				
				if($this->sendMail($data['email'])==true){
					$this->_db->query('update tempuser set cdate = ? where mail=?',array(date('Y-m-d H:i:s'),$data['email']));
					$s->assign('flg','1');
				}else{
					$s->assign('flg','0');
				}
			}
		}else{
			if($this->sendMail($data['email'])==true){
					$this->_db->insert('tempuser',
						array(
							'mail'     => $data['email'],
							'md5_mail'     => md5($data['email']),
							'cdate'    => date('Y-m-d H:i:s')
						)
					);
					$s->assign('flg','1');
			}else{
					$s->assign('flg','0');
			}
		}
		$s->assign('mail',$data['email']);
	}
	public function setRealInfo($data,$s) {
		$this->_db->insert('user',
			array(
				'mail'   => $data['email'],
				'nick_name'   => $data['nickname'],
				'first_name'   => $data['first_name'],
				'last_name'   => $data['last_name'],
				'name_level'   => $data['name_level'],
				'province'   => $data['location_pref'],
				'city'   => $data['location_area'],
				'location_level'   => $data['location_level'],
				'passwd'    => md5($data['password1']),
				'sex'   => $data['sex'],
				'sex_level'   => $data['sex_level'],
				'year' => $data['year'],
				'age_level' => $data['age_level'],
				'month' => $data['month'],
				'day' => $data['day'],
				'birthday_level' => $data['birthday_level'],
				'validflg'=>1,
				'roles'    => 'user',
				'udate'    => date('Y-m-d H:i:s'),
				'cdate'    => date('Y-m-d H:i:s')
			)
		);
		$uid =  $this->_db->fetchOne('SELECT LAST_INSERT_ID() AS uid');
		$this->_db->insert('interest',
			array(
				'uid'   => $uid,
				'udat'    => date('Y-m-d H:i:s'),
				'cdat'    => date('Y-m-d H:i:s')
			)
		);
		$s->assign('email',$data['email']);
	}
	public function setUpdInfo($data,$s){
		$this->_db->query('UPDATE user set mobile = ? ,udate=? where mail=?',array($data['mobile'],date('Y-m-d H:i:s'),$data['email']));
		$s->assign('mobile',$data['mobile']);
		//给手机发送短信程序，此处略去
	}
	private function sendMail($email) {
		$info=file_get_contents(APP.'/templete.txt');
		$info=mb_convert_encoding($info,'UTF-8','auto');
		$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : 'http://localhost/sns';
		$info=str_replace('mydomain',$domain,$info);
		$info=str_replace('md5_name',md5($email),$info);
		$subject="Tobu社区注册导航";
		try{
			$smtp = new Zend_Mail_Transport_Smtp('smtp.kagoya.net' ,array('port' =>'25','auth'=>'login','username'=>'mysin007','password'=>'5d7ehrg8'));
			Zend_Mail::setDefaultTransport($smtp);
			$mail = new Zend_Mail('UTF-8');
			$mail->addTo($email);
			$mail->setFrom('admin@tobu.com', $this->encode('Tobu社区注册导航'));
			$mail->setSubject($this->encode($subject));
			$mail->setBodyText($this->encode($info));
			$mail->send();
			return true;
		}catch(Zend_Exception $e){
			die($e->getMessage());
			return false;
		}
	}
	private function encode($str){return mb_convert_encoding($str, 'UTF-8', 'auto');}
	public function setHeaderInfo($s,$req){
		$sess = new Zend_Session_Namespace('myApp'); 
		$s->assign('topmenu', $this->getMenuInfo($req->getBaseUrl(),$sess->owner));
		$s->assign('nick_name',  $this->_db->fetchOne('SELECT nick_name FROM user WHERE uid = ? ',array( $sess->uid)));
	}
	public function getCategorys($base){
		$stt=$this->_db->prepare('select id ,name from kbn_master where kind=:kind order by id desc');
		$stt->bindValue(':kind','category');
		$stt->execute();
		$result = $stt->fetchAll();
		for($i = 0; $i < count($result); $i++) {
			$result[$i]['url'] =$base.'/bmlist?categoryid='.$result[$i]['id'];
		}	
		return $result;
	}
	public function setSiderBarInfo($s){
		$sess = new Zend_Session_Namespace('myApp');
		if($sess->uid!=NULL && $sess->uid!=''){
			$count= $this->_db->fetchOne('SELECT count(mid) AS c from recievemessage where uid=? and readflg=0 and delflg=0' ,array($sess->uid));
			$s->assign('mcount', $count);
			$sql="SELECT sendby as userid,cdat,title,readflg,mid ,'recieve' as mode FROM recievemessage WHERE uid= :uid and  delflg=0 ORDER BY cdat LIMIT 0,5";
			$stt = $this->_db->prepare($sql) ;
			$stt->bindValue(':uid', $sess->uid);
			$stt->execute();
			$result=$stt->fetchAll();
			
			for($i = 0; $i < count($result); $i++) {
				$result[$i]['url']='/'.$sess->uid.'/message?mid='.$result[$i]['mid'].'&flg='.$result[$i]['mode'].'&mode=recieve';
			}
			$s->assign('messagelist', $result);
		}
		$s->assign('list', $this->getBestBookmark());
	}
	public function setContentInfo($s){
		$sess = new Zend_Session_Namespace('myApp');
		$stt = $this->_db->prepare('SELECT m.bid,m.url,m.title,m.category,m.style,best.c,m.updated ,m.contents,kbn.name as stylenm,kbn.id as styleid, kbn1.name as categorynm ,kbn1.id as categoryid,DATE_FORMAT(m.updated, '.$this->_db->quote('%Y-%m-%d').') as formatUpd FROM bm_master as m ,kbn_master as kbn,kbn_master as kbn1,(SELECT bid,COUNT(uid) AS c FROM bm_comment group by bid  ) as best WHERE m.bid = best.bid   and m.style=kbn.id and kbn.kind=:kind and m.category=kbn1.id and kbn1.kind=:kind1 order by formatUpd desc,best.c desc,m.bid desc limit 10');
		$stt->bindValue(':kind', 'style');
		$stt->bindValue(':kind1', 'category');
		$stt->execute();
		$result = $stt->fetchAll();
		for($i = 0; $i < count($result); $i++) {
			$mainUrl=$result[$i]['url'];
			$headUrl=substr($mainUrl,0,strpos($mainUrl,'//')+2);
			$mainUrl=substr($mainUrl,strpos($mainUrl,'//')+2,strlen($mainUrl));
			$mainUrl=substr($mainUrl,0,strpos($mainUrl,'/'));
			$result[$i]['mainurl']=$mainUrl;
			$result[$i]['httpmainurl']=$headUrl.$mainUrl;
			$result[$i]['ownerflg']=$this->_db->fetchOne('select count(uid) from bm_comment where bid=? and uid=?',array($result[$i]['bid'],$sess->uid==null?'0':$sess->uid));
		}
		$result= $this->getBookmarkDetails($result);
		$s->assign('result', $result);
	}
	public function getMenuInfo($base,$ownerid) {
	    $flg=0;
		$sess = new Zend_Session_Namespace('myApp');
		$suserid=$sess->uid;
		if($suserid !=NULL && $suserid !='') {
			$flg=3;
			if($suserid == $ownerid) {
				$flg=1;
				
			}else if($this->isFriend($ownerid)){
				$flg=2;
			}
		}
		
		$stt = $this->_db->prepare("SELECT name,url,m.menuid as menuid ,cond FROM sitemenu AS m INNER JOIN topmenu AS t ON m.menuid=t.menuid WHERE t.sid=:sid and t.kbn=:kbn order by t.topid ");
		$stt->bindValue(':sid', $flg);
		$stt->bindValue(':kbn', 'main');
		$stt->execute();
		$result = $stt->fetchAll();
		for($i = 0; $i < count($result); $i++) {
			$result[$i]['turl'] =$base.$result[$i]['url'];
			if($result[$i]['cond']!='') $result[$i]['turl'] = $result[$i]['turl'].$result[$i]['cond'].$ownerid;
			if($result[$i]['name']!='社交圈管理') $result[$i]['turl'] = mb_ereg_replace('snsuser',$ownerid,$result[$i]['turl'],'mix');
			else $result[$i]['turl'] = mb_ereg_replace('snsuser',$suserid,$result[$i]['turl'],'mix');
		}	
		return $result;
	}
	public function isFriend($ownerid){
		$sess = new Zend_Session_Namespace('myApp');
		$c = $this->_db->fetchOne('select count(*) from friend where uid=? and fuid=?',array($sess->uid,$ownerid));
		return $c;
	}
	public function getIntroduce($req,$s){
		$sess = new Zend_Session_Namespace('myApp');
		$fuid=$req->getQuery('fuid');
		if($fuid!=''){
			$info = $this->_db->fetchRow("SELECT u.uid as fuid,if(u.smallimg is null,'images/noimage_member40.gif',u.smallimg) as img,u.nick_name FROM user as u  WHERE u.uid = ? ",array($fuid));
			$introinfo = $this->_db->fetchRow("SELECT relationship,contents FROM introduce_by_friend  WHERE fuid = ? and uid=?",array($fuid,$sess->uid));
			$info['relationship']=$introinfo['relationship'];
			$info['contents']=$introinfo['contents'];

		}else{
			$info=$req->getPost();
			if($info['from']=='input') $userinfo = $this->_db->fetchRow("SELECT u.uid as uid,if(u.img is null,'images/noimage_member76.gif',u.img) as img,u.nick_name FROM user as u  WHERE u.uid = ? ",array($sess->uid));
			else
				 $userinfo = $this->_db->fetchRow("SELECT u.uid as uid,if(u.smallimg is null,'images/noimage_member40.gif',u.smallimg) as img,u.nick_name FROM user as u  WHERE u.uid = ? ",array($info['fuid']));
			$info['uid']=$userinfo['uid'];
			$info['img']=$userinfo['img'];
			$info['nick_name']=$userinfo['nick_name'];
		}
		$s->assign('info', $info);
		
	}
	public function addIntroduce($req) {
		$sess = new Zend_Session_Namespace('myApp');
		$info=$req->getPost();
		$cnt = $this->_db->fetchOne('SELECT count(*) FROM introduce_by_friend WHERE fuid = ? and uid=?',array($info['fuid'],$sess->uid));
		if($cnt>0){
			$this->_db->query('UPDATE introduce_by_friend SET relationship=?,contents=?,udat=? WHERE fuid = ? and uid=?',array($info['relationship'],$info['contents'],date('Y-m-d H:i:s'),$info['fuid'],$sess->uid));
		}else{
			$this->_db->insert('introduce_by_friend',
				array(
					'fuid'   => $info['fuid'],
					'uid'   => $sess->uid,
					'relationship'   => $info['relationship'],
					'contents'   => $info['contents'],
					'udat'    => date('Y-m-d H:i:s'),
					'cdat'    => date('Y-m-d H:i:s')
				)
			);
		
		}
	}
	
	public function setProfileInfo($s,$req){
		$sess = new Zend_Session_Namespace('myApp');
		if($sess->owner==$sess->uid){
			$userid=$sess->uid;
		}else{
			$userid=$sess->owner;
		}
		$data=$this->_db->fetchRow('select * from user where uid=?',array($userid));
		$data['profile']=nl2br(htmlspecialchars($data['appeal']));
		$s->assign('data', $data);
	}
	public function getFaviconPath($req){
		$sess = new Zend_Session_Namespace('myApp');
		$iconPath='';
		$url=urldecode($req->getQuery('url'));
		$mainUrl=$url;
		$headUrl=substr($mainUrl,0,strpos($mainUrl,'//')+2);
		$mainUrl=substr($mainUrl,strpos($mainUrl,'//')+2,strlen($mainUrl));
		
		$mainUrl=substr($mainUrl,0,strpos($mainUrl,'/'));
		$url=$headUrl.$mainUrl;
		$opts = array('http' => array( 'request_fulluri' => true));
		$context = stream_context_create($opts);
		ini_set('default_socket_timeout',3000);
		$s_str = file_get_contents($url, false, $context);
		$s_str=mb_convert_encoding($s_str,'UTF-8','auto');
		$pettern='/<link.*?rel=\"shortcut.*?icon\".*?href=\"(.*?)\".*?>/mis';
		preg_match_all($pettern,$s_str,$matches);
		if(count($matches) > 0){
			$matchRes=$matches[1];
		}
		foreach($matchRes as $val){
			$val=trim($val);
			if($val!=''){
				$iconPath=$val;
				break;
			}
		}
		$this->log('orig='.$iconPath);
		if($iconPath==''){
			$iconPath=$sess->url.'/img/favicon_default.png';
		}else{
			if(strpos($iconPath,'//')){}elseif(substr($iconPath,0,1)=='/'){ $iconPath=$url.$iconPath;} else $iconPath=$url.'/'.$iconPath;
		}
		return $iconPath;
	}
	public function changeImg($info,$s){
		$sess = new Zend_Session_Namespace('myApp');
		$this->_db->query('UPDATE user set smallimg = ?,img =? ,largeimg = ?, udate =? WHERE uid = ?',array($info['smallimg'],$info['img'],$info['largeimg'],date('Y-m-d H:i:s'),$sess->uid));
		
		$s->assign('result', 1);

	}
	public function createBreviaryImage($srcImage,$path, $newName, $maxWidth=80, $maxHeight=80, $imgQuality=75) { 
		list($width, $height, $type, $attr) = getimagesize($srcImage); 
		switch ($type) { 
			case 1: $img = imagecreatefromgif($srcImage); break; 
			case 2: $img = imagecreatefromjpeg($srcImage); break; 
			case 3: $img = imagecreatefrompng($srcImage); break; 
		} 
		$scale = min($maxWidth/$width, $maxHeight/$height); 
		if($scale < 1) { 
			$newWidth = floor($scale*$width); 
			$newHeight = floor($scale*$height); 
		}else{
			$newWidth = $width; 
			$newHeight = $height; 
		}
		$newImg = imagecreatetruecolor($newWidth, $newHeight); 
		imagecopyresampled($newImg, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height); 
		/*$newName = md5(uniqid(rand(), true)); */
		switch($type) { 
			case 1: if(imagegif($newImg, $path.$newName.".gif", $imgQuality)) 
			return "$newName.gif"; break; 
			case 2: if(imagejpeg($newImg, $path.$newName.".jpg", $imgQuality)) 
			return "$newName.jpg"; break; 
			case 3: if(imagepng($newImg, $path.$newName.".png", $imgQuality)) 
			return "$newName.png"; break; 
			default: if(imagejpeg($newImg, $path.$newName.".jpg", $imgQuality)) 
			return "$newName.jpg"; break; 
		  } 
		imagedestroy($newImg); 
		 
		imagedestroy($img); 
		return false; 
	}
	private function log($str){

		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$logger = new Zend_Log($writer);
		$logger->addFilter(Zend_Log::DEBUG);
		$logger->log($str, Zend_Log::DEBUG);
	}
}