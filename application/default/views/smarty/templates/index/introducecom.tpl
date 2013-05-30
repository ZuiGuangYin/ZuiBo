<!--[BodyArea]-->
<div id="bodyArea">


<!--[BodyMainArea]-->
<div id="bodyMainArea">
<div class="pageTitle friendTitle002"><h2>编辑朋友介绍</h2></div>

<div class="introList01">
<div class="heading02"><h3>您的介绍</h3></div>

<ul class="introListContents confirmContents01">
<li>
<dl>
<dt><a href="{$base}/{$info.uid}/profile"><img src="{$base}/{$info.img}" alt="{$info.nick_name}"></a><br>
<a href="{$base}/{$info.uid}/profile">{$info.nick_name}</a></dt>
<dd>
<div>
<p>关系： {$info.relationship}</p>
<p class="userInput">{$info.contents|nl2br}</p>
</div>
</dd>
</dl>
</li>
</ul>

<div class="formButtons01">
<p class="supplement01">※请在同意了本网站的<a href="{$base}/rules" target="_blank">使用规则</a>，并且确认了<a href="{$base}/privacy" target="_blank">个人信息保护事项</a>后，再进行提交。</p>
<ul>
<li><form action="{$base}/default/index/addintroduce" method="post">
<input name="fuid" value="{$info.fuid}" type="hidden">
<input name="relationship" value="{$info.relationship}" type="hidden">
<input name="contents" value="{$info.contents}" type="hidden">
<input value="完成" class="formBt01" type="submit">
</form></li>
<li>
<form action="{$base}/edit_intro" method="post">
<input name="fuid" value="{$info.fuid}" type="hidden">
<input name="relationship" value="{$info.relationship}" type="hidden">
<input name="contents" value="{$info.contents}" type="hidden">
<input value="返回" class="formBt02" type="submit"></form></li>
</ul>
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
<!--/[help]-->

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