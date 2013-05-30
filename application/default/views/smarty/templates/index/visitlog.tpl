<!--[BodyArea]-->
<div id="bodyArea" class="show_log">


<!--
    loading_window
-->
<div id="loadingWindow" class="utilityWindow01" style="display: none;">
<div class="layerHeading01 clearfix">
<h2>访问记录删除</h2>
<a href="javascript:void(0)" class="cancelButton"><img src="{$base}/images/close005.gif" alt="关闭" title="关闭" /></a>
</div>
<p class="loading01"><img src="{$base}/images/loading001.gif" alt="正在导入数据" /></p>
<!--/utilityWindow01--></div>


<!--
    confirm_window
-->
<div id="confirmWindow" class="utilityWindow01" style="display: none;">
<div class="editListPopup01">
<div class="layerHeading01 clearfix">
<h2>访问记录删除</h2>

<a href="javascript:void(0)" class="cancelButton"><img src="{$base}/images/close005.gif" alt="关闭" title="关闭" /></a>
</div>
<div class="contents">
<p class="notes01">要删除访问「<strong><span class="nickname">&nbsp;</span></strong>」的记录吗？</p>
<p class="supplement01">※删除后再次访问的话，记录将保留。<br />
※有可能对方也在查看此记录。</p>
<!--/contents--></div>
<form action="javascript:void(0);" method="">
<ul class="formButtons01 buttons">
<input type="hidden" id="target_id" value="0" />
<input type="hidden" id="date" value="0" />
<input type="hidden" id="post_key" value="89cfacf8333ec676ae55c3383cfc13dc29d12d3c" />
<li><input type="button" class="formBt01 deleteSubmit" value="删除" /></li>

<li><input type="button" class="formBt02 cancelButton" value="取消" /></li>
</ul>
</form>
<!--/editListPopup01--></div>
<!--/utilityWindow01--></div>

<!--
    result_window
-->
<div id="finishWindow" class="utilityWindow01" style="display: none;">
<div class="layerHeading01 clearfix">
<h2>访问记录删除</h2>
<a href="javascript:void(0)" class="cancelButton"><img src="{$base}/images/close005.gif" alt="关闭" title="关闭" /></a>
</div>
<div class="messageArea">
<p class="messageAlert">已经删除了访问「<strong><span class="nickname">&nbsp;</span></strong>」的记录。</p>

<p class="supplement01">※如果画面不能自动跳转，请点击<a href="javascript:void(0)" onclick="location.reload();">此处</a>。</p>
</div>
<!--/utilityWindow01--></div>

<!--
    error_window
-->
<div id="errorWindow" class="utilityWindow01" style="display: none;width:290px;">
<div class="layerHeading01 clearfix">
<h2>访问记录删除</h2>
<a href="javascript:void(0)" class="cancelButton"><img src="{$base}/images/close005.gif" alt="关闭" title="关闭" /></a>
</div>
<div class="messageArea">
</div>
<!--/utilityWindow01--></div>




<!--[BodyMainArea]-->
<div id="bodyMainArea">

<div class="pageTitle homeTitle006">
<h2>007的访问统计</h2>
</div>

<div class="extraWrap02 tab">

<div class="selectTab01">
<ul>
<li class="in"><a href="{$base}/{$smarty.session.myApp.owner}/visitother" >被访问统计</a></li>
<li class="out"><a href="{$base}/{$smarty.session.myApp.owner}/visitlog" class="on">访问统计</a></li>
</ul>
</div>

<div class="extraInner">

<div class="confirm">
<p>显示您最新的30条访问记录。<br />
可以点击别名后的「×」图标、最多可每月删除10件访问记录。详细信息请参照<a href="help.pl?mode=list&category=21">此处</a>。</p>
</div>

<div class="contents">

<div class="pageNavigation01 top">
<div class="pageList02">
<ul><li>显示最新的30件记录</li></ul>


</div>
<!--/pageNavigation01--></div>

<div class="logListArea">
<div class="logContents clearfix">

<div class="logListCenter">

<p>本月残存可删除记录数为（<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除" />）　：　<strong>10</strong>件</p>



<ul class="logList02">

<li><span class="date">03月30日 18:10</span><span class="name"><a href="show_friend.pl?id=17035063&route_trace=010001500002">静香</a></span>

<span class="delete">
<a href="delete_log.pl?id=17035063&date=2011-03-30">
<input type="hidden" class="id" value="17035063" />
<input type="hidden" class="date" value="2011-03-30" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">03月30日 18:05</span><span class="name"><a href="show_friend.pl?id=2346754&route_trace=010001500002">xiaoyi</a></span>

<span class="delete">
<a href="delete_log.pl?id=2346754&date=2011-03-30">
<input type="hidden" class="id" value="2346754" />
<input type="hidden" class="date" value="2011-03-30" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">03月30日 18:05</span><span class="name"><a href="show_friend.pl?id=22180120&route_trace=010001500002">flower</a></span>

