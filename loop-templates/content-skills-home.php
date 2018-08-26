<?php
/**
 * Homepage Skills partial template.
 *
 * @package browniandev
 */
?>




<div id="home-skill-<?php echo $skill->name ?>" class="home-skill" >
    <div class="home-skill__container home-skill--<?php echo get_sub_field( 'size' ) ? get_sub_field( 'size' ) : 'medium'; ?>">
	<?php if (get_field( 'image', $skill )):?>
        <div class="home-skill__image">
			<?php $image = get_field( 'image', $skill ) ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</div>
	<?php endif; ?>	
	<?php if ($skill->name || $skill->description) :?>
		<div class="home-skill__text home-skill__text--<?php echo get_sub_field( 'size' ) ? get_sub_field( 'size' ) : 'medium'; ?>" style="background-color:<?php echo get_sub_field( 'colour' ) ? get_sub_field( 'colour' ) : '#fff'; ?>; color: <?php echo get_sub_field( 'text_colour' ) ? get_sub_field( 'text_colour' ) : '#000'; ?>;">
		<?php if ($skill->name) :?>
			<h3 class="home-skill__title"><?php echo $skill->name ?></h3>
		<?php endif; ?>
		<?php if ($skill->description) :?>	
			<p class="home-skill__description"><?php echo $skill->description ?></p>
		<?php endif; ?>  
		</div>
	<?php endif; ?>
    </div>
</div><!-- .home-skill -->

