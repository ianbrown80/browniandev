<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a the homepage.
 *
 * @package browniandev
 */

get_header();

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

		<!-- Endo of Homepage Hero Section -->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'loop-templates/content-services', 'home' ); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :

					comments_template();

				endif;
				?>

			<?php endwhile; // end of the loop. ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'loop-templates/content-portfolio', 'home' ); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :

					comments_template();

				endif;
				?>

			<?php endwhile; // end of the loop. ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'loop-templates/content-skills', 'home' ); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :

					comments_template();

				endif;
				?>

			<?php endwhile; // end of the loop. ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'loop-templates/content-blog', 'home' ); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :

					comments_template();

				endif;
				?>

			<?php endwhile; // end of the loop. ?>

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
