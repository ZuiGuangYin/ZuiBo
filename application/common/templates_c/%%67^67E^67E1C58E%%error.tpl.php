<?php /* Smarty version 2.6.19, created on 2008-09-26 15:25:21
         compiled from error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'error.tpl', 7, false),)), $this); ?>
<script type="text/javascript">
<!--
var errWin = window.open("","Error","width=350, height=150");
errWin.document.open("text/html");
errWin.document.write("<b><u>エラーメッセージ</u></b>");
errWin.document.write("<div style='color:Red'><pre>");
<?php $_from = ((is_array($_tmp=$this->_tpl_vars['errors'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
	errWin.document.write("<?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<br />");
<?php endforeach; endif; unset($_from); ?>
errWin.document.write("</pre></div>");
errWin.document.close();
history.back();
-->
</script>