<span class="delete">
<a href="delete_log.pl?id=22180120&date=2011-03-30">
<input type="hidden" class="id" value="22180120" />
<input type="hidden" class="date" value="2011-03-30" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">03月30日 17:58</span><span class="name"><a href="show_friend.pl?id=506290&route_trace=010001500002">liris</a></span>

<span class="delete">
<a href="delete_log.pl?id=506290&date=2011-03-30">
<input type="hidden" class="id" value="506290" />
<input type="hidden" class="date" value="2011-03-30" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">03月25日 15:43</span><span class="name"><a href="show_friend.pl?id=5155148&route_trace=010001500002">flower</a></span>

<span class="delete">

<a href="delete_log.pl?id=5155148&date=2011-03-25">
<input type="hidden" class="id" value="5155148" />
<input type="hidden" class="date" value="2011-03-25" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">03月24日 15:50</span><span class="name"><a href="show_friend.pl?id=101514">飞龙在天</a><img height="13" width="12" alt="我的朋友" src="{$base}/images/log_mymixi.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=101514&date=2011-03-24">
<input type="hidden" class="id" value="101514" />
<input type="hidden" class="date" value="2011-03-24" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">03月22日 18:22</span><span class="name"><a href="show_friend.pl?id=101514">ニョリウォ</a><img height="13" width="12" alt="我的朋友" src="{$base}/images/log_mymixi.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=101514&date=2011-03-22">
<input type="hidden" class="id" value="101514" />
<input type="hidden" class="date" value="2011-03-22" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">02月18日 16:06</span><span class="name"><a href="show_friend.pl?id=101514">ニョリウォ</a><img height="13" width="12" alt="我的朋友" src="{$base}/images/log_mymixi.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=101514&date=2011-02-18">

<input type="hidden" class="id" value="101514" />
<input type="hidden" class="date" value="2011-02-18" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">02月17日 18:31</span><span class="name"><a href="show_friend.pl?id=101514">ニョリウォ</a><img height="13" width="12" alt="我的朋友" src="{$base}/images/log_mymixi.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=101514&date=2011-02-17">
<input type="hidden" class="id" value="101514" />
<input type="hidden" class="date" value="2011-02-17" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">02月16日 23:28</span><span class="name"><a href="show_friend.pl?id=101514">ニョリウォ</a><img height="13" width="12" alt="我的朋友" src="{$base}/images/log_mymixi.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=101514&date=2011-02-16">
<input type="hidden" class="id" value="101514" />
<input type="hidden" class="date" value="2011-02-16" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">02月15日 16:20</span><span class="name"><a href="show_friend.pl?id=101514">飞龙在天</a><img height="13" width="12" alt="我的朋友" src="{$base}/images/log_mymixi.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=101514&date=2011-02-15">
<input type="hidden" class="id" value="101514" />
<input type="hidden" class="date" value="2011-02-15" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>

</span></li>

<li><span class="date">02月15日 15:49</span><span class="name"><a href="show_friend.pl?id=54501&route_trace=010001500001">kan</a><img height="14" width="16" alt="我的朋友の我的朋友" src="{$base}/images/log_friend002.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=54501&date=2011-02-15">
<input type="hidden" class="id" value="54501" />
<input type="hidden" class="date" value="2011-02-15" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">02月13日 00:33</span><span class="name"><a href="show_friend.pl?id=101514">tiger</a><img height="13" width="12" alt="我的朋友" src="{$base}/images/log_mymixi.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=101514&date=2011-02-13">
<input type="hidden" class="id" value="101514" />
<input type="hidden" class="date" value="2011-02-13" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">02月12日 18:26</span><span class="name"><a href="show_friend.pl?id=694853&route_trace=010001500001">tiger</a><img height="14" width="16" alt="我的朋友の我的朋友" src="{$base}/images/log_friend002.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=694853&date=2011-02-12">
<input type="hidden" class="id" value="694853" />
<input type="hidden" class="date" value="2011-02-12" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">02月12日 18:26</span><span class="name"><a href="show_friend.pl?id=101514">xiaoyi</a><img height="13" width="12" alt="我的朋友" src="{$base}/images/log_mymixi.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=101514&date=2011-02-12">
<input type="hidden" class="id" value="101514" />
<input type="hidden" class="date" value="2011-02-12" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">02月07日 19:03</span><span class="name"><a href="show_friend.pl?id=2346754&route_trace=010001500002">xiaoyi</a></span>

<span class="delete">

<a href="delete_log.pl?id=2346754&date=2011-02-07">
<input type="hidden" class="id" value="2346754" />
<input type="hidden" class="date" value="2011-02-07" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">02月07日 19:02</span><span class="name"><a href="show_friend.pl?id=101514">tiger</a><img height="13" width="12" alt="我的朋友" src="{$base}/images/log_mymixi.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=101514&date=2011-02-07">
<input type="hidden" class="id" value="101514" />
<input type="hidden" class="date" value="2011-02-07" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">02月05日 17:05</span><span class="name"><a href="show_friend.pl?id=101514">tiger</a><img height="13" width="12" alt="我的朋友" src="{$base}/images/log_mymixi.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=101514&date=2011-02-05">
<input type="hidden" class="id" value="101514" />
<input type="hidden" class="date" value="2011-02-05" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">02月05日 17:03</span><span class="name"><a href="show_friend.pl?id=2051138&route_trace=010001500001">monkey</a><img height="14" width="16" alt="我的朋友的朋友" src="{$base}/images/log_friend002.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=2051138&date=2011-02-05">

