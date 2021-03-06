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
<h2 class="step03">STEP3 登录手机号码</h2>
</div>



<!--[RegistrationArea]-->
<div id="registrationArea">

<!--[UserInputArea]-->
<div class="userInputArea">
<div class="heading16"><h3>手机号码确认</h3></div>
<div class="contents">
<div class="inner inputEmail pics3">
<p>已经向您登记的如下手机号码里发送了短消息。</p>
<p class="sentInfo"><span>{$mobile}</span></p>
<p class="txtLarge">请确认上述手机号码是否接受到了消息。</p>
<p class="supplement01">请连接短信正文的URL，完成手机网站的登录。<br>
如果您完成了手机登录，请点击如下的【结束注册】按钮，您已经可以正常使用本网站了。</p>
<p class="toRight supplement01">※没有收到消息的时，请查看<a href="{$base}/register_help">此处</a></p>
<form  name="regForm" id="regForm" action="" method="get">
<p class="formButtons01">
<input  name="submit_no" value="结束注册" type="button" onclick="endRegister('{$base}/home')" ></p>
</form>
</div>
</div>
<!--/userInputArea--></div>
<!--/[UserInputArea]-->

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