<!--[BodyArea]-->
<div id="bodyArea" class="listFriend">
<!--[BodyMainArea]-->
<div id="bodyMainArea">
{if $smarty.session.myApp.uid==$smarty.session.myApp.owner}
<div class="pageTitle homeTitle002"><h2>我的社交圈</h2></div>

<!--[ContentsArea]-->
<div id="contentsArea" class="clearfix" style="">


<!--[subArea]-->
<div id="subArea">


<!--[subMenu]-->
<div id="subMenu" class="sideBlock">
<!--[tagListManager]-->
<div id="tagListManager">
<!-- 铁哥们 -->
<p {if $fflg =='1'}class=" on" {/if} id="buddy" style=""><span><a href="{$base}/{$smarty.session.myApp.owner}/listfriend?fflg=1" style="background-image: url('{$base}/images/group_nakayoshi_off_001.gif');">铁哥们({$fcnt})</a></span></p>
<!-- /铁哥们 -->
<ul class="loaded" id="tagList">
<li {if $gid =='all'&& $fflg =='0'}class=" on" {/if}id="tagall">
<a href="{$base}/{$smarty.session.myApp.owner}/listfriend?gid=all" style="background-image: url('{$base}/images/group_transparent001.gif');">全部({$allcnt})</a>
</li>

{foreach from=$allmygroups|smarty:nodefaults item="item"}
<li {if $gid ==$item.gid }class="sortable on" {else} class="sortable" {/if} id="tag1">
<a href="{$base}/{$smarty.session.myApp.owner}/listfriend?gid={$item.gid}" style="background-image: url('{$base}/images/group_transparent001.gif');">{$item.gname}<wbr>({$item.cnt})</a>
</li>
{/foreach}

<li {if $gid =='unclassified'}class=" on" {/if} id="tagunclassified">
<a href="{$base}/{$smarty.session.myApp.owner}/listfriend?gid=unclassified" style="background-image: url('{$base}/images/group_transparent002.gif');">无组成员<wbr>({$nocnt})</a>
</li>
</ul>

<!-- /[tagListManager] --></div>
<!--/[subMenu]--></div>


<div class="sideBlock">
<!--tagActionList-->
<ul id="tagActionList">
<li id="createTag" style="">
{if $groupamount< 5}<a href="{$base}/addgroup?gid={$gid}&fflg={$fflg}"><img
 src="{$base}/images/add_group001.png" alt="创建新组" width="135" 
height="30"></a>{else}<img
 src="{$base}/images/add_group001.png" alt="创建新组" width="135" 
height="30"> {/if}</li>
<li><a href="#" id="sortTagList" style="">改变组的排列顺序</a></li>
<!--/tagActionList--></ul>
</div>

<!--/[subArea]--></div>
<!--[mainArea]-->
<div id="mainArea">
<div id="friendListArea" class="extraWrap01 tab">


<div class="extraInner">

<div class="heading" id="tagTitle">
<h3><img src="{$base}/images/group_transparent001.gif" alt="" 
class="emoji" width="16" height="16">
{if $fflg == 1}
铁哥们({$fcnt})
{else}
	{if $gid =='all'}全部({$allcnt}){/if}
	{if $gid =='unclassified'}无组成员<wbr>({$nocnt}){/if}
	{if $gid > 0}{$listtitle|smarty:nodefaults}{/if}

{/if}
</h3>
<span id="actionsForTag">
{if $gid > 0}
<a href="#" id="writeDiary"><img src="add_diary_with_gray_bg.gif" alt=""></a>
<a href="{$base}/addgroup?gid={$gid}&fflg={$fflg}&mode=edit" id="editTag">重新编辑此组</a>
{/if}
</span>
</div>
<div class="contents">

<div style="min-height: 112px;">

<!-- pageNavigation 上 -->
<div class="pageNavigation01 top" style="">
<div class="pageList01" style="">
<div>[<ul class="pageNavigationList">
{foreach from=$pages|smarty:nodefaults item="item"}
{if $item.index == $currentpage}
<li class="on">{$item.index}</li>
{else}
<li ><a  href="{$item.url|smarty:nodefaults}" >{$item.index}</a></li>
{/if}
{/foreach}
</ul>]</div>

<div class="sort">
<select id="sortSelect">
<option value="lastlogin" selected="selected">登录时间顺</option>
<option value="nickname">昵称顺</option>
<option value="id">ID顺</option>
</select></div></div>

<div class="pageList02">

<p><img alt="显示最近的登录时间" src="{$base}/images/logintime_indicate.gif"
 width="199" height="11"></p>

<ul><li>显示{$start}件～{$end}件</li>

</ul>
</div>



</div>
<!-- /pageNavigation 上 -->



