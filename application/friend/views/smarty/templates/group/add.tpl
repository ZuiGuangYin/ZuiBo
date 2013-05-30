<!--[BodyArea]-->
<div id="bodyArea" class="listFriend">
<!--[BodyMainArea]-->
<div id="bodyMainArea">

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
<div id="friendListArea" class="extraWrap01">

<div class="extraInner">

<div class="heading">
<form name='createform' action="{$base}/friend/group/process" method="POST">
<input name="gid" type="hidden" value="{$info.gid}">
<input name="members" type="hidden" value="{$info.members}">

{if $mode =='edit'}
<h3>编辑组信息</h3><br/>
<h4><img src="editmembertag_head1_001.gif" alt="STEP1 修改组名" width="175" height="14"></h4>

{else}
<h3>创建新组</h3>
<br/>
<h4><img src="addmembertag_step1_001.gif" alt="STEP1 请输入组名。" width="332" height="14"></h4>
{/if}

<div id="createGroupSection">
 
  <p><input {if $mode =='edit'} value="{$info.gname}"{else}value="请输入组名"{/if}  onblur="javascript:if(this.value=='') this.value='请输入组名';" onfocus="javascript:if(this.value =='请输入组名') this.value='';" name="gname" id="tagname" size="30" class="tagname hungry" type="text" validate="form" require="<p>请输入组名。</p>"><br>
  <span class="supplement01">※例：球友、同班同学等（15汉字或者字母以内）</span></p>
</div>
{if $mode =='edit'}
<h4><img src="addmembertag_step1_002.gif" alt="STEP2 修改关于组的介绍。" width="332" height="14"></h4>
{else}
<h4><img src="addmembertag_step1_002.gif" alt="STEP2 请输入关于组的说明。" width="332" height="14"></h4>
{/if}

<div id="createGroupSection">
 
  <p><textarea name="introduce" id="introduce" rows="2" cols="45" class="tagname hungry" type="text" >{$info.introduce|smarty:nodefaults}</textarea><br>
  </p>
</div>
{if $mode =='edit'}
<h4><img src="addmembertag_step2_003.gif" alt="STEP3 重新选择组的成员后，点击【更新】按钮。" width="488" height="14"></h4>
{else}
<h4><img src="addmembertag_step2_003.gif" alt="STEP3 选择新组的成员后，点击【创建】按钮。" width="488" height="14"></h4>
{/if}

</div>

<div class="contents"><div style="min-height: 37px;">

<!-- 标签 -->
<div id="pageTab">




<ul><li class="focused"><a href="#friendList/view&amp;page=1&amp;member_type=all"><span>全部社交圈({$allcnt})</span></a></li><li><a href="#friendList/view&amp;page=1&amp;member_type=selected"><span>已选中(0)</span></a></li><li><a href="#friendList/view&amp;page=1&amp;member_type=unselected"><span>未选中({$allcnt})</span></a></li></ul>
</div>
<!-- /标签 --><ul>



<!-- pageNavigation 上 -->
<div class="pageNavigation01 top">

<div class="pageList01">



<div>[<ul class="pageNavigationList">
{foreach from=$pages|smarty:nodefaults item="item"}
{if $item.index == $currentpage}
<li class="on">{$item.index}</li>
{else}
<li ><a  href="javascript:void(0);" onClick="javascript:nextMember('{$item.index}');">{$item.index}</a></li>
{/if}
{/foreach}
</ul>]</div>
<div class="pageList02Selection">
<ul>
</ul></div>

</div>
</div>
<!-- /pageNavigation 上 -->

<div id="friendList" class="selectionView">
<table>
<tbody>
{foreach name=i from=$friendlist|smarty:nodefaults item="rowitem"}
	{foreach name=i from=$rowitem.row|smarty:nodefaults item="item"}
		{if $smarty.foreach.i.iteration % 3 == 1}<tr>{/if}
		{if $item.uid !=''}
		{if $item.flg > 0}
		<th scope="col" id="friend{$item.uid}" {if $smarty.foreach.i.iteration % 3 == 0}class="rightmost selected"{else}class="selected" {/if}><div class="thumbnail" style="background-image: url(&quot;{$base}/{$item.img}&quot;);">{$item.nick_name}的照片</div><div class="nickname">{$item.nick_name}({$item.cnt})</div></th>
		{else}
		<th scope="col" id="friend{$item.uid}" {if $smarty.foreach.i.iteration % 3 == 0}class="rightmost "{else} {/if}><div class="thumbnail" style="background-image: url(&quot;{$base}/{$item.img}&quot;);">{$item.nick_name}的照片</div><div class="nickname">{$item.nick_name}({$item.cnt})</div></th>
		{/if}
		{else}
			<th {if $smarty.foreach.i.iteration % 3 == 0}class="rightmost" {/if}>&nbsp;</th>
		{/if}
		{if $smarty.foreach.i.iteration % 3 == 0}</tr>{/if}
	{/foreach}
	{foreach name=i from=$rowitem.row|smarty:nodefaults item="item"}
		{if $smarty.foreach.i.iteration % 3 == 1}<tr>{/if}
		{if $item.uid !=''}
		{if $item.flg > 0}
		<td headers="friend101514" id="friendaction{$item.uid}" {if $smarty.foreach.i.iteration % 3 == 0}class="rightmost selected" {else} class="selected"{/if}><a href="#" class="select" onclick="cancelMember('{$item.uid}')"><img src="{$base}/images/hatsusu001-.png" alt="取消" width="44" height="16"></a></td>
		{else}
		<td headers="friend101514" id="friendaction{$item.uid}" {if $smarty.foreach.i.iteration % 3 == 0}class="rightmost"  {/if}><a href="#" class="select" onclick="selectMember('{$item.uid}')"><img src="{$base}/images/sentaku001-.png" alt="选择" width="44" height="16"></a></td>
		{/if}
		{else}
		<td {if $smarty.foreach.i.iteration % 3 == 0}class="rightmost" {/if}>&nbsp;</td>
		{/if}
		{if $smarty.foreach.i.iteration % 3 == 0}</tr>{/if}
	{/foreach}
{/foreach}
</tbody></table>
</div>

<div id="addMemberTagButton">
<input class="formBt01" {if $mode =='edit'} value="更新"{else}value="创建"{/if} type="button" onclick="createGroup()">
{if $mode =='edit'}<input class="formBt01"  value="删除组"  type="button" onclick="deleteGroup()">{/if}
<input class="formBt02" value="取消" type="button" onclick="window.location.href='{$base}/{$smarty.session.myApp.uid}/listfriend?gid={$gid}&fflg={$fflg}'">
<a href="#" id="expander" style="display: none;"><img src="addmembertag_expand_001.gif" alt="" width="18" height="18"></a>
</div>
</form>
<ul id="footNote">
<li><img src="addmembertag_note1_002.gif" alt="成员被选中后背景将改变颜色。" width="227" height="10"></li>
<li><img src="addmembertag_note2_002.gif" alt="点击已经被选中的成员时，解除选择状态。" width="312" height="10"></li>
</ul>

</ul></div><!--/contents--></div>

<!--/.extraInner--></div>


<!--/friendListArea--></div>
<!--/[mainArea]--></div>




<!--/[contentsArea]--></div>





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