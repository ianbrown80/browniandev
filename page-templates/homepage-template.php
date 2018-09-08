<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a the homepage.
 *
 * @package browniandev
 */

get_header();
$container = get_theme_mod( 'browniandev_container_type' );
$page_id = get_the_ID();

?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="content-area" id="primary">

		<main class="site-main" id="main" role="main">

		<!-- Homepage Hero Section -->

		<?php if (get_field( 'hero_show_on_homepage' )) :?>			

				<?php get_template_part( 'loop-templates/content-hero', 'home' ); ?>				

		<?php endif; ?>

		<!-- End of Homepage Hero Section -->

		<!-- Homepage Services Section -->

		<?php if (get_field( 'services_show_on_homepage' )) :?>

		<section id="home-services" style="background: <?php echo get_field( 'services_background_colour' ) ? get_field( 'services_background_colour' ) : '#ffffff' ?>" >

			<div class="<?php echo esc_attr( $container ); ?>">

				<div class="row row-centre">
					
					<?php $page_id = get_the_ID(); ?>
					
					<?php if (have_rows( 'services', $page_id )) : ?>						
							
							<?php while (have_rows( 'services', $page_id )) : the_row(); ?>

								<?php $post = get_sub_field( 'service' )[0]; ?>
							
								<?php include(locate_template( 'loop-templates/content-services-home.php' )) ?>

							<?php endwhile; ?>

							<?php wp_reset_postdata() ?>						
					
					<?php endif; ?>

				</div><!-- .row -->

			</div><!-- .container -->			

			</section><!-- #home-services -->

			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

		<!-- End of Homepage Services Section -->

		<!-- Homepage Skills Section -->

		<?php if (get_field( 'skills_show_on_homepage' )) :?>

		<section id="home-skills" style="background: <?php echo get_field( 'skills_background_colour' ) ? get_field( 'skills_background_colour' ) : '#ffffff' ?>" >

			<div class="<?php echo esc_attr( $container ); ?>">

				<div class="row row-space-around">
	
				<?php if (have_rows( 'skills', $page_id )) : ?>						
							
					<?php while (have_rows( 'skills', $page_id )) : the_row(); ?>

						<?php $skill = get_sub_field( 'skill' ); ?>

						<?php include(locate_template( 'loop-templates/content-skills-home.php' )) ?>

					<?php endwhile; ?>

				<?php endif; ?>

				</div><!-- .row -->

			</div><!-- .container -->			

		</section><!-- #home-skills -->

		<?php wp_reset_postdata(); ?>

		<?php endif; ?>

		<!-- End of Homepage Skills Section -->

		<!-- Homepage Portfolio Section -->

		<?php if (get_field( 'portfolio_show_on_homepage' )) :?>

		<section id="home-portfolios" style="background: <?php echo get_field( 'portfolios_background_colour' ) ? get_field( 'portolios_background_colour' ) : '#ffffff' ?>" >

			<div class="<?php echo esc_attr( $container ); ?>-fluid">

				<div class="row row-centre">

				<?php if (have_rows( 'websites', $page_id )) : ?>						
				
					<?php while (have_rows( 'websites', $page_id )) : the_row(); ?>

						<?php $post = get_sub_field( 'website' ); ?>

						<?php setup_postdata( $post ); ?>

						<?php include(locate_template( 'loop-templates/content-portfolios-home.php' )) ?>

					<?php endwhile; ?>

				<?php endif; ?>

				</div><!-- .row -->

			</div><!-- .container -->			

		</section><!-- #home-portfolio -->

		<?php wp_reset_postdata(); ?>

		<?php endif; ?>

		<!-- End of Homepage Portfolio Section -->

		<!-- Homepage Testimonials Section -->

		<?php if (get_field( 'testimonials_show_on_homepage' )) :?>

		<?php if( have_rows( 'testimonials' ) ): ?>

		<section id="home-testimonials">
	
			<div class="<?php echo esc_attr( $container ); ?>" id="content">

				<div class="row">

					<?php while ( have_rows('testimonials') ) : the_row(); ?>

						<?php get_template_part( 'loop-templates/content-testimonials', 'home' ); ?>

					<?php endwhile; ?>	

				</div><!-- .row -->

			</div><!-- .container -->			

			</section><!-- #home-testimonials -->

			<?php wp_reset_postdata(); ?>

			<?php endif; ?>

			<?php endif; ?>

			<!-- End of Homepage Testimonials Section -->

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
