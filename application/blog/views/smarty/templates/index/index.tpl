<!--[BodyArea]-->
<div id="bodyArea" class="list_diary_main">

<!--[BodyMainArea]-->
<div id="bodyMainArea">


{if $smarty.session.myApp.uid==$smarty.session.myApp.owner}
<div class="diaryTitle clearfix">
<h2>{$nick_name}的博客</h2>
<p><a href="{$base}/{$smarty.session.myApp.uid}/addblog">写新博客</a></p>
</div>
{/if}
<!--[BodyMainAreaMain]-->
<div id="bodyMainAreaMain">


<!--default-->

<form id="delete_diary_form" name="delete_diary_form" action="{$base}/blog/index/delete" method="post">

<div class="heading03">
<div class="diaryTitleCell clearfix">
<h3>博客列表</h3>
</div>
</div>
{if $allblogs!=null}
<div class="pageNavigation01 top">
<div class="pageList03">
<ul><li rel="__display">显示1件～{$blogcnt}件</li></ul>
</div>
</div>



{foreach name=i from=$allblogs|smarty:nodefaults item="item"}
<!--[listDiaryBlock]-->
<div {if $item.lastflg ==1}class="listDiaryBlockLast" {else}class="listDiaryBlock" {/if}>
<div class="listDiaryTitle">
<dl>
<dt>{if $smarty.session.myApp.uid==$smarty.session.myApp.owner}<input class="" name="bid{$smarty.foreach.i.iteration}" value="{$item.bid}" type="checkbox">{/if}<a href="{$base}/{$smarty.session.myApp.owner}/viewblog?bid={$item.bid}">{$item.title}</a>{if $smarty.session.myApp.owner==$smarty.session.myApp.uid}<span><a href="{$base}/{$smarty.session.myApp.owner}/editblog?bid={$item.bid}">编辑</a></span>（{$item.openlevel_name}）{/if}</dt>
<dd>{$item.cdat|date_format:'%Y年 %m月 %d日 %H:%M'} </dd>
</dl>
</div>

<p>{$item.shortcontents}</p>
<p class="more"><a href="{$base}/{$smarty.session.myApp.owner}/viewblog?bid={$item.bid}">阅读详细</a></p>
<div class="diaryEditMenu">
<ul>
<li><a href="{$base}/{$smarty.session.myApp.owner}/viewblog?bid={$item.bid}#write">跟帖（{$item.comment_cnt}）</a></li>
</ul>
</div>
<!--/listDiaryBlock--></div>
<!--/[listDiaryBlock]-->
{/foreach}



<div class="pageNavigation01 bottom">
<div class="pageList03">
<ul><li rel="__display">显示1件～{$blogcnt}件</li></ul>
</div>
</div>


{if $smarty.session.myApp.uid==$smarty.session.myApp.owner}
<div class="formButtons01 listEndBd">
<input name="max" value="{$blogcnt}" type="hidden">
<ul>
<li><input class="formBt01" value="删除选中的博客" type="submit"></li>
</ul>
</div>
{/if}

</form>
{else}
<div>
<p class="nothing"><img alt="没有任何留言" src="{$base}/images/nothing.gif"></p>
</div>
<!--/default-->
{/if}

<div class="bottomSpaceAd"><h4>推荐信息</h4>
</div>


<!--/bodyMainAreaMain--></div>
<!--/[BodyMainAreaMain]-->


<!--[BodyMainAreaSub]-->
<div id="bodyMainAreaSub" class="clearfix">
{if $smarty.session.myApp.uid==$smarty.session.myApp.owner}
<div id="diaryVolume">
<h3>博客空间的使用情况</h3>
<p><em>0.0</em>MB/<span>100.0</span>MB</p>
</div>
{/if}

<div class="diaryCalendar"><div>
<table summary="{$current_month|date_format:'%Y年 %m月 '}"><caption class="clearfix"><span class="previousMonth"><a href="{$base}/{$smarty.session.myApp.owner}/blog?num={$current_num-1}" title="下一个月">&lt;</a></span><span class="calMonth">{$current_month|date_format:'%Y年 %m月 '}</span>
{if $current_num+1 <= 0}<span class="nextMonth"><a href="{$base}/{$smarty.session.myApp.owner}/blog?num={$current_num+1}" title="上一个月">&gt;</a></span>{/if}</caption>
<tbody><tr>
<th abbr="周日" class="sun">日</th>
<th abbr="周一" class="mon">一</th>
<th abbr="周二" class="tue">二</th>
<th abbr="周三" class="wed">三</th>
<th abbr="周四" class="thu">四</th>
<th abbr="周五" class="fri">五</th>
<th abbr="周六" class="sat">六</th>
</tr>
{foreach name=i from=$calendar|smarty:nodefaults item="item"}
	{if $smarty.foreach.i.iteration % 7 == 1}<tr>{/if}
	<td class="calendar-day">
		{if $item.count == 0}
		{$item.day}
		{else}
		<a href="{$base}/{$smarty.session.myApp.owner}/blog?dat={$item.timestamp}">{$item.day}</a>
		{/if}

	</td>
	{if ($smarty.foreach.i.iteration) is div by 7}</tr>{/if}
{/foreach}
	
</tbody></table></div></div>
{if $smarty.session.myApp.uid==$smarty.session.myApp.owner}
<div class="newComment">
<div class="heading">
<h3>最新的跟帖</h3>
</div>
<div class="contents">
<ul class="contentsListDiary">
{foreach from=$newcomments|smarty:nodefaults item="item"}
<li class="comment">

<a href="{$base}/{$smarty.session.myApp.uid}/viewblog?bid={$item.bid}">{$item.contents}</a></li>
{/foreach}
</ul>
<br/>
<p class="seeContentsList"><a href="{$base}/{$smarty.session.myApp.uid}/listcomment">显示所有跟帖</a></p>
</div>
</div>
{/if}

<div class="diaryHistory">
<div class="heading">
<h3>过去的博客</h3>
</div>
<div class="contents">

<dl>
{foreach from=$oldblogs|smarty:nodefaults item="item"}
<dt>{$item.year}</dt>
<dd>
<ul class="clearfix">
{foreach from=$item.info|smarty:nodefaults item="mess"}
{if $mess.url!=''}
<li><a href="{$mess.url|smarty:nodefault}" title="{$mess.fullmonth}的博客列表">{$mess.month}</a></li>
{else}
<li>{$mess.month}</li>
{/if}
{/foreach}
</ul></dd>
{/foreach}
</dl></div></div>

<!--/bodyMainAreaSub--></div>
<!--/[BodyMainAreaSub]-->

<!--[BodyMainAreaClear]-->
<div id="bodyMainAreaClear"></div>
<!--/[BodyMainAreaClear]-->

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