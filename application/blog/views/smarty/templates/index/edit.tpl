<!--[BodyArea]-->
<div id="bodyArea">

<!--[BodyMainArea]-->
<div id="bodyMainArea">


<div class="diaryTitle">
<h2>编辑博客</h2>
</div>




<!--[BodyMainAreaMain]-->
<div id="bodyMainAreaMain">

<div class="heading03">
<h3>博客内容<em>&nbsp;(<span class="necessaryItem">*</span>的项目是必须输入的)</em></h3>
</div>

<form id="diary_form" name="diary" method="post" 
enctype="multipart/form-data" action="{$base}/{$smarty.session.myApp.uid}/comblog">

<!--[DiaryMainArea04]-->
<div class="diaryMainArea04s clearfix">
<div class="clearfix">
<ul class="editBlock03">
<li class="clearfix">
<dl>
<dt>标题<span class="necessaryItem">*</span><br><span>（100字符以内）</span></dt>
<dd><input name="title" class="editareaWidth" size="40" value="{$bloginfo.title}"></dd>
</dl>
</li>
<li class="clearfix bottomBlock">
<dl>
<dt>正文<span class="necessaryItem">*</span><br><span>（10000字符以内）</span></dt>

</dl>
</li>
</ul><!--/[editBlock03]-->
</div>
<!--/DiaryMainArea04--></div>
<!--/[diaryMainArea04]-->





<!--[DiaryMainArea04]-->
<div class="diaryMainArea04">
<ul>
<li>
<div class="txtEditArea">

<br>
<textarea name="contents" cols="65" rows="20" id="diaryBody">{$bloginfo.contents}</textarea>
</div>
</li>
</ul>
<!--/DiaryMainArea04--></div>
<!--/[diaryMainArea04]-->






<!--[DiaryMainArea04]-->
<div class="diaryMainArea04s clearfix">
<div class="clearfix">
<ul class="editBlock03">
<li class="clearfix">
<dl class="diaryPhotoEdit">
<dt>照片</dt>
<dd>
{foreach name=i from=$pictures|smarty:nodefaults item="item"}
<div class="editDiaryPics clearfix">
<p class="picsNum">第{$smarty.foreach.i.iteration}枚</p>
<p class="picsEdit">

{if $item.no !=''}<div id="imgdiv{$smarty.foreach.i.iteration}"><img src="{$base}/{$item.smallpath}" alt="照片{$smarty.foreach.i.iteration}"><br><a onclick="deletePic('{$item.no}','imgdiv{$smarty.foreach.i.iteration}')">删除</a></div>
{/if}
<input size="35" name="photo{$smarty.foreach.i.iteration}" type="file">
</p>
</div>
{/foreach}
<span>能上传三张JPEG，PNG，GIF格式的，总计5MB以下的照片。<br>
关于照片上传的有关规定请见<a href="{$base}/help" 
target="_blank">帮助</a></span>

</dd>
</dl>
</li>
</ul><!--/[editBlock03]--></div>
<!--/DiaryMainArea04--></div>
<!--/[diaryMainArea04]-->

<!--[DiaryMainArea04]-->
<div class="diaryMainArea04s clearfix">
<div class="clearfix">
<ul class="editBlock03 friendSelect">
<li id="diaryLevelLimit" class="clearfix bottomBlock">
<dl class="diaryViewLimit">
<dt>日记的公开范围</dt>
<dd>
<span class="limitTitle">标准的公开设置</span>
<p class="lastContents"><input id="diaryLevelStandard" 
name="open_level" value="1" {if $bloginfo.openlevel == 1}checked="checked"{/if} type="radio" onclick="this.form.group_id.disabled='disabled';"><label
 for="diaryLevelStandard"> 全部公开</label></p>
<span class="limitTitle">个别公开设置</span>
<p><input id="diaryLevelBuddy" name="open_level" value="3" {if $bloginfo.openlevel == 3}checked="checked"{/if} 
type="radio" onclick="this.form.group_id.disabled='disabled';"><label for="diaryLevelBuddy"> 向铁哥们公开</label></p>
<p><input id="diaryLevelFriend" name="open_level" value="2" {if $bloginfo.openlevel == 2}checked="checked"{/if} 
type="radio" onclick="this.form.group_id.disabled='disabled';"><label for="diaryLevelFriend"> 向朋友公开</label></p>


