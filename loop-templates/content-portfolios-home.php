<?php
/**
 * Homepage Portfolios partial template.
 *
 * @package browniandev
 */
?>
<div class="home-portfolio col-sm-12 col-md-6 col-lg-4" >
	<a class="home-portfolio__link" href="<?php the_permalink() ?>">
		<?php if (get_field( 'desktop_image', get_the_ID() )):?>
		<?php $desktop_image = get_field( 'desktop_image', get_the_ID() ) ?>
		<img class="home-portfolio__image" src="<?php echo $desktop_image['url']; ?>" alt="<?php echo $desktop_image['alt']; ?>" />
		<?php endif; ?>
	</a><!-- .home-portfolio -->

	<a class="home-portfolio__text" href="<?php the_permalink() ?>" style="background: <?php echo get_sub_field( 'text_colour' ) ? get_sub_field( 'text_colour' )  : '#000000'?>; color: <?php echo get_sub_field( 'colour' )  ? get_sub_field( 'colour' )  : '#ffffff' ?>;  border-color: <?php echo get_sub_field( 'colour' )  ? get_sub_field( 'colour' )  : '#ffffff' ?>">

		<?php if (get_the_title()) :?>
		<h2 class="home-portfolio__title"><?php the_title() ?></h2>
		<?php endif; ?>

		<?php if (get_the_content()) :?>
		<div class="home-portfolio__description"><?php the_content() ?></div>
		<?php endif; ?>

	</a><!-- .home-portfolio__text -->

</div><!-- .home-portfolio -->

