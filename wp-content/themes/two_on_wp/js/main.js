$(document).ready(function() {

    // Toggle navbar
	$('.navbar-toggle').click(function() {
		console.log("navbar-toggle");
    	$('.main-nav ').toggleClass('open');
    });

    // ScrollTop Detection Config
    // =================================================

    var $nav_header    = $('.header'),
        header_height  = $('.header').height(),
        hero_height    = $('.banner').height(),
        offset_val     = hero_height - header_height;

    // Method
    // =================================================

    function navSlide() {
        var scroll_top = $(window).scrollTop();

        if (scroll_top >= offset_val) { // the detection!
            $nav_header.addClass('is-sticky');
        } else {
            $nav_header.removeClass('is-sticky');
        }
    }

    // Handler
    // =================================================
    $(window).scroll(navSlide);

    //Smooth scrolling
    var sticky_nav_height = 60;
    $('a[href*=#]:not([href=#])').click(function() {

        $('.main-nav ').removeClass('open');

        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

            var target;
            if(window.innerWidth >= 1200 && this.hash.slice(1) === "contact")
                target = $("#contact2")
            else
                target = $(this.hash);

            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                var offsetTop = target.offset().top;
                if(this.hash.slice(1) === "contact") offsetTop = offsetTop - sticky_nav_height;
                $('html,body').animate({
                    scrollTop: offsetTop
                }, 1000);
                return false;
            }
        }
    });

});
