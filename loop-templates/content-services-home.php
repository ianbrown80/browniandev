<?php
/**
 * Homepage Services partial template.
 *
 * @package browniandev
 */
$service_settings = get_field( 'services', 2 );	
?>

<div class="home-service home-service--<?php echo $service_settings['shape']  ? $service_settings['shape']  : 'circle' ?>" style="background: <?php echo $service_settings['colour'] ? $service_settings['colour']  : '#ffffff'?>; color: <?php echo $service_settings['text_colour']  ? $service_settings['text_colour']  : '#000000' ?>">

<p class="home-service__icon"><?php the_field( 'icon' ) ?></p>

<h1 class="home-service__title"><?php the_title() ?></h1>

<div class="home-service__description"><?php the_content() ?></div>

</div><!-- .home-service -->

