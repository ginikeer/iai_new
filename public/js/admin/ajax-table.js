$(document).ready(function() {
	//编辑按钮
	$(".ajax-table .edit").on("click", function() {
		$(this).parent("td").siblings("td").children(".table-span").hide();
		$(this).parent("td").siblings("td").children(".table-input").show();	
		if($(".table-select").length > 0)
			$(this).parent("td").siblings("td").children(".table-select").removeAttr("disabled");
		
		$(this).hide();
		$(this).siblings(".confirm, .cancel").css("display", "inline-block");
	});
	
	//取消编辑按钮
	$(".ajax-table .cancel").on("click", function() {
		$(this).parent("td").siblings("td").children(".table-span").show();
		$(this).parent("td").siblings("td").children(".table-input").hide();
		
		if($(".table-select").length > 0)
			$(this).parent("td").siblings("td").children(".table-select").attr("disabled", "disabled");
		
		$(this).hide();
		$(this).siblings(".confirm").hide();
		$(this).siblings(".edit").css("display", "inline-block");
	});
	
	//确认按钮
	$(".confirm").on("click", function() {
		clearAlert();
		
		var _id = $(this).attr("data-id");
		var formData = new FormData($("#ajax_table_form" + _id)[0]);			
		
		$.ajax({
			type: "post",
			url: $("#url_edit").val(),
			headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
			data: formData,
			contentType: false,
        	cache: false,  
        	processData: false,
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
		
	//删除按钮
	$(".del").on("click", function() {
		clearAlert();
		var _id = $(this).attr("data-id");
		
		if(! window.confirm('确定要删除该数据？')) return false;	
		
		$.ajax({
			type: "post",
			url: $("#url_del").val(),
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