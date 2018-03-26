<?php
/**
 * Check and setup theme's default settings
 *
 * @package browniandev
 *
 */

if ( ! function_exists( 'browniandev_setup_theme_default_settings' ) ) :
	function browniandev_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$browniandev_posts_index_style = get_theme_mod( 'browniandev_posts_index_style' );
		if ( '' == $browniandev_posts_index_style ) {
			set_theme_mod( 'browniandev_posts_index_style', 'default' );
		}

		// Sidebar position.
		$browniandev_sidebar_position = get_theme_mod( 'browniandev_sidebar_position' );
		if ( '' == $browniandev_sidebar_position ) {
			set_theme_mod( 'browniandev_sidebar_position', 'right' );
		}

		// Container width.
		$browniandev_container_type = get_theme_mod( 'browniandev_container_type' );
		if ( '' == $browniandev_container_type ) {
			set_theme_mod( 'browniandev_container_type', 'container' );
		}
	}
endif;
