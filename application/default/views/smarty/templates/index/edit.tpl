<!--[BodyArea]-->
<div id="bodyArea">


<!--[BodyMainArea]-->
<div id="bodyMainArea">
<div class="pageTitle homeTitle002"><h2>个人简介编辑</h2></div>


<form name="regForm" action="{$base}/edit_profilecom" method="post">

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
<dl class="inputName"><dt>姓</dt><dd><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="10" value="{$profile.last_name}" name="last_name"></dd><dt>名</dt><dd><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="10" value="{$profile.first_name}" name="first_name"></dd></dl>
<ul class="editNote">
<li>※关于姓名登录请参照<a href="{$base}/help">此处</a></li>
</ul>
</div>
<p class="openRange"><select name="name_level"><option value="2" {if $profile.name_level==2}selected="selected"{/if}>向朋友公开</option><option value="6" {if $profile.name_level==6}selected="selected"{/if}>公开至朋友的朋友</option><option value="1" {if $profile.name_level==1}selected="selected"{/if}>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>昵称<span class="necessaryItem">*</span><br><span class="supplement01">(全角10字符以内)</span></dt>
<dd>
<input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" value="{$profile.nick_name}" name="nick_name" size="20">
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
<input name="location_change" type="hidden"><select class="" name="province" id="province" tabindex="5"  validate="form" require="<p>请选择您所处的省直辖市。</p>"><option value="">▼省直辖市</option>{foreach from=$allprovinces|smarty:nodefaults item="item"}<option value="{$item.id}" {if $profile.province==$item.id}selected="selected"{/if}>{$item.name}</option>{/foreach}</select>
<select class="" name="city" id="city" tabindex="6"><option value="">▼市县</option>{foreach from=$allcitys|smarty:nodefaults item="item"}<option value="{$item.id}" {if $profile.city==$item.id}selected="selected"{/if}>{$item.name}</option>{/foreach}</select>
<ul class="editNote">
<li>※市县的选择是可选。</li>
</ul>
</div>
<p class="openRange"><select name="location_level"><option value="2" {if $profile.location_level==2}selected="selected"{/if}>向朋友公开</option><option value="6" {if $profile.location_level==6}selected="selected"{/if}>公开至朋友的朋友</option><option value="1" {if $profile.location_level==1}selected="selected"{/if}>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>性別<span class="necessaryItem">*</span></dt>
<dd>
<div class="editItem01">
<ul class="checkList01">
<li><input name="sex" value="1" id="male" {if $profile.sex==1}checked="checked"{/if} type="radio"><label for="male">男</label></li>
<li><input name="sex" value="0" id="female" type="radio" {if $profile.sex==0}checked="checked"{/if} ><label for="female">女</label></li>
</ul>
</div>
<p class="openRange"><select name="sex_level"><option value="2" {if $profile.sex_level==2}selected="selected"{/if}>向朋友公开</option><option value="6" {if $profile.sex_level==6}selected="selected"{/if}>公开至朋友的朋友</option><option value="1" {if $profile.sex_level==1}selected="selected"{/if}>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>生日<span class="necessaryItem">*</span></dt>
<dd>
<div class="editItem01">
<select name="month"><option value="">--</option>{foreach from=$months|smarty:nodefaults item="item"}<option value="{$item.val}" {if $profile.month==$item.val}selected="selected"{/if}>{$item.val}</option>{/foreach}</select>月
<select name="day"><option value="">--</option>{foreach from=$days|smarty:nodefaults item="item"}<option value="{$item.val}" {if $profile.day==$item.val}selected="selected"{/if}>{$item.val}</option>{/foreach}</select>日
</div>
<p class="openRange"><select name="birthday_level"><option value="0" {if $profile.birthday_level==0}selected="selected"{/if}>非公开</option><option value="2" {if $profile.birthday_level==2}selected="selected"{/if}>向朋友公开</option><option value="6" {if $profile.birthday_level==6}selected="selected"{/if}>公开至朋友的朋友</option><option value="1" {if $profile.birthday_level==1}selected="selected"{/if}>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>生辰年份<span class="necessaryItem">*</span></dt>
<dd>
<div class="editItem01"><select name="year"><option value="">----</option>{foreach from=$years|smarty:nodefaults item="item"}<option value="{$item.val}" {if $profile.year==$item.val}selected="selected"{/if}>{$item.val}</option>{/foreach}</select>年</div>
<p class="openRange"><select name="age_level"><option value="0" {if $profile.age_level==0}selected="selected"{/if}>非公开</option><option value="2" {if $profile.age_level==2}selected="selected"{/if}>向朋友公开</option><option value="6" {if $profile.age_level==6}selected="selected"{/if}>公开至朋友的朋友</option><option value="1" {if $profile.age_level==1}selected="selected"{/if}>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>血型</dt>
<dd><select name="blandtype"><option value="">▼选择
</option>{foreach from=$blands|smarty:nodefaults item="item"}<option value="{$item.id}" {if $profile.blandtype==$item.id}selected="selected"{/if}>{$item.name}</option>{/foreach}</select></dd>
</dl>
</li>