<p id="selectFriend" style=""><input id="diaryLevelByname" 
name="open_level" value="4" type="radio" {if $bloginfo.openlevel == 4}checked="checked"{/if}  onclick="this.form.group_id.disabled='disabled';"><label 
for="diaryLevelByname"> 选择特定朋友公开</label>　
</p>



<p style=""><input id="diaryLevelGroup" name="open_level" 
value="5" type="radio" {if $bloginfo.openlevel == 5}checked="checked"{/if} onclick="this.form.group_id.disabled='';"><label for="diaryLevelGroup"> 选择组</label></p>

<p style=""><select disabled="disabled" id="groupSelection" name="group_id" class="">
{foreach from=$allgroups|smarty:nodefaults item="item"}
<option  value="{$item.gid}">{$item.gname}</option>
{/foreach}

</select></p>


<p style=""><input id="diaryLevelFriend2" name="open_level" 
value="6" type="radio" {if $bloginfo.openlevel == 6}checked="checked"{/if}  onclick="this.form.group_id.disabled='disabled';"><label for="diaryLevelFriend2"> 
公开至朋友的朋友</label></p>

<p style=""><input id="diaryLevelClose" name="open_level" 
value="0" type="radio" {if $bloginfo.openlevel == 0}checked="checked"{/if}  onclick="this.form.group_id.disabled='disabled';"><label for="diaryLevelClose"> 非公开</label></p>
<input id="selectedFriends" name="allow_id_list" value="" type="hidden">

<p style="display: none;" id="moreSelectLink" class="moreSelect"><a 
title="" href="javascript:void(0);">选择其他公开范围</a></p>

<span>关于功能介绍请参见<a href="{$base}/help" 
target="_blank">帮助</a>。</span>
</dd>

</dl>
</li>

</ul><!--/[editBlock03]-->
</div>
<!--/DiaryMainArea04--></div>
<!--/[diaryMainArea04]-->


<!--[DiaryMainArea04]-->
<div class="diaryMainArea04 clearfix">
<div class="commuInfo">
<p class="commuInfoDiary">请在确认了<a href="{$base}/rules" 
target="_blank">使用规则</a>以及<a href="{$base}/privacy" 
target="_blank">个人隐私保护条例</a>后，并在您同意的前提下提交您的博客。如果相关内容违反了使用规则，或者国家的有关法律，我们会强行删除。</p>
<div class="formButtons01">
<ul>
<li>
<input name="friendlist" value="" type="hidden">
<input name="backurl" value="editblog?bid={$bloginfo.bid}" type="hidden">
<input name="bid" value="{$bloginfo.bid}" type="hidden">
<input class="formBt01" value="确认输入内容" type="submit">
</li>
</ul>
</div><!--/[formButtons01]-->
</div><!--/[commuInfo]-->
<!--/DiaryMainArea04--></div>
<!--/[diaryMainArea04]-->


</form>
<div class="heading03 blockDivide">
<h3>博客删除</h3>
</div>

<div class="confirm01">
<p>删除上述博客。</p>
</div>

<div class="diaryMainArea03 clearfix">
<div class="formButtons01">
<ul>
<li>
<form action="{$base}/blog/index/deleteblog" method="post">
<input name='bid' value={$bloginfo.bid} type='hidden'>
<input class="formBt01" value="删除" type="submit">
</form>
</li>
</ul>
</div>

<!--/DiaryMainArea--></div>
<!--/[diaryMainArea]-->

<!--/bodyMainAreaMain--></div>
<!--/[BodyMainAreaMain]-->

<!--[BodyMainAreaSub]-->
<div id="bodyMainAreaSub" class="clearfix">

<div id="diaryVolume">
<h3>博客空间的使用情况</h3>
<p><em>0.0</em>MB/<span>100.0</span>MB</p>
</div>


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

<script type="text/javascript">//<![CDATA[
// Disable iframe encapsulation
if (window != top) top.location.href = location.href;
//]]></script>


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