<div id="friendList" class="thumbnailView" style="">
<table style="">
<tbody>
{foreach name=i from=$friendlist|smarty:nodefaults item="item"}
{if $smarty.foreach.i.iteration % 4 == 1}<tr>{/if}
{if $item.uid !=''}
<td id="friend{$item.uid}" class="{$item.class}">
<div class="wrapper">
<a href="{$base}/{$item.uid}/profile" class="thumbnail" 
style="background-image: 
url('{$base}/{$item.img}');"
 title="hello">{$item.nick_name}的照片</a>
<p>{$item.nick_name}({$item.cnt})</p>
<p class="action"><a href="#" id="settei{$item.uid}" class="settei" onclick="doFriendSetting('{$item.uid}')"><img 
src="{$base}/images/settei001.png" alt="设置" witdh="44" height="16"></a><a
 href="{$base}/send?fid={$item.uid}&amp;ref=listfriend" 
id="message{$item.uid}" class="sendMessage">向{$item.nick_name}发送信息</a></p>
</div></td>
{else}
<td>&nbsp;</td>
{/if}

{if $smarty.foreach.i.iteration % 4 == 0}</tr>{/if}
{/foreach}
</tbody></table>
</div>
<!-- pageNavigation 下 -->
<div class="pageNavigation01 bottom" style="">
<div class="pageList01" style="">
<div>[<ul class="pageNavigationList">
{foreach from=$pages|smarty:nodefaults item="item"}
{if $item.index == $currentpage}
<li class="on">{$item.index}</li>
{else}
<li ><a  href="{$item.url|smarty:nodefaults}" >{$item.index}</a></li>
{/if}
{/foreach}
</ul>]</div>

<div class="sort">
<select id="sortSelect">
<option value="lastlogin" selected="selected">登录时间顺</option>
<option value="nickname">昵称顺</option>
<option value="id">ID顺</option>
</select></div></div>

<div class="pageList02">

<p><img alt="显示最近的登录时间" src="{$base}/images/logintime_indicate.gif"
 width="199" height="11"></p>

<ul><li>显示{$start}件～{$end}件</li>

</ul>
</div>



</div>
<!-- /pageNavigation 下 -->

</div>



<!--/.contents--></div>

<!--/.extraInner--></div>
<!--/friendListArea--></div>
<!--/[mainArea]--></div>
<!--/[contentsArea]--></div>
{else}
<div class="pageTitle friendTitle002"><h2>我的社交圈</h2></div>

<!--[MessageArea]-->
<div class="messageArea">

{if $friendflg==0}

<div class="friendListTab selectTab02">
<ul>

<li {if $mode==''}class="focused"{/if}><a href="{$base}/{$smarty.session.myApp.owner}/listfriend"><span>全部</span></a></li>
<li {if $mode=='common'}class="focused"{/if}><a href="{$base}/{$smarty.session.myApp.owner}/listfriend?mode=common"><span>共同的朋友</span></a></li>
<ul>
</div>
{/if}

<div class="pageNavigation01 top">
<div class="pageList01">
<div>[<ul class="pageNavigationList">
{foreach from=$pages|smarty:nodefaults item="item"}
{if $item.index == $currentpage}
<li class="on">{$item.index}</li>
{else}
<li ><a  href="{$item.url|smarty:nodefaults}" >{$item.index}</a></li>
{/if}
{/foreach}
</ul>]</div>
</div>
<div class="pageList02">
<ul><li rel="__display">显示{$start}件～{$end}件</li></ul>

</div>
</div>
<div class = "nomemo">
<div class = "iconList03">
{foreach name=i from=$friendlist|smarty:nodefaults item="item"}
{if $smarty.foreach.i.iteration % 5 == 1}<ul {if $item.bottomflg==1} class="iconListBottom"{/if}>{/if}
<li>
<div class="{$item.class}" id="bg{$item.uid}"><div class="iconListImage">
<a href="{$base}/{$item.uid}/profile" style="background: url({$base}/{$item.img}); text-indent: -9999px;" class="iconTitle" title="{$item.nick_name}">{$item.nick_name}的照片</a></div><span>{$item.nick_name}({$item.cnt})</span></div>
</li>
{if $smarty.foreach.i.iteration % 5 == 0}</ul>{/if}
{/foreach}
</div></div>

<div class="pageNavigation01 bottom">
<div class="pageList01">
<div>[<ul class="pageNavigationList">
{foreach from=$pages|smarty:nodefaults item="item"}
{if $item.index == $currentpage}
<li class="on">{$item.index}</li>
{else}
<li ><a  href="{$item.url|smarty:nodefaults}" >{$item.index}</a></li>
{/if}
{/foreach}
</ul>]</div>
</div>

<div class="pageList02">
<ul><li rel="__display">显示{$start}件～{$end}件</li></ul>
</div>
</div>

</div><!--/messageArea-->
<!--/[MessageArea]-->

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

<div id="friendsetting" title="朋友设置">
<div class="inlineLoading"><img src="{$base}/images/loading001.gif" alt="" width="18" height="18"></div>
</div>