<li>
<dl>
<dt>出身地</dt>
<dd>
<div class="editItem01">
<input name="hometown_change" value="" type="hidden"><select onchange="" name="bornprovince"><option value="">▼省直辖市</option>{foreach from=$allprovinces|smarty:nodefaults item="item"}<option value="{$item.id}" {if $profile.bornprovince==$item.id}selected="selected"{/if}>{$item.name}</option>{/foreach}</select>
<select name="borncity"><option value="" selected="selected">▼市县</option>{foreach from=$allcitys|smarty:nodefaults item="item"}<option value="{$item.id}" {if $profile.borncity==$item.id}selected="selected"{/if}>{$item.name}</option>{/foreach}</select>
</div>
<p class="openRange"><select name="bornlocation_level"><option value="2" {if $profile.bornlocation_level==2}selected="selected"{/if}>向朋友公开</option><option value="6" {if $profile.bornlocation_level==6}selected="selected"{/if}>公开至朋友的朋友</option><option value="1" {if $profile.bornlocation_level==1}selected="selected"{/if}>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>兴趣<span class="necessaryItem">*</span></dt>
<dd class="hobbyList"><ul class="checkList02">
{foreach from=$interestthings|smarty:nodefaults item="item"}
<li><input name="{$item.ename}" id="{$item.ename}" value="1" {if $item.val==1}checked="checked"{/if} type="checkbox"><label for="{$item.ename}">{$item.cname}</label></li>
{/foreach}
</ul></dd>
</dl>
</li>

<li>
<dl>
<dt>职业</dt>
<dd>
<div class="editItem01"><select name="occupy"><option value="">▼选择</option>{foreach from=$occupies|smarty:nodefaults item="item"}<option value="{$item.id}" {if $profile.occupy==$item.id}selected="selected"{/if}>{$item.name}</option>{/foreach}</select>
</div>
<p class="openRange"><select name="occupy_level"><option value="2" {if $profile.occupy_level==2}selected="selected"{/if}>向朋友公开</option><option value="6" {if $profile.occupy_level==6}selected="selected"{/if}>公开至朋友的朋友</option><option value="1" {if $profile.occupy_level==1}selected="selected"{/if}>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>所属公司<br><span class="supplement01">(全角100字符以内)</span></dt>
<dd>
<div class="editItem01"><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="30" name="company" value="{$profile.company}">
<ul class="editNote">
<li>※请输入您所在公司的名称，此项目是可选的。</li>
</ul>
</div>
<p class="openRange"><select name="company_level"><option value="2" {if $profile.company_level==2}selected="selected"{/if}>向朋友公开</option><option value="6" {if $profile.company_level==6}selected="selected"{/if}>公开至朋友的朋友</option><option value="1" {if $profile.company_level==1}selected="selected"{/if}>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>毕业学校<br><span class="supplement01">(全角100字符以内)</span></dt>
<dd>
<div class="editItem01"><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="30" name="school" value="{$profile.school}">
<ul class="editNote">
<li>※请输入您所毕业学校的名称，此项目是可选的。</li>
</ul>
</div>
<p class="openRange"><select name="school_level"><option value="2" {if $profile.school_level==2}selected="selected"{/if}>向朋友公开</option><option value="6" {if $profile.school_level==6}selected="selected"{/if}>公开至朋友的朋友</option><option value="1" {if $profile.school_level==1}selected="selected"{/if}>全体公开</option></select></p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>自我介绍<span class="necessaryItem">*</span><br><span class="supplement01">(全角10000字符以内)</span></dt>
<dd>
<textarea class="" onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" rows="15" name="appeal" style="width: 548px; background-color: rgb(253, 249, 242);">{$profile.appeal}</textarea>
</dd>
</dl>
</li>

<li>
<dl>
<dt>我喜欢的<select name="fav1"><option value="" selected="selected">▼选择</option>{foreach from=$interests|smarty:nodefaults item="item"}<option value="{$item.id}" {if $profile.fav1==$item.id}selected="selected"{/if}>{$item.name}</option>{/foreach}</select></dt>
<dd><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="50" name="fav1_value" value="{$profile.fav1_value}"></dd>
</dl>
</li>

