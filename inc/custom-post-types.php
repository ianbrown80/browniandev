<?php

add_action( 'init', 'custom_portfolio_post_type', 0 );
add_action( 'init', 'custom_testimonials_post_type', 0 );
add_action( 'init', 'custom_blog_post_type', 0 );
add_action( 'init', 'custom_services_post_type', 0 );
//add_action( 'init', 'custom_skills_post_type', 0 );

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
 * Create Blog Posttype
 * 
 * @author Ian Brown 
 */

function custom_blog_post_type() {
 
    $labels = array(
        'name'                => _x( 'Blog', 'Post Type General Name', 'browniandev' ),
        'singular_name'       => _x( 'Blog', 'Post Type Singular Name', 'browniandev' ),
        'menu_name'           => __( 'Blog', 'browniandev' ),
        'parent_item_colon'   => __( 'Parent Blog', 'browniandev' ),
        'all_items'           => __( 'All Blog', 'browniandev' ),
        'view_item'           => __( 'View Blog', 'browniandev' ),
        'add_new_item'        => __( 'Add New Blog', 'browniandev' ),
        'add_new'             => __( 'Add New', 'browniandev' ),
        'edit_item'           => __( 'Edit Blog', 'browniandev' ),
        'update_item'         => __( 'Update Blog', 'browniandev' ),
        'search_items'        => __( 'Search Blog', 'browniandev' ),
        'not_found'           => __( 'Not Found', 'browniandev' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'browniandev' ),
    );
        
    $args = array(
        'label'               => __( 'blog', 'browniandev' ),
        'description'         => __( 'Blog', 'browniandev' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', ),
        'taxonomies'          => array( 'skills', 'blog_category' ),
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
        
    register_post_type( 'blog', $args );
    
}
    
/**
 * Create Testimonials Posttype
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
        'description'         => __( 'Client testimonials', 'browniandev' ),
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

/*function custom_skills_post_type() {
 
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
    
}*/

/**
 * Create Services Posttype
 * 
 * @author Ian Brown 
 */

function custom_services_post_type() {
 
    $labels = array(
        'name'                => _x( 'Services', 'Post Type General Name', 'browniandev' ),
        'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'browniandev' ),
        'menu_name'           => __( 'Services', 'browniandev' ),
        'parent_item_colon'   => __( 'Parent Service', 'browniandev' ),
        'all_items'           => __( 'All Services', 'browniandev' ),
        'view_item'           => __( 'View Service', 'browniandev' ),
        'add_new_item'        => __( 'Add New Service', 'browniandev' ),
        'add_new'             => __( 'Add New', 'browniandev' ),
        'edit_item'           => __( 'Edit Service', 'browniandev' ),
        'update_item'         => __( 'Update Service', 'browniandev' ),
        'search_items'        => __( 'Search Service', 'browniandev' ),
        'not_found'           => __( 'Not Found', 'browniandev' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'browniandev' ),
    );
            
    $args = array(
        'label'               => __( 'service', 'browniandev' ),
        'description'         => __( 'Services I provide', 'browniandev' ),
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
        
    register_post_type( 'services', $args );
    
}