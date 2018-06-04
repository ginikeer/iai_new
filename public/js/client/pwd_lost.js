var emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
var flag = false;
$(function(){
	$('#lost-email').change(function(){
		if(!emailreg.test($(this).val())){
			$('#error-text').show();
		}else{
			$('#error-text').hide();
		}
	});
	
	$('#email-send-btn').click(function(){
		if(!emailreg.test($('#lost-email').val())){
			$('#error-text').show();
		}else{
			$.ajax({
				type: "post",
				url: $("#url-email-password").val(),
				headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
				data: {email: $("#lost-email").val()},
				dataType: "text",
				success: function(result) {
					if(result == "ok") {
						$('.send-hide').show();
					} else {
						$('.send-hide').text(result).show();
					}
				}
			});
		}
	});
	
	$('#new-password').change(function(){
		if($(this).val()==''){
			$(this).parents('.form-item').next('.error-text').show();
			flag = false;
			return;
		}else if($(this).val() != $('#repeat-password').val()){
			$(this).parents('.form-item').next('.error-text').hide();
			$('#repeat-password').parents('.form-item').next('.error-text').show().text('两次输入的密码不一致');
			flag = false;
			return;
		}else{
			$(this).parents('.form-item').next('.error-text').hide();
			$('#repeat-password').parents('.form-item').next('.error-text').hide();
			flag = true;
		}
	});
	
	$('#repeat-password').change(function(){
		if($(this).val()==''){
			$(this).parents('.form-item').next('.error-text').show().text('请重复新密码');
			flag = false;
			return;
		}else if($(this).val() != $('#new-password').val()){
			$(this).parents('.form-item').next('.error-text').show().text('两次输入的密码不一致');
			flag = false;
			return;
		}else{
			$(this).parents('.form-item').next('.error-text').hide();
			flag = true;
		}
	});
	
	$('#send-new-btn').click(function(){
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
			window.location.href = $('#send-new-link').val();
		}
	});
	
});