// JavaScript Document
var mainslider;

$(document).ready(function(){
    var options = {
        slides: '.mi', // The name of a slide in the slidesContainer
        swipe: true,    // Add possibility to Swipe > note that you have to include touchSwipe for this
        slideTracker: true, // Add a UL with list items to track the current slide
        slideTrackerID: 'slideposition', // The name of the UL that tracks the slides
        slideOnInterval: false, // Slide on interval
        interval: 9000, // Interval to slide on if slideOnInterval is enabled
        animateDuration: 1000, // Duration of an animation
        animationEasing: 'ease', // Accepts: linear ease in out in-out snap easeOutCubic easeInOutCubic easeInCirc easeOutCirc easeInOutCirc easeInExpo easeOutExpo easeInOutExpo easeInQuad easeOutQuad easeInOutQuad easeInQuart easeOutQuart easeInOutQuart easeInQuint easeOutQuint easeInOutQuint easeInSine easeOutSine easeInOutSine easeInBack easeOutBack easeInOutBack
        pauseOnHover: false // Pause when user hovers the slide container
    };

    $(".mid").simpleSlider(options);
    mainslider = $(".mid").data("simpleslider");
    /* yes, that's all! */

    $(".mid").on("beforeSliding", function(event){
        var prevSlide = event.prevSlide;
        var newSlide = event.newSlide;
        $(".mid .mi[data-index='"+prevSlide+"'] .m").fadeOut();
        $(".mid .mi[data-index='"+newSlide+"'] .m").hide();
    });

    $(".mid").on("afterSliding", function(event){
        var prevSlide = event.prevSlide;
        var newSlide = event.newSlide;
        $(".mid .slide[data-index='"+newSlide+"'] .m").fadeIn();
    });

    $(".mi#first").backstretch("img/p001.jpg");
    $(".mi#sec").backstretch("img/p002.jpg");

    $('.mi img').on('dragstart', function(event) { event.preventDefault(); });

    $(".m").each(function(){
        $(this).css('margin-top', -$(this).height()/2);
    });
});
