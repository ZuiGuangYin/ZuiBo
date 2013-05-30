<?php /* Smarty version 2.6.20, created on 2011-04-07 13:20:43
         compiled from master.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'master.tpl', 7, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css"/>
<meta http-equiv="Content-Script-Type" content="text/javascript"/>
<title><?php echo ((is_array($_tmp=$_SESSION['myApp']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</title>
<meta name="keywords" content="<?php echo ((is_array($_tmp=$_SESSION['myApp']['keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<meta name="description" content="<?php echo ((is_array($_tmp=$_SESSION['myApp']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<link rel="shortcut icon" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/favicon.jpg"/>
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/default.css">
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
<?php if (((is_array($_tmp=$this->_tpl_vars['current'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'index/index.tpl'): ?>
<script type="text/javascript" charset="utf-8" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/js/home.js"></script>
<?php else: ?>
<script type="text/javascript" charset="utf-8" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/js/default.js"></script>
<?php endif; ?>
<script type="text/javascript" charset="utf-8" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/js/CheckUtil.js"></script>
<?php if (((is_array($_tmp=$this->_tpl_vars['current'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'index/index.tpl' || ((is_array($_tmp=$this->_tpl_vars['current'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'index/about.tpl' || ((is_array($_tmp=$this->_tpl_vars['current'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'index/register.tpl' || ((is_array($_tmp=$this->_tpl_vars['current'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'index/registercom.tpl' || ((is_array($_tmp=$this->_tpl_vars['current'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'index/register1.tpl' || ((is_array($_tmp=$this->_tpl_vars['current'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'index/register1com.tpl' || ((is_array($_tmp=$this->_tpl_vars['current'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'index/register2.tpl' || ((is_array($_tmp=$this->_tpl_vars['current'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'index/register2com.tpl'): ?>
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/mixicollection.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/header_classic.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/footer_classic.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/sidebar_classic.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/component_classic.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/join.css" media="all" />
<?php endif; ?>


<script language="JavaScript">
<!--

//-->
</script>
</head>

</html>
<body>
<!-- start header -->
<div id="header">
<div id="logo">
	<h1><a href="#">Tobu社区</a></h1>

</div>

</div>
<div id="menu">
	<ul id="main">
		<?php $_from = $this->_tpl_vars['topmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<li  ><a <?php if (((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == '我要登录'): ?>id="login"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['item']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?>href="<?php echo $this->_tpl_vars['item']['turl']; ?>
"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>
<div id="logindialog" title="快速登录">
<p>请输入邮件地址以及密码。<br/>如果您还没有注册，请点击注册按钮，快速注册。</p>
<form name="loginform" id="loginform" method="post" action="" >
<fieldset>
<table width="280" border="0" cellspacing="0" cellpadding="0">
	<tr>
	  <td width="75"><label>邮件地址：</label></td>
	  <td width="205" align="left"><input type="text" id="mail" name="mail" value=""  maxlength="40" validate="loginform" require="<p>请输入邮件地址。</p>"/></td>
	</tr>
	<tr>
	  <td>密码：</td>
	  <td align="left"><input type="password" id="passwd" name="passwd" value=""  maxlength="32" validate="loginform" require="<p>请输入密码。</p>" /></td>
	</tr>
	<tr>
	  <td></td>
	  <td align="left"><input type="checkbox" id="persistent" name="persistent" value="1" checked/>保持登录状态</td>
	</tr>
	<tr>
	  <td colspan="2"><p id="loginerrors"></p></td>
	</tr>
</table>
</fieldset>
</form>
</div>
<!-- end header -->
<!-- start page -->
<div id="page">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['current'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<div id="footer">
	<p>&copy;2011 All Rights Reserved. &nbsp;&bull;&nbsp; Design by <a href="http://www.softechallenger.com/">王志刚工作室</a>.</p>
</div>
</body>