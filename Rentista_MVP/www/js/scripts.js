$(function() {
//	$('body').backstretch('img/sky.jpg');

	$('.info_blip').tooltip({animation : true});

	//$('#myModal').modal();

	// If no prospect group #group opacity 0.5 (inactive)

	// Popover test on team progress


	$('.progress .bar').each(function() {
		$(this).popover({trigger : 'hover'});
	});

});
