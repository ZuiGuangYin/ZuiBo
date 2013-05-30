

<!--[BodyArea]-->
<div id="bodyArea" class="message">

<!--[BodyMainArea]-->
<div id="bodyMainArea">

<div class="pageTitle homeTitle005">
{if $mode=='recieve' }
<h2>{$nick_name}的收件箱</h2>
{/if}
{if $mode=='sended' }
<h2>{$nick_name}的发件箱</h2>
{/if}
{if $mode=='draft' }
<h2>{$nick_name}的草稿箱</h2>
{/if}
{if $mode=='delitem' }
<h2>{$nick_name}的垃圾箱</h2>
{/if}
</div>

<!--[ContentsArea]-->
<div id="contentsArea" class="clearfix">

<!--[subArea]-->
<div id="subArea">

<div id="compose" class="sideBlock">
<p><a href="{$base}/send/"><img 
src="{$base}/images/send_message002.gif" alt="写新留言"></a></p>
</div>

<div id="subMenu" class="sideBlock">
<ul>
<li {if $mode == 'recieve'}class="on"{/if} id="subMenuTop"><a class="inbox" 
href="{$base}/messagelist?mode=recieve">收件箱</a></li>
<li {if $mode == 'sended'}class="on"{/if}><a class="sent" 
href="{$base}/messagelist?mode=sended">发件箱</a></li>
<li {if $mode == 'draft'}class="on"{/if}><a class="draft" 
href="{$base}/messagelist?mode=draft">草稿箱</a></li>
<li {if $mode == 'delitem'}class="on"{/if} id="subMenuBottom"><a class="trash" 
href="{$base}/messagelist?mode=delitem">垃圾箱</a></li>
</ul>
</div>


<!--/subArea--></div>

<!--/[subArea]-->

<!--[MainArea]-->
<div id="mainArea">

<div class="extraWrap01">

<div class="extraInner">

<div class="heading">
{if $mode=='recieve' }
<p><a href="{$base}/messagelist?mode=recieve">&lt;&lt;&nbsp;返回收件箱</a></p>
{/if}
{if $mode=='sended' }
<p><a href="{$base}/messagelist?mode=sended">&lt;&lt;&nbsp;返回发件箱</a></p>
{/if}
{if $mode=='delitem' }
<p><a href="{$base}/messagelist?mode=delitem">&lt;&lt;&nbsp;返回垃圾箱</a></p>
{/if}
</div>

<div class="contents">

<div id="messageDetail">

<div class="thumb"><a href="{$base}/{$info.uid}/profile" target="_blank"><img src="{$base}/{$info.img}" alt="{$info.nick_name}" /></a></div>

<div class="messageDetailHead">
<h3>{$info.title}</h3>
<dl>
<dt>日期</dt>
<dd>{$info.cdat|date_format:"%Y年 %m月 %d日 %H分 %M秒 "}</dd>
<dt>发件人</dt>
<dd><a href="{$base}/{$info.uid}/profile" target="_blank">{$info.nick_name}</a><span>
{if $mode=='recieve'}
<form action="{$base}/send" method="post">
<input type="hidden" name="mid" value="{$info.mid}" />
<input type="hidden" name="mode" value="{$mode}" />
<input type="hidden" name="modeflg" value="{$flg}" />
<input type="hidden" name="flg" value="reply" />
<input class="formBt01" value="回信" type="submit"></form>{/if}</span></dd>
</dl>
</div>

<div id="message_body" class="messageDetailBody FANCYURL_EMBED">{$info.contents|smarty:nodefaults}</div>

<div class="formButtons01">
<ul>
{if $mode=='recieve'}
<li><form action="{$base}/send" method="post">
<input type="hidden" name="mid" value="{$info.mid}" />
<input type="hidden" name="mode" value="{$mode}" />
<input type="hidden" name="modeflg" value="{$flg}" />
<input type="hidden" name="flg" value="reply" />
<input class="formBt01" value="回信" type="submit"></form></li>
<li><form action="{$base}/message/recieve/deleteone" method="post">
<input type="hidden" name="mid" value="{$info.mid}" />
<input type="hidden" name="mode" value="{$mode}" />
<input type="hidden" name="modeflg" value="{$flg}" />
<input class="formBt02" value="删除" type="submit"></form></li>
{/if}
{if $mode=='sended'}
<li><form action="{$base}/message/recieve/deleteone" method="post">
<input type="hidden" name="mid" value="{$info.mid}" />
<input type="hidden" name="mode" value="{$mode}" />
<input type="hidden" name="modeflg" value="{$flg}" />
<input class="formBt01"  value="删除" type="submit"></form></li>
{/if}
{if $mode=='delitem'}
<form action="{$base}/message/recieve/deleteone" method="post">
<input type="hidden" name="mid" value="{$info.mid}" />
<input type="hidden" name="mode" value="{$mode}" />
<input type="hidden" name="modeflg" value="{$flg}" />
<ul>
<li><input name="remove" type="submit" class="formBt01" value="彻底删除" /></li>
<li><input name="move" type="button" class="formBt01" value="恢复" name="move" onclick="this.form.action='{$base}/message/recieve/recover';this.form.submit();"/></li>
{/if}
</ul>
</form>

</ul>
</div>

<!--/messageDetail--></div>



<p class="moreLink01"><a href="">发现有人传播了非法信息时，请向网站管理者报告</a><br><a 
href="">屏蔽发件人</a></p>

<!--/contents--></div>

<!--/extraInner--></div>

<!--/extraWrap01--></div>



<!--/mainArea--></div>
<!--/[MainArea]-->

<!--/contentsArea--></div>
<!--/[ContentsArea]-->

<!--/bodyMainArea--></div>
<!--/[BodyMainArea]-->

<!--[bodySub]-->


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