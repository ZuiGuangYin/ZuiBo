<?php /* Smarty version 2.6.20, created on 2011-04-08 09:08:11
         compiled from index/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index/edit.tpl', 10, false),)), $this); ?>
<!--[BodyArea]-->
<div id="bodyArea">


<!--[BodyMainArea]-->
<div id="bodyMainArea">
<div class="pageTitle homeTitle002"><h2>个人简介编辑</h2></div>


<form name="regForm" action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/edit_profilecom" method="post">

<div id="editList01">
<div class="heading02"><h3>具体个人简介 <em>(<span class="necessaryItem">*</span>项目是必须输入的)</em></h3></div>
<div class="contents">

<ul class="editContents">

<li>
<dl>
<dt>个人形象照片</dt>
<dd>点击<a href="#" id="edit_profile_image">此处</a>设置个人形象照片</dd>
</dl>
</li>

<li>
<dl>
<dt>姓名<span class="necessaryItem">*</span><br><span class="supplement01">(各项目全角10字符以内)</span></dt>
<dd>
<div class="editItem01">
<dl class="inputName"><dt>姓</dt><dd><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" name="last_name"></dd><dt>名</dt><dd><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" name="first_name"></dd></dl>
<ul class="editNote">
<li>※关于姓名登录请参照<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/help">此处</a></li>
</ul>
</div>
<p class="openRange"><select name="name_level"><option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['name_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 2): ?>selected="selected"<?php endif; ?>>向朋友公开</option><option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['name_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 6): ?>selected="selected"<?php endif; ?>>公开至朋友的朋友</option><option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['name_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>selected="selected"<?php endif; ?>>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>昵称<span class="necessaryItem">*</span><br><span class="supplement01">(全角10字符以内)</span></dt>
<dd>
<input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" name="nick_name" size="20">
<ul class="editNote">
<li>※画面上将显示您设置的昵称。</li>
</ul>
</dd>
</dl>
</li>

<li>
<dl>
<dt>现住址<span class="necessaryItem">*</span></dt>
<dd>
<div class="editItem01">
<input name="location_change" type="hidden"><select class="" name="province" id="province" tabindex="5"  validate="form" require="<p>请选择您所处的省直辖市。</p>"><option value="">▼省直辖市</option><?php $_from = $this->_tpl_vars['allprovinces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['province'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select>
<select class="" name="city" id="city" tabindex="6"><option value="">▼市县</option><?php $_from = $this->_tpl_vars['allcitys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['city'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select>
<ul class="editNote">
<li>※市县的选择是可选。</li>
</ul>
</div>
<p class="openRange"><select name="location_level"><option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['location_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 2): ?>selected="selected"<?php endif; ?>>向朋友公开</option><option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['location_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 6): ?>selected="selected"<?php endif; ?>>公开至朋友的朋友</option><option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['location_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>selected="selected"<?php endif; ?>>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>性別<span class="necessaryItem">*</span></dt>
<dd>
<div class="editItem01">
<ul class="checkList01">
<li><input name="sex" value="1" id="male" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['sex'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>checked="checked"<?php endif; ?> type="radio"><label for="male">男</label></li>
<li><input name="sex" value="0" id="female" type="radio" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['sex'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0): ?>checked="checked"<?php endif; ?> ><label for="female">女</label></li>
</ul>
</div>
<p class="openRange"><select name="sex_level"><option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['sex_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 2): ?>selected="selected"<?php endif; ?>>向朋友公开</option><option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['sex_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 6): ?>selected="selected"<?php endif; ?>>公开至朋友的朋友</option><option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['sex_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>selected="selected"<?php endif; ?>>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>生日<span class="necessaryItem">*</span></dt>
<dd>
<div class="editItem01">
<select name="month"><option value="">--</option><?php $_from = $this->_tpl_vars['months']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select>月
<select name="day"><option value="">--</option><?php $_from = $this->_tpl_vars['days']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select>日
</div>
<p class="openRange"><select name="birthday_level"><option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['birthday_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0): ?>selected="selected"<?php endif; ?>>非公开</option><option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['birthday_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 2): ?>selected="selected"<?php endif; ?>>向朋友公开</option><option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['birthday_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 6): ?>selected="selected"<?php endif; ?>>公开至朋友的朋友</option><option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['birthday_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>selected="selected"<?php endif; ?>>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>生辰年份<span class="necessaryItem">*</span></dt>
<dd>
<div class="editItem01"><select name="year"><option value="">----</option><?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select>年</div>
<p class="openRange"><select name="age_level"><option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['age_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0): ?>selected="selected"<?php endif; ?>>非公开</option><option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['age_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 2): ?>selected="selected"<?php endif; ?>>向朋友公开</option><option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['age_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 6): ?>selected="selected"<?php endif; ?>>公开至朋友的朋友</option><option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['age_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>selected="selected"<?php endif; ?>>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>血型</dt>
<dd><select name="blandtype"><option value="">▼选择
</option><?php $_from = $this->_tpl_vars['blands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['blandtype'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select></dd>
</dl>
</li>

<li>
<dl>
<dt>出身地</dt>
<dd>
<div class="editItem01">
<input name="hometown_change" value="" type="hidden"><select onchange="" name="bornprovince"><option value="">▼省直辖市</option><?php $_from = $this->_tpl_vars['allprovinces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['bornprovince'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select>
<select name="borncity"><option value="" selected="selected">▼市县</option><?php $_from = $this->_tpl_vars['allcitys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['borncity'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select>
</div>
<p class="openRange"><select name="bornlocation_level"><option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['bornlocation_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 2): ?>selected="selected"<?php endif; ?>>向朋友公开</option><option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['bornlocation_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 6): ?>selected="selected"<?php endif; ?>>公开至朋友的朋友</option><option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['bornlocation_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>selected="selected"<?php endif; ?>>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>兴趣<span class="necessaryItem">*</span></dt>
<dd class="hobbyList"><ul class="checkList02">
<?php $_from = $this->_tpl_vars['interestthings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><input name="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['ename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['ename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>checked="checked"<?php endif; ?> type="checkbox"><label for="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['ename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['cname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</label></li>
<?php endforeach; endif; unset($_from); ?>
</ul></dd>
</dl>
</li>

<li>
<dl>
<dt>职业</dt>
<dd>
<div class="editItem01"><select name="occupy"><option value="">▼选择</option><?php $_from = $this->_tpl_vars['occupies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['occupy'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select>
</div>
<p class="openRange"><select name="occupy_level"><option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['occupy_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 2): ?>selected="selected"<?php endif; ?>>向朋友公开</option><option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['occupy_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 6): ?>selected="selected"<?php endif; ?>>公开至朋友的朋友</option><option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['occupy_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>selected="selected"<?php endif; ?>>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>所属公司<br><span class="supplement01">(全角100字符以内)</span></dt>
<dd>
<div class="editItem01"><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="30" name="company" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['company'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
<ul class="editNote">
<li>※请输入您所在公司的名称，此项目是可选的。</li>
</ul>
</div>
<p class="openRange"><select name="company_level"><option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['company_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 2): ?>selected="selected"<?php endif; ?>>向朋友公开</option><option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['company_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 6): ?>selected="selected"<?php endif; ?>>公开至朋友的朋友</option><option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['company_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>selected="selected"<?php endif; ?>>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>毕业学校<br><span class="supplement01">(全角100字符以内)</span></dt>
<dd>
<div class="editItem01"><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="30" name="school" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['school'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
<ul class="editNote">
<li>※请输入您所毕业学校的名称，此项目是可选的。</li>
</ul>
</div>
<p class="openRange"><select name="school_level"><option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['school_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 2): ?>selected="selected"<?php endif; ?>>向朋友公开</option><option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['school_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 6): ?>selected="selected"<?php endif; ?>>公开至朋友的朋友</option><option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['school_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>selected="selected"<?php endif; ?>>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>自我介绍<span class="necessaryItem">*</span><br><span class="supplement01">(全角10000字符以内)</span></dt>
<dd>
<textarea class="" onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" rows="15" name="appeal" style="width: 548px; background-color: rgb(253, 249, 242);"><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['appeal'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea>
</dd>
</dl>
</li>

<li>
<dl>
<dt>我喜欢的<select name="fav1"><option value="" selected="selected">▼选择</option><?php $_from = $this->_tpl_vars['interests']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['fav1'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select></dt>
<dd><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="50" name="fav1_value" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav1_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"></dd>
</dl>
</li>

<li>
<dl>
<dt>我喜欢的<select name="fav2"><option value="" selected="selected">▼选择</option><?php $_from = $this->_tpl_vars['interests']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['fav2'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select></dt>
<dd><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="50" name="fav2_value" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav2_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"></dd>
</dl>
</li>

<li>
<dl>
<dt>我喜欢的<select name="fav3"><option value="" selected="selected">▼选择</option><?php $_from = $this->_tpl_vars['interests']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['fav3'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select><br><span class="supplement01">全角1000字符以内</span></dt>
<dd><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="50" name="fav3_value" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav3_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
<ul class="editNote">
<li>※选择左边的项目后。在右边写上您的喜好。</li>
</ul>
</dd>
</dl>
</li>

<li>
<div class="heading02">
<h3>检索的设置</h3>

</div>


<div class="confirm01">
<p class="supplement04">※检索的设置是非公开的。</p>
</div>
</li>


<li>
<dl>
<dt>个人简介检索</dt>
<dd>
<ul class="checkList01">
<li><input name="profile_search_flg" id="profile_search_flg" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['profile_search_flg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>checked="checked"<?php endif; ?> type="radio"><label for="searchUserLevelY">公开</label></li>
<li><input name="profile_search_flg" id="profile_search_flg" value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['profile_search_flg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0): ?>checked="checked"<?php endif; ?> type="radio"><label for="searchUserLevelN">非公开</label></li>
</ul>
<p class="editNote">※当选择【非公开】时，个人简介（包括姓名，昵称）将置为检索对象外。</p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>朋友通过邮件地址检索</dt>
<dd>
<ul class="checkList01">
<li><input name="mail_search_flg" id="mail_search_flg" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['mail_search_flg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1): ?>checked="checked"<?php endif; ?> type="radio"><label for="addFriendMailBlockN">公开</label></li>
<li><input name="mail_search_flg" id="mail_search_flg" value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['profile']['mail_search_flg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0): ?>checked="checked"<?php endif; ?> type="radio"><label for="addFriendMailBlockY">非公开</label></li>
</ul>
<p class="editNote">※当选择【非公开】时，登录的邮件地址将不会被别人检索到。</p>
</dd>
</dl>
</li>




</ul>

<input name="submit_hidden" value="main" type="hidden">
<div class="formButtons01">
<p class="rulesNote01">请在确认了<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/rules" 
target="_blank">使用规则</a>以及<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/privacy" 
target="_blank">个人隐私保护条例</a>后，并在您同意的前提下提交。如果相关内容违反了使用规则，或者国家的有关法律，我们会强行删除。</p>
<p style="padding-top: 10px;"><input value="确认输入内容" class="formBt01" type="submit"></p>
</div>
<!--/#contents-->
</div>
<!--/#editList01--></div>
<!--/[EditList01]-->
</form>

<ul class="utilityLinks03">
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/home">首页</a></li>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/config">社区设置首页</a></li>
</ul>

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