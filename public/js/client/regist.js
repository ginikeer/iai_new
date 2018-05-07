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
		var _email = $('#regist-email').val();
		
		if(!emailreg.test(_email)){
			$('#error-text').show();
			return;
		}else{
			$.ajax({
				type: "post",
				url: $("#url-check-email").val(),
				headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
				data: {email: _email},
				contentType: false,
	        	cache: false,  
	        	processData: false,
				dataType: "text",
				success: function(result) {
					if(result == "ok") {
						$('.email-text').text(_email);
						$('.tab1').hide();
						$('.tab2').show();
					} else {
						$('#error-text p').text(result);
						$('#error-text').show();
					}
				}
			});
		}
	});
	
})
