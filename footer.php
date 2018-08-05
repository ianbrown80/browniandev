<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package browniandev
 */

?>

<div class="wrapper" id="wrapper-footer">	
		
	<footer class="site-footer" id="footer">		

		<div class="twitter">

			<div class="container">

				<div class="row">

					<?php get_sidebar( 'footerfull' ); ?>

				</div><!-- container end -->

			</div><!-- .row end -->

		</div><!-- .twitter end -->

		<div class="container">
			
			<div class="row">

				<div class="mini-blog col-md-5">

					<!-- Start the Loop. -->
					<?php query_posts('posts_per_page=3'); ?>
 					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<p class="mini-blog-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
						<p class="mini-blog-date"><?php the_time('F jS, Y'); ?> </p>						

					<?php endwhile; else : ?>

						<p><?php esc_html_e( 'Sorry, no posts found.' ); ?></p>

					<?php endif; ?>
					
				</div><!-- .mini-blog -->

				<div class="site-info col-md-5 offset-2">

					<div class="row">

						<?php wp_nav_menu(
							array(
								'theme_location'  => 'footer_menu_left',
								'menu_class'      => 'footer_menu',
								'container_class' => 'col-md-6',
								'fallback_cb'     => '',
								'menu_id'         => 'footer_menu_left',
							)
						); ?>

						<?php wp_nav_menu(
							array(
								'theme_location'  => 'footer_menu_right',
								'menu_class'      => 'footer_menu',
								'container_class' => 'col-md-6',
								'fallback_cb'     => '',
								'menu_id'         => 'footer_menu_right',
							)
						); ?>

					</div><!-- .row end -->
					
				</div><!-- .site-info -->				
				
			</div><!-- .row end -->

		</div><!-- container end -->

		<div class="copyright">

			<p>Designed and built by </p>
			<a class="signature" href="http://www.browniandev.co.uk">Ian Brown </a>
			<p>&copy;<?php echo date('Y'); ?></p>

		</div><!-- copyright end -->

	</footer><!-- #footer end -->	

</div><!-- wrapper end -->

</div><!-- #page end -->

<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>

<?php wp_footer(); ?>

</body>

</html>

