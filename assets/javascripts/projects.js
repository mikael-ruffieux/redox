$(function() {
	

	var content = [
		{
			"title" : "Projet test",
			"thumb" : "./assets/images/projects/min_SH.png",
			"items" : [
				{
					"content" : "./assets/images/creations/loup_vector.png",
					"caption" : "Petit test",
					"type" : "image"
				},
				{
					"content" : "./assets/images/creations/r2d2_v1.png",
					"caption" : "Petit test 2",
					"type" : "image"
				}
			]
		}
	];

	$('.project-thumb').click(function() {
		console.log(this);
		$('.lightbox').addClass('show');
		$('body').addClass('lightbox-fullscreen');
	});

	$('.lightbox-close').click(function() {
		console.log($(this).parent());
		$(".lightbox").removeClass('show');
		$('body').removeClass('lightbox-fullscreen');
	});

	/*
	$.getJSON("./assets/json/content.json", function(data) {
		var content = data;
		console.log("test");
		*/

	for (var p = 0; p < content.length; p++) {
		var project = content[p];

		/*project.thumb = $("<img>").attr('src', project.thumb);*/

		for (var i = 0; i < project.items.length; i++) {
			var item = project.items[i];

			if (item.type == "image") {
				item.content = $("<img>").attr('src', item.content); 
			}

			if (item.type == "vimeo") {
				item.content = $("<iframe>");
			}

			if (item.type == "youtube") {
				item.content = $("<iframe>");
			}
		}
	}

	console.log(content);

	var i = 0;
	$(".project-container").each(function() {
		$(this).find('.project-thumb').attr('src', content[i].thumb);
		i++;
	});
	
		/*
	});*/

	

});