var BaseUrl = 'http://localhost/sns';
var memberlist=new Array();
// 页面编辑数据
var inputsData;
var textareasData;
var selectsData;
$(function () {
	$('#joincommuntiy').click(function() {
		$.ajax({
			url:BaseUrl+'/community/index/join',
			data:{cid:document.admincommunity.curcid.value},
			type:'POST',
			success:function(flg){	
				
				if(flg=='1'){
					alert("您已经成功加入本社群");
					location.href=BaseUrl+'/view_community?cid='+document.admincommunity.curcid.value;
					
				}
			}
		});
	});
	$('#quitcommuntiy').click(function() {
		if(confirm("您确认要退出此社群吗？"))
		$.ajax({
			url:BaseUrl+'/community/index/quit',
			data:{cid:document.admincommunity.curcid.value},
			type:'POST',
			success:function(flg){	
				
				if(flg=='1'){
					alert("您已经成功退出本社群！");
					location.href=BaseUrl+'/communitytop';
					
				}else if(flg=='2'){
					alert("社群管理者不可以退出！");
				}
			}
		});
	});

	$('#JS_errorWindow').hide();
	$('div.utilityWindow02').hide();
	$('#friend_selector').click(function() {
		$('#JS_errorWindow').show();
		$('div.utilityWindow02').show();
	});
	$('#closeButton').click(function() {
		$('#JS_errorWindow').hide();
		$('div.utilityWindow02').hide();
	});

	$('#valid').hide();
	$('#invalid').hide();
	
	$('#friendsetting').dialog({
		bgiframe: true,
		autoOpen: false,
		modal: true,
		show:'slide',
		width:640,
		height:500,
		buttons: {
			'保存修改': function() {
				var str ='';
				for(var i =0; i<memberlist.length-1;i++){
					str = str + memberlist[i]+',';
				}
				str = str + memberlist[memberlist.length-1];

				document.friendSettingForm.groups.value=str;

				document.friendSettingForm.action=BaseUrl+'/friend/index/savesetting';
				document.friendSettingForm.submit();
				$(this).dialog('close');
			},
			'关闭': function() {
				checkModification("saveSetting();")
				$(this).dialog('close');
			}
		}
	});


	$('#JS_show_more_profile').click(function() {
		
		if($('#JS_show_more_profile').html()=='全部展开'){
			$('#JS_show_more_profile').html('收缩');
			$('.hidden').show('');
		}else{
			$('#JS_show_more_profile').html('全部展开');
			$('.hidden').hide('');
		}
	});

	
	$('#photochange').dialog({
		bgiframe: true,
		autoOpen: false,
		modal: true,
		show:'slide',
		width:360,
		height:415,
		buttons: {
			'上传': function() {
				if(validate('form')){
					startUpload();
					document.modifyphoto.submit();
				}
				
			},
			'关闭': function() {
				$(this).dialog('close');
			}
		},
		close: function(event) {
			$(':text').val('');
		}
	});
	$('#f1_upload_process').hide();
	$('#edit_profile_image').click(function() {
		$('#photochange').dialog('open');
	});
	$('#edit_profile_image_main').click(function() {
		$('#photochange').dialog('open');
	});

	$('#searchCommunity').click(function() {
		$('#communitySearch').show();
		$('#topicSearch').hide();
		$('#eventSearch').hide();
		$('#searchCommunity').children('a').removeClass();
		$('#searchTopic').children('a').removeClass();
		$('#searchEventDate').children('a').removeClass();
		$('#searchCommunity').children('a').addClass('selected');

	});
	$('#searchTopic').click(function() {
		$('#communitySearch').hide();
		$('#topicSearch').show();
		$('#eventSearch').hide();
		$('#searchCommunity').children('a').removeClass();
		$('#searchTopic').children('a').removeClass();
		$('#searchEventDate').children('a').removeClass();
		$('#searchTopic').children('a').addClass('selected');
	});
	$('#searchEventDate').click(function() {
		$('#communitySearch').hide();
		$('#topicSearch').hide();
		$('#eventSearch').show();
		$('#searchCommunity').children('a').removeClass();
		$('#searchTopic').children('a').removeClass();
		$('#searchEventDate').children('a').removeClass();
		$('#searchEventDate').children('a').addClass('selected');
	});
	var members = document.createform.members.value;
	if(members!='') memberlist=members.split(",");

});

