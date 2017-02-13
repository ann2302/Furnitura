$(document).ready(function(){

	var $menu = $("#menu");

	$(window).scroll(function(){
		if ( $(this).scrollTop() > 440 && $menu.hasClass("default") ){
			$menu.removeClass("default").addClass("fixed");
			$("#logo").css({visibility:"visible"});
			$("#logo").addClass('animated fadeInTop');

		}
		else if($(this).scrollTop() <= 440 && $menu.hasClass("fixed")) {
			$("#logo").css({visibility:"hidden"});
			$menu.removeClass("fixed").addClass("default");
			
		}
	});
});

$(document).ready(function(){
			$('#newsletter-signup').submit(function(){

		//Проверяем, не отправляется ли уже форма в текущий момент времени
		if($(this).data('formstatus') !== 'submitting'){

			//Устанавливаем переменные
			var form = $(this),
			formData = form.serialize(),
			formUrl = form.attr('action'),
			formMethod = form.attr('method'), 
			responseMsg = $('#signup-response');
			
			//Добавляем дату к форме
			form.data('formstatus','submitting');
			
			//Показываем соообщение с просьбой подождать
			responseMsg.hide()
			.addClass('response-waiting')
			.text('Пожалуйста, подождите...')
			.fadeIn(200);
			
			//Отправляем данные на сервер для проверки
			$.ajax({
				url: formUrl,
				type: formMethod,
				data: formData,
				success:function(data){
					
					//Устанавливаем переменные
					var responseData = jQuery.parseJSON(data), 
					klass = '';
					
					//Состояния ответа
					switch(responseData.status){
						case 'error':
						klass = 'response-error';
						break;
						case 'success':
						klass = 'response-success';
						break;	
					}
					
					//Показываем сообщение ответа
					responseMsg.fadeOut(200,function(){
						$(this).removeClass('response-waiting')
						.addClass(klass)
						.text(responseData.message)
						.fadeIn(200,function(){
								   //Устанавливаем таймаут для скрытия сообщения ответа
								   setTimeout(function(){
								   	responseMsg.fadeOut(200,function(){
								   		$(this).removeClass(klass);
								   		form.data('formstatus','idle');
								   	});
								   },3000)
								});
					});
				}
			});
		}
		
		//Предотвращаем отправку формы
		return false;
	});
});
(function ($) {
var hwSlideSpeed = 700;
var hwTimeOut = 3000;
var hwNeedLinks = true;

$(document).ready(function(e) {
	$('.slide').css(
		{"position" : "absolute",
		 "top":'0', "left": '0'}).hide().eq(0).show();
	var slideNum = 0;
	var slideTime;
	slideCount = $("#slider .slide").size();
	var animSlide = function(arrow){
		clearTimeout(slideTime);
		$('.slide').eq(slideNum).fadeOut(hwSlideSpeed);
		if(arrow == "next"){
			if(slideNum == (slideCount-1)){slideNum=0;}
			else{slideNum++}
			}
		else if(arrow == "prew")
		{
			if(slideNum == 0){slideNum=slideCount-1;}
			else{slideNum-=1}
		}
		else{
			slideNum = arrow;
			}
		$('.slide').eq(slideNum).fadeIn(hwSlideSpeed, rotator);
		$(".control-slide.active").removeClass("active");
		$('.control-slide').eq(slideNum).addClass('active');
		}
if(hwNeedLinks){
var $linkArrow = $('<a id="prewbutton" href="#">&lt;</a><a id="nextbutton" href="#">&gt;</a>')
	.prependTo('#slider');		
	$('#nextbutton').click(function(){
		animSlide("next");
		return false;
		})
	$('#prewbutton').click(function(){
		animSlide("prew");
		return false;
		})
}
	var $adderSpan = '';
	$('.slide').each(function(index) {
			$adderSpan += '<span class = "control-slide">' + index + '</span>';
		});
	$('<div class ="sli-links">' + $adderSpan +'</div>').appendTo('#slider-wrap');
	$(".control-slide:first").addClass("active");
	$('.control-slide').click(function(){
	var goToNum = parseFloat($(this).text());
	animSlide(goToNum);
	});
	var pause = false;
	var rotator = function(){
			if(!pause){slideTime = setTimeout(function(){animSlide('next')}, hwTimeOut);}
			}
	$('#slider-wrap').hover(	
		function(){clearTimeout(slideTime); pause = true;},
		function(){pause = false; rotator();
		});
	rotator();
});
})(jQuery);
$(function() {

			$('#carousel ul').carouFredSel({
				prev: '#prev',
				next: '#next',
				pagination: "#pager",
				auto: true,
				scroll: 1000,
				pauseOnHover: true
			});

		});


		; /* /bitrix/js/sng.up/script-up.js?14623768131026*/

		; /* Start:"a:4:{s:4:"full";s:45:"/bitrix/js/sng.up/script-up.js?14623768131026";s:6:"source";s:30:"/bitrix/js/sng.up/script-up.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
		window.onload = function() {
			$("body").append("<a class='scrollup' href='#'><img src='"+sng_up_button+"' alt='Р’РІРµСЂС…'></a>");
			$('.scrollup').css("bottom",sng_up_position_indent_y+'px');	//РѕС‚СЃС‚СѓРї СЃРЅРёР·Сѓ		
			$('.scrollup').fadeTo(0, sng_up_button_opacity/100);
			if ($(this).scrollTop() > 400) {
		        $('.scrollup').fadeIn();
		    } else {
		        $('.scrollup').fadeOut();
				$('.scrollup').css("display",'none');	
		    } 	
			if(sng_up_position=='center'){
				$('.scrollup').css("left",50+'%');				
			}else if(sng_up_position=='left'){
			$('.scrollup').css("left",sng_up_position_indent_x+'px');				
			}else if(sng_up_position=='right'){
			}	
		    $(window).scroll(function(){
				if ($(this).scrollTop() > 400) {
		            $('.scrollup').fadeIn();
		        } else {
		            $('.scrollup').fadeOut();
		        } 
		    }); 
		    $('.scrollup').click(function(){
		        $("html, body").animate({ scrollTop: 0 }, 500);
		        return false;
		    }); 	
		}	  	