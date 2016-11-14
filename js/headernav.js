$(document).ready(function() {
		$("nav").hide();

	$(window).scroll(function() {
          if ($(window).scrollTop() > 672) {

          $("nav").slideDown("fast");

           
          
        } else {
        $("nav").slideUp("fast");

          $("nav").fadeOut("fast");
        }

});



	$("#upArrow").hide();

	$(window).scroll(function() {
          if ($(window).scrollTop() > 2200) {

          $("#upArrow").fadeIn("slow");

           
          
        } else {
        $("#upArrow").fadeOut("fast");

        }

});
		

$(".menu-icon").click(function () {
	
		$("ul").slideToggle();

	});
	
	$(window).resize(function () {
		
		var width = $(window).width();

		// When page is bigger than 768px
		if(width > 768) {
			// Remove style attribute
			$("ul").removeAttr("style");
		}

	});
	
	


});



	