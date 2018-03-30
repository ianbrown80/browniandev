(function($) {

    /**
     * Twitter Scroller
     * @author Ian Brown
     */

    var speed = 2000;
    var pause = 5000;
    var slides = 3;
    var current = 0;

    var $tweetSlider = $("#ctf");
    var $tweets = $(".ctf-item");
    var $tweetContainer = $(".ctf-tweets");

    $tweetContainer.append($tweets.first().clone());
    $tweets = $(".ctf-item");

    $tweetContainer.width($tweetContainer.width() + $tweetContainer.width() / slides - 12);
    $tweetSlider.width($tweetContainer.width());
    $tweets.width($tweetContainer.width() / (slides + 1) - 10);

    var width = $tweetContainer.width() / (slides + 1);

    var interval;

    function runSlider() {

        interval = setInterval(function() {

            $tweetContainer.animate({ 'margin-left': '-=' + width }, speed, function() {
                current++;
                if (current == slides) {
                    current = 0;
                    $tweetContainer.css('margin-left', 0);
                }
            });
        }, pause);

    }

    function pauseSlider() {
        clearInterval(interval);
    }

    $tweetSlider.on('mouseenter', pauseSlider).on('mouseleave', runSlider);

    runSlider();




})(jQuery);