var i = 0;
var triggered = false;
var search_loader = $(".search-loader");

$("#append").fadeOut(0);
$("#topbar").fadeOut(0);

function position()
{
	var offset = 120;
	var left = $(document).width()/2 - $("#append").outerWidth()/2;
	$("#append").css({left: left, top: $(".search").offset().top + offset});
}

function search()
{
	var search = $(".search").val();
	$("#append").fadeOut();

	$("#search").animate({
		top: "35%"
	}, 500, function()
	{
		search_loader.css({top: "60%"});
		search_loader.fadeIn("slow", function()
		{
			$.post("ajax/help.php", { search: search },
			function(data)
			{
				search_loader.fadeOut("slow", function()
				{
					$("#append").html(data);
					position();
					$("#append").fadeIn("slow");
				});
			});
		});
	});
}

$(window).resize(function()
{
	position();
});

$(window).on("orientationchange", function()
{
	position();
});

$(document).ready(function()
{
	if(detectMobile()) $(".search-loader").find("img").attr("src", "images/loader5-mini.gif");

	$(".submit").on("click", function()
	{
		search();
	});

	$(".loader").fadeOut("slow", function()
	{
		$("#search").css({top: "40%"});

		$("#topbar").fadeIn("slow", function()
		{
		$("#search").animate({
			opacity: 1.0,
		   top: "50%"
		}, 500, function()
		{
			var search = getUrlParameter("search");

			if(search)
			{
				if(search.length > 0)
				{
					var timeout = Math.floor((Math.random() * 100) + 50);
					var interval = setInterval(function()
					{
						timeout = Math.floor((Math.random() * 100) + 50);
						var new_str = search.substring(0, i);
						$(".search").val(new_str);
						i++;
						if(i > search.length)
						{
							clearInterval(interval);
							if(!triggered)
							{
								$(".submit").trigger("click");
								triggered = true;
							}
						}
					}, timeout);
				}
			}
		});
		});
	});
});
