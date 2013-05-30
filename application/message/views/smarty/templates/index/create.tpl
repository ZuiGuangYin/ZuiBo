<!--[BodyArea]-->
<div id="bodyArea" class="message">

<!--[BodyMainArea]-->
<div id="bodyMainArea">

<div class="pageTitle homeTitle005"><h2>发送留言</h2></div>

<!--[EditList01]-->
<div style="" id="editList01">

<form name='createform' action="{$base}/sendconfirm" method="POST">
<input name="mid" type="hidden" value="{$info.mid}">
<input name="mode" type="hidden" value="{$info.mode}">
<input name="sendto" type="hidden" value="{$info.sendto}">
<div class="heading02">
<h3>发送留言<em> (<span class="necessaryItem">*</span>项目是必须输入的)</em></h3>
</div>

<div class="contents">

<div class="confirm01">
<p>第一次向对方发送信息时，请注意您的语气。
<span class="supplement04">※本网站禁止用于交流以外的目的(如骚扰信息等)。 </span>
</p>
</div>

<ul class="editContents">
<li class="addressThumb">
<dl class="clearfix">

<dt>收件人<span class="necessaryItem">*</span></dt>
<dd id="selected_friend">
{if $info.sendto == null || $info.sendto == ''}
<a id="friend_selector" href="javascript:void(0);" title="由社交列表中选择" class="selectMyMixiBtn">
<img class="selectBtn" alt="由社交列表中选择" src="{$base}/images/select_mymixi001.gif">
</a>
{else}
<span class="thumb"><a href="{$base}/{$info.uid}/profile"><img src="{$base}/{$info.img}" alt="{$info.nick_name}" /></a></span>
<span class="nickname"><a href="{$base}/{$info.uid}/profile">{$info.nick_name}</a>
{if $info.mid =='' && $info.title!='' }
{else}
<a href="javascript:void(0);" id="friend_selector" class="switchBtn" onClick = "javascript:showSelectWindow();"><img src="{$base}/images/switch002.gif" alt="再選択" /></a>
{/if}
</span>

{/if}
</dd>
</dl>
</li>

<li>
<dl class="clearfix">
<dt><label for="subject">件名</label><br>
<span class="supplement01">（全角100字符以内）</span></dt>
<dd><input class="" name="title" id="subject" size="50" type="text"  value="{$info.title}"  validate="form" require="<p>请输入件名。</p>">
</dd>
</dl>
</li>

<li class="last">
<dl class="clearfix">
<dt><label for="message">留言</label><span class="necessaryItem">*</span><br>
<span class="supplement01">（全角10000字符以内）</span></dt>
<dd id="messageInput"><textarea class="" name="contents" id="messageBody" rows="12" cols="45" validate="form" require="<p>请输入留言内容。</p>">{$info.contents|smarty:nodefaults}</textarea></dd>
</dl>
</li>
</ul>

<div class="formButtons01">
<ul>
<li><input value="确认输入内容" class="formBt01" type="button" onClick="checkMessage('1')"></li>
<li><input name="save" value="草稿保存" class="formBt01" type="submit" onClick="checkMessage('2')" ></li>
</ul>
</div>

<!--/contents--></div>

</form>

<!--/editList01--></div>
<!--/[EditList01]-->

<script type="text/javascript">
$("editList01").show();
</script>


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

<div style="position: absolute; top: 0pt; left: 0pt; z-index: 50; width: 100%; height: 500px; background-color: rgb(0, 0, 0); opacity: 0; display: none;" id="overlay"></div>
<div style="height: 826px; z-index: 50; opacity: 0;" id="JS_errorWindow"></div>
<div style="z-index: 51; position: absolute; left: 55px; top: 240px;" class="utilityWindow02">
<div class="editList01">
<div class="layerHeading02"><h2>我的社交圈</h2></div>
<div class="contents" id="friendContents">
<div id="friendSelectorGroupList" class="groupList">
<p>
{foreach from=$grouplist|smarty:nodefaults item="item"}
<a href="javascript:void(0);" onClick="javascript:getFriendlist('{$item.gid}');" {if $curgid == $item.gid}class="on"{/if}>{$item.gname}({$item.cnt})</a> | 
{/foreach}
</p>
</div>
<div id="pageNavigation" class="pageNavigation01">
<div class="pageList01">
<div>[<ul class="pageNavigationList">
{foreach from=$pages|smarty:nodefaults item="item"}
{if $item.index == $currentpage}
<li class="on">{$item.index}</li>
{else}
<li ><a  href="javascript:void(0);" onClick="javascript:nextPage('{$item.gid}','{$item.index}');">{$item.index}</a></li>
{/if}
{/foreach}
</ul>]</div>
</div>
</div>
<div class="selectionView" id="friendList">
<table>
<tbody>

    <tr>
    {foreach from=$friendlist|smarty:nodefaults item="item"}
	{if $item.uid!=''}
        <th class="" id="friend{$item.uid}" scope="col">
        <div style="background-image: url(&quot;{$base}/{$item.smallimg}&quot;);" class="thumbnail">
        {$item.nick_name}的照片</div>
        <div class="nickname">{$item.nick_name}({$item.cnt})</div>
        </th>
	{else}
        <th class="" scope="col">
        </th>
	{/if}
  {/foreach}
        

    </tr>
    <tr>
    {foreach from=$friendlist|smarty:nodefaults item="item"}
	{if $item.uid!=''}
        <td class=" last" id="friendaction{$item.uid}" onClick="javascript:selectFriend('{$item.uid}');"><a  href="javascript:void(0);"><img alt="选择" src="{$base}/images/sentaku001-.png" width="44" height="16"></a>
        </td>
	{else}
        <td class=" last">
        </td>
	{/if}
   {/foreach}
    </tr>

</tbody>
</table>
</div>
</div><p class="formButtons01"><input class="formBt02 closeButton" value="关闭" id="closeButton" type="button"></p></div></div></div><!--/page-->
<div style="position: absolute; width: 200px; height: 100px; top: 0pt; left: 0pt; z-index: 51; background-color: rgb(255, 255, 255); display: none;"></div>