var emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
$(function(){
	$('#email').change(function(){
		if(!emailreg.test($(this).val())){
			$('#error-text').show();
		}else{
			$('#error-text').hide();
		}
	});
	$('#password').change(function(){
		if($(this).val()==''){
			$('#error-text').show();
		}else{
			$('#error-text').hide();
		}
	});
});

$('#login-btn').click(function(){
	if(!emailreg.test($('#email').val()) || $('#password').val()==''){
		$('#error-text').show();
		return;
	}
});
