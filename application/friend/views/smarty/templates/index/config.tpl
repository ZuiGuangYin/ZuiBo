<div class="contentStage">
<form name="friendSettingForm" method="post">
<input type="hidden" name="fuid" value="{$info.fuid}"/>
<fieldset>
<table>
<tbody><tr>
<th rowspan="6" scope="row" class="thumbName"><div class="thumbnail" style="background-image: url(&quot;{$base}/{$info.img|smarty:nodefaults}&quot;);">{$info.nick_name}的照片</div>{$info.nick_name}({$info.cnt})</th>
<th scope="row">铁哥们设置</th>
<td class="nakayoshi">
<input id="nakayoshiCheckbox" name="fflg" type="checkbox" value="1" {if $info.fflg ==1}checked {/if}><label for="nakayoshiCheckbox">设置为铁哥们<span class="supplement01">（设置内容不会通知对方）</span></label>
</td>
</tr>
<tr>
<th scope="row">分组信息</th>
<td class="tagManagement">
  <ul id="selectedTagList">
  <input type="hidden" name="groups" value="{$info.groups}"/>
{foreach from=$info.mygroups|smarty:nodefaults item="item"}

    <li id="selectedTag{$item.gid}"><span class="name">{$item.gname}</span><a href="#" class="displace" onclick="quitGroup('{$item.gid}','{$item.gname}')">退出该组</a></li>
{/foreach}    
 
  </ul>
<div id="unselectedTagList" style="display: block;">
  <select name="unselectedTags" id="unselectedTagsSelect">
  <option selected="selected" value="">选择加入的组名</option>
  {foreach from=$info.othergroups|smarty:nodefaults item="item"} 
    <option   value="{$item.gid}">{$item.gname}</option>
  {/foreach}   
  </select><input class="formBt01 addGroup" value="移动到组中" type="button" onclick="addToGroup(document.friendSettingForm.unselectedTags)">
</div>

{if $groupamount< 5}<a href="#" id="createGroup" style="display: inline;" onclick="showCreateGroupSection()">创建新组</a>{/if}
<div id="createGroupSection" style="display: none;">
  <p class="inputAlert01" id="groupNameLengthAlert" style="display: none; margin-bottom: 3px;">请输入15个字符以内的组名。</p>
  <input name="gname" size="30" class="tagname"  type="text"><input class="formBt01 createGroupButton" value="创建" type="button" onclick="createNewGroup()"><input class="formBt02 cancelCreateGroupButton" value="取消" type="button" onclick="hideCreateGroupSection()">
  <p class="supplement01" id="groupNameLengthNotice">※例：如大学同学大学等（全角15字符以内）</p>
</div>

<div id="tagOverflowMessage" class="supplement01" style="display: none;">※每个人能最多创建16个组。</div>
<div id="tagManageMessage" class="supplement01" style="display: none;">※能将一个朋友最多追加到5个组中。</div>
</td>
</tr>



<tr><th scope="row">是否显示最新博客</th>
<td class="checkList"><input name="new_friend_blog" value="1" id="newFriendDiaryRadio1" type="radio" {if $info.new_friend_blog ==1} checked{/if}><label for="newFriendDiaryRadio1">显示</label>
<input name="new_friend_blog" value="0" id="newFriendDiaryRadio2" checked="checked" type="radio" {if $info.new_friend_blog ==0} checked{/if}><label for="newFriendDiaryRadio2">不显示</label></td>
</tr>



<tr><th scope="row">朋友介绍</th>
<td class="introductionManagement">
  <div id="viewIntroductionSection">
    <div id="viewIntroductionSectionNone" {if $info.contents!=''}style="display: none;" {else} style="display: block;"{/if}><a href="#" onclick="writeIntroduce()">撰写朋友介绍</a></div>

    <div id="viewIntroductionSectionYes" {if $info.contents==''}style="display: none;" {else} style="display: block;"{/if}>
      <div id="relation" class="relation" {if $info.relationship==''}style="display: none;" {else} style="display: block;"{/if}>关系：{$info.relationship}</div>
      <div id="introduction">{$info.contents}</div>
      <div id="introductionAction"><a href="#" id="editIntroduction">编辑</a> <a href="#" id="deleteIntroduction">删除</a></div>
      <div id="introductionDeleteConfirm" style="display: none;">您确定要删除吗？ <a href="#" id="introductionDeleteConfirmYes">确定</a> / <a href="#" id="introductionDeleteConfirmNo">取消</a></div>
    </div>
  </div>

  <div id="editIntroductionSection" style="display: none;">
    <div>
      <div id="relation" class="relation" >关系：</div>
      <input name="relationship" size="30" class="relationname" type="text" maxlength="100" value="{$info.relationship}"/>
       <p class="supplement01">※(例) 同事 、大学同学等<br>※全角15个字符以内</p>
    </div>
    <textarea name="contents" cols="12" rows="8" >{$info.contents}</textarea>
    <p class="supplement01" id="introductionLengthNotice">※全角1000个字符以内</p>
    <p class="supplement01">※请在同意了本网站的<a href="{$base}/rules" target="_blank">使用规则</a>，并且确认了<a href="{$base}/privacy" target="_blank">个人信息保护事项</a>后，再进行提交。</p>
    

    <p class="buttons"><input class="formBt01 fixEditIntroductionButton" value="内容确认" type="button" onclick="confirmIntroduce()"><input class="formBt02 cancelEditIntroductionButton" value="取消" type="button" onclick="closeWriteIntroduce()"></p>
  </div>
</td>
</tr>



<tr><th scope="row">备注</th>
<td class="memoManagement">
    <div id="viewMemoSection">
        <div id="viewMemoSectionNone" {if $info.memo!=''}style="display: none;" {else} style="display: block;"{/if}><a href="#" >写备注</a></div>

        <div id="viewMemoSectionYes" {if $info.memo==''}style="display: none;" {else} style="display: block;"{/if}>
            <div id="memo">{$info.memo}</div>
	    <div id="memoAction"><a href="#" id="editMemo" >编辑</a> <a href="#" id="deleteMemo">删除</a></div>
	    <div id="memoDeleteConfirm" style="display: none;">您确定要删除吗？ <a href="#" id="memoDeleteConfirmYes">确定</a> / <a href="#" id="memoDeleteConfirmNo">取消</a></div>
        </div>
    </div>
  <div id="editMemoSection" style="display: none;">
    <textarea name="memo" cols="30" rows="3" >{$info.memo}</textarea>
    <p class="supplement01" id="memoLengthNotice">※全角100个字符以内</p>

    <p class="buttons"><input class="formBt01 fixEditMemoButton" value="内容确认" type="button" onclick="confirmMemo()"><input class="formBt02 cancelEditMemoButton" value="取消" type="button" onclick="closeWriteMemo()"></p>
  </div>
</td>
</tr>



<tr><th scope="row">社交圈管理</th>
<td>
  
  <a href="#" id="deleteFriend" onclick="deleteFromList('{$info.fuid}')">从社交圈中删除</a><br><span class="supplement01">※从社交圈中删除的动作不会通知对方。</span>
  
</td></tr>


</tbody></table>
</fieldset>
</form>

<div class="formButtons01">
     <p class="supplement01">※如果想保存修改到系统中，请务必点击【保存修改】按钮。</p>
</div>

</div>