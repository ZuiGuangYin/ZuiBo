
		<div class=" greenbox">
			<div class="title">
				<h1>网络技术文章</h1>
			</div>
			
			<div class="entry"> 
				
				<table width="580" height="163" border="1" cellpadding="0" cellspacing="0">
				  <tr>
				    <th width="85" align="center">类型</th>
				    <th width="495" align="center">标题</th>
				  </tr>
				  {foreach from=$allarticles|smarty:nodefaults item="item"}
				  <tr>
				    <td>{$item.kindname}</td>
				    <td><a href="/website/article/ar{$item.no}.html">{$item.title}</a></td>
				  </tr>
				  {/foreach}
				  
				</table>
			</div>
			<hr/>
			
			
		</div>
