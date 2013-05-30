<?php /* Smarty version 2.6.20, created on 2011-03-29 09:14:04
         compiled from search/bymail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'search/bymail.tpl', 11, false),)), $this); ?>
<!--[BodyArea]-->

<div id="bodyArea" class="addFriend">

<!--[BodyMainArea]-->
<div id="bodyMainArea">


<div class="pageTitle homeTitle002"><h2>将朋友追加到我的社交圈中</h2></div>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/addfriendbymailcom" method="post" name="messageForm">
<input type="hidden" name="mail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['mail'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<!--[EditList01]-->
<div id="editList01">

<div class="heading02"><h3>追加朋友</h3></div>

<div class="contents">

<div class="confirm01">
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['mail'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 是您的旧识吗？<br />
如果是，可以给其留言告诉对方您已经将其追加到您的社交圈了。</p>
</div>



<ul class="editContents">
<li>
<dl>
<dt>朋友的邮件地址</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['mail'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dd>
</dl>
</li>

<li>

<dl>
<dt><label for="message">留言（任意）</label></dt>
<dd>
<textarea class="open" name="message" rows="5" cols="45"><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['message'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea>
</dd>
</dl>
</li>




<li>
<dl>

<dt>过去博客阅览设置</dt>
<dd class="viewPastDiary">
<p><select name="refuse_type" onchange="showRefuseArea(this);">
<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['info']['refuse_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0): ?>selected="selected"<?php endif; ?>>可以浏览过去的博客</option><option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['info']['refuse_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>selected="selected"<?php endif; ?>>不可以浏览过去的博客</option><option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['info']['refuse_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 2): ?>selected="selected"<?php endif; ?>>可浏览指定日期以后的博客</option>
</select></p>
<p style="display:none" id="refuse_date_area"><select name="refuse_year" class="refuse_year">
<?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['info']['refuse_year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?>
</select>　年<select name="refuse_month" class="refuse_month">
<?php $_from = $this->_tpl_vars['months']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['info']['refuse_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select>　月以后的博客</p>


</dd>
</dl>
</li>


</ul>
<div class="formButtons01">
<input type="submit" value="确认内容" class="formBt01" />
</div>
<input type=hidden name=submit value=main>
<input type=hidden name=post_key value="89cfacf8333ec676ae55c3383cfc13dc29d12d3c">
<input type=hidden name=email value="attokyo@hotmail.com" />

<!--/contents--></div>

<!--/editList01--></div>
<!--/[EditList01]-->
</form>


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
<!--[ActivityFeed]-->
<div id="activityFeed" class="bodySubSection">
<div class="heading01">
<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
最近的博客</h2>
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