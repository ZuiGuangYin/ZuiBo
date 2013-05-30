<!--[BodyArea]-->
<div id="bodyArea" class="searchFriendMail">

<!--[BodyMainArea]-->
<div id="bodyMainArea">

<div class="pageTitle homeTitle002">
<h2>通过邮件地址检索</h2>
</div>

{if $info.flg ==2}
<!--[errorArea]-->
<div id="errorArea">
<div class="contents">
    <p>您输入的是自己的邮件地址。</p> 
</div>
</div>

{/if}
<!--/[ImportContacts]-->

<!--[EditList01]-->
<div id="editList01">

<form action="{$base}/search_friend_mail" method="post" name="searchform">
<input type="hidden" name="mode" value="search" />

<div class="heading02">
<h3>输入邮件地址进行检索</h3>
</div>

<div class="contents">

<div class="confirm01">
<p>输入您要寻找的朋友的邮件地址。</p>

</div>

<ul class="editContents">
<li class="emailSearch">
<dl>
<dt><label for="email">邮件地址</label></dt>
<dd><input type="text" name="mail" id="email" value="{$info.mail}" size="50" {literal}maxlength="200" validate="form" require="</p>请输入电子邮件地址。</p>" regular="<p>请检查输入的邮件地址的形式。</p><p>例）example@address.com</p>" validExpress="[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?" />{/literal}</dd>
</dl>
</li>
</ul>

<div class="formButtons01">
<p class="supplement01">※请在确认同意<a href={$base}/privacy" target="_blank">个人信息保护条款</a>后进行操作。</p>

<input class="formBt01"  value="检索" type="submit" onClick="searchMailChk();"/>
</div>

<!--/contents--></div>
</form>

<!--/editList01--></div>
<!--/[EditList01]-->



{if $info != null&& $info.flg !=2}

<div class="mailSearchResult">



<div class="heading02">
<h3>邮件地址的检索結果</h3>
</div>
<div class="contents">

{if $info.flg ==1}
<div class="resultWrap">
<div>
<p class="info"><strong>您想将朋友（{$info.mail}）追加到您的社交圈里去吗？</strong><br />
<span class="supplement01">加入到您的社交圈后，您就可以看到他（她）的个人信息了。<br />&nbsp;</span></p>
<p class="addMymixi"><a href="{$base}/addfriendbymail?mail={$info.mail}"><img src="{$base}/images/add_mymixi001.gif" height="30" width="140" alt="完成追加" /></a></p>
</div>
{/if}
{if $info.flg ==0}
<div>
<p class="messageAlert"><strong>您的朋友还没有登录到Tobu社区中。<br />
请向他（她）发出您的邀请吧。</strong></p>
<p class="inviteLink"><a href="{$base}/invite?mail={$info.mail}&from=search"><img src="{$base}/images/invite_friend001.gif" alt="邀请您的朋友" /></a></p>
</div>
{/if}
{if $info.flg ==3}
<div>
<p class="messageAlert"><strong>该朋友已经加入到您的社交圈了。</strong></p>

</div>
{/if}
</div>
<!--/contents--></div>


<!--/mailSearchResult--></div>

{/if}



<!--/bodyMainArea--></div>
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