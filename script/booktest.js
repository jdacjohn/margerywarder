$(window).load(function(){
	$('.slider')._TMS({
		preset:'diagonalFade',
		easing:'easeOutQuad',
		duration:800,
		pagination:true,
		slideshow:6000
	})
	$("#testimonials").jCarouselLite({
		btnNext: ".down",
		btnPrev: ".up",
		visible: 1,
		speed: 600,
		vertical: true,
        circular: true,
		easing: 'easeOutCirc'
	});
	$("#testimonials1").jCarouselLite({
		btnNext: ".down1",
		btnPrev: ".up1",
		visible: 1,
		speed: 600,
		vertical: true,
        circular: true,
		easing: 'easeOutCirc'
	});
	$("#testimonials2").jCarouselLite({
		btnNext: ".down2",
		btnPrev: ".up2",
		visible: 1,
		speed: 600,
		vertical: true,
        circular: true,
		easing: 'easeOutCirc'
	});
	$("#testimonials3").jCarouselLite({
		btnNext: ".down3",
		btnPrev: ".up3",
		visible: 1,
		speed: 600,
		vertical: true,
        circular: true,
		easing: 'easeOutCirc'
	});
})
