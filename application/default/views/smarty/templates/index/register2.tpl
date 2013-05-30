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



<form name="regForm" id="regForm" action="{$base}/register2com" method="post">
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
<dd><input class="" size="30" name="mobile" id="mobile" value="" tabindex="1" type="text"  validate="form" require="<p>请输入手机号码。</p>"  {literal}regular="<p>请检查输入的手机号码形式。</p><p>例）13951888888</p>" validExpress="1[0-9]{10}" />{/literal}

</dd>
</dl>
</li>

</ul>


<div class="formButtons01">
<ul>
<li><input  name="submit_ok" value="确认手机号码" type="button" onclick="checkMobile()" ></li>
<li><input  name="submit_no" value="结束注册" type="button" onclick="endRegister('{$base}/home')" ></li>
</ul>
</div>
<!--/contents--></div>
<input name="email" value="{$email}" type="hidden">

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