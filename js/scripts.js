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
    
    // Swap left image source on hover
    var leftImgSwap = function () {
        var image = $("#todd-left-img");
        var newSource = image.data('alt-src');
        image.data('alt-src', image.attr('src'));
        image.attr('src', newSource);
    }
    
    $(function () {
        $('#designer').hover(leftImgSwap, leftImgSwap);
    });
    
    // Swap right image source on hover
    var rightImgSwap = function () {
        var image = $("#todd-right-img");
        var newSource = image.data('alt-src');
        image.data('alt-src', image.attr('src'));
        image.attr('src', newSource);
    }
    
    $(function () {
        $('#developer').hover(rightImgSwap, rightImgSwap);
    });
    
    // Newsletter Form validation
	
});