<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="robots" content="nofollow,noindex">
<title>{$smarty.session.myApp.title}</title>
<meta name="keywords" content="{$smarty.session.myApp.keywords}" />
<meta name="description" content="{$smarty.session.myApp.description}" />
<link rel="shortcut icon" href="{$base}/images/favicon.jpg"/>
<link rel="stylesheet" type="text/css" href="{$base}/css/common.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/mixicollection.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/header_classic.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/footer_classic.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/sidebar_classic.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/component_classic.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/join.css">   

<link rel="stylesheet" type="text/css" href="{$base}/css/jquery-ui-1.8.4.custom.css" media="all" />
<link rel="stylesheet" type="text/css" href="{$base}/css/validator.css" media="all" />
<script type="text/javascript" charset="utf-8" src="{$base}/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" charset="utf-8" src="{$base}/js/jquery-ui-1.8.4.custom.min.js"></script>
<script type="text/javascript" charset="utf-8" src="{$base}/js/jquery.validator-0.3.3.min.js"></script>
<script type="text/javascript" charset="utf-8" src="{$base}/js/default.js"></script>
<script type="text/javascript" charset="utf-8" src="{$base}/js/CheckUtil.js"></script>
</head>
<body class="logout">

<div id="page" class="regist">

<!--[HeaderArea]-->
<div id="headerArea">
<h1 id="pagetop" name="pagetop"><img src="{$base}/images/logo_pc_large001.gif" alt="Tobu" width="150" height="45"></h1>
<!--/headerArea--></div>
<!--/[HeaderArea]-->

<!--[BodyArea]-->
<div id="bodyArea">

<div class="registStep">
<h2 class="step01">STEP1 登录邮件地址</h2>
</div>

{if $flg==1}
	<!--[RegistrationArea]-->
	<div id="registrationArea">
	<!--[UserInputArea]-->
	<div class="userInputArea">
	<div class="heading16"><h3>邮件发送完成</h3></div>
	<div class="contents">
	<div class="inner inputEmail pics2">
	<p>邮件已经发送</p>
	<p class="sentInfo"><span>{$mail}</span></p>
	<p class="txtLarge">已经向上述邮件发送了与注册相关的信息，请确认。</p>
	<p class="supplement01">※邮件中包含的注册相关URL的有效期限是24小时。<br>如果过了有效期限，请再次输入您的邮件地址。</p>
	</div>
	<p class="supplement01">※如果没有收到相关邮件、请查看<a href="{$base}/help" target="_blank">帮助</a>。</p>
	</div>
	<!--/userInputArea--></div>
	<!--/[UserInputArea]-->
	</div>
	<!--/[RegistrationArea]-->
{else}
	<!--[RegistrationArea]-->
	<div id="registrationArea">
	<!--[UserInputArea]-->
	<div class="userInputArea">
	<div class="heading16"><h3>邮件已经注册</h3></div>
	<div class="contents">
	<div class="inner inputEmail pics2">
	<p>如下的邮件已经被注册了，请输入另一个的邮件地址，从新<a href="{$base}/register">登录</a></p>
	<p class="sentInfo"><span>{$mail}</span></p>
	</div>
	</div>
	<!--/userInputArea--></div>
	<!--/[UserInputArea]-->
	</div>
	<!--/[RegistrationArea]-->
{/if}

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