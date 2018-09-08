<?php
/**
 * Homepage Services content partial template.
 *
 * @package browniandev
 */
?>

<?php setup_postdata( $post ); ?>

<div id="home-service-<?php echo $post->post_name ?>" class="col-sm-12 col-md-6 col-lg-4 home-service" >
    <div class="home-service__container home-service--<?php echo get_sub_field( 'shape' ) ? get_sub_field( 'shape' ) : 'square'; ?> <?php echo get_sub_field( 'box_shadow' ) == 'true' ? 'home-service--shadow' : ''; ?>" style="background-color:<?php echo get_sub_field( 'colour' ) ? get_sub_field( 'colour' ) : '#ffffff'; ?>; color:<?php echo get_sub_field( 'text_colour' ) ? get_sub_field( 'text_colour' ) : '#000000'; ?>; <?php echo get_sub_field( 'border' ) == 'true' ? 'border: 1px solid ' . get_sub_field( 'text_colour' ) : ''; ?>">
        <div class="home-service__top">
            <div class="home-service__image">
                <?php the_post_thumbnail() ?>
            </div>
            <h3 class="home-service__title">
                <?php the_title() ?>
            </h3>
        </div>
        <div class="home-service__bottom">
            <?php the_content() ?>
        </div>
        
    </div>
</div>
   
