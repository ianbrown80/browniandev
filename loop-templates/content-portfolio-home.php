<?php
/**
 * Homepage Portfolio partial template.
 *
 * @package browniandev
 */
if (get_sub_field( 'website' )) {
	$post = get_sub_field( 'website' );
	setup_postdata( $post );
}
?>
<div class="home-portfolio">

	<a class="home-portfolio__image home-portfolio__image--<?php echo get_sub_field( 'shape' )  ? get_sub_field( 'shape' )  : 'circle' ?>" href="<?php the_permalink() ?>" style="background: <?php echo get_sub_field( 'colour' ) ? get_sub_field( 'colour' )  : '#ffffff'?>; color: <?php echo get_sub_field( 'text_colour' )  ? get_sub_field( 'text_colour' )  : '#000000' ?>">

		<?php if (get_field( 'desktop_image', get_the_ID() )):?>
		<?php $desktop_image = get_field( 'desktop_image', get_the_ID() ) ?>
		<img class="home-portfolio__desktop-image" src="<?php echo $desktop_image['url']; ?>" alt="<?php echo $desktop_image['alt']; ?>" />
		<?php endif; ?>

		<?php if (get_field( 'mobile_image', get_the_ID() )):?>
		<?php $mobile_image = get_field( 'mobile_image', get_the_ID() ) ?>
		<img class="home-portfolio__mobile-image" src="<?php echo $mobile_image['url']; ?>" alt="<?php echo $mobile_image['alt']; ?>" />
		<?php endif; ?>
	</a><!-- .home-portfolio -->

	<a class="home-portfolio__text home-portfolio__text--<?php echo get_sub_field( 'shape' )  ? get_sub_field( 'shape' )  : 'circle' ?>" href="<?php the_permalink() ?>" style="background: <?php echo get_sub_field( 'text_colour' ) ? get_sub_field( 'text_colour' )  : '#000000'?>; color: <?php echo get_sub_field( 'colour' )  ? get_sub_field( 'colour' )  : '#ffffff' ?>;  border-color: <?php echo get_sub_field( 'colour' )  ? get_sub_field( 'colour' )  : '#ffffff' ?>">

		<?php if (get_the_title()) :?>
		<h2 class="home-portfolio__title"><?php the_title() ?></h2>
		<?php endif; ?>

		<?php if (get_the_content()) :?>
		<div class="home-portfolio__description"><?php the_content() ?></div>
		<?php endif; ?>

	</a><!-- .home-portfolio__text -->

</div><!-- .home-portfolio -->

