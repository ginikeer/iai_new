var flag = false;
$(function(){
	
	$('#send-change-btn').click(function(){
		if($('#old-password').val()==''){
			$('#old-password').parents('.form-item').next('.error-text').show();
			flag = false;
			return;
		}else{
			flag = true;
		}
		
		if($('#new-password').val()==''){
			$('#new-password').parents('.form-item').next('.error-text').show();
			flag = false;
			return;
		}else{
			flag = true;
		}
		
		if($('#repeat-password').val()==''){
			$('#repeat-password').parents('.form-item').next('.error-text').show().text('请重复新密码');
			flag = false;
			return;
		}else{
			flag = true;
		}
		
		if($('#new-password').val() != $('#repeat-password').val()){
			$('#repeat-password').parents('.form-item').next('.error-text').show().text('两次输入的密码不一致');
			flag = false;
			return;
		}else{
			flag = true;
		}
		if(flag){
			window.location.href = $('#send-change-link').val();
		}
	});
});