<?php /* Smarty version 2.6.20, created on 2011-03-22 13:15:58
         compiled from index/register1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index/register1.tpl', 6, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="robots" content="nofollow,noindex">
<title><?php echo ((is_array($_tmp=$_SESSION['myApp']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</title>
<meta name="keywords" content="<?php echo ((is_array($_tmp=$_SESSION['myApp']['keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<meta name="description" content="<?php echo ((is_array($_tmp=$_SESSION['myApp']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<link rel="shortcut icon" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/favicon.jpg"/>
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/common.css">
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/mixicollection.css">
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/header_classic.css">
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/footer_classic.css">
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/sidebar_classic.css">
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/component_classic.css">
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/join.css">   

<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/jquery-ui-1.8.4.custom.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/css/validator.css" media="all" />
<script type="text/javascript" charset="utf-8" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/js/jquery-ui-1.8.4.custom.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/js/jquery.validator-0.3.3.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/js/default.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/js/CheckUtil.js"></script>
</head>
<body class="logout">

<div id="page" class="regist">

<!--[HeaderArea]-->
<div id="headerArea">
<h1 id="pagetop" name="pagetop"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/images/logo_pc_large001.gif" alt="Tobu" width="150" height="45"></h1>
<!--/headerArea--></div>
<!--/[HeaderArea]-->

<!--[BodyArea]-->
<div id="bodyArea">


<div class="registStep">
<h2 class="step02">STEP2 用户信息登录</h2>
</div>



<!--[RegistrationArea]-->
<div id="registrationArea">



<form name="regForm" id="regForm" action="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/register1com" method="post">
<div id="editList01">

<div class="heading16">
<h2>Totu社区用户个人信息登录<em> (全体项目都是必须的)</em></h2>
<p class="headingLink"><span class="LayerInfo"><a tabindex="-1" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/register_help" class="POPUP_REL_ELEMENT" target="" rel="openlevelhelp">关于公开范围 [?]</a></span></p>
</div>

<div class="contents">

<div class="confirm01">
<p>请登记作为Tobu社区会员的个人用户信息。<br>个人用户信息可以在开始使用后，进行自由修改。</p>
</div>

<ul class="editContents">
<li>
<dl>
<dt><label for="nickname">昵称</label> <span class="LayerInfo"><a tabindex="-1" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/register_help" class="POPUP_REL_ELEMENT" target="" rel="nicknamehelp">[?]</a></span></dt>
<dd><input class="" size="30" name="nickname" id="nickname" value="" tabindex="1" type="text"  validate="form" require="<p>请输入昵称。</p>">

<p class="supplement01">※请将字数限制在10个字符以内。</p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>名前 <span class="LayerInfo"><a tabindex="-1" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/register_help" class="POPUP_REL_ELEMENT" target="" rel="namehelp">[?]</a></span></dt>
<dd>
<p class="editItem01"><label for="last_name">姓</label>&nbsp;<input class="" name="last_name" id="last_name" value="" size="10" tabindex="2" type="text"  validate="form" require="<p>请输入您的姓。</p>">&nbsp;&nbsp;<label for="first_name">名</label>&nbsp;<input class="" name="first_name" id="first_name" value="" size="10" tabindex="3" type="text"  validate="form" require="<p>请输入您的名。</p>">


</p>
<p class="openRange"><select class="" name="name_level" tabindex="4"><option selected="selected" value="2">向朋友公开</option><option value="6">公开至朋友的朋友</option><option value="1">全部公开</option></select></p>
<p class="supplement01">※请将各项目字数限制在10个字符以内。</p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>現住所</dt>
<dd>
<p class="editItem01"><input name="location_change" type="hidden"><select class="" name="location_pref" id="locationPref" tabindex="5"  validate="form" require="<p>请选择您所处的省直辖市。</p>"><option value="">▼省直辖市</option><?php $_from = $this->_tpl_vars['allprovinces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select>
<select class="" name="location_area" id="locationArea" tabindex="6"><option value="">▼市县</option><?php $_from = $this->_tpl_vars['allcitys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option><?php endforeach; endif; unset($_from); ?></select>
<span style="display: none;" id="loadingGif"><img src="loading.gif" width="13" height="13"></span>


</p>
<p class="openRange"><select class="" name="location_level" tabindex="7"><option selected="selected" value="2">向朋友公开</option><option value="6">公开至朋友的朋友</option><option value="1">全部公开</option></select></p>
<p class="supplement01">※市县项目可不选择。</p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>性別</dt>
<dd>
<p class="editItem01"><input name="sex" id="sex_m" value="1" tabindex="8" type="radio" checked="checked">
<label for="sex_m">男</label>　
<input  class="" name="sex" id="sex_f" value="0" tabindex="9" type="radio">
<label for="sex_f">女</label>

</p>
<p class="openRange"><select class="" name="sex_level" tabindex="10"><option selected="selected" value="2">向朋友公开</option><option value="6">公开至朋友的朋友</option><option value="1">全部公开</option></select></p></dd>
</dl>
</li>

<li>
<dl>
<dt>生日 <span class="LayerInfo"><a tabindex="-1" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/register_help" class="POPUP_REL_ELEMENT" target="" rel="birthdayhelp">[?]</a></span></dt>
<dd>
<p class="editItem01">
<select class="" name="month" id="month" tabindex="11"  validate="form" require="<p>请选择月。</p>"><option value="">--</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option  value="10">10</option><option value="11">11</option><option value="12">12</option></select>月
<select class="" name="day" id="day" tabindex="12"  validate="form" require="<p>请选择日。</p>"><option value="">--</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option  value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>日


</p>
<p class="openRange"><select class="" name="birthday_level" tabindex="13"><option selected="selected" value="0">非公开</option><option  value="2">向朋友公开</option><option value="6">公开至朋友的朋友</option><option value="1">全部公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>出生年份 <span class="LayerInfo"><a tabindex="-1" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/register_help" class="POPUP_REL_ELEMENT" target="" rel="birthdayhelp">[?]</a></span></dt>
<dd>
<p class="editItem01">
<select class="" name="year" tabindex="14"  validate="form" require="<p>请选择您的出生年。</p>"><option value="">----</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option  value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option></select>年

</p>
<p class="openRange"><select class="" name="age_level" tabindex="15"><option selected="selected" value="0">非公开</option><option value="2">向朋友公开</option><option value="6">公开至朋友的朋友</option><option value="1">全部公开</option></select></p>
</dd>
</dl>
</li>
</ul>

<!--/contents--></div>


<div class="heading16" id="joinLoginInfo">
<h2>登录信息的登记<em> (全部项目都是必须的)</em></h2>
</div>

<div class="contents">

<div class="confirm01">
<p>以下信息都是在登录Tobu社区是需要的。可在使用开始后进行修改。</p>
</div>

<ul class="editContents">
<li>
<dl>
<dt>登录邮件地址 <span class="LayerInfo"><a tabindex="-1" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/register_help" class="POPUP_REL_ELEMENT" target="" rel="emailhelp">[?]</a></span></dt>
<dd><p><?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</p>
<input name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="hidden">
<p class="supplement01">※邮件地址是登录时必须的。</p></dd>
</dl>
</li>
<li>
<dl>
<dt><label for="password1">登录密码</label> <span class="LayerInfo"><a tabindex="-1" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/register_help" class="POPUP_REL_ELEMENT" target="" rel="passwordhelp">[?]</a></span></dt>
<dd><p class="supplement04"><strong>请任意设置自己喜欢的密码</strong></p>
<input class="" name="password1" id="password1" value="" size="35" tabindex="16" type="password"  validate="form" require="<p>请输入登录密码。</p>">

<p class="supplement01">※请设置6个字符（阿拉伯数字或英文组合）以上不易被他人推测的密码。</p>
</dd>
</dl>
</li>
<li>
<dl>
<dt><label for="password2">再次输入密码</label></dt>
<dd><input class="" name="password2" id="password2" value="" size="35" tabindex="17" type="password" validate="form" require="<p>请输入密码确认。</p>" compare="<p>输入的密码不一致。</p>" compareTo="password1" >

<p class="supplement01">※为了确认请再次输入相同的字符串。</p>
</dd>
</dl>
</li>
</ul>

<div class="formButtons01">
<p class="supplement02" style="font-size: 116%; font-weight: bold; margin: 2em 0pt;"><input name="agree" value="1" id="agree" tabindex="18" type="checkbox">
同意<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/rules" target="_blank">使用规则</a>、<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
/privacy" target="_blank">个人隐私信息保护条约</a>中的内容。<br>
<span class="supplement01" style="font-weight: normal;">※如果您同意请选中多选框。</span></p>
<input   value="确认输入信息" type="button" onclick="checkRegister()" />
</div>

<!--/contents--></div>


<!--/#editList01--></div>
</form>

<!--/registrationArea--></div>
<!--/[RegistrationArea]-->

<!--/bodyArea--></div> 
<!--/[BodyArea]--> 

<!--[FooterArea]-->
<div id="footerArea">
<div class="footerMain">
<p>&copy;2011 All Rights Reserved. &nbsp;&bull;&nbsp; Design by <a href="http://www.softechallenger.com/">王志刚工作室</a>.</p>
</div>
<!--/footerArea--></div>
<!--/[FooterArea]-->

</div><!--/page-->
</body></html>