<?php /* Smarty version 2.6.20, created on 2011-04-11 15:44:29
         compiled from group/add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'group/add.tpl', 21, false),)), $this); ?>
<!--[BodyArea]-->
<div id="bodyArea" class="listFriend">
<!--[BodyMainArea]-->
<div id="bodyMainArea">

<div class="pageTitle homeTitle002"><h2>我的社交圈</h2></div>

<!--[ContentsArea]-->
<div id="contentsArea" class="clearfix" style="">


<!--[subArea]-->
<div id="subArea">


<!--[subMenu]-->
<div id="subMenu" class="sideBlock">
<!--[tagListManager]-->
<div id="tagListManager">
<!-- 铁哥们 -->
<p <?php if (((is_array($_tmp=$this->_tpl_vars['fflg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == '1'): ?>class=" on" <?php endif; ?> id="buddy" style=""><span><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listfriend?fflg=1" style="background-image: url('<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/group_nakayoshi_off_001.gif');">铁哥们(<?php echo ((is_array($_tmp=$this->_tpl_vars['fcnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</a></span></p>
<!-- /铁哥们 -->
<ul class="loaded" id="tagList">
<li <?php if (((is_array($_tmp=$this->_tpl_vars['gid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'all' && ((is_array($_tmp=$this->_tpl_vars['fflg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == '0'): ?>class=" on" <?php endif; ?>id="tagall">
<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listfriend?gid=all" style="background-image: url('<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/group_transparent001.gif');">全部(<?php echo ((is_array($_tmp=$this->_tpl_vars['allcnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</a>
</li>

<?php $_from = $this->_tpl_vars['allmygroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li <?php if (((is_array($_tmp=$this->_tpl_vars['gid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['gid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>class="sortable on" <?php else: ?> class="sortable" <?php endif; ?> id="tag1">
<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listfriend?gid=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['gid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" style="background-image: url('<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/group_transparent001.gif');"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['gname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<wbr>(<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['cnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</a>
</li>
<?php endforeach; endif; unset($_from); ?>

<li <?php if (((is_array($_tmp=$this->_tpl_vars['gid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'unclassified'): ?>class=" on" <?php endif; ?> id="tagunclassified">
<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listfriend?gid=unclassified" style="background-image: url('<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/group_transparent002.gif');">无组成员<wbr>(<?php echo ((is_array($_tmp=$this->_tpl_vars['nocnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</a>
</li>
</ul>

<!-- /[tagListManager] --></div>
<!--/[subMenu]--></div>


<div class="sideBlock">
<!--tagActionList-->
<ul id="tagActionList">
<li id="createTag" style="">
<?php if (((is_array($_tmp=$this->_tpl_vars['groupamount'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) < 5): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/addgroup?gid=<?php echo ((is_array($_tmp=$this->_tpl_vars['gid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&fflg=<?php echo ((is_array($_tmp=$this->_tpl_vars['fflg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><img
 src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/add_group001.png" alt="创建新组" width="135" 
height="30"></a><?php else: ?><img
 src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/add_group001.png" alt="创建新组" width="135" 
height="30"> <?php endif; ?></li>
<li><a href="#" id="sortTagList" style="">改变组的排列顺序</a></li>
<!--/tagActionList--></ul>
</div>

<!--/[subArea]--></div>

<!--[mainArea]-->
<div id="mainArea">
<div id="friendListArea" class="extraWrap01">

<div class="extraInner">

<div class="heading">
<form name='createform' action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/friend/group/process" method="POST">
<input name="gid" type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['gid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
<input name="members" type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['members'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">

<?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'edit'): ?>
<h3>编辑组信息</h3><br/>
<h4><img src="editmembertag_head1_001.gif" alt="STEP1 修改组名" width="175" height="14"></h4>

<?php else: ?>
<h3>创建新组</h3>
<br/>
<h4><img src="addmembertag_step1_001.gif" alt="STEP1 请输入组名。" width="332" height="14"></h4>
<?php endif; ?>

<div id="createGroupSection">
 
  <p><input <?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'edit'): ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['gname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php else: ?>value="请输入组名"<?php endif; ?>  onblur="javascript:if(this.value=='') this.value='请输入组名';" onfocus="javascript:if(this.value =='请输入组名') this.value='';" name="gname" id="tagname" size="30" class="tagname hungry" type="text" validate="form" require="<p>请输入组名。</p>"><br>
  <span class="supplement01">※例：球友、同班同学等（15汉字或者字母以内）</span></p>
</div>
<?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'edit'): ?>
<h4><img src="addmembertag_step1_002.gif" alt="STEP2 修改关于组的介绍。" width="332" height="14"></h4>
<?php else: ?>
<h4><img src="addmembertag_step1_002.gif" alt="STEP2 请输入关于组的说明。" width="332" height="14"></h4>
<?php endif; ?>

<div id="createGroupSection">
 
  <p><textarea name="introduce" id="introduce" rows="2" cols="45" class="tagname hungry" type="text" ><?php echo $this->_tpl_vars['info']['introduce']; ?>
</textarea><br>
  </p>
</div>
<?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'edit'): ?>
<h4><img src="addmembertag_step2_003.gif" alt="STEP3 重新选择组的成员后，点击【更新】按钮。" width="488" height="14"></h4>
<?php else: ?>
<h4><img src="addmembertag_step2_003.gif" alt="STEP3 选择新组的成员后，点击【创建】按钮。" width="488" height="14"></h4>
<?php endif; ?>

</div>

<div class="contents"><div style="min-height: 37px;">

<!-- 标签 -->
<div id="pageTab">




<ul><li class="focused"><a href="#friendList/view&amp;page=1&amp;member_type=all"><span>全部社交圈(<?php echo ((is_array($_tmp=$this->_tpl_vars['allcnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</span></a></li><li><a href="#friendList/view&amp;page=1&amp;member_type=selected"><span>已选中(0)</span></a></li><li><a href="#friendList/view&amp;page=1&amp;member_type=unselected"><span>未选中(<?php echo ((is_array($_tmp=$this->_tpl_vars['allcnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</span></a></li></ul>
</div>
<!-- /标签 --><ul>



<!-- pageNavigation 上 -->
<div class="pageNavigation01 top">

<div class="pageList01">



<div>[<ul class="pageNavigationList">
<?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<?php if (((is_array($_tmp=$this->_tpl_vars['item']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['currentpage'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
<li class="on"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</li>
<?php else: ?>
<li ><a  href="javascript:void(0);" onClick="javascript:nextMember('<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
');"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a></li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>]</div>
<div class="pageList02Selection">
<ul>
</ul></div>

</div>
</div>
<!-- /pageNavigation 上 -->

<div id="friendList" class="selectionView">
<table>
<tbody>
<?php $_from = $this->_tpl_vars['friendlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['rowitem']):
        $this->_foreach['i']['iteration']++;
?>
	<?php $_from = $this->_tpl_vars['rowitem']['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['i']['iteration']++;
?>
		<?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 3 == 1): ?><tr><?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['item']['flg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0): ?>
		<th scope="col" id="friend<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 3 == 0): ?>class="rightmost selected"<?php else: ?>class="selected" <?php endif; ?>><div class="thumbnail" style="background-image: url(&quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['img'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&quot;);"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
的照片</div><div class="nickname"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
(<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['cnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</div></th>
		<?php else: ?>
		<th scope="col" id="friend<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 3 == 0): ?>class="rightmost "<?php else: ?> <?php endif; ?>><div class="thumbnail" style="background-image: url(&quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['img'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&quot;);"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
的照片</div><div class="nickname"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
(<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['cnt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)</div></th>
		<?php endif; ?>
		<?php else: ?>
			<th <?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 3 == 0): ?>class="rightmost" <?php endif; ?>>&nbsp;</th>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 3 == 0): ?></tr><?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php $_from = $this->_tpl_vars['rowitem']['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['i']['iteration']++;
?>
		<?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 3 == 1): ?><tr><?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['item']['flg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0): ?>
		<td headers="friend101514" id="friendaction<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 3 == 0): ?>class="rightmost selected" <?php else: ?> class="selected"<?php endif; ?>><a href="#" class="select" onclick="cancelMember('<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
')"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/hatsusu001-.png" alt="取消" width="44" height="16"></a></td>
		<?php else: ?>
		<td headers="friend101514" id="friendaction<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 3 == 0): ?>class="rightmost"  <?php endif; ?>><a href="#" class="select" onclick="selectMember('<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
')"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/sentaku001-.png" alt="选择" width="44" height="16"></a></td>
		<?php endif; ?>
		<?php else: ?>
		<td <?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 3 == 0): ?>class="rightmost" <?php endif; ?>>&nbsp;</td>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_foreach['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 3 == 0): ?></tr><?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
</tbody></table>
</div>

<div id="addMemberTagButton">
<input class="formBt01" <?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'edit'): ?> value="更新"<?php else: ?>value="创建"<?php endif; ?> type="button" onclick="createGroup()">
<?php if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'edit'): ?><input class="formBt01"  value="删除组"  type="button" onclick="deleteGroup()"><?php endif; ?>
<input class="formBt02" value="取消" type="button" onclick="window.location.href='<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/<?php echo ((is_array($_tmp=$_SESSION['myApp']['uid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/listfriend?gid=<?php echo ((is_array($_tmp=$this->_tpl_vars['gid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&fflg=<?php echo ((is_array($_tmp=$this->_tpl_vars['fflg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'">
<a href="#" id="expander" style="display: none;"><img src="addmembertag_expand_001.gif" alt="" width="18" height="18"></a>
</div>
</form>
<ul id="footNote">
<li><img src="addmembertag_note1_002.gif" alt="成员被选中后背景将改变颜色。" width="227" height="10"></li>
<li><img src="addmembertag_note2_002.gif" alt="点击已经被选中的成员时，解除选择状态。" width="312" height="10"></li>
</ul>

</ul></div><!--/contents--></div>

<!--/.extraInner--></div>


<!--/friendListArea--></div>
<!--/[mainArea]--></div>




<!--/[contentsArea]--></div>





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