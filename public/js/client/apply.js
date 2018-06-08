$(function() {
	$("#apply_form").submit(function(event) {
		var flag = true;
		
		$(".required").each(function() {
			if($(this).val() == "") {
				flag = false;
				alert("请填写全部信息！");
			}
		});
		
		if(flag) $(this).submit();
		
        event.preventDefault();
	});
});