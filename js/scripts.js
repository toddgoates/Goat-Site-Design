// UNIVERSAL SCRIPTS

$(document).ready(function () {

	// Show/Hide Mobile Nav
	$(".menu-icon").click(function () {
		$("nav").slideToggle(200);
	});
    
    // Fade in Back to Top Div
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });
    
    // Smooth Scroll
    $('.back-to-top').click(function () {
        $('body, html').animate({
            scrollTop: 0
        }, 1500);
        return false;
    });
    
    // Preload images
    /*
    $.preloadImages = function() {
        for (var i = 0; i < arguments.length; i++) {
            $("<img />").attr("src", arguments[i]);
        }
    }

    $.preloadImages("hoverimage1.jpg","hoverimage2.jpg");
    */
    
    // Hover effect for landing page
    $('#designer').mouseover(function () {
        $('#todd-left-img').attr("src", 'img/todd-left-hover.jpg');
    });
    
    $('#designer').mouseout(function () {
        $('#todd-left-img').attr("src", 'img/todd-left.jpg');
    });
	
});