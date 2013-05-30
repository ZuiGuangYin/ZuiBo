<?php /* Smarty version 2.6.20, created on 2011-02-21 08:34:54
         compiled from index/imgchange.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index/imgchange.tpl', 4, false),)), $this); ?>
<?php echo '
<script language="javascript" type="text/javascript">
'; ?>

window.top.window.stopUpload('<?php echo ((is_array($_tmp=$this->_tpl_vars['result'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
','<?php echo ((is_array($_tmp=$this->_tpl_vars['img'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
');
<?php echo '</script> 
'; ?>