<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css"/>
<meta http-equiv="Content-Script-Type" content="text/javascript"/>
<title>{$smarty.session.myApp.title}</title>
<meta name="keywords" content="{$smarty.session.myApp.keywords}" />
<meta name="description" content="{$smarty.session.myApp.description}" />
<link rel="shortcut icon" href="{$base}/images/favicon.jpg"/>
<link rel="stylesheet" type="text/css" href="{$base}/css/default.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/jquery-ui-1.8.4.custom.css" media="all" />
<link rel="stylesheet" type="text/css" href="{$base}/css/validator.css" media="all" />
<script type="text/javascript" charset="utf-8" src="{$base}/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" charset="utf-8" src="{$base}/js/jquery-ui-1.8.4.custom.min.js"></script>
<script type="text/javascript" charset="utf-8" src="{$base}/js/jquery.validator-0.3.3.min.js"></script>
{if $current == 'index/index.tpl'}
<script type="text/javascript" charset="utf-8" src="{$base}/js/home.js"></script>
{else}
<script type="text/javascript" charset="utf-8" src="{$base}/js/default.js"></script>
{/if}
<script type="text/javascript" charset="utf-8" src="{$base}/js/CheckUtil.js"></script>
{if $current == 'index/index.tpl' || $current == 'index/about.tpl' || $current == 'index/register.tpl' || $current == 'index/registercom.tpl' || $current == 'index/register1.tpl' || $current == 'index/register1com.tpl' || $current == 'index/register2.tpl'  || $current == 'index/register2com.tpl'}
<link rel="stylesheet" type="text/css" href="{$base}/css/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="{$base}/css/mixicollection.css" media="all" />
<link rel="stylesheet" type="text/css" href="{$base}/css/header_classic.css" media="all" />
<link rel="stylesheet" type="text/css" href="{$base}/css/footer_classic.css" media="all" />
<link rel="stylesheet" type="text/css" href="{$base}/css/sidebar_classic.css" media="all" />
<link rel="stylesheet" type="text/css" href="{$base}/css/component_classic.css" media="all" />
<link rel="stylesheet" type="text/css" href="{$base}/css/join.css" media="all" />
{/if}


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
		{foreach from=$topmenu|smarty:nodefaults item="item"}
		<li  ><a {if $item.name == '我要登录'}id="login"{/if} {if $item.url != ''}href="{$item.turl|smarty:nodefaults}"{/if}>{$item.name}</a></li>
		{/foreach}
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

{include file=$current}
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<div id="footer">
	<p>&copy;2011 All Rights Reserved. &nbsp;&bull;&nbsp; Design by <a href="http://www.softechallenger.com/">王志刚工作室</a>.</p>
</div>
</body>