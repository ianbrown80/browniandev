<?php
/**
 * Homepage Skills partial template.
 *
 * @package browniandev
 */
?>

<div class="home-skill home-skill--<?php echo get_field( 'bubble_size', $skill ) ? get_field( 'bubble_size', $skill )  : 'medium' ?>" style="background: <?php echo get_field( 'colour', $skill ) ? get_field( 'colour', $skill )  : '#ffffff' ?>; color: <?php echo get_field( 'text_colour', $skill ) ? get_field( 'text_colour', $skill )  : '#000000' ?>;">

	<?php if ($skill->name) :?>
	<h2 class="home-skill__title"><?php echo $skill->name ?></h2>
	<?php endif; ?>
	
	<?php if (get_field( 'image', $skill )):?>
	<?php $image = get_field( 'image', $skill ) ?>
	<img class="home-skill__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	<?php endif; ?>		

	<?php if ($skill->description) :?>
	<p class="home-skill__description"><?php echo $skill->description ?></p>
	<?php endif; ?>

	

</div><!-- .home-skill -->

