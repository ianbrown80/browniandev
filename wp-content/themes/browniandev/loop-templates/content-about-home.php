<?php
/**
 * Homepage About partial template.
 *
 * @package browniandev
 */

if (get_field( 'about' )) {
	$about = get_field( 'about' );
?>



<section id="home-about" class="home-about" style="background: <?php echo $about['about_background_colour'] ? esc_attr__( $about['about_background_colour'] ) : '#ffffff' ?>;" >

	<div class="home-about__outer-container" style="background: <?php echo $about['about_stripe_colour'] ? esc_attr__( $about['about_stripe_colour'] ) : '#ffffff' ?>;" >

		<div class="container-fluid home-about__inner-container">

			<div class="row">

				<div class="col-md-6 home-about__text-container" style="color: <?php echo $about['about_text_colour'] ? esc_attr__( $about['about_text_colour'] ) : '#000000' ?>;">

					<?php if ($about['about_title'] || $about['about_text']) : ?>

					<?php if ($about['about_title'] ) : ?>

						<h2 class="home-about__title"><?php esc_html_e( $about['about_title'] ) ?></h2>

					<?php endif; ?>

					<?php if ($about['about_text'] ) : ?>

						<div class="home-about__text">

						<?php echo $about['about_text'] ?>

						</div>

					<?php endif; ?>

					<?php endif; ?>

				</div>

				<div class="col-md-4 offset-md-1 home-about__image-container">

					<?php if ($about['about_image'] ) : ?>

					<img class="home-about__image" src="<?php echo esc_url( $about['about_image']['url'] ) ?>" alt="<?php echo esc_url( $about['about_image']['alt'] ) ?>" />

					<?php endif; ?>

				</div>

			</div>

		</div>

	</div>

</section>

<?php }
