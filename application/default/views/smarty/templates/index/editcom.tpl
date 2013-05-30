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
<dd>{$profile.last_name} {$profile.first_name}　【{$profile.name_level_name}】</dd>
</dl>
</li>

<li>
<dl>
<dt>昵称</dt>
<dd>{$profile.nick_name}</dd>
</dl>
</li>

<li>
<dl>
<dt>现住址</dt>
<dd>{$profile.province_name} {$profile.city_name} 　【{$profile.location_level_name}】</dd>
</dl>
</li>

<li>
<dl>
<dt>性別</dt>
<dd>{$profile.sex_name}　【{$profile.sex_level_name}】</dd>
</dl>
</li>

<li>
<dl>
<dt>生日</dt>
<dd>{$profile.month}月{$profile.day}日　【{$profile.birthday_level_name}】</dd>
</dl>
</li>

<li>
<dl>
<dt>生辰年份</dt>
<dd>{$profile.year}年　【{$profile.age_level_name}】</dd>
</dl>
</li>

<li>
<dl>
<dt>血型</dt>
<dd>{$profile.bland_name}</dd>
</dl>
</li>

<li>
<dl>
<dt>出身地</dt>
<dd>{$profile.bornprovince_name} {$profile.borncity_name} {$profile.bornlocation_level_name}】</dd>
</dl>
</li>

<li>
<dl>
<dt>兴趣</dt>
<dd>{$profile.allinterests}</dd>
</dl>
</li>

<li>
<dl>
<dt>职业</dt>
<dd>{$profile.occupy_name}　【{$profile.occupy_level_name}】</dd>
</dl>
</li>


<li>
<dl>
<dt>所属公司</dt>
<dd>{$profile.company}　{if $profile.company!=''}【{$profile.company_level_name}】{/if}</dd>
</dl>
</li>

<li>
<dl>
<dt>毕业学校</dt>
<dd>{$profile.school}　{if $profile.school!=''}【{$profile.school_level_name}】{/if}</dd>
</dl>
</li>
<li>
<dl>
<dt>自己紹介</dt>
<dd class="userInput">{$profile.appeal|nl2br}</dd>
</dl>
</li>


<li>
<dl>
<dt>我喜欢的{$profile.fav1_name}</dt>
<dd>{$profile.fav1_value}</dd>
</dl>
</li>



<li>
<dl>
<dt>我喜欢的{$profile.fav2_name}</dt>
<dd>{$profile.fav2_value}</dd>
</dl>
</li>



<li>
<dl>
<dt>我喜欢的{$profile.fav3_name}</dt>
<dd>{$profile.fav3_value}</dd>
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
<dd>{$profile.profile_search_flg_name}</dd>
</dl>
</li>


<li>
<dl>
<dt>朋友通过邮件地址检索</dt>
<dd>{$profile.mail_search_flg_name}</dd>
</dl>
</li>


</ul>

<div class="formButtons01">
<ul>
<li><form action="{$base}/default/index/change" method="post" class="JS_ANALYSIS_EVENT" rel="name=profile.edit">

