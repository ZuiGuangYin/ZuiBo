<?php /* Smarty version 2.6.20, created on 2011-03-30 02:53:49
         compiled from search/bymailcom.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'search/bymailcom.tpl', 30, false),array('modifier', 'nl2br', 'search/bymailcom.tpl', 38, false),)), $this); ?>
<!--[BodyArea]-->
<div id="bodyArea" class="addFriend">

<!--[BodyMainArea]-->
<div id="bodyMainArea">



<div class="pageTitle homeTitle002">

<h2>追加朋友</h2></div>

<!--[EditList01]-->
<div id="editList01">

<div class="heading02"><h3>内容确认</h3></div>

<div class="contents">

<div class="confirm01">
<p>请仔细确认您输入的信息。</p>
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
<dt>留言内容</dt>
<dd>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['info']['message'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

</dd>
</dl>
</li>




<li>
<dl>
<dt>过去博客阅览设置</dt>

<dd class="viewPastDiary"><?php if (((is_array($_tmp=$this->_tpl_vars['info']['refuse_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 2): ?>允许浏览<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['refuse_year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
年<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['refuse_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
月以后的博客 <?php else: ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['info']['refuse_type_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php endif; ?></dd>


</dl>
</li>


</ul>


<div class="formButtons01">
<p class="supplement01 longLine">请在确认<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/agreement" target="_blank">同意条款（※必读）</a>后，再送信。您送出的信息可能要被审查。<br />
※本网站禁止用于交流以外的目的(如骚扰信息等)。</p>

<ul>
<li>
<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/mailadd" method="post">
<input type="hidden" name="message" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['message'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<input type="hidden" name="refuse_type" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['refuse_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<input type="hidden" name="refuse_year" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['refuse_year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<input type="hidden" name="refuse_month" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['refuse_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<input type="hidden" name="mail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['mail'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<input type="submit" value="同意并提交" class="formBt01" />
</form>
</li>
<li>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/addfriendbymail" method="post">
<input type="hidden" name="message" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['message'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<input type="hidden" name="refuse_type" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['refuse_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<input type="hidden" name="refuse_year" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['refuse_year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<input type="hidden" name="refuse_month" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['refuse_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<input type="hidden" name="mail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['mail'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<input type="submit" value="返回" class="formBt02" />
</form>
</li>
</ul>
</div>

<!--/contents--></div>

<!--/editList01--></div>
<!--/[EditList01]-->



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