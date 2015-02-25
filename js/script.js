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




		$('#slider_licences1, #slider_licences2').each(function(index, element)
		{
			var $this = $(element);
			$this.slick(
			{
				arrows: true,
				infinite: false,
				dots: false,
				slidesToShow: 4,
				slidesToScroll: 4,
				responsive:
				[
					{
						breakpoint: 1500,
						settings:
						{
							slidesToShow: 3,
							slidesToScroll: 3
						}
					}
				],

				onInit: function()
				{
					//if ($('.b-licences-slider__wrapper').children('.slick-prev').length) return;
					$this.parent()
						.append($('.slick-prev', $this))
						.append($('.slick-next', $this))
				}
			});
		});




	})();






	;(function Scrollbars()
	{
		var $tinyscrollbar = $('.tinyscrollbar');
		if (!$tinyscrollbar.length) return;

		$tinyscrollbar.each(function(index, element)
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

		$('#submenu_open, #submenu_close').click(function(event)
		{
			event.preventDefault();
			$('#submenu, #mainmenu').toggle();

			if ($sidebar.hasClass('_closed'))
			{
				$sidebar.removeClass('_closed');
				$window.trigger("resize");
			}

		})


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

			setTimeout(function(){$window.trigger("resize");}, 100);
		})
	})();





	;(function FeaturesShowMore()
	{
		$('#features_collapse').not('[data-show-all]').height(100);
		$('.b-features__more').click(function(){ $(this).toggleClass('_open'); })
	})();







	;(function LawsShowMore()
	{
		var $items = $('#laws_list').children().filter("#laws_item_third ~ li");

		$('#laws_more').click(function()
		{
			$items.toggleClass('hidden');
			$(this).toggleClass("_open");
			$('#laws_list').toggleClass("_open");
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

		$('[data-menu-target]').each(function(index, element)
		{
			var $this = $(element);
			$this.waypoint(
				function()
				{
					var $current = $nav.find('[href=#' + $this.attr("id") + ']');

					$li.removeClass('_passed');

					$current
						.parent()
						.addClass('_passed')
						.prevAll()
						.addClass('_passed');

					// фикс для предпоследнего элемента
					if ($current.parent().nextAll().length == 1)
					{

						$current.parent().next().addClass('_passed')
					}
					else
					{
						$current.parent().nextAll().removeClass('_passed')
					}
				},
				{
					offset: 400
				}
			);

		});


		var onScroll = function()
		{
			$nav.toggleClass('_detached', $window.scrollTop() > detachPos);
		}

		$window.scroll(onScroll);
		onScroll();

	})();





	//showModal('#modal_callback')








	;(function Vacancy()
	{
		var $buttons = $('#vacancy_tab_buttons').children();
		var $contents = $('#vacancy_tab_contents').children();

		if (!$buttons.length || !$contents.length) return;

		$buttons.click(function(event)
		{
			event.preventDefault();

			$buttons
				.removeClass('_current')
				.filter($(this))
				.addClass('_current');

			$contents
				.removeClass('_current')
				.eq($(this).index())
				.addClass('_current')
		});


		$('.b-story__more').click(function()
		{
			setTimeout(function(){ $(window).trigger("resize")}, 300);
		})


	})();







	;(function SelectOffice()
	{
		var $buttons = $('#office_select').children();
		var $contents = $('#map_select').children();

		if (!$buttons.length || !$contents.length) return;

		$buttons.find('a').click(function(event)
		{
			var $parent = $(this).parents('li');

			event.preventDefault();

			$parent.siblings().removeClass('_current');
			$parent.addClass('_current');

			$contents
				.removeClass('_current')
				.eq($parent.index())
				.addClass('_current')
		});
	})();






	;(function SelectOffice()
	{
		var $laws = $('.b-laws__list');
		if (!$laws.length) return;

		if ($laws.children().length < 3) $laws.addClass('_center-cols');


	})();




	(function FileInput()
	{
		$('input[type=file]').each(function(index, element)
		{
			var $this = $(element),
				update = function(){ $this.parent().find('._fake').html($this.val()); }
			$this.on("change", update);
			if ($this.val()) update();
		});


	})();



	(function Gallery()
	{
		var $gallery = $('.b-gallery-page');

		$window.onTimeout("resize", function()
		{
			$gallery
				.css("height", "auto")
				.height("height", $gallery.height() + "px");
		});


		$gallery.find('.b-gallery-page__item').find('img').each(function(index, element)
		{
			var $this = $(element),
				text = $this.attr("alt");

			if (text) $this.before('<span><i>' + text + '</i></span>');

		});

	})();




	(function AutoScroll()
	{
		$('.btn-group[data-autoscroll]').each(function(index, element)
		{
			var $buttons = $(element).children(),
				isHover = false;

			$buttons.each(function(index, element)
			{
				var id = $(element).attr("href");
				console.log(id)

				$(id)
					.on("mouseenter", function() { isHover = true; console.log(isHover); })
					.on("mouseleave", function() { isHover = false ; console.log(isHover);});
			});

			setInterval(function()
			{
				var $next = $buttons.filter('.active').next();

				if (!isHover)
				{
					if ($next.length) $next.trigger("click");
					else $buttons.first().trigger("click");
				}
				
			}, 3000)

		});

	})();





});





