<?php /* Smarty version 2.6.20, created on 2011-03-28 15:08:31
         compiled from index/home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index/home.tpl', 16, false),)), $this); ?>
<!--[BodyArea]-->
<div id="bodyArea" class="home">

<!--[BodyMainArea02]-->
<div id="bodyMainArea02">


<!--[BodySide02]-->
<div id="bodySide02">
<!--[MyArea]-->
<div id="myArea">
<div class="profilePhoto">
<h2>个人照片</h2>
<div class="contents">

<p class="photo"><img alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
(<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['friendcnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo $this->_tpl_vars['profile']['largeimg']; ?>
">
<span class="moreLink01"><a href="#" id="edit_profile_image">变更个人照片</a></span></p>

<p class="name"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
(<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['friendcnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</span><span class="edit"><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/edit_profile" title="编辑"><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/edit003.gif" alt="编辑" width="44" height="16"></a></span></p>






</div>
<!--/profilePhoto--></div>

<!-- [Voice] -->
<!--voice-->
<div class="voice" id="voicePostMain">
<h2>ボイス</h2>
<div class="contents">
<div class="vForm">
<form method="post" action="add_voice.pl" id="voicePost" 
class="JS_ANALYSIS_EVENT" rel="name=voice.create" 
enctype="multipart/form-data">
<p id="voiceLengthError" class="error" style="display: none;"></p>
<p class="input"><textarea name="body" class="focus defaultText" 
id="voiceComment">我的所闻所想</textarea></p>
<p class="selectPhoto" style="display: none;"><input 
style="margin-right: 5px;" size="15" name="photo" class="addPhotoForm" 
type="file"></p>
<input value="89cfacf8333ec676ae55c3383cfc13dc29d12d3c" id="post_key" 
name="post_key" type="hidden"><input value="recent_voice" id="redirect" 
name="redirect" type="hidden"><input value="今どこにいる？" id="defaultValue" 
name="default_value" type="hidden">
<div class="option" id="voiceOption" style="display: none;">
<p class="addPhoto"><a id="photoLink" class="photo enableFormLink" 
href="javascript:void(0);">添附照片</a></p>
<ul class="transmit">
<li id="twitterOption" style="display: none;"><input id="postTwitter" 
name="twitter_sync" value="1" disabled="disabled" type="checkbox"><label
 for="postTwitter"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/twitter001.gif" alt="Twitter" 
title="Twitter" width="17" height="12"></label></li>
</ul>
</div>
<p class="submit"><input style="display: none;" id="voicePostSubmit" 
title="つぶやく" alt="つぶやく" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/voice_submit001.gif" value="" 
class="voicePostSubmit" type="image"></p>
<noscript><p class="submit"><input type="image" id="voicePostSubmitNoscript" title="微博" alt="微博" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/voice_submit001.gif" value="" name="voicePostSubmitNoscript" /></p></noscript>
</form>
</div>

<ul class="moreLink01">

<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/microblog">全部微博</a></li>

</ul>

</div>
<!--/voice--></div>

<!-- /[Voice] -->





<div class="myAppli">
<div class="contents nomore">
<ul class="actionList">
<li class="diary"><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/addblog" 
title="写日记">写日记</a></li>
<li class="photo"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/picture">上传照片</a></li>
</ul>
<!--[myAppli]-->
<h2><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/myappli_title001.gif" alt="我参加的网游" width="58" 
height="11"></h2>

<ul class="myAppliList">

<li style="background-image: 
url(&quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/26464_202s.jpg&quot;);"><a
 href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">星战前传</a></li>

</ul>

<ul class="moreLink01">
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">全部邀请</a></li><li><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">网游管理</a></li>
</ul>
<!--/myAppli-->
</div>
</div>






<!--/myArea--></div>
<!--/[MyArea]-->


<!--/[MyMixiList]-->
<div id="myMixiList" class="bodySideSection01">
<div class="sectionHead">
<h2><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listfriend">我的社交圈(<?php echo ((is_array($_tmp=$this->_tpl_vars['friendcnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
人)</a></h2>
</div>
<div class="sectionBody">
<table class="iconListTable01">


<tbody>
<?php $_from = $this->_tpl_vars['friends']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['i']['iteration']++;
?>
<?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 2 == 1): ?><tr class=""><?php endif; ?>
<td class="">
<?php if (((is_array($_tmp=$this->_tpl_vars['item']['fuid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?>
<a title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['fuid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/profile" 
style="background-image: 
url(&quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo $this->_tpl_vars['item']['smallimg']; ?>
&quot;);"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['friendcnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</span>
<?php endif; ?>
</td>

<?php if (!(( ((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) % 2)): ?></tr><?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</tbody></table>

<div class="utility01">
<ul><li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/managefriend" title="管理我的社交圈"><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/manage_friend003.gif" alt="管理我的社交" width="105" 
height="32"></a></li><li><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listfriend" title="显示全部朋友"><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/list_friend003.gif" alt="显示全部朋友" width="105" 
height="32"></a></li></ul>
</div>


</div>
<!--/myMixiList--></div>
<!--/[MyMixiList]-->





<!--[CommunityList]-->
<div id="communityList" class="bodySideSection01">
<div class="sectionHead">
<h2><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listcommunity">参
加的群(<?php echo ((is_array($_tmp=$this->_tpl_vars['communitycnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
件)</a></h2>
</div>

<div class="sectionBody">
<table class="iconListTable01">

<tbody>
<?php $_from = $this->_tpl_vars['communities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['i']['iteration']++;
?>
<?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 2 == 1): ?><tr class=""><?php endif; ?>
<td class="">
<?php if (((is_array($_tmp=$this->_tpl_vars['item']['cid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?>

<a title="I &#9829; CN" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/view_community?cid=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['cid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" 
style="background-image: 
url(&quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo $this->_tpl_vars['item']['smallimg']; ?>
&quot;);"><?php echo $this->_tpl_vars['item']['name']; ?>
</a><span><?php echo $this->_tpl_vars['item']['name']; ?>
(<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['membercnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</span>
<?php endif; ?>
</td>

<?php if (!(( ((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) % 2)): ?></tr><?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</tbody></table>

<div class="utility01">
<ul><li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/managecommunity" title="群管理"><img
 src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/manage_community003.gif" alt="群管理" width="105" 
height="32"></a></li><li><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listcommunity" 
title="已参加的群"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/list_community003.gif" 
alt="已参加的群" width="105" height="32"></a></li></ul>
</div>
<div class="utility02">
<p class="favLink01"><a 
href="">全部收藏群</a></p>
</div>

</div>
<!--/[CommunityList]-->

</div>


<!--/bodySide02--></div>
<!--/[BodySide02]-->
<!--[BodyContents02]-->
<div id="bodyContents02">

<!--[MixiInfo]-->

<div id="mixiInfo">
<div class="contents">
<h2>网站通知</h2>
<ul>

<li class="blueTxt ">
<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">【Tobu社区】网游的有关规定发布</a></li>

</ul>
</div>
<!--/mixiInfo--></div>
<!--/[MixiInfo]-->


<div id="beginnersHome">


<div class="section01" id="firstStep01">
<div class="sectionHead">
<h2>寻找好朋友</h2>
</div>
<div class="sectionBody">
<p class="guideArea01 guideLink">丰富您的社区生活，从增加您的社交圈开始。<span><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/beginners">查看使用方法</a></span></p>
<ul>

<li class="mymixi"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listfriend">从【朋友的朋友】中寻找新朋友</a></li>

<li class="email"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/search_friend_mail">输入朋友的邮件地址寻找</a></li>
<li class="school"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/search_school">在校友，同学中寻找</a></li>

<li class="company"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/search_company">在公司的同事中寻找</a></li>
<li class="profile"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/search_profile">通过姓名或者绰号寻找</a></li>

<li class="invite"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/invite">邀请还未加入Tobu社交的朋友</a></li>
<li class="keyword"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/search_mykeyword">通过关键字寻找</a></li>
</ul>
<p class="supplement01">发给对方的邀请邮件，请耐心等待对方回复，可能会需要花费一定的时间。</p>
</div>
<!--/firstStep01--></div>




<div class="section01" id="funMixi01">
<div class="sectionHead">
<h2>使用强大的虚拟社交工具</h2>
</div>
<div class="sectionBody">

<p class="guideArea02 guideLink">社交圈增加后，可以通过各种工具，内容进行交流。</p>

<ul class="clearfix">
<li class="diary">
<p>阅读朋友们的日记后，发表自己的想法，也可以写自己的日记。</p>
<p class="btn"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/addblog"><img
 src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/beginner_diary002.gif" alt="写日记"></a></p>
</li>
<li class="voice">
<p>可以及时了解朋友的动向，随时查看朋友的微薄。</p>
<p class="btn"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/recent_voice"><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/beginner_voice002.gif" alt="发微薄"></a></p>
</li>
<li class="photo">
<p>上传用数码相机与手机拍的照片，向朋友们公开。</p>
<p class="btn"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/picture"><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/beginner_photo001.gif" alt="上传照片"></a></p>
</li>
<li class="schedule">
<p>在日历中记录自己的日程安排，以及活动日程，向朋友们公开，方便调整彼此的日程。</p>
<p class="btn"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/show_schedule"><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/beginner_schedule001.gif" alt="编辑日程"></a></p>
</li>
<li class="appli">
<p>包含了许多可以和朋友们一起使用的工具，以及大家一起玩的网络游戏。</p>
<p class="btn"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/search_appli"><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/beginner_appli002.gif" alt="网络游戏"></a></p>
</li>
<li class="profile">
<p>包含更多的自我介绍，以及生活近况的信息，让朋友更了解自己，交到更多的新朋友。</p>
<p class="btn"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/profile"><img
 src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/beginner_profile001.gif" alt="自我介绍"></a></p>
</li>
</ul>
</div>
<!--/firstStep02--></div>









</div>
<!--/#beginners-->


<!--/bodyContents02--></div>
<!--/[BodyContents02]-->

<!--/bodyMainArea02--></div>
<!--/[BodyMainArea02]-->


<!--[bodySub02]-->
<div id="bodySub02">

<!--[AdBanner]-->
<div id="adBanner">

<!--/adBanner--></div>
<!--/[AdBanner]-->






<!--[mixiNewsArea]-->
<div id="mixiNewsArea">
<div id="member_news_box">
<div id="mixiNews" class="bodySubSection">
<div class="heading01"><h2>新闻</h2>
<ul class="utility02">
<li class="open" style="display: none;">
<a 
href="">显示</a>
</li>
<li class="close">
<a 
href="">隐藏</a>
</li>
</ul>
</div>
<div class="contents">







<ul class="newsTabs"><li><a 
href="javascript;void();"
 id="JS_newsTabMixi" class="on">Tobu新闻</a></li><li><a 
href="javascript;void();"
 id="JS_newsTabYahoo">百度新闻</a></li></ul>

<div id="JS_newsListYahoo" style="display: none;">
<ul class="newsList">

<li><a 
href="#"
 target="_blank">中央国家机关公车改革方案今年出台 </a></li>

<li><a 
href="#"
 target="_blank">福岛核电站海域放射性碘含量超标1250倍</a><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/news_new3.gif" 
alt="NEW" width="22" height="12"></li>

<li><a 
href="#"
 target="_blank">环保部官员：中国核电建设不会“因噎废食”</a><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/news_new3.gif" 
alt="NEW" width="22" height="12"></li>

<li><a 
href="#"
 target="_blank">深圳骗保障房每户罚5000元被指“太温柔”</a><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/news_camera3.gif" alt="照片" width="11" height="12"><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/news_new3.gif" alt="NEW" width="22" height="12"></li>

<li><a 
href="#"
 target="_blank">韩媒：金正恩或将于四月中旬乘飞机单独访华</a><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/news_camera3.gif" alt="照片" width="11" height="12"></li>

<li><a 
href="#"
 target="_blank">张朝阳直播婚礼拒道歉 汪小菲骂其“败类”</a><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/news_camera3.gif"
 alt="照片" width="11" height="12"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/news_new3.gif" 
alt="NEW" width="22" height="12"></li>

<li><a 
href="#"
 target="_blank">幕后推手称“跪行母亲”配合炒作 未收其分文</a></li>

</ul>
<p class="moreLink01"><a 
href="#"
 target="_blank">全部百度新闻</a></p>
</div>

<div id="JS_newsListMixi">
<ul class="newsList">

<li><a href="#">北约有望数天内全面接管对利比亚军事行动</a><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/news_new3.gif" alt="NEW" width="22"
 height="12"></li>

<li><a 
href="#">媒体称决策层初步确定个税起征点为3000元</a></li>

<li><a 
href="#">深圳对骗购保障房者罚款5千被指过轻</a><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/news_camera3.gif" alt="照片" width="11"
 height="12"></li>

<li><a 
href="#">台湾宜兰海域发生里氏4.8级地震</a><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/news_camera3.gif" alt="照片" width="11"
 height="12"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/news_new3.gif" alt="NEW" width="22" 
height="12"></li>

<li><a 
href="#">我国首架新舟600飞机投入使用</a></li>

<li><a 
href="#">业内人士称取消一二级公路收费势在必行</a></li>

<li><a 
href="#">北约驻阿富汗部队承认在空袭中误炸平民</a><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/news_camera3.gif" alt="照片" width="11" 
height="12"></li>

</ul>
<p class="moreLink01"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/list_news">全部Tobu新闻</a></p>
</div>







</div>
</div>

</div>
</div>
<!--/[mixiNewsArea]-->

<!--[CommunitySide]-->


<div class="bodySubSection" id="communityFeed">

<div class="heading01">
<h2><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/newcomments">参加群的最新留言</a></h2>
<ul class="utility02">
<li class="open" style="display: none;">
<a 
href="#">显示</a>
</li>
<li class="close">
<a 
href="#">隐藏</a>
</li>
</ul>
</div>

<div class="contents">
<ul>

<li class="event">
<p><a 
href="#">3/25
周五下午的足球赛很爽啊，以后我要经常参加！(5)</a></p>
<p>（梅西之城） <span>03月25日</span></p>
</li>

<li class="event">
<p><a 
href="#">3/23(三）
　巴萨这次要进欧冠决赛吧，现在除了梅西外，还有很多新星啊</a></p>
<p>（梅西之城） <span>03月23日</span></p>
</li>

<li class="event">
<p><a 
href="#">湖人的老矣，尚能饭否？(1)</a></p>
<p>（篮球爱好者） <span>03月21日</span></p>
</li>

</ul>
<p class="moreLink01"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/newcomments">全部信息</a></p>
</div>
</div>



<!--/[CommunitySide]-->

<!--[recommendSide]-->

<!--/[recommendSide]-->


<!--[prContentsArea]-->

<div id="prContentsArea" class="bodySubSection">

<div class="heading01"><h2>推荐信息</h2></div>
<div class="prContents">


<div class="megaContents succeedingMegaContents">



</div>

</div>

</div>


<!--/[prContentsArea]-->


<!--[KeywordRanking]-->

<div id="keywordRanking" class="bodySubSection">
<div class="heading01"><h2><a href="http://mixi.jp/keyword_ranking.pl">热门关键字 03/25</a></h2>

<ul class="utility02">
<li class="open" style="display: none;">
<a 
href="#">显示</a>
</li>
<li class="close">
<a 
href="#">隐藏</a>
</li>
</ul>

</div>
<div class="contents">
<p class="keywordLink01"><a 
href="#">核污染</a></p>
<p class="moreLink01"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/keyword_ranking">全部(前30个)</a></p>
</div>
<!--/#keywordRanking--></div>
<!--/[KeywordRanking]-->
<!--[mixiAppliArea]-->
<div id="mixiAppliArea">

<!--lPopular-->
<div class="bodySubSection lLatestOnes">
<div class="heading01"><h2><a 
href="#">流行网游，工具</a></h2>

<ul class="utility02">
<li class="open" style="display: none;">
<a 
href="">显示</a>
</li>
<li class="close">
<a 
href="">隐藏</a>
</li>
</ul>

</div>

<div class="contents"><ul>

<li><p><a class="appliName01" style="background-image: 
url(&quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/27423_117s.gif&quot;);"
 
href="#">图兰朵</a></p></li>

<li><p><a class="appliName01" style="background-image: 
url(&quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/27845_63s.gif&quot;);"
 
href="">狮子头上的王冠</a></p></li>

<li><p><a class="appliName01" style="background-image: 
url(&quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/21026_158s.jpg&quot;);"
 
href="#">青蛙王子</a></p></li>

<li><p><a class="appliName01" style="background-image: 
url(&quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/24971_20s.gif&quot;);"
 
href="#">冲浪之迷</a></p></li>

<li><p><a class="appliName01" style="background-image: 
url(&quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/18246_43s.gif&quot;);"
 
href="#">钢琴狂想曲</a></p></li>
 
</ul>
<p class="moreLink01"><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/allappli">全部流行网游，工具</a></p>
</div>
<!--/lPopular--></div>
<!--/mixiAppliArea--></div>
<!--/[mixiAppliArea]-->










<!--[CommunityRankingSide]-->


<!--[picupCommunity]-->
<div id="picupCommunity" class="bodySubSection">

<div class="heading01">
<h2><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/communitytop">热门群</a></h2>
<ul class="utility02">
<li class="open" style="display: none;">
<a 
href="">显示</a>
</li>
<li class="close">
<a 
href="">隐藏</a>
</li>
</ul>
</div>

<div class="contents">
<ul class="utility02">


<li class="clearfix">
<div class="image"><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/view_community?cid=12"><img
 src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/632229_227s.jpg" alt="门神"></a></div>
<div class="name"><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/view_community?cid=12">足球门神</a>（7965）</div>
</li>



<li><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/view_community?cid=1">梅西之城</a>（134109）</li>



<li><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/view_community?cid=3">★麻将之友★</a>（61651）</li>


</ul>
<p class="moreLink01"><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/communitytop">检索群</a></p>
</div>

<!--/#picupCommunity--></div>
<!--/[picupCommunity]-->



<!--/[CommunityRankingSide]-->



<!--[PicupReview]-->
<div id="picupReview" class="bodySubSection">

<div class="heading01">
<h2><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/search_product">热门商品</a></h2>
<ul class="utility02">
<li class="open" style="display: none;">
<a 
href="">显示</a>
</li>
<li class="close">
<a 
href="">隐藏</a></li>
</ul>
</div>

<div class="contents">
<ul>

<li>
<div class="image"><a 
href="#"><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/41EvGL1G9YL.jpg" alt="告白 【ＤＶＤ特別版】 [DVD]" 
class="pickupItemImages" height="50"></a></div>
<div class="item">
<p><a href="#">告
白 【ＤＶＤ特別版】 [DVD]</a><br>（DVD）</p>
<p><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/star40.gif" alt="40"></p>
</div>
</li>

<li>
<div class="image"><a 
href="#"><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/519iEmQUeuL.jpg" alt="天才" 
class="pickupItemImages" height="50"></a></div>
<div class="item">
<p><a href="#">天才</a><br>（DVD）</p>
<p><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/star35.gif" alt="35"></p>
</div>
</li>

<li>
<div class="image"><a 
href=""><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/61IpSCC6aXL.jpg" alt="白银帝国" 
class="pickupItemImages" height="50"></a></div>
<div class="item">
<p><a href="">白银帝国</a><br>（小说）</p>
<p><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/star30.gif" alt="30"></p>
</div>
</li>

</ul>
<p class="moreLink01"><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/search_product">检索商品</a></p>
</div>

<!--/#picupReview--></div>
<!--/[PicupReview]-->
<!--/bodySub02--></div>
<!--/[BodySub02]-->

<!--/bodyArea--></div>
<!--/[BodyArea]-->