<input name="first_name" value="{$profile.first_name}" type="hidden">
<input name="last_name" value="{$profile.last_name}" type="hidden">
<input name="name_level" value="{$profile.name_level}" type="hidden">
<input name="nick_name" value="{$profile.nick_name}" type="hidden">
<input name="province" value="{$profile.province}" type="hidden">
<input name="city" value="{$profile.city}" type="hidden">
<input name="location_level" value="{$profile.location_level}" type="hidden">
<input name="sex" value="{$profile.sex}" type="hidden">
<input name="sex_level" value="{$profile.sex_level}" type="hidden">
<input name="blandtype" value="{$profile.blandtype}" type="hidden">
<input name="year" value="{$profile.year}" type="hidden">
<input name="month" value="{$profile.month}" type="hidden">
<input name="day" value="{$profile.day}" type="hidden">
<input name="birthday_level" value="{$profile.birthday_level}" type="hidden">
<input name="age_level" value="{$profile.age_level}" type="hidden">
<input name="bornprovince" value="{$profile.bornprovince}" type="hidden">
<input name="borncity" value="{$profile.borncity}" type="hidden">
<input name="bornlocation_level" value="{$profile.bornlocation_level}" type="hidden">
{foreach from=$allinterests|smarty:nodefaults item="item"}
<input name="{$item.ename}" value="{$item.val}" type="hidden">
{/foreach}
<input name="occupy" value="{$profile.occupy}" type="hidden">
<input name="occupy_level" value="{$profile.occupy_level}" type="hidden">
<input name="company" value="{$profile.company}" type="hidden">
<input name="company_level" value="{$profile.company_level}" type="hidden">
<input name="school" value="{$profile.school}" type="hidden">
<input name="school_level" value="{$profile.school_level}" type="hidden">
<input name="appeal" value="{$profile.appeal}" type="hidden">
<input name="fav1" value="{$profile.fav1}" type="hidden">
<input name="fav2" value="{$profile.fav2}" type="hidden">
<input name="fav3" value="{$profile.fav3}" type="hidden">
<input name="fav1_value" value="{$profile.fav1_value}" type="hidden">
<input name="fav2_value" value="{$profile.fav2_value}" type="hidden">
<input name="fav3_value" value="{$profile.fav3_value}" type="hidden">
<input name="profile_search_flg" value="{$profile.profile_search_flg}" type="hidden">
<input name="mail_search_flg" value="{$profile.mail_search_flg}" type="hidden">
<input value="更新" class="formBt01" type="submit"></form></li>
<li><form action="{$base}/edit_profile" method="post">
<input name="from" value="confirm" type="hidden">
<input name="first_name" value="{$profile.first_name}" type="hidden">
<input name="last_name" value="{$profile.last_name}" type="hidden">
<input name="name_level" value="{$profile.name_level}" type="hidden">
<input name="nick_name" value="{$profile.nick_name}" type="hidden">
<input name="province" value="{$profile.province}" type="hidden">
<input name="city" value="{$profile.city}" type="hidden">
<input name="location_level" value="{$profile.location_level}" type="hidden">
<input name="sex" value="{$profile.sex}" type="hidden">
<input name="sex_level" value="{$profile.sex_level}" type="hidden">
<input name="blandtype" value="{$profile.blandtype}" type="hidden">
<input name="year" value="{$profile.year}" type="hidden">
<input name="month" value="{$profile.month}" type="hidden">
<input name="day" value="{$profile.day}" type="hidden">
<input name="birthday_level" value="{$profile.birthday_level}" type="hidden">
<input name="age_level" value="{$profile.age_level}" type="hidden">
<input name="bornprovince" value="{$profile.bornprovince}" type="hidden">
<input name="borncity" value="{$profile.borncity}" type="hidden">
<input name="bornlocation_level" value="{$profile.bornlocation_level}" type="hidden">
{foreach from=$allinterests|smarty:nodefaults item="item"}
<input name="{$item.ename}" value="{$item.val}" type="hidden">
{/foreach}
<input name="occupy" value="{$profile.occupy}" type="hidden">
<input name="occupy_level" value="{$profile.occupy_level}" type="hidden">
<input name="company" value="{$profile.company}" type="hidden">
<input name="company_level" value="{$profile.company_level}" type="hidden">
<input name="school" value="{$profile.school}" type="hidden">
<input name="school_level" value="{$profile.school_level}" type="hidden">
<input name="appeal" value="{$profile.appeal}" type="hidden">
<input name="fav1" value="{$profile.fav1}" type="hidden">
<input name="fav2" value="{$profile.fav2}" type="hidden">
<input name="fav3" value="{$profile.fav3}" type="hidden">
<input name="fav1_value" value="{$profile.fav1_value}" type="hidden">
<input name="fav2_value" value="{$profile.fav2_value}" type="hidden">
<input name="fav3_value" value="{$profile.fav3_value}" type="hidden">
<input name="profile_search_flg" value="{$profile.profile_search_flg}" type="hidden">
<input name="mail_search_flg" value="{$profile.mail_search_flg}" type="hidden">
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