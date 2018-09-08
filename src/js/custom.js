jQuery(document).ready(function($) {

    particlesJS.load('home-hero', 'wp-content/themes/browniandev/js/particles.json', function() {
        console.log('callback - particles.js config loaded');
    });
    /*$('.home-skill__image > img').each(function() {
        var maxLeft = $(this).parent('.home-skill__image').width() / 4;
        var maxTop = $(this).parent('.home-skill__image').height() / 4;

        console.log(maxLeft + ' ' + maxTop)

        var top = Math.floor(Math.random() * maxTop);
        var left = Math.floor(Math.random() * maxLeft);
        $(this).css({
            'top': top + 'px',
            'left': left + 'px',
        })
    })*/

});