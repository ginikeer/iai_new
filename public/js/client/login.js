var emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
var mobilereg = /^(1\d{10})|\d{7,8}$/;

$(function(){
	$('#account').change(function(){
		if(!emailreg.test($(this).val()) && !mobilereg.test($(this).val())){
			$('.error').text('请输入正确的邮箱或手机号！');
		}else{
			$('.error').text('');
		}
	});
	$('#password').change(function(){
		if($(this).val()==''){
			$('.error').text('密码不能为空！');
		}else{
			$('.error').text('');
		}
	});
});

$('#login-btn').click(function(){
	$(".error").text("");
	
	if(!emailreg.test($('#account').val()) || $('#password').val()==''){
		$('.error').text('请输入正确的邮箱或手机号和密码！');
		return false;
	}
	
	$("#form-login").submit();
});
