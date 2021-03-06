// UNIVERSAL SCRIPTS
$(document).ready(function () {

    // Variables
    var newsletterValid = true;
    var contactValid = true;

	// Show/Hide Mobile Nav
	$(".menu-icon").click(function () {
		$("nav").slideToggle(200);
	});

    // Always show nav on desktop
    $(window).resize(function () {
        if($(this).width() > 959) {
            $('nav').show();
        } else {
            $('nav').hide();
        }
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
    $('.back-to-top, #up-arrow').click(function () {
        $('body, html').animate({
            scrollTop: 0
        }, 1500);
        return false;
    });

    // Skill card flip effect
    $('.flip-container').hover(function(){
        $(this).toggleClass('hover');
    });

    // Toggle project details div in contact form
    $('#reason').change(function() {
        if($(this).val()=="I have a project for you") {
            $('#project-form').show();
            $('#message-form').hide();
        } else {
            $('#project-form').hide();
            $('#message-form').show();
        }
    });

    // Newsletter Form validation
    $('#newsletter').submit(function(e) {

        newsletterValid = true;

        var email = $('#newsletter-email').val();

        if(!email || email == '') {
            newsletterValid = false;
        }

        if(!newsletterValid) {
            e.preventDefault();
            $('#newsletter-email').focus();
            $('#newsletter-error').html('I need your email address, silly!');
            $('#newsletter-error').css('padding', '1.5em 0 0 0');
        }

        if(newsletterValid) {
            $(this).submit();
        }
    });

    // Contact Form validation
    $('#contact').submit(function(e) {

        contactValid = true;

        var name = $('#fullname').val();
        var email = $('#email').val();
        var phone = $('#phone').val();

        if(!name || name == '') {
            $('#fullname').addClass('error-border');
            contactValid = false;
        }
        if(!email || email == '') {
            $('#email').addClass('error-border');
            contactValid = false;
        }
        if(!phone || phone == '') {
            $('#phone').addClass('error-border');
            contactValid = false;
        }

        if(!contactValid){
            e.preventDefault();
            $('#contact-error').html('Please fill out all required fields (the ones with the *)');
            $('#contact-error').css('padding', '1em 0');
        }

        if(contactValid) {
            $(this).submit();
        }
    });

    // Remove error-border class on blur
    $('#fullname').blur(function() {
        $(this).removeClass('error-border');
    });
    $('#email').blur(function() {
        $(this).removeClass('error-border');
    });
    $('#phone').blur(function() {
        $(this).removeClass('error-border');
    });

});
