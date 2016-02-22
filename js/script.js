$(document).ready(function(){

	var $menu = $("#menu");

	$(window).scroll(function(){
		if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
			$menu.removeClass("default").addClass("fixed");
			$("#logo").css({visibility:"visible"});
			$("#logo").addClass('animated fadeInTop');

		}
		else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
			$("#logo").css({visibility:"hidden"});
			$menu.removeClass("fixed").addClass("default");
			
		}
	});
});
        //scroll









