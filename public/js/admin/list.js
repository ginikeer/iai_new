$(function() {
	//搜索按钮
	$(".search").on("click", function() {
		$("#condition-form").submit();
	});
	
	$(".del").on("click", function() {
		clearAlert();
		var _id = $(this).attr("data-id");
		
		if(! window.confirm('确定要删除该数据？')) return false;	
		
		$.ajax({
			type: "post",
			url: $("#url-del").val(),
			headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
			data: { id: _id },
			dataType: "text",
			success: function(result) {
				if(result == "ok") {
					location.href = location.href;
				} else {
					alertError(result);
				}
			}
		});
	});
});
