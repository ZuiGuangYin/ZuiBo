<?php /* Smarty version 2.6.20, created on 2011-03-22 13:17:17
         compiled from index/register2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index/register2.tpl', 6, false),)), $this); ?>
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
<h2 class="step03">STEP3 登录手机号码</h2>
</div>



<!--[RegistrationArea]-->
<div id="registrationArea">



<form name="regForm" id="regForm" action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/register2com" method="post">
<div id="editList01">

<div class="heading16">
<h2>登录手机号码传送手机使用方式的URL</h2>
</div>

<div class="contents">

<div class="confirm01">
<p>最后请请登记手机号码，我们会向您的手机发送URL，方便您在手机等手持终端设备上使用Tobu社区的有关应用。<br>如果您暂时不准备在手机上使用本网站，可以直接点击【结束注册】按钮。</p>
</div>

<ul class="editContents">
<li>
<dl>
<dt><label for="nickname">手机号码</label> </dt>
<dd><input class="" size="30" name="mobile" id="mobile" value="" tabindex="1" type="text"  validate="form" require="<p>请输入手机号码。</p>"  <?php echo 'regular="<p>请检查输入的手机号码形式。</p><p>例）13951888888</p>" validExpress="1[0-9]{10}" />'; ?>


</dd>
</dl>
</li>

</ul>


<div class="formButtons01">
<ul>
<li><input  name="submit_ok" value="确认手机号码" type="button" onclick="checkMobile()" ></li>
<li><input  name="submit_no" value="结束注册" type="button" onclick="endRegister('<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/home')" ></li>
</ul>
</div>
<!--/contents--></div>
<input name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">

<!--/#editList01--></div>
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