$(function() {
	$('.simpleblog-post-type').hide();

	showPostType($('#id_simpleblog_post_type').val());

	function showPostType(id_simpleblog_post_type)
	{
		$('.simpleblog-post-type').hide();
		$('.simpleblog-post-type-' + id_simpleblog_post_type).show();
	}

	$(document).on('change', '#id_simpleblog_post_type', function()
	{
		showPostType($(this).val());
	});
});