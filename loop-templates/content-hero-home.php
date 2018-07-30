<?php
/**
 * Homepage Hero partial template.
 *
 * @package browniandev
 */
$container = get_theme_mod( 'browniandev_container_type' );
?>


<div class="hero-background hero-background--<?php echo get_field( 'hero_image' ) ? 'image' : 'no-image' ?>" style="background: <?php echo get_field( 'hero_image' ) ? 'url(' . get_field( 'hero_image' ) .')' : get_field( 'hero_background_colour' ) ?>">

	<?php if(get_field( 'hero_image' ) && get_field( 'hero_background_colour' )) : ?>
	<div class="hero-background__mask" style="background:<?php the_field( 'hero_background_colour' ) ?>">
	<?php endif; ?>

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-8 offset-md-4">
			
			<?php if (have_rows( 'call_to_action' )) : ?>
			<?php while ( have_rows('call_to_action') ) : the_row(); ?>

			<a class="hero-cta hero-cta--<?php the_sub_field( 'shape' )?> <?php echo get_sub_field( 'box_shadow' ) ? 'hero-cta--shadow' : ''?> hero-cta--<?php the_sub_field( 'size' )?>" style="background:<?php the_sub_field( 'colour' ) ?>;" href="<?php the_sub_field( 'link' ) ?>">
				<p class="hero-cta__text"><?php the_sub_field( 'text' )?></p>
			</a><!-- .hero-cta -->	

			<?php endwhile; ?>
			<?php endif; ?>
			
			</div><!-- .col-md-8 .offset-md-4 -->

		</div><!-- .row -->

	</div><!-- .container -->

	<?php if(get_field( 'hero_background_image' ) && get_field( 'hero_background_colour' )) : ?>
	</div><!-- .hero-background__mask -->
	<?php endif; ?>


</div><!-- .hero-background -->