function checkCookie(){
		if (!navigator.cookieEnabled ) { alert("请将浏览器的Cookie设置为有效。");return false; }

		return true;
}


function Addme()
{
 if (document.all)
    {
       window.external.addFavorite(location.href,'疯狂音乐网');
    }
    else if (window.sidebar)
    {
       window.sidebar.addPanel(document.title,location.href, "");
 }
}

function setHomepage()
{
 if (document.all)
    {
        document.body.style.behavior='url(#default#homepage)';
  document.body.setHomePage('http://www.challengers.com');
 
    }
    else if (window.sidebar)
    {
    if(window.netscape)
    {
         try
   { 
            netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect"); 
         } 
         catch (e) 
         { 
    alert( "该操作被浏览器拒绝，如果想启用该功能，请在地址栏内输入 about:config,然后将项 signed.applets.codebase_principal_support 值该为true" ); 
         }
    }
    var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components. interfaces.nsIPrefBranch);
    prefs.setCharPref('browser.startup.homepage','http://www.challengers.com');
 }
}


function checkEmail(){
	if(validate('form')){
		document.regForm.submit();
	}
}
function checkRegister(){
	if(validate('form')){
		if(document.regForm.agree.checked==true)
			document.regForm.submit();
		else
			alert('您还没有选择是否同意网站使用规则。');
	}
}
function checkMobile(){
	if(validate('form')){
		document.regForm.submit();
	}
}
function endRegister(url){
	document.regForm.action=url;
	document.regForm.submit();
}

function deletePic(no,id){
	if(confirm('您确定要删除此照片吗？'))
	$.ajax({
		url:'/sns/blog/index/deletepic',
		data:{no:no},
		type:'POST',
		success:function(str){	
			var flg = str.substr(str.length-1,1);
			if(flg=='1'){
				$('div#'+id).remove();
			}
		}
	});

}
function startUpload(){
      $('#f1_upload_process').show();
	  $('#f1_upload_form').hide();
      return true;
}

function stopUpload(success,img){
      if (success == 1){
         $('img#myimage').attr('src',img);
      }else {
         alert('个人形象照片上传失败。');
		 return false;
      }
      $('#f1_upload_process').hide();
	  $('#f1_upload_form').show(); 
	  $('#f1_upload_form').html('<input name="myfile" type="file" size="20" /><br/>提示：只允许上传JPEG,GIF,PNG文件');
      return true;   
}
function setSelect(e){
var inputList = document.listForm.elements;
        for (var i = 0; i < inputList.length; i++) {
            var input = inputList[i];
            if(input.type == 'checkbox')
                input.checked = true;
        }
}

function setRelease(e){
var inputList = document.listForm.elements;
        for (var i = 0; i < inputList.length; i++) {
            var input = inputList[i];
            if(input.type == 'checkbox')
                input.checked = false;
        }
}

function setReverse(e){
var inputList = document.listForm.elements;
        for (var i = 0; i < inputList.length; i++) {
            var input = inputList[i];
            if(input.type == 'checkbox')
                input.checked == false ?input.checked = true :input.checked = false ;
        }
}

