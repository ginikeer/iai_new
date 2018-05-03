var emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
$(function(){
	$('#email').change(function(){
		if(!emailreg.test($(this).val())){
			$('.error').text('请输入正确的邮箱地址！');
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
	
	if(!emailreg.test($('#email').val()) || $('#password').val()==''){
		$('.error').text('请输入正确的邮箱地址和密码！');
		return false;
	}
	
	$("#form-login").submit();
});
