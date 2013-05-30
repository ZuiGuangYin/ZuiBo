<!--[BodyArea]-->
<div id="bodyArea">

<!--[BodyMainArea]-->
<div id="bodyMainArea">

<div class="diaryTitle">
<h2>写新博客</h2>
</div>



<!--[BodyMainAreaMain]-->
<div id="bodyMainAreaMain">

<div class="heading03">
<h3>博客内容</h3>
</div>

<div class="confirm01">
<p>请仔细确认以下的博客内容。</p>
</div>

<div class="diaryMainArea03">

<div class="confirmTitle">

<p>{$info.title}（{$info.open_level_name}）</p>
</div>



<div class="clearfix">
<ul id="editBlock04">
<li class="clearfix">
<div id="diary_body" class="txtconfirmArea FANCYURL_EMBED">{$info.contents}<br></div>
</li>

<li class="clearfix">
<dl>
<dt>照片</dt>
<dd class="diaryphotolist">

<div class="editDiaryPics clearfix">
<p class="picsNum">第1枚</p>
<p class="picsEdit"><img src="{$base}/{$info.smallphoto1}"><br/>{$info.file_photo1}</p>
</div>

<div class="editDiaryPics clearfix">
<p class="picsNum">第2枚</p>
<p class="picsEdit"><img src="{$base}/{$info.smallphoto2}"><br/>{$info.file_photo2}</p>
</div>

<div class="editDiaryPics clearfix">
<p class="picsNum">第3枚</p>
<p class="picsEdit"><img src="{$base}/{$info.smallphoto3}"><br/>{$info.file_photo3}</p>
</div>

</dd>
</dl>
</li>

<li class="clearfix bottomBlock">
<dl>
<dt>博客的公开范围</dt>
<dd>{$info.open_level_name}</dd>
</dl>
</li>




</ul>
</div>

<div class="formButtons01 editEndBd">
<ul>
<li><form action="{$base}/writeblog" method="post">
<input name="bid" value="{$info.bid}" type="hidden">
<input name="title" value="{$info.title}" type="hidden">
<input name="contents" value="{$info.contents}" type="hidden">
<input name="friendlist" value="{$info.friendlist}" type="hidden">
<input name="open_level" value="{$info.open_level}" type="hidden">
<input name="group_id" value="{$info.group_id}" type="hidden">
<input name="photo1" value="{$info.photo1}" type="hidden">
<input name="photo2" value="{$info.photo2}" type="hidden">
<input name="photo3" value="{$info.photo3}" type="hidden">
<input name="smallphoto1" value="{$info.smallphoto1}" type="hidden">
<input name="smallphoto2" value="{$info.smallphoto2}" type="hidden">
<input name="smallphoto3" value="{$info.smallphoto3}" type="hidden">
<input name="normalphoto1" value="{$info.normalphoto1}" type="hidden">
<input name="normalphoto2" value="{$info.normalphoto2}" type="hidden">
<input name="normalphoto3" value="{$info.normalphoto3}" type="hidden">
<input name="file_photo1" value="{$info.file_photo1}" type="hidden">
<input name="file_photo2" value="{$info.file_photo2}" type="hidden">
<input name="file_photo3" value="{$info.file_photo3}" type="hidden">
<input class="formBt01" value="提交" type="submit">
</form></li>
<li><form action="{$base}/{$smarty.session.myApp.uid}/{$info.backurl|smarty:nodefault}" method="post">
<input name="title" value="{$info.title}" type="hidden">
<input name="contents" value="{$info.contents}" type="hidden">
<input name="friendlist" value="{$info.friendlist}" type="hidden">
<input name="open_level" value="{$info.open_level}" type="hidden">
<input name="group_id" value="{$info.group_id}" type="hidden">
<input class="formBt02" value="返回" type="submit">
</form></li>
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
<!--/bodyMainAreaSub--></div>
<!--/[BodyMainAreaSub]-->

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