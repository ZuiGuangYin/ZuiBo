<?php /* Smarty version 2.6.20, created on 2011-03-22 13:17:12
         compiled from index/register1com.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index/register1com.tpl', 6, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="robots" content="nofollow,noindex">
<title><?php echo ((is_array($_tmp=$_SESSION['myApp']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</title>
<meta name="keywords" content="<?php echo ((is_array($_tmp=$_SESSION['myApp']['keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<meta name="description" content="<?php echo ((is_array($_tmp=$_SESSION['myApp']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<link rel="shortcut icon" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/favicon.jpg"/>
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/common.css">
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/mixicollection.css">
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/header_classic.css">
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/footer_classic.css">
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/sidebar_classic.css">
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/component_classic.css">
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/join.css">   

<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/jquery-ui-1.8.4.custom.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/validator.css" media="all" />
<script type="text/javascript" charset="utf-8" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/js/jquery-ui-1.8.4.custom.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/js/jquery.validator-0.3.3.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/js/default.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/js/CheckUtil.js"></script>
</head>
<body class="logout">

<div id="page" class="regist">

<!--[HeaderArea]-->
<div id="headerArea">
<h1 id="pagetop" name="pagetop"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/logo_pc_large001.gif" alt="Tobu" width="150" height="45"></h1>
<!--/headerArea--></div>
<!--/[HeaderArea]-->

<!--[BodyArea]-->
<div id="bodyArea">


<div class="registStep">
<h2 class="step02">STEP2 用户信息登录</h2>
</div>


<!--[RegistrationArea]-->
<div id="registrationArea">

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/register2" method="post">
<div id="editList01">


<div class="heading16">
<h2>确认输入信息</h2>
</div>

<div class="contents">

<div class="confirm01">
<p>请确认您输入的个人信息。</p>
</div>

<ul class="editContents">
<li>
<dl>
<dt>昵称</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['nickname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dd>
</dl>
</li>

<li>
<dl>
<dt>姓名</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['info']['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 （<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['name_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
）</dd>
</dl>
</li>

<li>
<dl>
<dt>现在住址</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['location_pref_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['location_area_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
（<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['location_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
）</dd>
</dl>
</li>

<li>
<dl>
<dt>性別</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['sex_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
（<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['sex_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
）</dd>
</dl>
</li>

<li>
<dl>
<dt>生日</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
月<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
日（<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['birthday_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
）</dd>
</dl>
</li>


<li>
<dl>
<dt>出生年份</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
年（<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['age_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
）</dd>
</dl>
</li>
</ul>

<!--/contents--></div>



<div class="contents">

<div class="confirm01">
<p>请确认输入的登录相关信息。</p>
</div>

<ul class="editContents">
<li>
<dl>
<dt>登录邮件地址</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dd>
</dl>
</li>

<li>
<dl>
<dt>登录密码</dt>
<dd>********</dd>
</dl>
</li>
</ul>


<div class="formButtons01">
<ul>
<li><input  name="submit_ok" value="下一步" type="submit"></li>
<li><input  name="submit_no" value="修改" type="button" onclick="history.go(-1);"></li>
</ul>
</div>

<!--/contents--></div>

<!--/#editList01--></div>
<input name="last_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="first_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="name_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['name_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="nickname" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['nickname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="location_pref" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['location_pref'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="location_area" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['location_area'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="location_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['location_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="sex" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['sex'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="sex_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['sex_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="password1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['password1'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="password2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['password2'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="year" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="month" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="day" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="birthday_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['birthday_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="age_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['age_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
</form>

<!--/registrationArea--></div>
<!--/[RegistrationArea]-->

<!--/bodyArea--></div> 
<!--/[BodyArea]--> 

<!--[FooterArea]-->
<div id="footerArea">
<div class="footerMain">
<p>&copy;2011 All Rights Reserved. &nbsp;&bull;&nbsp; Design by <a href="http://www.softechallenger.com/">王志刚工作室</a>.</p>
</div>
<!--/footerArea--></div>
<!--/[FooterArea]-->

</div><!--/page-->
</body></html>