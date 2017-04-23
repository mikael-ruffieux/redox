$(function() {
	var thumb = [];
	var images = [];


	$('.project-thumb').click(function() {
		console.log(this);
		$(this).parent().find('.lightbox').addClass('show');
		$('body').addClass('lightbox-fullscreen');
	});

	$('.lightbox-close').click(function() {
		console.log($(this).parent());
		$(this).parent().removeClass('show');
		$('body').removeClass('lightbox-fullscreen');
	});

	/*
	$.getJSON("./../json/content.json", function(data) {
		var content = new Array(6);

		for (var p = 0; p < data.length; p++) {
			var project = data[p];

			thumb.push(
				$('<img>').attr('src', project.);
			)
		}
	})
	*/
});