<?php /* Smarty version 2.6.20, created on 2011-04-11 12:05:16
         compiled from index/create.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index/create.tpl', 12, false),)), $this); ?>
<!--[BodyArea]-->
<div id="bodyArea" class="message">

<!--[BodyMainArea]-->
<div id="bodyMainArea">

<div class="pageTitle homeTitle005"><h2>发送留言</h2></div>

<!--[EditList01]-->
<div style="" id="editList01">

<form name='createform' action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/sendconfirm" method="POST">
<input name="mid" type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['mid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
<input name="mode" type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
<input name="sendto" type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['sendto'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
<div class="heading02">
<h3>发送留言<em> (<span class="necessaryItem">*</span>项目是必须输入的)</em></h3>
</div>

<div class="contents">

<div class="confirm01">
<p>第一次向对方发送信息时，请注意您的语气。
<span class="supplement04">※本网站禁止用于交流以外的目的(如骚扰信息等)。 </span>
</p>
</div>

<ul class="editContents">
<li class="addressThumb">
<dl class="clearfix">

<dt>收件人<span class="necessaryItem">*</span></dt>
<dd id="selected_friend">
<?php if (((is_array($_tmp=$this->_tpl_vars['info']['sendto'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == null || ((is_array($_tmp=$this->_tpl_vars['info']['sendto'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ''): ?>
<a id="friend_selector" href="javascript:void(0);" title="由社交列表中选择" class="selectMyMixiBtn">
<img class="selectBtn" alt="由社交列表中选择" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/select_mymixi001.gif">
</a>
<?php else: ?>
<span class="thumb"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/profile"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['img'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></a></span>
<span class="nickname"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/profile"><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
<?php if (((is_array($_tmp=$this->_tpl_vars['info']['mid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == '' && ((is_array($_tmp=$this->_tpl_vars['info']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?>
<?php else: ?>
<a href="javascript:void(0);" id="friend_selector" class="switchBtn" onClick = "javascript:showSelectWindow();"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/switch002.gif" alt="再選択" /></a>
<?php endif; ?>
</span>

<?php endif; ?>
</dd>
</dl>
</li>

<li>
<dl class="clearfix">
<dt><label for="subject">件名</label><br>
<span class="supplement01">（全角100字符以内）</span></dt>
<dd><input class="" name="title" id="subject" size="50" type="text"  value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"  validate="form" require="<p>请输入件名。</p>">
</dd>
</dl>
</li>

<li class="last">
<dl class="clearfix">
<dt><label for="message">留言</label><span class="necessaryItem">*</span><br>
<span class="supplement01">（全角10000字符以内）</span></dt>
<dd id="messageInput"><textarea class="" name="contents" id="messageBody" rows="12" cols="45" validate="form" require="<p>请输入留言内容。</p>"><?php echo $this->_tpl_vars['info']['contents']; ?>
</textarea></dd>
</dl>
</li>
</ul>

<div class="formButtons01">
<ul>
<li><input value="确认输入内容" class="formBt01" type="button" onClick="checkMessage('1')"></li>
<li><input name="save" value="草稿保存" class="formBt01" type="submit" onClick="checkMessage('2')" ></li>
</ul>
</div>

<!--/contents--></div>

</form>

<!--/editList01--></div>
<!--/[EditList01]-->

<script type="text/javascript">
$("editList01").show();
</script>


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

<div style="position: absolute; top: 0pt; left: 0pt; z-index: 50; width: 100%; height: 500px; background-color: rgb(0, 0, 0); opacity: 0; display: none;" id="overlay"></div>
<div style="height: 826px; z-index: 50; opacity: 0;" id="JS_errorWindow"></div>
<div style="z-index: 51; position: absolute; left: 55px; top: 240px;" class="utilityWindow02">
<div class="editList01">
<div class="layerHeading02"><h2>我的社交圈</h2></div>
<div class="contents" id="friendContents">
<div id="friendSelectorGroupList" class="groupList">
<p>
<?php $_from = $this->_tpl_vars['grouplist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<a href="javascript:void(0);" onClick="javascript:getFriendlist('<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['gid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
');" <?php if (((is_array($_tmp=$this->_tpl_vars['curgid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['gid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>class="on"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['gname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
(<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['cnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</a> | 
<?php endforeach; endif; unset($_from); ?>
</p>
</div>
<div id="pageNavigation" class="pageNavigation01">
<div class="pageList01">
<div>[<ul class="pageNavigationList">
<?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<?php if (((is_array($_tmp=$this->_tpl_vars['item']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['currentpage'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
<li class="on"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</li>
<?php else: ?>
<li ><a  href="javascript:void(0);" onClick="javascript:nextPage('<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['gid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
','<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
');"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a></li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>]</div>
</div>
</div>
<div class="selectionView" id="friendList">
<table>
<tbody>

    <tr>
    <?php $_from = $this->_tpl_vars['friendlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?>
        <th class="" id="friend<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" scope="col">
        <div style="background-image: url(&quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['smallimg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&quot;);" class="thumbnail">
        <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
的照片</div>
        <div class="nickname"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
(<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['cnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</div>
        </th>
	<?php else: ?>
        <th class="" scope="col">
        </th>
	<?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
        

    </tr>
    <tr>
    <?php $_from = $this->_tpl_vars['friendlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?>
        <td class=" last" id="friendaction<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" onClick="javascript:selectFriend('<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
');"><a  href="javascript:void(0);"><img alt="选择" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/sentaku001-.png" width="44" height="16"></a>
        </td>
	<?php else: ?>
        <td class=" last">
        </td>
	<?php endif; ?>
   <?php endforeach; endif; unset($_from); ?>
    </tr>

</tbody>
</table>
</div>
</div><p class="formButtons01"><input class="formBt02 closeButton" value="关闭" id="closeButton" type="button"></p></div></div></div><!--/page-->
<div style="position: absolute; width: 200px; height: 100px; top: 0pt; left: 0pt; z-index: 51; background-color: rgb(255, 255, 255); display: none;"></div>