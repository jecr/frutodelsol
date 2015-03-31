$(document).ready(function(){
	var ancho = 144*4;
	var movi = 0;
	$('.left').on('click',function(){
		if (movi < 0) {
			movi = movi + ancho;
			$('.int_wrap').animate({
				marginLeft: movi
			},500);
		};
	});
	$('.right').on('click',function(){
		if (movi > -570) {
			movi = movi - ancho;
			$('.int_wrap').animate({
				marginLeft: movi
			},500);
		};
	});

	$('.int_wrap a').hover(
		function(){
			$(this).find('img').stop().animate({
				opacity: .7
			},200)
		},
		function(){
			$(this).find('img').stop().animate({
				opacity: 1
			},200)
		}
	);
});

$(window).load(function(){
	$('.white').fadeOut(500);
});
	
	$('.more-p1').click(function(){
		$('.inf-mezcalreposado').fadeOut(250);
		$('.inf-mezcalblanco').fadeToggle(500);
	});

	$('.more-p2').click(function(){
		$('.inf-mezcalblanco').fadeOut(250);
		$('.inf-mezcalreposado').fadeToggle(500);
	});

	var intervalo = setInterval(function () { $('.estamos').stop().fadeToggle(500); $('.inf_tec').stop().fadeToggle(500); }, 4000);
	$('.demientras').hover(
		function(){
			clearInterval( intervalo );
		},
		function(){
			intervalo = setInterval(function () { $('.estamos').stop().fadeToggle(500); $('.inf_tec').stop().fadeToggle(500); }, 4000);
		}
	);