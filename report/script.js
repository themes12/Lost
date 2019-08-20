$(document).ready(function(){
	$('basicModal#div div div div center a').click(function(){
		var page = $(this).attr('href');
		$('#content').load('asset/' + page + '.php');
		return false;
	});
});