$(document).ready(function() {

    // Show/hide section in Blog
    $('.aside__link').on('click', function(event){
        event.preventDefault();
        var el = $(this).siblings('.aside__sublist');
        el.slideToggle(300);
    });

    // Slick-slider's settings
    $('.slider').slick({
        dots: false,
        infinite: true,
        speed: 200,
        fade: true,
        cssEase: 'linear'
    });

    //Photogallery settings
    $(document).ready(function(){
        $('#gallery').least();
    });

    // Scroll-top box show/hide
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.scroll-top').fadeIn(300);
        }
        else {
            $('.scroll-top').fadeOut(300);
        }
    });

    //Scrolling to header
    $('.scroll-top').on('click', function() {
        $('html, body').animate({scrollTop: 0}, 500);
    });

    //Tab-section from Single-tour
    $('.tour__tab').on('click', function(event) {
        event.preventDefault();

        var tabTourId = $(this).attr('href');
        $(this).addClass('tour__tab--active');
        var getSibTabs = $(this).siblings();
        getSibTabs.removeClass('tour__tab--active');

        var getActualProgram = $('#' + tabTourId);
        getActualProgram.fadeIn(300);
        getActualProgram.siblings().fadeOut(300);
    });
});