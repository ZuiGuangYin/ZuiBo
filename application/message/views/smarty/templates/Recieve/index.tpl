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

<!--[SubArea]-->
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

<!--/[SubArea]-->

<!--[MainArea]-->
<div id="mainArea">

<div class="extraWrap01">

<div class="extraInner">

<div class="heading">
<h3 class="inbox">
{if $mode=='recieve' }
<h2>收件箱</h2>
{/if}
{if $mode=='sended' }
<h2>发件箱</h2>
{/if}
{if $mode=='draft' }
<h2>草稿箱</h2>
{/if}
{if $mode=='delitem' }
<h2>垃圾箱</h2>
{/if}
</h3>
</div>

<div class="contents">
{if $messagelist==null || $messagelist==''}
<!-- no message -->
<div>
<p class="nothing"><img alt="没有任何留言" src="{$base}/images/nothing.gif"></p>
</div>


{else}


<!--[messageListArea]-->
<div class="messageListArea">
<div class="pageNavigation01 top">
<div class="pageList02">
<ul><li rel="__display">显示1件～{$max}件</li></ul>
</div>
<!--/pageNavigation01--></div>

<form name="listForm" action="{$base}/message/recieve/delete" method="POST">

<div id="messageList">

<div class="messageListHead">
<table class="tableHead">
<tbody><tr>
<th class="status">&nbsp;</th>
<th class="sender">{if $mode=='recieve' || $mode=='delitem'  }发件人{else}收件人{/if}</th>
<th class="subject">件名</th>
<th class="date">日期</th>
</tr>
</tbody></table>
</div>

<div class="messageListBody">
<input type="hidden" name="mode" value="{$mode}">
<input type="hidden" name="max" value="{$max}">

<table class="tableBody">
<tbody>
{foreach from=$messagelist|smarty:nodefaults item="message"}
{if $message.index ==0}
<tr class="top " id="trid{$message.mid}">
{else}
<tr class="">
{/if}
<td class="status">
<input type="checkbox" name="mid{$message.index}" value="{$message.mid}">{if $mode=='recieve' && $message.readflg=='0'  }<img src="{$base}/images/obj_yet.gif" alt="未开封">{else}<img src="{$base}/images/message_opened.gif" alt="已开封">{/if}
</td>
<td class="sender">{$message.nick_name}</td>
<td class="subject"><a href="{$base}{$message.url|smarty:nodefaults}">{$message.title}</a></td>
<td class="date">{$message.cdat|date_format:"%Y-%m-%d %H:%M "}<input type="hidden" name="mode{$message.index}" value="{$message.mode}">
<a  class="delete_message_link" href="javascript:void(0);" onclick="javascript:deleteOne('{$message.mid}','{$mode}','{$message.mode}')"><img src="{$base}/images/message_trash002.gif" alt="删除" title="删除"></a></td>
</tr>
{/foreach}

</tbody></table>
</div>
<!--/messageList--></div>
<p class="formButtons02"><span class="selectAll"> <a id="allselect" href="javascript:void(0);" onclick="setSelect()">全选 </a> | <a id="allrelease" href="javascript:void(0);" onclick="setRelease()">解除全选</a>  | <a id="allreverse" href="javascript:void(0);" onclick="setReverse()">反选</a></span>
{if $mode=='delitem' }
<input name="remove" type="button" onclick="doDel()" class="formBt01" value="彻底删除" />&nbsp;<input type="button" onclick="doMove()" class="formBt01" value="恢复" name="move" />
{else}
<input class="formBt01" value="删除" type="button" onclick="listChk()">
{/if}</p>
</form>

<div class="pageNavigation01 bottom">
<div class="pageList02">
<ul><li rel="__display">显示1件～{$max}件</li></ul>
</div>
<!--/pageNavigation01--></div>
<!--/messageListArea--></div>
{/if}
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

