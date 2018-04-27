var flag = false;
$(function(){
	$('#password').change(function(){
		if($(this).val()==''){
			$(this).parents('.form-item').next('.error-text').show();
			flag = false;
			return;
		}else{
			$(this).parents('.form-item').next('.error-text').hide();
			flag = true;
		}
	});
	
	$('#company').change(function(){
		if($(this).val()==''){
			$(this).parents('.form-item').next('.error-text').show();
			flag = false;
			return;
		}else{
			$(this).parents('.form-item').next('.error-text').hide();
			flag = true;
		}
	});
	
	$('#department').change(function(){
		if($(this).val()==''){
			$(this).parents('.form-item').next('.error-text').show();
			flag = false;
			return;
		}else{
			$(this).parents('.form-item').next('.error-text').hide();
			flag = true;
		}
	});
	
	$('#tel').change(function(){
		if($(this).val()==''){
			$(this).parents('.form-item').next('.error-text').show();
			flag = false;
			return;
		}else{
			$(this).parents('.form-item').next('.error-text').hide();
			flag = true;
		}
	});
	
	$('#next-btn').click(function(){
		if($('#password').val() == ''){
			$('#password').parents('.form-item').next('.error-text').show();
			flag = false;
			return;
		}else{
			flag = true;
		}
		
		if($('#company').val() == ''){
			$('#company').parents('.form-item').next('.error-text').show();
			flag = false;
			return;
		}else{
			flag = true;
		}
		
		if($('#department').val() == ''){
			$('#department').parents('.form-item').next('.error-text').show();
			flag = false;
			return;
		}else{
			flag = true;
		}
		
		if($('#tel').val() == ''){
			$('#tel').parents('.form-item').next('.error-text').show();
			flag = false;
			return;
		}else{
			flag = true;
		}
		
		if(flag){
			$('.info-read').prop("disabled",true);
			$('.info-btn').hide();
			$('.check-btn').show();
			
			$('#back-btn').click(function(){
				$('.info-read').prop("disabled",false);
				$('.info-btn').show();
				$('.check-btn').hide();
			});
			
			$('#regist-check-btn').click(function(){
				window.location.href = $('#regist-btn-link').val();
			});
		}
		
//		window.location.href = $('#next-btn-link').val();
	});
});
