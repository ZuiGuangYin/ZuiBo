<!--[BodyArea]-->
<div id="bodyArea" class="addFriend">

<!--[BodyMainArea]-->
<div id="bodyMainArea">



<div class="pageTitle homeTitle002">

<h2>追加朋友</h2></div>

<!--[EditList01]-->
<div id="editList01">

<div class="heading02"><h3>内容确认</h3></div>

<div class="contents">

<div class="confirm01">
<p>请仔细确认您输入的信息。</p>
</div>



<ul class="editContents">
<li>
<dl>
<dt>朋友的邮件地址</dt>
<dd>{$info.mail}</dd>
</dl>
</li>

<li>
<dl>
<dt>留言内容</dt>
<dd>
{$info.message|nl2br}
</dd>
</dl>
</li>




<li>
<dl>
<dt>过去博客阅览设置</dt>

<dd class="viewPastDiary">{if $info.refuse_type==2}允许浏览{$info.refuse_year}年{$info.refuse_month}月以后的博客 {else} {$info.refuse_type_name}{/if}</dd>


</dl>
</li>


</ul>


<div class="formButtons01">
<p class="supplement01 longLine">请在确认<a href="{$base}/agreement" target="_blank">同意条款（※必读）</a>后，再送信。您送出的信息可能要被审查。<br />
※本网站禁止用于交流以外的目的(如骚扰信息等)。</p>

<ul>
<li>
<form action="{$base}/mailadd" method="post">
<input type="hidden" name="message" value="{$info.message}" />
<input type="hidden" name="refuse_type" value="{$info.refuse_type}" />
<input type="hidden" name="refuse_year" value="{$info.refuse_year}" />
<input type="hidden" name="refuse_month" value="{$info.refuse_month}" />
<input type="hidden" name="mail" value="{$info.mail}" />
<input type="submit" value="同意并提交" class="formBt01" />
</form>
</li>
<li>

<form action="{$base}/addfriendbymail" method="post">
<input type="hidden" name="message" value="{$info.message}" />
<input type="hidden" name="refuse_type" value="{$info.refuse_type}" />
<input type="hidden" name="refuse_year" value="{$info.refuse_year}" />
<input type="hidden" name="refuse_month" value="{$info.refuse_month}" />
<input type="hidden" name="mail" value="{$info.mail}" />
<input type="submit" value="返回" class="formBt02" />
</form>
</li>
</ul>
</div>

<!--/contents--></div>

<!--/editList01--></div>
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