function doMove(e){
	document.listForm.action=BaseUrl+'/message/recieve/recoverall';
	if(listChk()){
		return true;
	}else{
		return false;
	}
}
function doDel(e){
	document.listForm.action=BaseUrl+'/message/recieve/delete';
	if(listChk()){
		return true;
	}else{
		return false;
	}
}
function listChk(e){
	var inputList = document.listForm.elements;
	var count=0;
    for (var i = 0; i < inputList.length; i++) {
        var input = inputList[i];
        if(input.type == 'checkbox' && input.checked == true)
            count++;
    }
    
    if(count == 0){
    	alert('请选择留言。');
    	return false;
    }
    document.listForm.submit();
    return true;
}
function getFriendlist(gid){
	$.ajax({
		url:'/sns/message/index/list',
		data:{gid:gid},
		type:'POST',
		success:function(str){	
			$('#friendContents').html(str);
		}
	});
}
function nextPage(gid,pageno){
	$.ajax({
		url:'/sns/message/index/list',
		data:{gid:gid,pageno:pageno},
		type:'POST',
		success:function(str){	
			$('#friendContents').html(str);
		}
	});
}
function selectFriend(fuid){
	
	$.ajax({
		url:'/sns/message/index/select',
		data:{uid:fuid},
		type:'POST',
		success:function(str){	
			$('#selected_friend').html(str);
			document.createform.sendto.value=fuid;
			$('#JS_errorWindow').hide();
			$('div.utilityWindow02').hide();
		}
	});
}
function showSelectWindow(){
	$('#JS_errorWindow').show();
	$('div.utilityWindow02').show();
}

function checkMessage(mode){
	if(mode == 2) {
		document.createform.action = "/sns/message/index/send";
		
	}
	document.createform.mode.value = mode;
	if(validate('form')){
		if(document.createform.sendto.value!='')
			document.createform.submit();
		else
			alert('您选择收件人。');
	}
}

function deleteOne(mid,mode,flg){
	if(mode == 'delitem'){
		if(confirm("您需要永久删除此留言吗？"))
		$.ajax({
			url:'/sns/message/recieve/deleteone',
			data:{mid:mid,mode:mode,modeflg:flg},
			type:'POST',
			success:function(str){	
				window.location.reload();
			}
		});
	}else{
		$.ajax({
			url:'/sns/message/recieve/deleteone',
			data:{mid:mid,mode:mode,modeflg:flg},
			type:'POST',
			success:function(str){	
				window.location.reload();
			}
		});
	}

}

function selectMember(uid){
	$('#friend'+uid).addClass('selected');
	$('#friendaction'+uid).addClass('selected');
	$('#friendaction'+uid).html("<a  class='select' onclick='cancelMember("+uid+")'><img src='"+BaseUrl+"/images/hatsusu001-.png' alt='取消' width='44' height='16'></a>");
	memberlist.push(uid); 
}
function removeMember(uid){
	for(var i =0; i<memberlist.length;i++){
		if(memberlist[i]==uid) memberlist.shift(memberlist[i]);
	}
}
function cancelMember(uid){
	$('#friend'+uid).removeClass('selected');
	$('#friendaction'+uid).removeClass('selected');
	$('#friendaction'+uid).html("<a  class='select' onclick='selectMember("+uid+")'><img src='"+BaseUrl+"/images/sentaku001-.png' alt='取消' width='44' height='16'></a>");
	removeMember(uid);
}
function createGroup(){
	if(validate('form')){
		if(document.createform.gname.value=='请输入组名'){
			alert('请输入组名');
			return true;
		}else{
			var str ='';
			for(var i =0; i<memberlist.length-1;i++){
				str = str + memberlist[i]+',';
			}
			str = str + memberlist[memberlist.length-1];

			document.createform.members.value=str;
			document.createform.submit();
		}
	}
}

