<?php
/**
 * Homepage Testimonials partial template.
 *
 * @package browniandev
 */

if (get_sub_field( 'quote' )) {
	$post = get_sub_field( 'quote' );
	setup_postdata( $post );
}
?>
<div class="home-testimonial" style="background: <?php echo get_sub_field( 'colour' ) ? get_sub_field( 'colour' ) : '#ffffff'?>; color: <?php echo get_sub_field( 'text_colour' ) ? get_sub_field( 'text_colour' ) : '#000000' ?>">

		<?php if (get_the_content()) :?>
		<blockquote class="home-testimonial__quote"><?php the_content() ?></blockquote>
		<?php endif; ?>
		<?php echo get_the_ID(); ?>
		<?php if (get_field( 'contact_name', get_the_ID() )) :?>
		<p class="home-portfolio__name"><?php echo get_field( 'contact_name', get_the_ID() ) ?></p>
		<?php endif; ?>

		<?php if (get_field( 'website', get_the_ID() )) :?>
		<a href="<?php echo get_post_permalink( get_field( 'website', get_the_ID() )) ?>"><?php echo get_the_title( get_field( 'website', get_the_ID() ) ) ?></a>
		<?php endif; ?>

</div><!-- .home-testimonial -->