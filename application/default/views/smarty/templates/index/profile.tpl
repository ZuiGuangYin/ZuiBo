<!--[BodyArea]-->
<div id="bodyArea" class="home">

<!--[BodyMainArea]-->
<div id="bodyMainArea">
{if $smarty.session.myApp.owner==$smarty.session.myApp.uid}
<!--[ProfileEdit]-->

<div id="profileEdit">
<div class="contents">

<form action="show_profile.pl" method="GET">
<input name="id" value="6641676" type="hidden">
<p>
<select name="level">
<option value="2" selected="selected">朋友</option>
<option value="3">朋友的朋友</option>
<option value="4">全体</option>
</select>
 
<span id="JS_profileEditAreaText" style="">能看到的个人简介。</span>
</p>
</form>

<dl>
<dt><img src="{$base}/images/profileedit_title001.gif" alt="设置更新" 
width="67" height="18"></dt>
<dd>
<ul>
<li><a href="{$base}/edit_profile">个人简介的更新</a></li>
<li><a href="{$base}/list_skin">个性界面的更新</a></li>
<li><a href="#" id="edit_profile_image_main">个人形象照片的更新</a></li>

</ul>
</dd>
</dl>

</div>

</div>
<!--/[ProfileEdit]-->
{/if}
<!--[BodySide01]-->
<div id="bodySide01">

<!--[MyArea]-->

<div id="myArea">
<div class="profilePhoto">
<h2>个人形象照片</h2>
<div class="contents">
<p class="photo"><img alt="{$profile.nick_name}({$profile.friendcnt})" src="{$base}/{$profile.largeimg|smarty:nodefaults}">
<span class="moreLink01"><a href="#" id="edit_profile_image">变更个人照片</a></span></p>
<p class="name">{$profile.nick_name}({$profile.friendcnt})
<span class="loginTime">（最终登录：{$profile.lastlogin|date_format:'%Y-%m-%d %H:%M'}）</span></p>
</div>
</div>
<!--/myArea--></div>

<!--/[MyArea]-->


<!--[MymixiList]-->
<div class="bodySideSection01" id="myMixiList">
<div class="sectionHead">

<h2><a href="{$base}/{$smarty.session.myApp.owner}/listfriend">我的社交圈</a></h2>

</div>
<div class="sectionBody">
<table class="iconListTable01">
<tbody>

{foreach name=i from=$friends|smarty:nodefaults item="item"}
{if $smarty.foreach.i.iteration % 3 == 1}<tr class="">{/if}
<td class="">
{if $item.fuid != ''}
<a title="{$item.nick_name}" href="{$base}/{$item.fuid}/profile" 
style="background-image: 
url(&quot;{$base}/{$item.smallimg|smarty:nodefaults}&quot;);">{$item.nick_name}</a>
<span>{$item.nick_name} ({$item.friendcnt})</span>
{/if}
</td>

{if ($smarty.foreach.i.iteration) is div by 3}</tr>{/if}
{/foreach}

</tbody>
</table>

<div class="utility02">

<p class="moreLink01"><a href="{$base}/{$smarty.session.myApp.owner}/listfriend">我的全部社交圈（{$friendcnt}人）</a></p>

</div>

</div>
<!--/myMixiList--></div>

<!--/[MymixiList]-->




<!--[CommunityList]-->
<div class="bodySideSection01" id="communityList">
<div class="sectionHead">
<h2><a href="{$base}/{$smarty.session.myApp.owner}/listcommunity">最新加入社群</a></h2>
</div>
<div class="sectionBody">
<table class="iconListTable01">
<tbody>

{foreach name=i from=$communities|smarty:nodefaults item="item"}
{if $smarty.foreach.i.iteration % 3 == 1}<tr class="">{/if}
<td class="">
{if $item.cid != ''}

<a title="I &#9829; CN" href="{$base}/view_community?cid={$item.cid }" 
style="background-image: 
url(&quot;{$base}/{$item.smallimg|smarty:nodefaults}&quot;);">{$item.name|smarty:nodefaults}</a><span>{$item.name|smarty:nodefaults}({$item.membercnt})</span>
{/if}
</td>

{if ($smarty.foreach.i.iteration) is div by 3}</tr>{/if}
{/foreach}

</tbody></table>

<div class="utility02">
<p class="moreLink01"><a 
href="{$base}/{$smarty.session.myApp.owner}/listcommunity">加入的全部社群（{$communitycnt}）</a></p>
</div>

</div>
<!--/communityList--></div>

<!--/[CommunityList]-->




<!--ApplicationList-->

<div class="bodySideSection01" id="appliList">
<div class="sectionHead">
<h2><a href="{$base}/{$smarty.session.myApp.owner}/listappli">加入最新游戏</a></h2>
</div>
<div class="sectionBody">
<table class="iconListTable01">
<tbody>
{foreach name=i from=$games|smarty:nodefaults item="item"}
{if $smarty.foreach.i.iteration % 3 == 1}<tr class="">{/if}

<td class="">
{if $item.aid != ''}
<a title="{$item.name}" href="{$item.url|smarty:nodefaults}" style="background-image: url(&quot;{$base}/{$item.img}&quot;);">{$item.name}</a><span>{$item.name} ({$item.account})</span>
{/if}
</td>

{if ($smarty.foreach.i.iteration) is div by 3}</tr>{/if}
{/foreach}
</tbody>
</table>

<div class="utility02">
<p class="moreLink01"><a href="{$base}/{$smarty.session.myApp.owner}/listappli">全部加入游戏（{$gamecnt}）</a></p>
</div>

</div>
<!--/appliList--></div>


<!--/ApplicationList-->


<!--/bodySide01--></div>
<!--/[BodySide01]-->

