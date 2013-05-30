<?php /* Smarty version 2.6.20, created on 2011-04-11 14:34:42
         compiled from index/profile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index/profile.tpl', 6, false),array('modifier', 'date_format', 'index/profile.tpl', 55, false),array('modifier', 'nl2br', 'index/profile.tpl', 251, false),)), $this); ?>
<!--[BodyArea]-->
<div id="bodyArea" class="home">

<!--[BodyMainArea]-->
<div id="bodyMainArea">
<?php if (((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
<!--[ProfileEdit]-->

<div id="profileEdit">
<div class="contents">

<form action="show_profile.pl" method="GET">
<input name="id" value="6641676" type="hidden">
<p>
<select name="level">
<option value="2" selected="selected">朋友</option>
<option value="3">朋友的朋友</option>
<option value="4">全体</option>
</select>
 
<span id="JS_profileEditAreaText" style="">能看到的个人简介。</span>
</p>
</form>

<dl>
<dt><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/profileedit_title001.gif" alt="设置更新" 
width="67" height="18"></dt>
<dd>
<ul>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/edit_profile">个人简介的更新</a></li>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/list_skin">个性界面的更新</a></li>
<li><a href="#" id="edit_profile_image_main">个人形象照片的更新</a></li>

</ul>
</dd>
</dl>

</div>

</div>
<!--/[ProfileEdit]-->
<?php endif; ?>
<!--[BodySide01]-->
<div id="bodySide01">

<!--[MyArea]-->

<div id="myArea">
<div class="profilePhoto">
<h2>个人形象照片</h2>
<div class="contents">
<p class="photo"><img alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
(<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['friendcnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo $this->_tpl_vars['profile']['largeimg']; ?>
">
<span class="moreLink01"><a href="#" id="edit_profile_image">变更个人照片</a></span></p>
<p class="name"><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
(<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['friendcnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)
<span class="loginTime">（最终登录：<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['profile']['lastlogin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M')); ?>
）</span></p>
</div>
</div>
<!--/myArea--></div>

<!--/[MyArea]-->


<!--[MymixiList]-->
<div class="bodySideSection01" id="myMixiList">
<div class="sectionHead">

<h2><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listfriend">我的社交圈</a></h2>

</div>
<div class="sectionBody">
<table class="iconListTable01">
<tbody>

<?php $_from = $this->_tpl_vars['friends']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['i']['iteration']++;
?>
<?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 3 == 1): ?><tr class=""><?php endif; ?>
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

<?php if (!(( ((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) % 3)): ?></tr><?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

</tbody>
</table>

<div class="utility02">

<p class="moreLink01"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listfriend">我的全部社交圈（<?php echo ((is_array($_tmp=$this->_tpl_vars['friendcnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
人）</a></p>

</div>

</div>
<!--/myMixiList--></div>

<!--/[MymixiList]-->




<!--[CommunityList]-->
<div class="bodySideSection01" id="communityList">
<div class="sectionHead">
<h2><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listcommunity">最新加入社群</a></h2>
</div>
<div class="sectionBody">
<table class="iconListTable01">
<tbody>

<?php $_from = $this->_tpl_vars['communities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['i']['iteration']++;
?>
<?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 3 == 1): ?><tr class=""><?php endif; ?>
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

<?php if (!(( ((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) % 3)): ?></tr><?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

</tbody></table>

<div class="utility02">
<p class="moreLink01"><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listcommunity">加入的全部社群（<?php echo ((is_array($_tmp=$this->_tpl_vars['communitycnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
）</a></p>
</div>

</div>
<!--/communityList--></div>

<!--/[CommunityList]-->




<!--ApplicationList-->

<div class="bodySideSection01" id="appliList">
<div class="sectionHead">
<h2><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listappli">加入最新游戏</a></h2>
</div>
<div class="sectionBody">
<table class="iconListTable01">
<tbody>
<?php $_from = $this->_tpl_vars['games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['i']['iteration']++;
?>
<?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 3 == 1): ?><tr class=""><?php endif; ?>

<td class="">
<?php if (((is_array($_tmp=$this->_tpl_vars['item']['aid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?>
<a title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" href="<?php echo $this->_tpl_vars['item']['url']; ?>
" style="background-image: url(&quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['img'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&quot;);"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a><span><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['account'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</span>
<?php endif; ?>
</td>

<?php if (!(( ((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) % 3)): ?></tr><?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</tbody>
</table>

<div class="utility02">
<p class="moreLink01"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listappli">全部加入游戏（<?php echo ((is_array($_tmp=$this->_tpl_vars['gamecnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
）</a></p>
</div>

</div>
<!--/appliList--></div>


<!--/ApplicationList-->


<!--/bodySide01--></div>
<!--/[BodySide01]-->

<!--[BodyContents01]-->
<div id="bodyContents01">
<?php if (((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
<ul class="friendUtilityLink">
<?php if (((is_array($_tmp=$this->_tpl_vars['profile']['friendflg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?><li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/edit_intro?fuid=<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">追加您对此朋友的介绍</a></li><?php endif; ?>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/manage_skin?csstype=<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['csstype'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">选择同样画面风格</a></li>
</ul>
<?php endif; ?>

<!--[Profile]-->
<div id="profile" class="section01">
<div class="sectionHead">
<h2>个人简介</h2>
</div>
<div class="sectionBody">
<div class="profileListTable">
<div>
<table>

<tbody><tr class="JS_showDefault listTop">
<th>姓名</th>

<td><?php echo $this->_tpl_vars['profile']['last_name']; ?>
 <?php echo $this->_tpl_vars['profile']['first_name']; ?>
</td>

</tr>

<tr class="  JS_showDefault">
<th>性別</th>

<td><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['sex_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>

</tr>

<tr style="display: none;" class="hidden">
<th>现住址</th>

<td><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['province_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['city_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>

</tr>

<tr style="display: none;" class="hidden">
<th>血型</th>

<td><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['bland_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>

</tr>

<tr style="display: none;" class="hidden">
<th>出身地</th>

<td><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['bornprovince_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['borncity_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>

</tr>

<tr style="display: none;" class="hidden">
<th>兴趣</th>

<td><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['interest'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>

</tr>

<tr style="display: none;" class="hidden">
<th>职业</th>

<td><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['occupy_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>

</tr>

<tr class="JS_showDefault listBottom">
<th>自我介绍</th>

<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['profile']['appeal'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>

</tr>

</tbody></table>
</div>
<!--/profileListTable--></div>
<p class="moreLink01"><a id="JS_show_more_profile" class="open" href="#">全部展开</a></p></div>
<!--/proflie--></div>


<!--/[Profile]-->





<!--[VoiceFeed]-->
<!--[VoiceFeed]-->
<div id="voiceFeed" class="section01">
<div class="sectionHead">
<h2>最新微博</h2>
</div>

<div class="sectionBody">
<ul class="newFeedList">

<?php $_from = $this->_tpl_vars['microblogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li class="commentRow hrule">
<div class="feedContents">
<p class="voiced">
<?php if (((is_array($_tmp=$this->_tpl_vars['item']['smallpath'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?>
<span class="voicePhoto"><img style="cursor: pointer;" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['smallpath'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="photoThumbnail" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['no'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" width="50" height="50"></span><?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['contents'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</p>
<div class="utility">
<p><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['cdat'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('date_format', true, $_tmp, ' %m月 %d日') : smarty_modifier_date_format($_tmp, ' %m月 %d日')); ?>
</p>
</div>
</div>
<!--/commentRow--></li>
<?php endforeach; endif; unset($_from); ?>

</ul>
<p class="moreLink01"><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listvoice">全部微博</a></p>
</div>

<!--/voiceFeed--></div>
<!--/[VoiceFeed]-->

<!--/[VoiceFeed]-->









<!--[PhotoFeed]-->
<div id="photoFeed" class="section01">
<div class="sectionHead">
<h2>最新照片</h2>
</div>
<div class="sectionBody">
<ul class="imageListTable01">
<?php $_from = $this->_tpl_vars['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li class="latest">
<table><tr>
<td class="image">
<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['smallpath'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" height="76"></a>
</td>
</tr></table>
<div class="info">
<span class="contentName">
<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="photo"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
</span>
<span class="date"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['cdat'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('date_format', true, $_tmp, ' %m月 %d日') : smarty_modifier_date_format($_tmp, ' %m月 %d日')); ?>
</span>
</div>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<p class="moreLink01"><a 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/picture">浏览全部照片</a></p>
</div>
<!--/photoFeed--></div>

<!--/[PhotoFeed]-->
<!--[Intro]-->
<div id="intro" class="section01">
<div class="sectionHead">
<h2>来自朋友的介绍</h2>
</div>
<div class="sectionBody">
<?php $_from = $this->_tpl_vars['introduces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<dl>
<dt>

<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['fuid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/profile"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['smallimg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" onerror="javascript:this.width=76;this.height=76;"></a>

<span>


<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['fuid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/profile"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>


</span>
</dt>
<dd>
<div>
<p>


<span class="relation">关系：<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['relationship'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span>

<span class="userInput"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['contents'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
</p>
</div>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>




<p class="moreLink01"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/showintro">查看全部朋友介绍</a></p>


</div>
<!--/intro--></div>


<!--/bodyContents01--></div>
<!--/[BodyContents01]-->

<!--/bodyMainArea--></div>
<!--/[BodyMainArea]-->

<!--[bodySub]-->
<div id="bodySub">

<!--[AdBanner]-->
<div id="adBanner">

<!--/#AdBanner--></div>
<!--/[AdBanner]-->

<!-- use_ssl -->
<div id="prContentsArea" class="bodySubSection">

<div class="heading01"><h2>推荐信息</h2></div>
<div class="prContents">

<div class="megaContents precedingMegaContents">

<script type="text/javascript" language="JavaScript">
if (typeof(impAads[0]) !='undefined' && impAads[0] !="") document.write(impAads[0]);
</script><dl><dt><a target="_blank" 
href=""><img
 alt="" 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/a0ee55bb4a4d1987c306c0732ba27103b3403ddf.gif" 
width="72" height="72"></a></dt><dd><img alt="PR" 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/pr_ico9.gif" width="21" height="9"><div><a 
target="_blank" 
href="">二手汽车<br>请赶快行动<br>过了此村没有下店♪</a></div></dd></dl>

</div>


<div class="megaContents succeedingMegaContents">

<script type="text/javascript" language="JavaScript">
if (typeof(impAads[1]) !='undefined' && impAads[1] !="") document.write(impAads[1]);
</script><dl><dt><a target="_blank" 
href=""><img
 alt="" 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/c6e3bc0fb7f9b8fe5a53080f89fd607c2fd17003.gif" 
width="72" height="72"></a></dt><dd><img alt="PR" 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/pr_ico9.gif" width="21" height="9"><div><a 
target="_blank" 
href="">使用美容肥皂<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/76.gif" alt="" 　height="16" 
class="emoji" width="16" border="0"><br>多用多益<img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/49.gif" alt="" 　height="16" class="emoji" 
width="16" border="0"><br>高品质的好商品</a></div></dd></dl>
</div>
</div>
</div>
<?php if (((is_array($_tmp=$this->_tpl_vars['profile']['newblogflg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>
<!--[ActivityFeed]-->
<div id="activityFeed" class="bodySubSection">
<div class="heading01">
<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
的最新博客</h2>
</div>
<div class="contents">
<ul class="activityFeedList01">

<?php $_from = $this->_tpl_vars['newblogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li class="diary">

<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/viewblog?bid=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<!--/activityFeed--></div>
<!--/[ActivityFeed]-->
<?php endif; ?>
<!--[help]-->
<div class="bodySubSection" id="help">
<div class="heading01">
<h2>当您遇到困难时</h2>
</div>
<div class="contents">
<ul class="helpList04">
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/help">帮助首页</a></li>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/help?mode=list&amp;category=3">使用上的注意</a></li>
<li><a id="JS_supportReportLink" 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/support_report?mode=disable">违反网站规定的通报</a></li>
</ul>
</div>
<!--/help--></div>
<!--/[help]-->

<!--/bodySub--></div>
<!--/[BodySub]-->

<!--/bodyArea--></div>
<!--/[BodyArea]-->