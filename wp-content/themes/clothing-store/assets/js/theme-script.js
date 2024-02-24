function clothing_store_days_countdown() {
    // Ensure the DOM is ready before accessing elements
    jQuery(document).ready(function($) {
        var newYears = "20 October 2023";

        // Check if the element with ID 'new-year-date' exists
        if (jQuery('#new-year-date').length > 0) {
            // Get the value from the input element
            newYears = jQuery('#new-year-date').val();
        }

        const newYearsDate = new Date(newYears);
        const currentDate = new Date();

        var daysEl = document.getElementById('days');
        var hoursEl = document.getElementById('hours');
        var minsEL = document.getElementById('mins');
        var secondsEL = document.getElementById('seconds');

        const totalSeconds = (newYearsDate - currentDate) / 1000;
        const minutes = Math.floor((totalSeconds / 60) % 60);
        const hours = Math.floor((totalSeconds / 3600) % 24);
        const days = Math.floor(totalSeconds / 3600 / 24);
        const seconds = Math.floor(totalSeconds) % 60;

        // Update the HTML elements
        if (daysEl) daysEl.innerText = days;
        if (hoursEl) hoursEl.innerText = hours;
        if (minsEL) minsEL.innerText = minutes;
        if (secondsEL) secondsEL.innerText = seconds;
    });
}

// Call the function when the DOM is ready
jQuery(document).ready(function() {
    clothing_store_days_countdown();
});

function clothing_store_gb_Menu_open() {
	jQuery(".side_gb_nav").addClass('show');
}
function clothing_store_gb_Menu_close() {
	jQuery(".side_gb_nav").removeClass('show');
}

jQuery(function($){
	$('.gb_toggle').click(function () {
        clothing_store_Keyboard_loop($('.side_gb_nav'));
});

jQuery(window).scroll(function(){
	if (jQuery(this).scrollTop() > 120) {
		jQuery('.menu_header_box').addClass('fixed');
	} else {
  		jQuery('.menu_header_box').removeClass('fixed');
	}
});

jQuery(window).scroll(function(){
	if (jQuery(this).scrollTop() > 50) {
		jQuery('.scrollup').addClass('is-active');
	} else {
  		jQuery('.scrollup').removeClass('is-active');
	}
});

jQuery( document ).ready(function() {
	// setInterval(clothing_store_days_countdown, 1000);
	jQuery('#clothing-store-scroll-to-top').click(function (argument) {
		jQuery("html, body").animate({
		       scrollTop: 0
		   }, 600);
	})
})

	jQuery(window).load(function() {
		jQuery(".preloader").delay(2000).fadeOut("slow");
	});
});

/* Custom Cursor
 **-----------------------------------------------------*/
// Add this in custom-cursor.js
jQuery(document).ready(function($) {
  var cursor = $(".custom-cursor");
  var follower = $(".custom-cursor-follower");
  var offsetX = 15; // Set your desired horizontal offset
  var offsetY = 15; // Set your desired vertical offset

  $(document).mousemove(function(e) {
    cursor.css({
      top: e.clientY - offsetY + "px",
      left: e.clientX - offsetX + "px"
    });
    follower.css({
      top: e.clientY + "px",
      left: e.clientX + "px"
    });
  });

  $("a, button").hover(
    function() {
      cursor.addClass("active");
      follower.addClass("active");
    },
    function() {
      cursor.removeClass("active");
      follower.removeClass("active");
    }
  );
});