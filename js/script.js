"use strict";



$(function()
{
	var $window = $(window);
	var $body = $('body');
	var $htmlbody = $('html,body');

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
		var $sidebar = $('#sidebar');

		$('#menu_button').click(function()
		{
			$sidebar.toggleClass('_closed');
			$window.trigger("resize");
		});


		/*$('#sidebar_phone').click(function()
		{
			
		});*/


		$('#sidebar_goto_top').click(function()
		{
			$htmlbody.stop(true,false).animate({scrollTop:0}, 500);
		});


	})();





	;(function BootstrapActiveTab()
	{
		$('[data-toggle=tab]').click(function(){
			var $this = $(this);
			if (!$this.hasClass('active'))
			{
				$this
					.addClass('active')
					.siblings()
					.removeClass('active');
			}
		})
	})();








	;(function LawsShowMore()
	{
		var $items = $('#laws_list').children().filter("#laws_item_third ~ li");

		$('#laws_more').click(function()
		{
			$items.toggleClass('hidden');
			$(this).toggleClass("_open");
			$window.trigger("resize");
		})
	})();







	// data-equalheight (см. modules/equalheight.js) применяется дл элементов с общим родителем
	// а этот - для произвольных элементов
	;(function EqualHeightAny()
	{
		var resize = function()
		{
			var M = [];

			$('[data-equalheight-any]').filter(':visible')
				.css("min-height", "0")
				.each(function(index, element){ M.push($(element).outerHeight()); })
				.css("min-height", Math.max.apply(null,M) + "px");
		};

		$window.onTimeout("resize", resize, 50);

		resize();

	})();








	// Меню на стр. продукта
	;(function ProductMenu()
	{
		if (!$('.b-submenu').length) return;

		var $submenu = $('.b-submenu'),
			$nav = $submenu.find('nav'),
			$li = $nav.find('li'),
			detachPos = $submenu.offset().top - 15;

		$li.find('a').click(function(event)
		{
			var scrollTop = $($(this).attr("href")).offset().top - 100;
			event.preventDefault();
			$htmlbody.stop(true,false).animate({scrollTop:scrollTop}, 500);
		})

		$('#menu1, #menu2, #menu3, #menu4, #menu5, #menu6').waypoint(
			function()
			{
				var $current = $nav.find('[href=#' + $(this).attr("id") + ']');

				$li.removeClass('_passed');

				$current
					.parent()
					.addClass('_passed')
					.prevAll()
					.addClass('_passed');
			},
			{
				//offset: $window.height() * 0.75
			}
		);


		var onScroll = function()
		{
			$nav.toggleClass('_detached', $window.scrollTop() > detachPos);
		}

		$window.scroll(onScroll);
		onScroll();

	})();





	//showModal('#modal_callback')


});