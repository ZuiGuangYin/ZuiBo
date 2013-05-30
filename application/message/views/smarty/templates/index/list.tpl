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
        <td class=" last" id="friendaction{$item.uid}" onClick="javascript:selectFriend('{$item.uid}');"><a  href="javascript:void(0);"><img alt="选择" src="sentaku001-.png" width="44" height="16"></a>
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