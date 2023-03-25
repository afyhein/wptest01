
jQuery(document).ready(function($){
    // hide the topbutton on page load/ready.
    $('.scroll-to-top').hide();

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 600) {
            $('.scroll-to-top').show().fadeIn();
        } else {
            $('.scroll-to-top').fadeOut().hide();
        }
    });

    // Animate the header on scrolled
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('header').css('height', '80px');
            $('header').css('background-color', '#00425A');
        } else {
            $('header').css('height', '100px');
            $('header').css('background-color', '#00425A');
        }
    });

    // Protect from hiding the top of the section 
    $('a[href*="#"]').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top - 150
        }, 500);
        return false;
    });

    $(document).on('scroll', function() {
        var $section = $('.service');
        var $window = $(window);
        var sectionTop = $section.offset().top;
        var windowTop = $window.scrollTop();

        if (sectionTop - windowTop <= 150 && $(document).width() < 768) {
            $section.find(":before").css('opacity', 1);
        }
    });

})