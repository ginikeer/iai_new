$(function() {
	$(".upload-file").on("change", function() {
		var _url = ( $(this).attr("data-action") == undefined ) ? $("#url_file_upload").val() : $(this).attr("data-action");
		
		var $this = $(this);
		var $file_name = $(this).siblings(".file-name");
		var $img_preview = $(this).siblings(".img-preview");
		var $img_success = $(this).siblings(".file-upload-success");
		var _is_img = $img_preview.length;
		var $upload_success_url = $("#upload_success_url").val();
		var formData = new FormData();
		
		$img_success.show();
		formData.append('file', $(this)[0].files[0]);
		formData.append('is_img', _is_img);
		
		$.ajax({
		    url: _url,
		    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
		    type: 'POST',
		    cache: false,
		    data: formData,
		    processData: false,
		    contentType: false,
		    dataType: "json"
		}).done(function(res) {
			if(res.code) {
				var file_name = res.message;
				$file_name.val(file_name);
				if(_is_img) {
					console.log(1);
					$img_preview.attr("src", res.img_full_path);
				} else {
					console.log(2);
					$img_success.attr("src",$upload_success_url);
				}
			} else {
				alert(res.message);
//				location.href = location.href;
			}
		}).fail(function(res) {
			console.log(res);
		});
	});
})
	
	