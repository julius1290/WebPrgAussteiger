$(document).ready(function () {

    //init scrollmagic
    const controller = new ScrollMagic.Controller();

    //build a scene
    const ourScene = new ScrollMagic.Scene( {
        triggerElement: '#picSlider',
        triggerHook: 0.5,
    })
        .setClassToggle('#picSlider', 'fade-in') // add class to slide in
        .addIndicators({
            name: 'fade-scene',
        })
        .addTo(controller);

    const headline = new ScrollMagic.Scene({
        triggerElement: '#firstText'
    }).setPin('#firstText')
        .addTo(controller);
});
