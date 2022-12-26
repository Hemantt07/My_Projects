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
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('.shown.bs.modal', function () {
  myInput.focus()
})

function validateForm() {
  var name =  document.getElementById('name').value;
  var email =  document.getElementById('email').value;
  var subject =  document.getElementById('subject').value;
  var message =  document.getElementById('message').value;

  if (name == "") {
      document.querySelector('.status1').innerHTML = "Name cannot be empty";
  } else {
  	  document.querySelector('.status1').innerHTML ="";
  }

  if (email == "") {
      document.querySelector('.status2').innerHTML = "Email cannot be empty";
  } else {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!re.test(email)){
          document.querySelector('.status2').innerHTML = "Email format invalid";
      } else {
      		document.querySelector('.status2').innerHTML = "";
      }
  }

  if (subject == "") {
      document.querySelector('.status3').innerHTML = "Subject cannot be empty";
  } else {
  		document.querySelector('.status3').innerHTML = "";
  }

  if (message == "") {
      document.querySelector('.status4').innerHTML = "Message cannot be empty";
  } else {
  		document.querySelector('.status4').innerHTML = "";
  }
 
}