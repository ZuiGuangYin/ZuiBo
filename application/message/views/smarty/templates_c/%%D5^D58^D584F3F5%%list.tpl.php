<?php /* Smarty version 2.6.20, created on 2011-04-11 12:51:06
         compiled from index/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index/list.tpl', 4, false),)), $this); ?>
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
');"><a  href="javascript:void(0);"><img alt="选择" src="sentaku001-.png" width="44" height="16"></a>
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