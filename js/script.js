"use strict";



$(function()
{
	var $window = $(window);
	var $body = $('body');

	// обработка событий с отсечкой по таймауту
	$.fn.onTimeout=function(e,t,n){var r=null,i=function(){if(r)clearTimeout(r);r=setTimeout(t,n)};return $(this).on(e,i)}



	// Слайдеры
	;(function Sliders()
	{

		var isControlsMoved = false;

		$('#slider_gallery').slick(
		{
			arrows: true,
			infinite: false,
			dots: true,
			slidesToShow: 6,
			slidesToScroll: 3,
			onInit: function()
			{
				if (isControlsMoved) return;
				$('#gallery_controls')
					.append($('.slick-prev'))
					.append($('.slick-dots'))
					.append($('.slick-next'))
			}
		});



/*		$('#slider_events').slick(
		{
			arrows: false,
			infinite: false,
			dots: true,
			slidesToShow: 1,
			slidesToScroll: 1,
		});*/



		$window.on("slick.redraw", function()
		{
			$('#slider_events').unslick().slick(
			{
				arrows: false,
				infinite: false,
				dots: true,
				slidesToShow: 1,
				slidesToScroll: 1
			});
		}).trigger("slick.redraw");



	})();






	;(function Scrollbars()
	{

		$('.tinyscrollbar').each(function(index, element)
		{
			var $this = $(element);

			$this
				.css("overflow", "hidden")
				.wrapInner('<div class="viewport"><div class="overview">')
				.append('<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>')
				.tinyscrollbar({ axis: $this.hasClass('tinyscrollbar-horizontal') ? "x" : "y"});
				
		});

		$window
			.trigger("resize")
			.onTimeout("resize", function()
			{
				$('.tinyscrollbar').data("plugin_tinyscrollbar").update();
				$window.trigger("slick.redraw");
			}, 100);

	})();





	;(function Sidebar()
	{
		var $sidebar = $('#sidebar'),
			$htmlbody = $('html,body');

		$('#menu_button').click(function()
		{
			$sidebar.toggleClass('_closed');
			$window.trigger("resize");
		});


		$('#sidebar_phone').click(function()
		{
			alert('Мы вам перезвоним!')
		});


		$('#sidebar_goto_top').click(function()
		{
			$htmlbody.stop(true,false).animate({scrollTop:0}, 500);
		});


	})();





});