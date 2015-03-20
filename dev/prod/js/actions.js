$(document).ready(function(){
	var ancho = 144*3;
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
		if (movi > -864) {
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

	$('.marca').click(function(){
		$('.estamos').fadeOut(250);
		$('.inf_tec').fadeToggle(500);
	});

	$('.inf_tec').click(function(){
		$('.inf_tec').fadeOut(500);
		$('.estamos').fadeIn(250);
	});