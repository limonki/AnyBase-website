$(document).ready(function()
{
	if(detectMobile())
	{
		var f_e = $(".elem:first-child").html();
		var l_e = $(".elem:last-child").html();
		$(".elem:first-child").html(l_e);
		$(".elem:first-child").find("img").css({width: 64, height: 64});
		$(".elem:last-child").html(f_e);
	}
	else
	{
		var p_h = $(".elem:last-child").parent().outerHeight()/2;
		var c_h = $(".elem:last-child").outerHeight()/2;
		$(".elem:last-child").css({position: "relative", top: p_h-c_h});

		var max = 0;
		$(".note").each(function(i)
		{
			var acc = $(this).outerHeight();
			if(acc > max) max = acc;
			if(i == $(".note").length - 1) $(".note").css({height: max});
		});
	}
});
