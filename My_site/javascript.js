$(document).ready(function(){

	  $(".hav_nav").hover(function(){

	  	$(".hav_nav .sub-menu").slideToggle();

	  });

	  $("#side").click(function(){

	    $(".sidebar").css({"left":"0"});

	  });

	  $("#close").click(function(){

	    $(".sidebar").css({"left":"-100%"});

	  });

	  $("#btn").click(function(){

	    $(".sidebar").css({"left":"-20%"}),
	    $(".col-12").css({"width":"100%","left":"0%","filter":"brightness(1)"});

	  });

	  $("#pp").toggle( function(){

		$(".ball1,.ball2,.ball3").css( 'animation-play-state', 'running' );
		$("#pp").html("Pause");

	  },

	  function(){

		$(".ball1,.ball2,.ball3").css( 'animation-play-state', 'paused' );
		$("#pp").html("Play");
		
	  });

	  $(".right_btn").click(function(){
	  	$(".dropdown_nav").slideToggle();
	  });


	});

	// window.addEventListener("scroll", function (event) {
	// 	var scroll = window.scrollY;
	// 	console.log(scroll);
	// 	var scrollH = document.body.scrollHeight - window.innerHeight;
	// 	var scrollW = $(window).width();

	// 	console.log(scrollH);

	// 	var a  = (scroll / scrollH) * 100;

	// 	var n = 100 - a;
	// 	$( ".border-left" ).css( "right", n+"%");
	// });

// crousel

$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:true,
	    dots:false,
	    autoplay:false,
	    autoplayTimeout:3500,
	    smartSpeed: 1500,
	    responsive:{
	        0:{
	            items:1
	        }
	    }
});