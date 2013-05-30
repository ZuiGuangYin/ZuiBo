<?php /* Smarty version 2.6.20, created on 2011-04-08 08:54:10
         compiled from index/editcom.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index/editcom.tpl', 23, false),array('modifier', 'nl2br', 'index/editcom.tpl', 107, false),)), $this); ?>
<!--[BodyArea]-->
<div id="bodyArea">


<!--[BodyMainArea]-->
<div id="bodyMainArea">
<div class="pageTitle homeTitle002"><h2>个人简介更新</h2></div>

<!--[EditList01]-->
<div id="editList01">
<div class="heading02"><h3>个人简介内容</h3></div>

<div class="contents">

<div class="confirm01">
<p>您确定要更新如下的个人简介内容吗？</p>
</div>

<ul class="editContents">
<li>
<dl>
<dt>姓名</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
　【<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['name_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
】</dd>
</dl>
</li>

<li>
<dl>
<dt>昵称</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dd>
</dl>
</li>

<li>
<dl>
<dt>现住址</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['province_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['city_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 　【<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['location_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
】</dd>
</dl>
</li>

<li>
<dl>
<dt>性別</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['sex_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
　【<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['sex_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
】</dd>
</dl>
</li>

<li>
<dl>
<dt>生日</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
月<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
日　【<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['birthday_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
】</dd>
</dl>
</li>

<li>
<dl>
<dt>生辰年份</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
年　【<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['age_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
】</dd>
</dl>
</li>

<li>
<dl>
<dt>血型</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['bland_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dd>
</dl>
</li>

<li>
<dl>
<dt>出身地</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['bornprovince_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['borncity_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['bornlocation_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
】</dd>
</dl>
</li>

<li>
<dl>
<dt>兴趣</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['allinterests'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dd>
</dl>
</li>

<li>
<dl>
<dt>职业</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['occupy_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
　【<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['occupy_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
】</dd>
</dl>
</li>


<li>
<dl>
<dt>所属公司</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['company'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
　<?php if (((is_array($_tmp=$this->_tpl_vars['profile']['company'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?>【<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['company_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
】<?php endif; ?></dd>
</dl>
</li>

<li>
<dl>
<dt>毕业学校</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['school'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
　<?php if (((is_array($_tmp=$this->_tpl_vars['profile']['school'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''): ?>【<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['school_level_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
】<?php endif; ?></dd>
</dl>
</li>
<li>
<dl>
<dt>自己紹介</dt>
<dd class="userInput"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['profile']['appeal'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
</dl>
</li>


<li>
<dl>
<dt>我喜欢的<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav1_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav1_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dd>
</dl>
</li>



<li>
<dl>
<dt>我喜欢的<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav2_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav2_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dd>
</dl>
</li>



<li>
<dl>
<dt>我喜欢的<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav3_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav3_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dd>
</dl>
</li>

<li>
<div class="heading02">
<h3>检索的设置</h3>

</div>

<div class="contents">
<div class="confirm01">
<p class="supplement04">※检索的设置是非公开的。</p>
</div>

</li>



<li>
<dl>
<dt>个人简介检索</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['profile_search_flg_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dd>
</dl>
</li>


<li>
<dl>
<dt>朋友通过邮件地址检索</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['mail_search_flg_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</dd>
</dl>
</li>


</ul>

<div class="formButtons01">
<ul>
<li><form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/default/index/change" method="post" class="JS_ANALYSIS_EVENT" rel="name=profile.edit">

<input name="first_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="last_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="name_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['name_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="nick_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="province" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['province'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="city" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['city'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="location_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['location_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="sex" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['sex'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="sex_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['sex_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="blandtype" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['blandtype'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="year" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="month" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="day" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="birthday_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['birthday_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="age_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['age_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="bornprovince" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['bornprovince'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="borncity" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['borncity'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="bornlocation_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['bornlocation_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<?php $_from = $this->_tpl_vars['allinterests']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<input name="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['ename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<?php endforeach; endif; unset($_from); ?>
<input name="occupy" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['occupy'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="occupy_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['occupy_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="company" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['company'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="company_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['company_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="school" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['school'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="school_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['school_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="appeal" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['appeal'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="fav1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav1'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="fav2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav2'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="fav3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav3'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="fav1_value" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav1_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="fav2_value" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav2_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="fav3_value" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav3_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="profile_search_flg" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['profile_search_flg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="mail_search_flg" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['mail_search_flg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input value="更新" class="formBt01" type="submit"></form></li>
<li><form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/edit_profile" method="post">
<input name="from" value="confirm" type="hidden">
<input name="first_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="last_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="name_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['name_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="nick_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['nick_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="province" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['province'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="city" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['city'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="location_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['location_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="sex" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['sex'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="sex_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['sex_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="blandtype" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['blandtype'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="year" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="month" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="day" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="birthday_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['birthday_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="age_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['age_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="bornprovince" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['bornprovince'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="borncity" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['borncity'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="bornlocation_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['bornlocation_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<?php $_from = $this->_tpl_vars['allinterests']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<input name="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['ename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['val'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<?php endforeach; endif; unset($_from); ?>
<input name="occupy" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['occupy'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="occupy_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['occupy_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="company" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['company'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="company_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['company_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="school" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['school'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="school_level" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['school_level'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="appeal" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['appeal'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="fav1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav1'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="fav2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav2'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="fav3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav3'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="fav1_value" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav1_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="fav2_value" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav2_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="fav3_value" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['fav3_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="profile_search_flg" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['profile_search_flg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input name="mail_search_flg" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['mail_search_flg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<input value="返回" class="formBt02" type="submit"></form></li></ul>
</div>
</div>
</div>
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