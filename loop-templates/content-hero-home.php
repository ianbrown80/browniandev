<?php
/**
 * Homepage Hero partial template.
 *
 * @package browniandev
 */
$container = get_theme_mod( 'browniandev_container_type' );
?>
<section id="home-hero" style="background-color: <?php echo get_field( 'hero_background_colour') ? get_field( 'hero_background_colour') : 'transparent' ?>; color: <?php echo get_field( 'hero_text_colour') ? get_field( 'hero_text_colour') : '#ffffff' ?>">
	
	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-8">
			
			<?php if (get_field( 'hero_title' ) || get_field( 'hero_subtitle' )) : ?>
			<div class="home-hero__text" style="background-color: <?php echo get_field( 'hero_text_box_colour') ? get_field( 'hero_text_box_colour') : 'transparent' ?>">
			<?php if (get_field( 'hero_title' )) : ?>
				<h1 class="home-hero__title"><?php echo get_field( 'hero_title' ) ?></h1>
			<?php endif; ?>
			<?php if (get_field( 'hero_subtitle' )) : ?>
				<h2 class="home-hero__subtitle"><?php echo get_field( 'hero_subtitle' ) ?></h2>
			<?php endif; ?>
			</div>
			<?php endif; ?>
			</div>

			<div class="col-md-4">
			<?php if (have_rows( 'hero_cta' )): ?>
			<div class="home-hero__ctas">
				<?php while (have_rows( 'hero_cta' )): ?>
				<?php the_row(); ?>
				<div class="home-hero__cta" style="background-color: <?php echo get_sub_field( 'hero_cta_colour') ? get_sub_field( 'hero_cta_colour') : 'transparent' ?>;">
					<a class="home-hero__cta-link" style="color: <?php echo get_sub_field( 'hero_cta_text_colour') ? get_sub_field( 'hero_cta_text_colour') : '#ffffff' ?>;" href="<?php echo get_sub_field( 'hero_cta_link' ) ?>"><?php echo get_sub_field( 'hero_cta_text' ) ?></a>
				</div>
				<?php endwhile; ?>

			</div>
			
			</div><!-- .col-md-6 -->

		</div><!-- .row -->
		
		<?php endif; ?>
	</div><!-- .container -->
</section><!-- #home-hero -->

