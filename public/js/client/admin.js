

$(function(){
	$('#username').change(function(){
		if($(this).val() == ''){
			$('.error').text('用户名不能为空值！');
		}else{
			$('.error').text('');
		}
	});
	$('#password').change(function(){
		if($(this).val()==''){
			$('.error').text('密码不能为空值！');
		}else{
			$('.error').text('');
		}
	});
});

$('#login-btn').click(function(){
	$(".error").text("");
	
	if($('#username').val()=='' || $('#password').val()==''){
		$('.error').text('用户名或密码不能为空值！');
		return false;
	}
	$("#form-login").submit();
});
