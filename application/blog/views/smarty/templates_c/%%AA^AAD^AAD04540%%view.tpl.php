<?php /* Smarty version 2.6.20, created on 2011-04-12 06:33:58
         compiled from index/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index/view.tpl', 8, false),array('modifier', 'date_format', 'index/view.tpl', 33, false),array('modifier', 'nl2br', 'index/view.tpl', 49, false),)), $this); ?>
<!--[BodyArea]-->
<div id="bodyArea">

<!--[BodyMainArea]-->
<div id="bodyMainArea">


<?php if (((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
<div class="diaryTitle clearfix">
<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
的博客</h2>
<p><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/addblog">写新博客</a></p>
</div>

<?php endif; ?>

<!--[BodyMainAreaMain]-->
<div id="bodyMainAreaMain">

<!--neighbor diary-->
<div class="diaryPaging01 clearfix">
<div class="diaryPagingLeft"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/blog">&lt;&lt; <?php echo ((is_array($_tmp=$this->_tpl_vars['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
的博客列表</a></div>
<div class="diaryPagingRight"><?php if (((is_array($_tmp=$this->_tpl_vars['bloginfo']['beforebid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != NULL && ((is_array($_tmp=$this->_tpl_vars['bloginfo']['beforebid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/viewblog?bid=<?php echo ((is_array($_tmp=$this->_tpl_vars['bloginfo']['beforebid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">前一篇博客</a><?php endif; ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php if (((is_array($_tmp=$this->_tpl_vars['bloginfo']['nextbid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != NULL && ((is_array($_tmp=$this->_tpl_vars['bloginfo']['nextbid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/viewblog?bid=<?php echo ((is_array($_tmp=$this->_tpl_vars['bloginfo']['nextbid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">后一篇博客</a><?php endif; ?></div>
</div>

<!--/neighbor diary-->

<!--[viewDiaryBox]-->
<div class="viewDiaryBox">

<div class="listDiaryTitle">
<dl>
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['bloginfo']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php if (((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?><span><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/editblog?bid=<?php echo ((is_array($_tmp=$this->_tpl_vars['bloginfo']['bid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">编辑</a></span>（<?php echo ((is_array($_tmp=$this->_tpl_vars['bloginfo']['openlevel_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
）<?php endif; ?></dt>
<dd><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['bloginfo']['cdat'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y年 %m月 %d日 %H:%M') : smarty_modifier_date_format($_tmp, '%Y年 %m月 %d日 %H:%M')); ?>
</dd>
</dl>
</div>



<div class="txtconfirmArea">

<div class="diaryPhoto">
<table summary="照片" border="0" cellpadding="0" cellspacing="0"><tbody><tr>
<?php $_from = $this->_tpl_vars['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['i']['iteration']++;
?>
<td><a href="javascript:void(0);" onclick=""><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['smallpath'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt=""></a></td>
<?php endforeach; endif; unset($_from); ?>
</tr></tbody></table>
</div>

<div id="diary_body" class="FANCYURL_EMBED"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['bloginfo']['contents'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br></div>
</div>

<ul class="actionLink01">
<li><a class="comment" href="#write">跟帖</a></li>
</ul>

<!--/viewDiaryBox--></div>
<!--/[viewDiaryBox]-->

<!--[DiaryComment]-->
<div id="diaryComment">
<a name="comment"></a>


<!--comment-->

<div class="heading03">
<h3>跟帖</h3>
</div>

<form id="delete_comment_form" name="delete_comment_form" action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/blog/index/delcomment" method="post">
<input name="max" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['commentcnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="bid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['bloginfo']['bid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<div class="commentListArea">
<ul>
<?php $_from = $this->_tpl_vars['allcomments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['i']['iteration']++;
?>
<li>
<p class="thumbnail"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/profile"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['smallimg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="007"></a></p>
<dl class="comment">
<dt><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/profile"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a><span class="date"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['cdat'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y年 %m月 %d日 %H:%M') : smarty_modifier_date_format($_tmp, '%Y年 %m月 %d日 %H:%M')); ?>
</span>
<?php if (((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['userlevel'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 4): ?><span class="operation"><input name="bcid<?php echo ((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bcid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="checkbox"></span><?php endif; ?></dt>
<dd>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['contents'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

</dd>
</dl>
</li>

<?php endforeach; endif; unset($_from); ?>

</ul>
<!--/commentListArea--></div>


<?php if (((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['userlevel'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 4): ?>
<div class="deleteCheckedComment">
<div class="formButtons01">
<ul>
<li>

<input class="formBt01" value="删除选中的跟帖" type="submit">

</li>
</ul>
</div>
</div>
<?php endif; ?>
</form>
<!--/comment-->





<div class="commentInputArea">
<a name="write"></a>
<form name="comment_form" action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/blog/index/addcomment" method="post">
<input name="bid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['bloginfo']['bid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<dl>
<dt>发表跟帖</dt>
<dd>

<textarea class="focus" name="contents" cols="40" rows="7"></textarea><br>
<span>（2000字符以内）</span>
</dd>
</dl>
<div class="formButtons01">
<p class="supplement01">请在确认了<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/rule" target="_blank">使用规则</a>中的禁止事项以及免责事项以及<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/privacy" target="_blank">个人隐私保护条款</a>后，点击下面的按钮。</p>
<ul>
<li>

<input class="formBt01" value="我要跟帖" type="submit">

</li>
</ul>
</div>
</form>
<!--/commentInputArea--></div>


<?php echo '

<style type="text/css">.bottomSpaceAd {margin-top:35px;}</style>

'; ?>

<!--/diaryComment--></div>
<!--/[DiaryComment]-->

<ul class="utilityLinks03">
<li><?php if (((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/home"><?php echo ((is_array($_tmp=$this->_tpl_vars['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
的首页</a><?php else: ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/profile"><?php echo ((is_array($_tmp=$this->_tpl_vars['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
的首页</a><?php endif; ?></li>
</ul>


<!--/bodyMainAreaMain--></div>
<!--/[BodyMainAreaMain]-->

<!--[BodyMainAreaSub]-->
<div id="bodyMainAreaSub" class="clearfix">
<?php if (((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
<div id="diaryVolume">
<h3>博客空间的使用情况</h3>
<p><em>0.0</em>MB/<span>100.0</span>MB</p>
</div>
<?php endif; ?>


<div class="diaryCalendar"><div>
<table summary="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['current_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y年 %m月 ') : smarty_modifier_date_format($_tmp, '%Y年 %m月 ')); ?>
"><caption class="clearfix"><span class="previousMonth"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/blog?num=<?php echo ((is_array($_tmp=$this->_tpl_vars['current_num']-1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" title="下一个月">&lt;</a></span><span class="calMonth"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['current_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y年 %m月 ') : smarty_modifier_date_format($_tmp, '%Y年 %m月 ')); ?>
</span>
<?php if (((is_array($_tmp=$this->_tpl_vars['current_num']+1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) <= 0): ?><span class="nextMonth"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/blog?num=<?php echo ((is_array($_tmp=$this->_tpl_vars['current_num']+1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" title="上一个月">&gt;</a></span><?php endif; ?></caption>
<tbody><tr>
<th abbr="周日" class="sun">日</th>
<th abbr="周一" class="mon">一</th>
<th abbr="周二" class="tue">二</th>
<th abbr="周三" class="wed">三</th>
<th abbr="周四" class="thu">四</th>
<th abbr="周五" class="fri">五</th>
<th abbr="周六" class="sat">六</th>
</tr>
<?php $_from = $this->_tpl_vars['calendar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['i']['iteration']++;
?>
	<?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 7 == 1): ?><tr><?php endif; ?>
	<td class="calendar-day">
		<?php if (((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0): ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

		<?php else: ?>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/blog?dat=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['timestamp'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
		<?php endif; ?>

	</td>
	<?php if (!(( ((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) % 7)): ?></tr><?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
	
</tbody></table></div></div>

<div class="newDiary">
<div class="heading">
<h3>最近的博客</h3>
</div>
<div class="contents">
<ul class="contentsListDiary">
<?php $_from = $this->_tpl_vars['newblogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/viewblog?bid=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<p class="moreLink01"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/blog">全部博客列表</a></p>
</div>
</div>


<?php if (((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
<div class="newComment">
<div class="heading">
<h3>最新的跟帖</h3>
</div>
<div class="contents">
<ul class="contentsListDiary">
<?php $_from = $this->_tpl_vars['newcomments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li class="comment">

<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/viewblog?bid=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['contents'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<br/>
<p class="seeContentsList"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listcomment">显示所有跟帖</a></p>
</div>
</div>
<?php endif; ?>


<div class="diaryHistory">
<div class="heading">
<h3>过去的博客</h3>
</div>
<div class="contents">

<dl>
<?php $_from = $this->_tpl_vars['oldblogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dt>
<dd>
<ul class="clearfix">
<?php $_from = $this->_tpl_vars['item']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mess']):
?>
<?php if (((is_array($_tmp=$this->_tpl_vars['mess']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['mess']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['mess']['fullmonth'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
的博客列表"><?php echo ((is_array($_tmp=$this->_tpl_vars['mess']['month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a></li>
<?php else: ?>
<li><?php echo ((is_array($_tmp=$this->_tpl_vars['mess']['month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul></dd>
<?php endforeach; endif; unset($_from); ?>
</dl></div></div>
<!--/bodyMainAreaSub--></div>
<!--/[BodyMainAreaSub]-->

<!--[BodyMainAreaClear]-->
<div id="bodyMainAreaClear"></div>
<!--/[BodyMainAreaClear]-->

<!--/#bodyMainArea--></div>
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