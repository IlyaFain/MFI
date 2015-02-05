"use strict";



$(function()
{
	var $window = $(window);
	var $body = $('body');



	// карта
	(function SVGmap()
	{
		var $select = $('#select_region');

		$('path')
			/*.on("mouseenter", function()
			{
				$(this).attr('id', 'st0 _active')
				console.log();
			})
			.on("mouseleave", function()
			{
				$(this).attr('class', 'st0')
				console.log();
			})*/
			.on("click", function()
			{
				var $this = $(this);
				console.log($(this).attr('id'));
				if (typeof $this.attr('data-code') == "undefined" || $this.attr('data-code') == "") return;


				var code = $this.attr('data-code'),
					optionIndex = $select.find('option[value=' + code + ']').index() - 1;



				$select.data("selectBox-selectBoxIt").selectOption(optionIndex);


			});



			$('#select_region')
				.selectBoxIt({ showFirstOption: false, autoWidth: true })
				.on("change", function()
				{
					loadPartners($(this).val());
					showRegion($(this).val());
				});



			var loadPartners = function(regionCode)
			{
				var globalPartnersData = 
				{
					"Inline Telecom Solutions": { url:"", info:"" },
					"LETA": { url:"", info:"" },
					"КРОК": { url:"", info:"" },
					"Микротест": { url:"", info:"" },
					"NVision Group": { url:"", info:"" }
				};

				$.ajax(
				{
					url: "js/pages/partners/partners.json",
					dataType: "json",
					data: { regionCode: regionCode },
					method: "get",
					success: function(response)
					{
						var partnersData = typeof response[regionCode] != "undefined" ? response[regionCode] : {},
							html = '';

						$.extend(partnersData, globalPartnersData);

						for (var name in partnersData)
						{
							html += '<li class="col-xs-4 col-lg-3" data-equalheight>';
							html += '<a href="' + partnersData[name].url + '">' + name + '</a>';
							html += '<p>' + partnersData[name].info + '</p>';
							html += '</li>';
						}

						if (html == '') html = '<li class="col-xs-12 _no-number">В выбранном регионе ещё нет партнёров.</li>';

						$('#partners_data').html(html);
						$window.trigger("resize");

					},
					error: function(jqxhr, textStatus, errorThrown)
					{
						alert(errorThrown);
					},
				});
			}


			var showRegion = function(regionCode)
			{
				$('path[class="st0 _active"]').attr("class", "st0");
				$('path[data-code="' + regionCode + '"]').attr("class", "st0 _active");
			}


		
	})();



});;