<?php
/**
 * Front Page
 *
 * 
 *
 * @package browniandev
 */

get_header();

?>

<div class="wrapper" id="full-width-page-wrapper">   

        <div class="content-area" id="primary">

            <main class="site-main" id="main" role="main">

                <section id="hero-image-slideshow">
              
                    <div class="hero-image-slider-container">
                    
                        <div class="hero-image" style="background-image:url('<?php echo get_template_directory_uri(); ?> /img/hero1.jpg'"><h1 class="hero-text"><?php echo get_bloginfo('description'); ?></h1></div>
                        <div class="hero-image" style="background-image:url('<?php echo get_template_directory_uri(); ?> /img/hero2.jpg'"><h1 class="hero-text"><?php echo get_bloginfo('description'); ?></h1></div>
                        <div class="hero-image" style="background-image:url('<?php echo get_template_directory_uri(); ?> /img/hero3.jpg'"><h1 class="hero-text"><?php echo get_bloginfo('description'); ?></h1></div>
                        <div class="hero-image" style="background-image:url('<?php echo get_template_directory_uri(); ?> /img/hero4.jpg'"><h1 class="hero-text"><?php echo get_bloginfo('description'); ?></h1></div>
                        <div class="hero-image" style="background-image:url('<?php echo get_template_directory_uri(); ?> /img/hero5.jpg'"><h1 class="hero-text"><?php echo get_bloginfo('description'); ?></h1></div>                
                                   
                    </div><!-- .hero-image-slider-container -->

                    <a class="animated wobble infinite enter" href="#portfolio"><span class=" rollIn fa fa-chevron-down"></span></a>   
                
                </section><!-- #hero-image-slideshow -->     

                <section id="portfolio">
                
                
                </section>
                       

            </main><!-- #main -->

        </div><!-- #primary -->   

</div><!-- Wrapper end -->

<?php get_footer(); ?>
