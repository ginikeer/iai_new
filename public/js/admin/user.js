$(function() {
	$(".search").on("click", function() {
		$("#condition-form").attr("action", $("#url-search").val());
		$("#condition-form").submit();
	});
	
	$(".download").on("click", function() {
		$("#condition-form").attr("action", $("#url-download").val());
		$("#condition-form").submit();
	});
});
