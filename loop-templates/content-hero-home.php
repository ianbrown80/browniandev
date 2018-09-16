<?php
/**
 * Homepage Hero partial template.
 *
 * @package browniandev
 */
$container = get_theme_mod( 'browniandev_container_type' ); 

$hero = get_field( 'hero_headings' );
$cta = get_field( 'hero_cta' );
$ctas = $cta['ctas'];

if ($hero['hero_background_colour']) {

	$background = $hero['hero_background_colour']; 

} else {

	$background = 'transparent';

}

if (get_field( 'hero_type' )) {

	if (get_field( 'hero_type' ) == 'particles') {
	
		$particles = true;
		do_action( 'setup_particles' );

	} else {

		$particles = false;
		
	}

	if (get_field( 'hero_type' ) == 'image' && $hero['hero_image']) {
	
		$background_image = $hero['hero_image']['url'];
		$background = 'transparent';

	} 

}

?>

<section id="home-hero<?php echo $particles == 'true' ? '-particles' : '' ?>" style="background-color: <?php esc_attr_e( $background ) ?>; <?php echo $background_image ? 'background-image: url(' . esc_url( $background_image ) . ');' : ''; ?> color: <?php echo $hero['hero_text_colour'] ? esc_attr__( $hero['hero_text_colour'] ) : '#000000' ?>">
	
	<div class="container-fluid" id="content">

		<div class="row row--no-overflow" >
			
			<div class="col-md-6">
			
			<?php if ($hero['hero_title'] || $hero['hero_subtitle']) : ?>

				<div class="home-hero__text animated bounceInLeft delay-5s" style="background-color: <?php esc_attr_e( $background ) ?>">
			
					<?php if ($hero['hero_title']) : ?>
						<h1 class="home-hero__title"><?php esc_html_e( $hero['hero_title'] ) ?></h1>
					<?php endif; ?>

					<?php if ($hero['hero_subtitle']) : ?>
						<h2 class="home-hero__subtitle"><?php esc_html_e( $hero['hero_subtitle'] ) ?></h2>
					<?php endif; ?>
				</div>

			<?php endif; ?>

			</div>

			<div class="col-md-6 home-hero__cta-container" style="background: <?php echo $cta['cta_background_colour'] ? esc_attr__( $cta['cta_background_colour'] ) : 'transparent' ?>; color: <?php echo $cta['cta_text_colour'] ? esc_attr__( $cta['cta_text_colour'] ) : '#000000' ?>;">

			<?php if (have_rows( 'hero_cta' )): ?>

			<?php while (have_rows( 'hero_cta' )): the_row(); ?>

			<?php if (have_rows( 'hero_ctas' )): ?>
				
				<div class="home-hero__ctas animated bounceInRight delay-5s">
					
				<?php while (have_rows( 'hero_ctas' )): the_row(); ?>					
				
						<div class="home-hero__cta" style="background-color: <?php echo get_sub_field( 'hero_cta_colour') ? get_sub_field( 'hero_cta_colour') : 'transparent' ?>;">
							<a class="home-hero__cta-link" style="color: <?php echo get_sub_field( 'hero_cta_text_colour') ? get_sub_field( 'hero_cta_text_colour') : '#ffffff' ?>;" href="<?php echo get_sub_field( 'hero_cta_link' ) ?>"><?php echo get_sub_field( 'hero_cta_text' ) ?></a>
						</div>					

				<?php endwhile; ?>

				</div>

			<?php endif; ?>

			<?php endwhile; ?>

			<?php endif; ?>
			
			</div><!-- .col-md-4 -->

		</div><!-- .row -->		
		
	</div><!-- .container -->
</section><!-- #home-hero -->