<li>
<dl>
<dt>我喜欢的<select name="fav2"><option value="" selected="selected">▼选择</option>{foreach from=$interests|smarty:nodefaults item="item"}<option value="{$item.id}" {if $profile.fav2==$item.id}selected="selected"{/if}>{$item.name}</option>{/foreach}</select></dt>
<dd><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="50" name="fav2_value" value="{$profile.fav2_value}"></dd>
</dl>
</li>

<li>
<dl>
<dt>我喜欢的<select name="fav3"><option value="" selected="selected">▼选择</option>{foreach from=$interests|smarty:nodefaults item="item"}<option value="{$item.id}" {if $profile.fav3==$item.id}selected="selected"{/if}>{$item.name}</option>{/foreach}</select><br><span class="supplement01">全角1000字符以内</span></dt>
<dd><input onblur="this.style.backgroundColor='#FDF9F2'" onfocus="this.style.backgroundColor='#F7F0E6';" size="50" name="fav3_value" value="{$profile.fav3_value}">
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
<li><input name="profile_search_flg" id="profile_search_flg" value="1" {if $profile.profile_search_flg==1}checked="checked"{/if} type="radio"><label for="searchUserLevelY">公开</label></li>
<li><input name="profile_search_flg" id="profile_search_flg" value="0" {if $profile.profile_search_flg==0}checked="checked"{/if} type="radio"><label for="searchUserLevelN">非公开</label></li>
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
<li><input name="mail_search_flg" id="mail_search_flg" value="1" {if $profile.mail_search_flg==1}checked="checked"{/if} type="radio"><label for="addFriendMailBlockN">公开</label></li>
<li><input name="mail_search_flg" id="mail_search_flg" value="0" {if $profile.mail_search_flg==0}checked="checked"{/if} type="radio"><label for="addFriendMailBlockY">非公开</label></li>
</ul>
<p class="editNote">※当选择【非公开】时，登录的邮件地址将不会被别人检索到。</p>
</dd>
</dl>
</li>




</ul>

<input name="submit_hidden" value="main" type="hidden">
<div class="formButtons01">
<p class="rulesNote01">请在确认了<a href="{$base}/rules" 
target="_blank">使用规则</a>以及<a href="{$base}/privacy" 
target="_blank">个人隐私保护条例</a>后，并在您同意的前提下提交。如果相关内容违反了使用规则，或者国家的有关法律，我们会强行删除。</p>
<p style="padding-top: 10px;"><input value="确认输入内容" class="formBt01" type="submit"></p>
</div>
<!--/#contents-->
</div>
<!--/#editList01--></div>
<!--/[EditList01]-->
</form>

<ul class="utilityLinks03">
<li><a href="{$base}/home">首页</a></li>
<li><a href="{$base}/config">社区设置首页</a></li>
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
src="{$base}/images/a0ee55bb4a4d1987c306c0732ba27103b3403ddf.gif" 
width="72" height="72"></a></dt><dd><img alt="PR" 
src="{$base}/images/pr_ico9.gif" width="21" height="9"><div><a 
target="_blank" 
href="">二手汽车<br>请赶快行动<br>过了此村没有下店♪</a></div></dd></dl>

</div>


<div class="megaContents succeedingMegaContents">

<script type="text/javascript" language="JavaScript">
if (typeof(impAads[1]) !='undefined' && impAads[1] !="") document.write(impAads[1]);
</script><dl><dt><a target="_blank" 
href=""><img
 alt="" 
src="{$base}/images/c6e3bc0fb7f9b8fe5a53080f89fd607c2fd17003.gif" 
width="72" height="72"></a></dt><dd><img alt="PR" 
src="{$base}/images/pr_ico9.gif" width="21" height="9"><div><a 
target="_blank" 
href="">使用美容肥皂<img src="{$base}/images/76.gif" alt="" 　height="16" 
class="emoji" width="16" border="0"><br>多用多益<img 
src="{$base}/images/49.gif" alt="" 　height="16" class="emoji" 
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
<li><a href="{$base}/help">帮助首页</a></li>
<li><a href="{$base}/help?mode=list&amp;category=3">使用上的注意</a></li>
<li><a id="JS_supportReportLink" 
href="{$base}/support_report?mode=disable">违反网站规定的通报</a></li>
</ul>
</div>
<!--/help--></div>
<!--/[help]-->
<!--/bodySub--></div>
<!--/[BodySub]-->


<!--/bodyArea--></div>
<!--/[BodyArea]-->