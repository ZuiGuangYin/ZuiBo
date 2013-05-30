<!--[BodyArea]-->
<div id="bodyArea" class="message">

<!--[BodyMainArea]-->
<div id="bodyMainArea">

<div class="pageTitle homeTitle005"><h2>向{$info.nick_name}发送留言</h2></div>

<!--[EditList01]-->
<div id="editList01">

<div class="heading02">
<h3>留言内容</h3>
</div>

<div class="contents">

<div class="confirm01">
<p>请确认您将发送的留言内容。</p>
</div>

<ul class="editContents">
<li class="addressThumb">
<dl class="clearfix">
<dt>收件人</dt>
<dd><span class="thumb"><a href="{$base}/{$info.uid}/profile" target="_blank"><img src="{$base}/{$info.img}" alt="{$info.nick_name}" /></a></span>
<span class="nickname"><a href="{$base}/{$info.uid}/profile" target="_blank">{$info.nick_name}</a>

</span>
</dd>
</dl>
</li>

<li>
<dl class="clearfix">
<dt>件名</dt>
<dd>{$info.title}</dd>
</dl>
</li>

<li class="last">
<dl class="clearfix">
<dt>留言内容</dt>
<dd id="message_body" class="FANCYURL_EMBED">{$info.contents|nl2br}</dd>
</dl>
</li>
</ul>

<form action="{$base}/message/index/send" method="post">
<input name="mid" type="hidden" value="{$info.mid}">
<input name="sendto" type="hidden" value="{$info.sendto}">
<input name="mode" value="{$info.mode}" type="hidden">
<input name="title" value="{$info.title}" type="hidden">
<input name="contents" value="{$info.contents}" type="hidden">

<div class="formButtons01">
<p class="supplement01 longLine">请在仔细阅读以下<a href="{$base}/agreement" target="_blank">同意事项（※必读）</a>后、送出您的留言。留言内容有可能被审阅。<br>
本网站禁止发送违法的各种集会的召集信息，以及带有侮辱，性骚扰内容的留言。</p>
<ul>
<li><input name="yes" value="同意并发送" class="formBt01" type="submit"></li>
<li><input name="no" value="返回" class="formBt02" type="button" onClick="this.form.action='{$base}/send';this.form.submit();"></li>
</ul>
</div>
</form>

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