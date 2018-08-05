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
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="col-md-12 content-area" id="primary">

		<main class="site-main" id="main" role="main">

		<!-- Homepage Hero Section -->

		<?php if (get_field( 'hero_show_on_homepage' )) :?>

			<section id="home-hero">

				<?php get_template_part( 'loop-templates/content-hero', 'home' ); ?>					

			</section><!-- #home-hero -->

		<?php endif; ?>

		<!-- End of Homepage Hero Section -->

		<!-- Homepage Services Section -->

		<?php if (get_field( 'services_show_on_homepage' )) :?>

		<?php $services_query = new WP_Query( array( 'post_type' => 'services')) ?>

		<?php if ( $services_query->have_posts() ) : ?>

			<section id="home-services">

			<div class="<?php echo esc_attr( $container ); ?>" id="content">

				<div class="row">

					<?php while ( $services_query->have_posts() ) : $services_query->the_post() ?>

						<?php get_template_part( 'loop-templates/content-services', 'home' ); ?>	

					<?php endwhile; ?>	

				</div><!-- .row -->

			</div><!-- .container -->			

			</section><!-- #home-services -->

			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

		<?php endif; ?>

		<!-- End of Homepage Services Section -->

		<!-- Homepage Skills Section -->

		<?php if (get_field( 'skills_show_on_homepage' )) :?>

		<?php $skills = get_terms( array ( 'skills' ) ) ?>

		<?php if( !empty( $skills )):?>

		<section id="home-skills">
			
			<div class="<?php echo esc_attr( $container ); ?>" id="content">

				<div class="row">

					<?php foreach ($skills as $skill) : ?>

						<?php include(locate_template( 'loop-templates/content-skills-home.php' )) ?>

					<?php endforeach; ?>	

				</div><!-- .row -->

			</div><!-- .container -->			

		</section><!-- #home-skills -->

		<?php wp_reset_postdata(); ?>

		<?php endif; ?>

		<?php endif; ?>

		<!-- End of Homepage Skills Section -->

		<!-- Homepage Portfolio Section -->

		<?php if (get_field( 'portfolio_show_on_homepage' )) :?>

		<?php if( have_rows('websites') ): ?>

		<section id="home-portfolio">
			
			<div class="<?php echo esc_attr( $container ); ?>" id="content">

				<div class="row">

					<?php while ( have_rows('websites') ) : the_row(); ?>

						<?php get_template_part( 'loop-templates/content-portfolio', 'home' ); ?>	

					<?php endwhile; ?>	

				</div><!-- .row -->

			</div><!-- .container -->			

		</section><!-- #home-portfolio -->

		<?php wp_reset_postdata(); ?>

		<?php endif; ?>

		<?php endif; ?>

		<!-- End of Homepage Portfolio Section -->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'loop-templates/content-testimonials', 'home' ); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :

					comments_template();

				endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
