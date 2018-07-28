<?php
/**
 * Check and setup theme's default settings
 *
 * @package browniandev
 *
 */

 add_action( 'init', 'custom_portfolio_post_type', 0 );
 add_action( 'init', 'custom_testimonials_post_type', 0 );
 add_action( 'init', 'custom_skills_post_type', 0 );
 add_action( 'init', 'create_client_taxonomies', 0 );
 add_action( 'init', 'create_skills_taxonomies', 0 );



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
 
		$labels = array(
			'name'                => _x( 'Portfolio', 'Post Type General Name', 'browniandev' ),
			'singular_name'       => _x( 'Porfolio', 'Post Type Singular Name', 'browniandev' ),
			'menu_name'           => __( 'Websites', 'browniandev' ),
			'parent_item_colon'   => __( 'Parent Website', 'browniandev' ),
			'all_items'           => __( 'All Websites', 'browniandev' ),
			'view_item'           => __( 'View Website', 'browniandev' ),
			'add_new_item'        => __( 'Add New Website', 'browniandev' ),
			'add_new'             => __( 'Add New', 'browniandev' ),
			'edit_item'           => __( 'Edit Website', 'browniandev' ),
			'update_item'         => __( 'Update Website', 'browniandev' ),
			'search_items'        => __( 'Search Websites', 'browniandev' ),
			'not_found'           => __( 'Not Found', 'browniandev' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'browniandev' ),
		);
		 
		$args = array(
			'label'               => __( 'portfolio', 'browniandev' ),
			'description'         => __( 'Websites I have built', 'browniandev' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', ),
			'taxonomies'          => array( 'skills', 'clients' ),
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
		 
		register_post_type( 'portfolio', $args );
	 
	}

/**
 * Create Testimonial Posttype
 * 
 * @author Ian Brown 
 */

function custom_testimonials_post_type() {
 
		$labels = array(
			'name'                => _x( 'Testimonials', 'Post Type General Name', 'browniandev' ),
			'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'browniandev' ),
			'menu_name'           => __( 'Testimonials', 'browniandev' ),
			'parent_item_colon'   => __( 'Parent Testimonial', 'browniandev' ),
			'all_items'           => __( 'All Testimonials', 'browniandev' ),
			'view_item'           => __( 'View Testimonial', 'browniandev' ),
			'add_new_item'        => __( 'Add New Testimonial', 'browniandev' ),
			'add_new'             => __( 'Add New', 'browniandev' ),
			'edit_item'           => __( 'Edit Testimonial', 'browniandev' ),
			'update_item'         => __( 'Update Testimonial', 'browniandev' ),
			'search_items'        => __( 'Search Testimonials', 'browniandev' ),
			'not_found'           => __( 'Not Found', 'browniandev' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'browniandev' ),
		);
		 
		$args = array(
			'label'               => __( 'testimonial', 'browniandev' ),
			'description'         => __( 'Client testimonial', 'browniandev' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', ),
			'taxonomies'          => array( 'clients' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 6,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		 
		register_post_type( 'testimonials', $args );
	 
	}

/**
 * Create Skills Posttype
 * 
 * @author Ian Brown 
 */

function custom_skills_post_type() {
 
		$labels = array(
			'name'                => _x( 'Skills', 'Post Type General Name', 'browniandev' ),
			'singular_name'       => _x( 'Skill', 'Post Type Singular Name', 'browniandev' ),
			'menu_name'           => __( 'Skills', 'browniandev' ),
			'parent_item_colon'   => __( 'Parent Skill', 'browniandev' ),
			'all_items'           => __( 'All Skills', 'browniandev' ),
			'view_item'           => __( 'View Skill', 'browniandev' ),
			'add_new_item'        => __( 'Add New Skill', 'browniandev' ),
			'add_new'             => __( 'Add New', 'browniandev' ),
			'edit_item'           => __( 'Edit Skill', 'browniandev' ),
			'update_item'         => __( 'Update Skill', 'browniandev' ),
			'search_items'        => __( 'Search Skills', 'browniandev' ),
			'not_found'           => __( 'Not Found', 'browniandev' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'browniandev' ),
		);
		 	 
		$args = array(
			'label'               => __( 'skills', 'browniandev' ),
			'description'         => __( 'Things I can do', 'browniandev' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', ),
			'taxonomies'          => array( 'skills' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 7,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		 
		register_post_type( 'skills', $args );
	 
	}


/**
 * Create Client Taxonomies
 * 
 * @author Ian Brown 
 */

function create_client_taxonomies() {
	
	$labels = array(
		'name'              => _x( 'Clients', 'taxonomy general name', 'browniandev' ),
		'singular_name'     => _x( 'Client', 'taxonomy singular name', 'browniandev' ),
		'search_items'      => __( 'Search Clients', 'browniandev' ),
		'all_items'         => __( 'All Clients', 'browniandev' ),
		'parent_item'       => __( 'Parent Client', 'browniandev' ),
		'parent_item_colon' => __( 'Parent Client:', 'browniandev' ),
		'edit_item'         => __( 'Edit Client', 'browniandev' ),
		'update_item'       => __( 'Update Client', 'browniandev' ),
		'add_new_item'      => __( 'Add New Client', 'browniandev' ),
		'new_item_name'     => __( 'New Client Name', 'browniandev' ),
		'menu_name'         => __( 'Clients', 'browniandev' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'clients' ),
	);

	register_taxonomy( 'clients', array( 'portfolio', 'testimonials' ), $args );
}



/**
 * Create Skills Taxonomies
 * 
 * @author Ian Brown 
 */

function create_skills_taxonomies() {
	
	$labels = array(
		'name'              => _x( 'Skills', 'taxonomy general name', 'browniandev' ),
		'singular_name'     => _x( 'Skill', 'taxonomy singular name', 'browniandev' ),
		'search_items'      => __( 'Search Skills', 'browniandev' ),
		'all_items'         => __( 'All Skills', 'browniandev' ),
		'parent_item'       => __( 'Parent Skill', 'browniandev' ),
		'parent_item_colon' => __( 'Parent Skill:', 'browniandev' ),
		'edit_item'         => __( 'Edit Skill', 'browniandev' ),
		'update_item'       => __( 'Update Skill', 'browniandev' ),
		'add_new_item'      => __( 'Add New Skill', 'browniandev' ),
		'new_item_name'     => __( 'New Skill Name', 'browniandev' ),
		'menu_name'         => __( 'Skills', 'browniandev' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'skills' ),
	);

	register_taxonomy( 'skills', array( 'portfolio', 'skills' ), $args );
}


/**
 * Create Theme Settings Page
 * 
 * @author Ian Brown 
 */
	
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page( array(
		'page_title' 	=> __('Theme Settings', 'browniandev'),
		'menu_title' 	=> __('Theme Settings', 'browniandev'),
		'menu_slug' 	=> 'theme-settings',
		'position' 		=> '0.1',
		'icon_url' 		=> false,
		)
	);
	
}