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
<script type="text/javascript" charset="utf-8" src="{$base}/js/default.js"></script>
<script type="text/javascript" charset="utf-8" src="{$base}/js/CheckUtil.js"></script>
{if $current == 'index/home.tpl'||$current == 'index/introduce.tpl'||$current == 'index/introducecom.tpl'}
<link rel="stylesheet" type="text/css" href="{$base}/css/common.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/header_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/footer_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/sidebar_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/component_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/home_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/home.css">  
{/if}
{if $current == 'index/profile.tpl'}
<link rel="stylesheet" type="text/css" href="{$base}/css/common.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/mixicollection.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/header_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/footer_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/sidebar_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/component_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/home_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/home.css">   
{/if}
{if $current == 'index/edit.tpl'||$current == 'index/editcom.tpl'}
<link rel="stylesheet" type="text/css" href="{$base}/css/common.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/mixicollection.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/header_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/footer_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/sidebar_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/component_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/home_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/home.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/emoji_palette.css">   
{/if}
{if $current == 'search/index.tpl'||$current == 'search/bymail.tpl'||$current == 'search/bymailcom.tpl'}
<link rel="stylesheet" type="text/css" href="{$base}/css/common.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/mixicollection.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/header_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/footer_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/sidebar_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/component_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/home_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/home.css">
{/if}
{if $current == 'search/mail.tpl'}
<link rel="stylesheet" type="text/css" href="{$base}/css/common.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/mixicollection.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/header_classic.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/footer_classic.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/sidebar_classic.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/component_classic.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/join.css">
{/if}
{if $current == 'index/visitlog.tpl' || $current == 'index/other.tpl'}
<link rel="stylesheet" type="text/css" href="{$base}/css/common.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/mixicollection.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/header_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/footer_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/sidebar_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/component_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/home_{$smarty.session.myApp.css}.css">
<link rel="stylesheet" type="text/css" href="{$base}/css/home.css">   
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
	<p>
	<ul id="function">
	<li ><a href="{$base}/search" >搜索朋友</a></li>
	<li ><a href="{$base}/invite">发出邀请</a></li>
	<li ><a href="">网游天地</a></li>
	<li ><a href="{$base}/communitytop">社群</a></li>
	</ul>
	</p>
</div>
    <div id="search">
		<ul id="top">
		<li ><a href="{$base}" >首页</a></li>
		<li ><a href="{$base}/help" >帮助</a></li>
		<li ><a href="{$base}/logout">退出</a></li>
		</ul>
	</div>
</div>
<div id="menu">
	<ul id="main">
		{foreach from=$topmenu|smarty:nodefaults item="item"}
		<li  ><a {if $item.url == NULL || $item.url == ''}id="login"{/if} {if $item.url != ''}href="{$item.turl|smarty:nodefaults}"{/if}>{$item.name}</a></li>
		{/foreach}
	</ul>
</div>
<!-- end header -->
<div id="photochange" title="上传个人照片">
<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;display:none;"></iframe>
<form name="modifyphoto" id="modifyphoto" method="post" enctype="multipart/form-data" target="upload_target" action="{$base}/default/index/imgchange">
<center>
<div id="myArea">
<div class="profilePhoto">
<p><b>您现在的个人形象照片</b></p>
<div class="contents">
<p class="photo"><img id="myimage" alt="{$profile.nick_name}" src="{$base}/{$profile.largeimg|smarty:nodefaults}"></p>
<p id="f1_upload_process">Loading...<br/><img src="{$base}/images/loader.gif" /><br/></p>
<p class="name" id="f1_upload_form"><input name="myfile" type="file" size="20"  validate="form" require="<p>请选择文件。</p>"/><br/>提示：只允许上传JPEG,GIF,PNG文件</p>
</div>
</div>
<!--/myArea--></div>
</center>
</form>
</div>
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