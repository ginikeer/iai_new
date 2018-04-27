var emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
$(function(){
	$('#regist-email').change(function(){
		if(!emailreg.test($(this).val())){
			$('#error-text').show();
		}else{
			$('#error-text').hide();
		}
	});
	
	$('#regist-btn').click(function(){
		if(!emailreg.test($('#regist-email').val())){
			$('#error-text').show();
			return;
		}else{
			$('.tab1').hide();
			$('.tab2').show();
		}
	});
	
})