<input type="hidden" class="id" value="2051138" />
<input type="hidden" class="date" value="2011-02-05" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">01月28日 17:35</span><span class="name"><a href="show_friend.pl?id=101514">tiger</a><img height="13" width="12" alt="我的朋友" src="{$base}/images/log_mymixi.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=101514&date=2011-01-28">
<input type="hidden" class="id" value="101514" />
<input type="hidden" class="date" value="2011-01-28" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">01月28日 17:08</span><span class="name"><a href="show_friend.pl?id=7888851&route_trace=010001500002">flower</a></span>

<span class="delete">
<a href="delete_log.pl?id=7888851&date=2011-01-28">
<input type="hidden" class="id" value="7888851" />
<input type="hidden" class="date" value="2011-01-28" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">01月28日 16:22</span><span class="name"><a href="show_friend.pl?id=876329&route_trace=010001500002">flower</a></span>

<span class="delete">
<a href="delete_log.pl?id=876329&date=2011-01-28">
<input type="hidden" class="id" value="876329" />
<input type="hidden" class="date" value="2011-01-28" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>

</span></li>

<li><span class="date">01月28日 16:18</span><span class="name"><a href="show_friend.pl?id=5155148&route_trace=010001500002">flower</a></span>

<span class="delete">
<a href="delete_log.pl?id=5155148&date=2011-01-28">
<input type="hidden" class="id" value="5155148" />
<input type="hidden" class="date" value="2011-01-28" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">01月27日 17:48</span><span class="name"><a href="show_friend.pl?id=25259895&route_trace=010001500002">李虎</a></span>

<span class="delete">
<a href="delete_log.pl?id=25259895&date=2011-01-27">
<input type="hidden" class="id" value="25259895" />
<input type="hidden" class="date" value="2011-01-27" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">01月25日 00:24</span><span class="name"><a href="show_friend.pl?id=101514">李虎</a><img height="13" width="12" alt="我的朋友" src="{$base}/images/log_mymixi.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=101514&date=2011-01-25">
<input type="hidden" class="id" value="101514" />
<input type="hidden" class="date" value="2011-01-25" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">01月24日 23:49</span><span class="name"><a href="show_friend.pl?id=101514">tiger</a><img height="13" width="12" alt="我的朋友" src="{$base}/images/log_mymixi.gif"/></span>

<span class="delete">
<a href="delete_log.pl?id=101514&date=2011-01-24">
<input type="hidden" class="id" value="101514" />
<input type="hidden" class="date" value="2011-01-24" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">11月29日 23:57</span><span class="name"><a href="show_friend.pl?id=4274606&route_trace=010001500002">rain</a></span>

<span class="delete">

<a href="delete_log.pl?id=4274606&date=2010-11-29">
<input type="hidden" class="id" value="4274606" />
<input type="hidden" class="date" value="2010-11-29" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">11月29日 23:54</span><span class="name"><a href="show_friend.pl?id=22175008&route_trace=010001500002">tiger</a></span>

<span class="delete">
<a href="delete_log.pl?id=22175008&date=2010-11-29">
<input type="hidden" class="id" value="22175008" />
<input type="hidden" class="date" value="2010-11-29" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">11月29日 23:54</span><span class="name"><a href="show_friend.pl?id=20373452&route_trace=010001500002">tiger</a></span>

<span class="delete">
<a href="delete_log.pl?id=20373452&date=2010-11-29">
<input type="hidden" class="id" value="20373452" />
<input type="hidden" class="date" value="2010-11-29" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

<li><span class="date">11月29日 23:52</span><span class="name"><a href="show_friend.pl?id=29876978&route_trace=010001500002">tiger</a></span>

<span class="delete">
<a href="delete_log.pl?id=29876978&date=2010-11-29">

<input type="hidden" class="id" value="29876978" />
<input type="hidden" class="date" value="2010-11-29" />
<img src="{$base}/images/delete005.gif" width="11" height="11" alt="删除" title="删除"/></a>
</span></li>

</ul>

<!--/.logListCenter01--></div>



<!--/logContents--></div>
<!--/logListArea--></div>

<div class="pageNavigation01 bottom">
<div class="pageList02">
<ul><li>显示最新的30件记录</li></ul>


</div>
<!--/pageNavigation01--></div>
<p class="supplement01">※关于访问记录后的图片，请参照<a href="help.pl?mode=item&item=422">此处</a>。<br />
※关于访问统计的帮助信息，请参照<a href="help.pl?mode=list&category=21">此处</a>。</p>

<!--/contents--></div>

<!--/extraInner--></div>
<!--/extraWrap02--></div>

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