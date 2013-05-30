<!--[BodyArea]-->

<div id="bodyArea" class="addFriend">

<!--[BodyMainArea]-->
<div id="bodyMainArea">


<div class="pageTitle homeTitle002"><h2>将朋友追加到我的社交圈中</h2></div>

<form action="{$base}/addfriendbymailcom" method="post" name="messageForm">
<input type="hidden" name="mail" value="{$info.mail}" />
<!--[EditList01]-->
<div id="editList01">

<div class="heading02"><h3>追加朋友</h3></div>

<div class="contents">

<div class="confirm01">
<p>{$info.mail} 是您的旧识吗？<br />
如果是，可以给其留言告诉对方您已经将其追加到您的社交圈了。</p>
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
<dt><label for="message">留言（任意）</label></dt>
<dd>
<textarea class="open" name="message" rows="5" cols="45">{$info.message}</textarea>
</dd>
</dl>
</li>




<li>
<dl>

<dt>过去博客阅览设置</dt>
<dd class="viewPastDiary">
<p><select name="refuse_type" onchange="showRefuseArea(this);">
<option value="0" {if $info.refuse_type==0}selected="selected"{/if}>可以浏览过去的博客</option><option value="1" {if $info.refuse_type==1}selected="selected"{/if}>不可以浏览过去的博客</option><option value="2" {if $info.refuse_type==2}selected="selected"{/if}>可浏览指定日期以后的博客</option>
</select></p>
<p style="display:none" id="refuse_date_area"><select name="refuse_year" class="refuse_year">
{foreach from=$years|smarty:nodefaults item="item"}<option value="{$item.val}" {if $info.refuse_year==$item.val}selected="selected"{/if}>{$item.val}</option>{/foreach}
</select>　年<select name="refuse_month" class="refuse_month">
{foreach from=$months|smarty:nodefaults item="item"}<option value="{$item.val}" {if $info.refuse_month==$item.val}selected="selected"{/if}>{$item.val}</option>{/foreach}</select>　月以后的博客</p>


</dd>
</dl>
</li>


</ul>
<div class="formButtons01">
<input type="submit" value="确认内容" class="formBt01" />
</div>
<input type=hidden name=submit value=main>
<input type=hidden name=post_key value="89cfacf8333ec676ae55c3383cfc13dc29d12d3c">
<input type=hidden name=email value="attokyo@hotmail.com" />

<!--/contents--></div>

<!--/editList01--></div>
<!--/[EditList01]-->
</form>


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