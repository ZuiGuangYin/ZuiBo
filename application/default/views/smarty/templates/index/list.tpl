<div id="content">
		<h1 class="pagetitle">人气书签排名{if $currentstylenm!=NULL && $currentstylenm!=''}：：{$currentstylenm}{/if}</h1>
		<a href="{$rssurl|smarty:nodefaults}" id="rss-posts">RSS Feeds</a><a href="#" id="detail" onclick="display()">隐藏详细介绍</a>
		<br/>
		<div align="right">{$pager|smarty:nodefaults}</div>
		{foreach from=$result|smarty:nodefaults item="item"}
		<dl class="bookmark">
				<dt class="bookmarktitle">
					<a target=_blank href="{$item.url|smarty:nodefaults}" rel="nofollow"><img src="http://favicon.hatena.ne.jp/?url={$item.durl}" alt="" /></a><a class="bookmarktitle" href="{$item.url|smarty:nodefaults}" rel="nofollow">{$item.title}</a> <span class="mainurl"> <a href="{$base}/bmsearch?type=url&key={$item.httpmainurl}"><small>{$item.mainurl}</small></a></span>{ if $smarty.session.myApp.isLogined && $item.ownerflg!=1 }<a href="{$base}/bm/submit/add/?bid={$item.bid}" class="icon-edit"><img src="{$base}/img/user/bmadd.gif" title="追加到个人收藏夹"/></a>{/if}
				</dt>
				<dd class="bookmarkdetail">
				<img src="{$base}/img/keyword-icon.gif" alt="分类"/>{if $currentcategory !=''}<a class="style" href="{$base}/bmlist?styleid={$item.style}" target="" alt="{$item.stylenm}">{$item.stylenm} </a>{else}<a class="category" href="{$base}/bmlist?categoryid={$item.category}" target="" alt="{$item.categorynm}">{$item.categorynm} </a> {/if}&nbsp;&nbsp;<span class="key">{foreach from=`$item.keys` item="key"}
				<a href="{$base}/bmsearch?type=key&key={$key|escape:"url"}">{$key}</a>&nbsp;
			{/foreach}</span><img src="{$base}/img/page.gif" alt=""/><a href="{$base}/entry/bm-entry-{$item.bid}.html">{$item.c} user &nbsp;&nbsp;</a><span class="cdat">{$item.updated|date_format:"%Y-%m-%d"}</span>
				<div class="bookmarkcontents">	{$item.contents|smarty:nodefaults}<a class="bookmarktitle" href="{$item.url|smarty:nodefaults}" rel="nofollow">查看详细信息</a></div>
				</dd>
		</dl>
		{/foreach}
		<div align="right">{$pager|smarty:nodefaults}</div>
</div>
<div id="sidebar">
		<ul>
			<li>
				<h2>最新登录的书签</h2>
				{foreach from=$newbookmark|smarty:nodefaults item="item"}
				<dl class="bookmark">
						<dt class="bookmarktitle">
							<a class="bookmarktitle" href="{$item.url|smarty:nodefaults}" rel="nofollow">{$item.title}</a><br/>&nbsp;&nbsp; <span class="mainurl"> <a href="{$base}/bmsearch?type=url&key={$item.httpmainurl}"><small>{$item.mainurl}</small></a></span><a href="{$base}/entry/bm-entry-{$item.bid}.html">{$item.c} user &nbsp;&nbsp;</a>
						</dt>
				</dl>
				{/foreach}
			</li>
		</ul>
</div>
