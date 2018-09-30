$(document).ready(function () {

    //init scrollmagic
    const controller = new ScrollMagic.Controller();

    //build a scene
    const picSlide = new ScrollMagic.Scene( {
        triggerElement: '#pictureCarousel',
        triggerHook: 0.5,
    })
        .setClassToggle('#pictureCarousel', 'fade-in') // add class to slide in
        .addTo(controller);

    const headline = new ScrollMagic.Scene({
        triggerElement: '#firstText',
        duration: 700
    }).setPin('#firstText')
        .addTo(controller);
});
