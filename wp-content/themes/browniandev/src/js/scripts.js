(function($) {

    /**
     * Twitter Scroller
     * @author Ian Brown
     */
    console.log("here");
    var twitterSpeed = 2000;
    var twitterPause = 5000;
    var twitterSlides = 3;
    var twitterCurrent = 0;

    var $tweetSlider = $("#ctf");
    var $tweets = $(".ctf-item");
    var $tweetContainer = $(".ctf-tweets");

    $tweetContainer.append($tweets.first().clone());
    $tweets = $(".ctf-item");

    $tweetContainer.width($tweetContainer.width() + $tweetContainer.width() / twitterSlides - 12);
    $tweetSlider.width($tweetContainer.width());
    $tweets.width($tweetContainer.width() / (twitterSlides + 1) - 10);

    var twitterWidth = $tweetContainer.width() / (twitterSlides + 1);

    var twitterSliderInterval;

    function runTwitterSlider() {

        twitterSliderInterval = setInterval(function() {

            $tweetContainer.animate({ 'margin-left': '-=' + twitterWidth }, twitterSpeed, function() {
                twitterCurrent++;
                if (twitterCurrent == twitterSlides) {
                    twitterCurrent = 0;
                    $tweetContainer.css('margin-left', 0);
                }
            });
        }, twitterPause);

    }

    function pauseTwitterSlider() {
        clearInterval(twitterSliderInterval);
    }

    $tweetSlider.on('mouseenter', pauseTwitterSlider).on('mouseleave', runTwitterSlider);
    runTwitterSlider();

    /**
     * Hero Image Slideshow
     * @author Ian Brown
     */

    var $heroImages = $('.hero-image');
    var heroImageSlides = 5;
    var heroImageCurrent = 0;
    var heroImageSpeed = 5000;
    var heroImagePause = 10000;

    $heroImages.hide();
    $heroImages.first().show();
    setInterval(function() {
        $heroImages.eq(heroImageCurrent).fadeOut(heroImageSpeed);
        heroImageCurrent++;
        if (heroImageCurrent == heroImageSlides) {
            heroImageCurrent = 0;
        }
        $heroImages.eq(heroImageCurrent).fadeIn(heroImageSpeed);

    }, heroImagePause);






})(jQuery);