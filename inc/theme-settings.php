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

/**
 * Create Portfolio Posttype
 * 
 * @author Ian Brown 
 */

function custom_portfolio_post_type() {
 
	// Set UI labels for Portfolio Post Type
		$labels = array(
			'name'                => _x( 'Portfolio', 'Post Type General Name', 'browniandev' ),
			'singular_name'       => _x( 'Porfolio', 'Post Type Singular Name', 'browniandev' ),
			'menu_name'           => __( 'Websites', 'browniandev' ),
			'parent_item_colon'   => __( 'Parent Website', 'browniandev' ),
			'all_items'           => __( 'All Websitess', 'browniandev' ),
			'view_item'           => __( 'View Website', 'browniandev' ),
			'add_new_item'        => __( 'Add New Website', 'browniandev' ),
			'add_new'             => __( 'Add New', 'browniandev' ),
			'edit_item'           => __( 'Edit Website', 'browniandev' ),
			'update_item'         => __( 'Update Website', 'browniandev' ),
			'search_items'        => __( 'Search Websites', 'browniandev' ),
			'not_found'           => __( 'Not Found', 'browniandev' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'browniandev' ),
		);
		 
	// Set other options for Portfolio Post Type
		 
		$args = array(
			'label'               => __( 'portfolio', 'browniandev' ),
			'description'         => __( 'Websites I have built', 'browniandev' ),
			'labels'              => $labels,
			'supports'            => array( 
				'title',
				'editor',
				'excerpt', 
				'author', 
				'thumbnail', 
				'comments', 
				'revisions', 
				'desktop_image', 
			),
			//'taxonomies'          => array( 'genres' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		 
		// Registeringthe Portfolio Post Type
		register_post_type( 'portfolio', $args );
	 
	}
	 
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	 
	add_action( 'init', 'custom_portfolio_post_type', 0 );