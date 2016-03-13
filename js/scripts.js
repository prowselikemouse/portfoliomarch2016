$(function(){

$('#menu-item-26 a').on('click', function (){
		$('html, body').animate ({
			scrollTop: $("#about").offset().top +400
		}, 1000);
	});

$('#menu-item-28 a').on('click', function (){
		$('html, body').animate ({
			scrollTop: $("#services").offset().top -600
		}, 1000);
	});

$('#menu-item-28 a').on('click', function (){
		$('html, body').animate ({
			scrollTop: $("#portfolio").offset().top
		}, 1000);
	});

$('#menu-item-29 a').on('click', function (){
		$('html, body').animate ({
			scrollTop: $("#workflow").offset().top
		}, 1000);
	});

$('#menu-item-30 a').on('click', function (){
		$('html, body').animate ({
			scrollTop: $("#contact").offset().top
		}, 1000);
	});

});
