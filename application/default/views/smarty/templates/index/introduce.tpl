<!--[BodyArea]-->
<div id="bodyArea">


<!--[BodyMainArea]-->
<div id="bodyMainArea">
<div class="pageTitle friendTitle002"><h2>编辑朋友介绍</h2></div>



<!--[EditList01]-->
<div id="editList01">
<div class="heading02"><h3>介绍内容 <em>(<span class="necessaryItem">*</span>项目是必须输入)</em></h3></div>

<div class="contents">
<form action="{$base}/edit_intro_com" method="post" name="introForm">
<input name="fuid" value="{$info.fuid}" type="hidden">
<input name="from" value="input" type="hidden">
<ul class="editContents">

<li>
<dl>
<dt>朋友照片</dt>
<dd><a href="{$base}/{$info.fuid}/profile"><img src="{$base}/{$info.img}"></a><br>
<a href="{$base}/{$info.fuid}/profile">{$info.nick_name}</a></dd>
</dl>
</li>

<li>
<dl>
<dt>关系</dt>
<dd>
<input name="relationship" size="30" class="relationname" type="text" maxlength="100" value="{$info.relationship}"/>
 <p class="supplement01">※(例) 同事 、大学同学等<br>※全角15个字符以内</p>
</dd>
</dl>
</li>

<li>
<dl>
<dt>您的介绍<span class="necessaryItem">*</span><br><span class="editNote">(全角1000字符以内)</span></dt>
<dd>
<textarea class="" rows="5" cols="75" name="contents">{$info.contents}</textarea>
</dd>
</dl>
</li>

</ul>

<div class="formButtons01">
<p class="supplement01">※请在同意了本网站的<a href="{$base}/rules" target="_blank">使用规则</a>，并且确认了<a href="{$base}/privacy" target="_blank">个人信息保护事项</a>后，再进行提交。</p>
    

<p><input value="确认介绍内容" class="formBt01" type="submit"></p>
</div>
</form>
</div>
<!--/#editList01--></div>
<!--/[EditList01]-->

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