$(function () {
	$('#logindialog').dialog({
		bgiframe: true,
		autoOpen: true,
		modal: true,
		show:'slide',
		width:360,
		height:260,
		buttons: {
			'登录': function() {
				if(checkCookie()){
					$.ajax({
						url:'/sns/login',
						data:{mail:document.loginform.mail.value,passwd:document.loginform.passwd.value,persistent:document.loginform.persistent.checked==true?1:0},
						type:'POST',
						success:function(str){	
							var flg = str.substr(str.length-1,1);
							if(flg=='0'){
								
								$('p#loginerrors').html('登录失败。请确认邮件地址与密码。').css('color','#f00');
							}else{
								location.href='/sns/';
							}
						}
					});
					
				}
			},
			'注册': function() {
				$(this).dialog('close');
				location.href='/sns/register';
			},
			'关闭': function() {
				$('p#loginerrors').html('');
				$(this).dialog('close');
			}
		},
		close: function(event) {
			$(':text').val('');
		}
	});

	$('#login').click(function() {
		$('#logindialog').dialog('open');
	});

});

function checkCookie(){

		if (!navigator.cookieEnabled ) { alert("请将浏览器的Cookie设置为有效。");return false; }

		return true;
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