function deleteGroup(){
	if(confirm('您确定要删除此组吗？')){
		document.createform.action = BaseUrl+'/friend/group/delete';
		document.createform.submit();
	}
}
function searchMailChk(){
	if(validate('form')){
		document.searchform.submit();
		return true;
	}else{
		return false;
	}
	return true;
}
function showRefuseArea(sel){
  if(sel.options[sel.options.selectedIndex].value==2) $('#refuse_date_area').show();
  else $('#refuse_date_area').hide();
}
// 记录下表单中的原始值
function initFileds() {
	
       var inputs = document.getElementsByTagName("input");
       var textareas = document.getElementsByTagName("textarea");
       var selects = document.getElementsByTagName("select");
       inputsData = new Array(inputs.length);
       for (var i=0;i<inputs.length;i++) {
         inputsData[i] = inputs[i].value;
         if (inputs[i].type=="radio") {
            inputsData[i]=inputs[i].checked;
         }
       }
       textareasData = new Array(textareas.length);
       for (var i=0;i<textareas.length;i++) {
         textareasData[i] = textareas[i].value;
       }
       selectsData = new Array(selects.length);
       for (var i=0;i<selects.length;i++) {
		   if(selects[i].id!='sortSelect') selectsData[i] = selects[i].value;
       }
}
function doFriendSetting(fuid){
	$('#friendsetting').dialog('open');
	$.ajax({
		url:'/sns/friend/index/config',
		data:{fuid:fuid},
		type:'POST',
		success:function(str){	
			$('#friendsetting').html(str);
			
			initFileds();
			
			$('#editIntroduction').click(function() {
				$('#editIntroductionSection').show();
				$('#viewIntroductionSectionYes').hide();
			});
			$('#deleteIntroduction').click(function() {
				$('#introductionAction').hide();
				$('#introductionDeleteConfirm').show();
			});
			$('#introductionDeleteConfirmNo').click(function() {
				$('#introductionAction').show();
				$('#introductionDeleteConfirm').hide();
			});
			$('#introductionDeleteConfirmYes').click(function() {
				document.friendSettingForm.relationship.value='';
				document.friendSettingForm.contents.value=''
				$("#relation").html("关系：");
				$("#relation").hide();
				$("#introduction").html("");
				$('#introductionAction').show();
				$('#introductionDeleteConfirm').hide();

				$('#editIntroductionSection').hide();
				$('#viewIntroductionSectionYes').hide();

				$('#viewIntroductionSectionNone').show();
			});
			$('#viewMemoSectionNone').click(function() {
				$('#editMemoSection').show();
				$('#viewMemoSectionNone').hide();
			});
			$('#editMemo').click(function() {
				$('#editMemoSection').show();
				$('#viewMemoSectionYes').hide();
			});
			
			$('#deleteMemo').click(function() {
				$('#memoAction').hide();
				$('#memoDeleteConfirm').show();
			});
			$('#memoDeleteConfirmNo').click(function() {
				$('#memoAction').show();
				$('#memoDeleteConfirm').hide();
			});
			$('#memoDeleteConfirmYes').click(function() {
				document.friendSettingForm.memo.value='';

				$("#memo").html("");
				$('#memoAction').show();
				$('#memoDeleteConfirm').hide();

				$('#editMemoSection').hide();
				$('#viewMemoSectionYes').hide();

				$('#viewMemoSectionNone').show();
			});
			var members = document.friendSettingForm.groups.value;
			if(members!='') memberlist=members.split(",");
			else memberlist=new Array();
		}
	});

}

function closeWriteMemo(){

	$('#editMemoSection').hide();
	if($("#memo").html()==''){
		$('#viewMemoSectionNone').show();
		document.friendSettingForm.memo.value='';
	}else{
		document.friendSettingForm.memo.value=$("#memo").html();

		$('#viewMemoSectionYes').show();
	}
}
function confirmMemo(){
	if(document.friendSettingForm.memo.value==''){
		alert("请输入备注文字！");
	}else{ 
		$('#memo').html(document.friendSettingForm.memo.value);
		$('#viewMemoSectionYes').show();
		$('#editMemoSection').hide();
	}
}
function quitGroup(gid,gname){
	$('li#selectedTag'+gid).remove();
	var str = $('#unselectedTagsSelect').html();
	document.friendSettingForm.unselectedTags.options.add(new Option(gname,gid));
	//$('#unselectedTagsSelect').html(str+'<option   value="'+gid+'">'+gname+'</option>');
	removeMember(gid);
}
function addToGroup(sel){
	var str = $('#selectedTagList').html();
	var selOption = sel.options[sel.options.selectedIndex];
	var sval=selOption.value;
	var name=selOption.text;
	if(sval==''){
		alert('请选择对象组！');
	}else{
		var optionStr = '<li id="selectedTag'+sval+'"><span class="name">'+name+'</span><a href="#" class="displace" onclick="quitGroup('+"'"+sval+"','"+name+"'"+')">退出该组</a></li>';
		$('#selectedTagList').html(str+optionStr);
		sel.remove(sel.options.selectedIndex);
		memberlist.push(sval); 
		
	}
}
function showCreateGroupSection(){
		$('#createGroupSection').show();
		$('#createGroup').hide();
		//alert(document.friendSettingForm.gname.disabled);
		document.friendSettingForm.gname.removeAttribute('disabled',0);
}
function hideCreateGroupSection(){
	$('#createGroupSection').hide();
	$('#createGroup').show();
}
function writeIntroduce(){
	$('#editIntroductionSection').show();
	$('#viewIntroductionSectionNone').hide();
}
function closeWriteIntroduce(){
	$('#editIntroductionSection').hide();
	if($("#introduction").html()==''){
		$('#viewIntroductionSectionNone').show();
		document.friendSettingForm.contents.value='';
		document.friendSettingForm.relationship.value='';
	}else{
		document.friendSettingForm.contents.value=$("#introduction").html();
		var relationstr=$("#relation").html();
		document.friendSettingForm.relationship.value=relationstr.substring(3);
		$('#viewIntroductionSectionYes').show();
	}
}

