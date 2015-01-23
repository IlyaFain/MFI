"use strict";



$(function()
{
	var $window = $(window);
	var $body = $('body');

	// Обработка событий с отсечкой по таймауту:
	$.fn.onTimeout=function(e,t,n){var r=null,i=function(){if(r)clearTimeout(r);r=setTimeout(t,n)};return $(this).on(e,i)}






	// Весь код, "завязанный" на размеры экрана:
	function resize()
	{
		var SECTION_MIN_HEIGHT = 768;//px

		$('.js-fullscreen')
			.css({"margin":0, "padding":0})
			.height(Math.max($window.height(), SECTION_MIN_HEIGHT));

		equalheight('[data-equalheight]');


		$('.b-submenu nav').width($('.b-submenu').width());


		var $clients = $('.b-clients');
		$clients.css("height", "auto");

		if ($clients.height() < $window.height() - 270)
		{
			$clients.height($window.height() - 270);
		}


	}





	// Начальная отрисовка:
	resize();

	// Отрисовка по окончании ресайза:
	$window.onTimeout("resize", resize, 100);








});