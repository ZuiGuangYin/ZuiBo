<?php /* Smarty version 2.6.20, created on 2011-04-11 12:07:11
         compiled from recieve/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'recieve/index.tpl', 10, false),array('modifier', 'date_format', 'recieve/index.tpl', 127, false),)), $this); ?>
<!--[BodyArea]-->
<div id="bodyArea" class="message">

<!--[BodyMainArea]-->
<div id="bodyMainArea">



<div class="pageTitle homeTitle005">
<?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'recieve'): ?>
<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
的收件箱</h2>
<?php endif; ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'sended'): ?>
<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
的发件箱</h2>
<?php endif; ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'draft'): ?>
<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
的草稿箱</h2>
<?php endif; ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'delitem'): ?>
<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
的垃圾箱</h2>
<?php endif; ?>
</div>

<!--[ContentsArea]-->
<div id="contentsArea" class="clearfix">

<!--[SubArea]-->
<div id="subArea">

<div id="compose" class="sideBlock">
<p><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/send/"><img 
src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/send_message002.gif" alt="写新留言"></a></p>
</div>

<div id="subMenu" class="sideBlock">
<ul>
<li <?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'recieve'): ?>class="on"<?php endif; ?> id="subMenuTop"><a class="inbox" 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/messagelist?mode=recieve">收件箱</a></li>
<li <?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'sended'): ?>class="on"<?php endif; ?>><a class="sent" 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/messagelist?mode=sended">发件箱</a></li>
<li <?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'draft'): ?>class="on"<?php endif; ?>><a class="draft" 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/messagelist?mode=draft">草稿箱</a></li>
<li <?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'delitem'): ?>class="on"<?php endif; ?> id="subMenuBottom"><a class="trash" 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/messagelist?mode=delitem">垃圾箱</a></li>
</ul>
</div>

<!--/subArea--></div>

<!--/[SubArea]-->

<!--[MainArea]-->
<div id="mainArea">

<div class="extraWrap01">

<div class="extraInner">

<div class="heading">
<h3 class="inbox">
<?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'recieve'): ?>
<h2>收件箱</h2>
<?php endif; ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'sended'): ?>
<h2>发件箱</h2>
<?php endif; ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'draft'): ?>
<h2>草稿箱</h2>
<?php endif; ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'delitem'): ?>
<h2>垃圾箱</h2>
<?php endif; ?>
</h3>
</div>

<div class="contents">
<?php if (((is_array($_tmp=$this->_tpl_vars['messagelist'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == null || ((is_array($_tmp=$this->_tpl_vars['messagelist'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ''): ?>
<!-- no message -->
<div>
<p class="nothing"><img alt="没有任何留言" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/nothing.gif"></p>
</div>


<?php else: ?>


<!--[messageListArea]-->
<div class="messageListArea">
<div class="pageNavigation01 top">
<div class="pageList02">
<ul><li rel="__display">显示1件～<?php echo ((is_array($_tmp=$this->_tpl_vars['max'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
件</li></ul>
</div>
<!--/pageNavigation01--></div>

<form name="listForm" action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/message/recieve/delete" method="POST">

<div id="messageList">

<div class="messageListHead">
<table class="tableHead">
<tbody><tr>
<th class="status">&nbsp;</th>
<th class="sender"><?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'recieve' || ((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'delitem'): ?>发件人<?php else: ?>收件人<?php endif; ?></th>
<th class="subject">件名</th>
<th class="date">日期</th>
</tr>
</tbody></table>
</div>

<div class="messageListBody">
<input type="hidden" name="mode" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
<input type="hidden" name="max" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['max'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">

<table class="tableBody">
<tbody>
<?php $_from = $this->_tpl_vars['messagelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
<?php if (((is_array($_tmp=$this->_tpl_vars['message']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0): ?>
<tr class="top " id="trid<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['mid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
<?php else: ?>
<tr class="">
<?php endif; ?>
<td class="status">
<input type="checkbox" name="mid<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['mid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'recieve' && ((is_array($_tmp=$this->_tpl_vars['message']['readflg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == '0'): ?><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/obj_yet.gif" alt="未开封"><?php else: ?><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/message_opened.gif" alt="已开封"><?php endif; ?>
</td>
<td class="sender"><?php echo ((is_array($_tmp=$this->_tpl_vars['message']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>
<td class="subject"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php echo $this->_tpl_vars['message']['url']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['message']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a></td>
<td class="date"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['message']['cdat'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M ") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M ")); ?>
<input type="hidden" name="mode<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
<a  class="delete_message_link" href="javascript:void(0);" onclick="javascript:deleteOne('<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['mid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
','<?php echo ((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
','<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
')"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/message_trash002.gif" alt="删除" title="删除"></a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>

</tbody></table>
</div>
<!--/messageList--></div>
<p class="formButtons02"><span class="selectAll"> <a id="allselect" href="javascript:void(0);" onclick="setSelect()">全选 </a> | <a id="allrelease" href="javascript:void(0);" onclick="setRelease()">解除全选</a>  | <a id="allreverse" href="javascript:void(0);" onclick="setReverse()">反选</a></span>
<?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'delitem'): ?>
<input name="remove" type="button" onclick="doDel()" class="formBt01" value="彻底删除" />&nbsp;<input type="button" onclick="doMove()" class="formBt01" value="恢复" name="move" />
<?php else: ?>
<input class="formBt01" value="删除" type="button" onclick="listChk()">
<?php endif; ?></p>
</form>

<div class="pageNavigation01 bottom">
<div class="pageList02">
<ul><li rel="__display">显示1件～<?php echo ((is_array($_tmp=$this->_tpl_vars['max'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
件</li></ul>
</div>
<!--/pageNavigation01--></div>
<!--/messageListArea--></div>
<?php endif; ?>
<!--/contents--></div>

<!--/extraInner--></div>
<!--/extraWrap01--></div>

<!--/mainArea--></div>
<!--/[MainArea]-->

<!--/contentsArea--></div>
<!--/[ContentsArea]-->

<!--/bodyMainArea--></div>
<!--/[BodyMainArea]-->

<!--[bodySub]-->


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
<!--/[help]-->

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