function deleteFromList(fuid){
	if(confirm("您确定要将此朋友从社交圈中删除吗？")){
		$.ajax({
			url:'/sns/friend/index/delete',
			data:{fuid:fuid},
			type:'POST',
			success:function(str){	
				if(str=='1'){
					window.location.reload();
					$('#friendsetting').dialog('close');
					
				}
			}
		});
	}
}
function createNewGroup(){
	$.ajax({
		url:'/sns/friend/index/addgroup',
		data:{gname:document.friendSettingForm.gname.value},
		type:'POST',
		success:function(sval){	
			if(sval!=''){
				var name=document.friendSettingForm.gname.value;
				var str = $('#selectedTagList').html();
				var optionStr = '<li id="selectedTag'+sval+'"><span class="name">'+name+'</span><a href="#" class="displace" onclick="quitGroup('+"'"+sval+"','"+name+"'"+')">退出该组</a></li>';
				alert(optionStr);
				$('#selectedTagList').html(str+optionStr);
				hideCreateGroupSection();
				
			}
		}
	});
	
}
function confirmIntroduce(){
	if(document.friendSettingForm.contents.value==''){
		alert('请输入介绍内容！');
	}else{
		$("#relation").html("关系："+document.friendSettingForm.relationship.value);
		if(document.friendSettingForm.relationship.value!='') $('#relation').show();
		$("#introduction").html(document.friendSettingForm.contents.value);
		$('#editIntroductionSection').hide();
		$('#viewIntroductionSectionYes').show();
	}
}

/*
    * 判断表单中值是否被修改了
    * submitCommand 表单有改动时,执行的javascript代码
    */
function checkModification(submitCommand) {
       var inputs = document.getElementsByTagName("input");
       var textareas = document.getElementsByTagName("textarea");
       var selects = document.getElementsByTagName("select");
       var hasBeenChanged = false;
       for (var i=0;i<inputs.length;i++) {
         if (inputs[i].type=="radio"&&(inputs[i].checked!=inputsData[i])) {
            hasBeenChanged = true;
            inputsData[i]=inputs[i].checked;
         }
         if (inputs[i].type!="radio"&&inputsData[i]!=inputs[i].value) {
         if(inputs[i].name!="actionType"){
                hasBeenChanged = true;
            }
            inputsData[i]=inputs[i].value;
         }
       }
       for (var i=0;i<textareas.length;i++) {
         if (textareasData[i]!=textareas[i].value) {
            hasBeenChanged = true;
            textareasData[i]=textareas[i].value;
         }
       }
       for (var i=0;i<selects.length;i++) {
         if (selectsData[i]!=selects[i].value) {
            hasBeenChanged = true;
            selectsData[i]=selects[i].value;
         }
       }
      if (hasBeenChanged&&confirm("数据已经改变,是否保存？")) {
         eval(submitCommand);
      }
} 

function saveSetting(){
	document.friendSettingForm.action=BaseUrl+'/friend/index/savesetting';
	document.friendSettingForm.submit();
}