<?php
/**
 * Homepage Services partial template.
 *
 * @package browniandev
 */

?>
<section <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'browniandev' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</section><!-- #post-37 -->