<!--[BodyContents01]-->
<div id="bodyContents01">
{if $smarty.session.myApp.owner != $smarty.session.myApp.uid}
<ul class="friendUtilityLink">
{if $profile.friendflg == 1}<li><a href="{$base}/edit_intro?fuid={$smarty.session.myApp.owner}">追加您对此朋友的介绍</a></li>{/if}
<li><a href="{$base}/manage_skin?csstype={$profile.csstype}">选择同样画面风格</a></li>
</ul>
{/if}

<!--[Profile]-->
<div id="profile" class="section01">
<div class="sectionHead">
<h2>个人简介</h2>
</div>
<div class="sectionBody">
<div class="profileListTable">
<div>
<table>

<tbody><tr class="JS_showDefault listTop">
<th>姓名</th>

<td>{$profile.last_name|smarty:nodefaults} {$profile.first_name|smarty:nodefaults}</td>

</tr>

<tr class="  JS_showDefault">
<th>性別</th>

<td>{$profile.sex_name}</td>

</tr>

<tr style="display: none;" class="hidden">
<th>现住址</th>

<td>{$profile.province_name}{$profile.city_name}</td>

</tr>

<tr style="display: none;" class="hidden">
<th>血型</th>

<td>{$profile.bland_name}</td>

</tr>

<tr style="display: none;" class="hidden">
<th>出身地</th>

<td>{$profile.bornprovince_name}{$profile.borncity_name}</td>

</tr>

<tr style="display: none;" class="hidden">
<th>兴趣</th>

<td>{$profile.interest}</td>

</tr>

<tr style="display: none;" class="hidden">
<th>职业</th>

<td>{$profile.occupy_name}</td>

</tr>

<tr class="JS_showDefault listBottom">
<th>自我介绍</th>

<td>{$profile.appeal|nl2br}</td>

</tr>

</tbody></table>
</div>
<!--/profileListTable--></div>
<p class="moreLink01"><a id="JS_show_more_profile" class="open" href="#">全部展开</a></p></div>
<!--/proflie--></div>


<!--/[Profile]-->





<!--[VoiceFeed]-->
<!--[VoiceFeed]-->
<div id="voiceFeed" class="section01">
<div class="sectionHead">
<h2>最新微博</h2>
</div>

<div class="sectionBody">
<ul class="newFeedList">

{foreach from=$microblogs|smarty:nodefaults item="item"}
<li class="commentRow hrule">
<div class="feedContents">
<p class="voiced">
{if $item.smallpath!=''}
<span class="voicePhoto"><img style="cursor: pointer;" src="{$base}/{$item.smallpath}" class="photoThumbnail" id="{$item.no}" width="50" height="50"></span>{/if} {$item.contents}</p>
<div class="utility">
<p>{$item.cdat|date_format:' %m月 %d日'}</p>
</div>
</div>
<!--/commentRow--></li>
{/foreach}

</ul>
<p class="moreLink01"><a 
href="{$base}/{$smarty.session.myApp.owner}/listvoice">全部微博</a></p>
</div>

<!--/voiceFeed--></div>
<!--/[VoiceFeed]-->

<!--/[VoiceFeed]-->









<!--[PhotoFeed]-->
<div id="photoFeed" class="section01">
<div class="sectionHead">
<h2>最新照片</h2>
</div>
<div class="sectionBody">
<ul class="imageListTable01">
{foreach from=$pictures|smarty:nodefaults item="item"}
<li class="latest">
<table><tr>
<td class="image">
<a href="{$base}/{$item.path}"><img src="{$base}/{$item.smallpath}" alt="{$item.title}" height="76"></a>
</td>
</tr></table>
<div class="info">
<span class="contentName">
<a href="{$base}/{$item.path}" class="photo">{$item.title}</a>
</span>
<span class="date">{$item.cdat|date_format:' %m月 %d日'}</span>
</div>
</li>
{/foreach}
</ul>
<p class="moreLink01"><a 
href="{$base}/{$smarty.session.myApp.owner}/picture">浏览全部照片</a></p>
</div>
<!--/photoFeed--></div>

<!--/[PhotoFeed]-->
<!--[Intro]-->
<div id="intro" class="section01">
<div class="sectionHead">
<h2>来自朋友的介绍</h2>
</div>
<div class="sectionBody">
{foreach from=$introduces|smarty:nodefaults item="item"}
<dl>
<dt>

<a href="{$base}/{$item.fuid}/profile"><img src="{$base}/{$item.smallimg}" alt="{$item.nick_name}" onerror="javascript:this.width=76;this.height=76;"></a>

<span>


<a href="{$base}/{$item.fuid}/profile">{$item.nick_name}</a>


</span>
</dt>
<dd>
<div>
<p>


<span class="relation">关系：{$item.relationship}</span>

<span class="userInput">{$item.contents|nl2br}</span>
</p>
</div>
</dd>
</dl>
{/foreach}




<p class="moreLink01"><a href="{$base}/{$smarty.session.myApp.owner}/showintro">查看全部朋友介绍</a></p>


</div>
<!--/intro--></div>


<!--/bodyContents01--></div>
<!--/[BodyContents01]-->

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
{if $profile.newblogflg==1}
<!--[ActivityFeed]-->
<div id="activityFeed" class="bodySubSection">
<div class="heading01">
<h2>{$profile.nick_name}的最新博客</h2>
</div>
<div class="contents">
<ul class="activityFeedList01">

{foreach from=$newblogs|smarty:nodefaults item="item"}
<li class="diary">

<a href="{$base}/{$smarty.session.myApp.owner}/viewblog?bid={$item.bid}">{$item.title}</a></li>
{/foreach}
</ul>
</div>
<!--/activityFeed--></div>
<!--/[ActivityFeed]-->
{/if}
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