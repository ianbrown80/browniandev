<?php

add_action( 'init', 'create_client_taxonomies', 0 );
add_action( 'init', 'create_skills_taxonomies', 0 );
add_action( 'init', 'create_blog_categories_taxonomies', 0 );

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

	register_taxonomy( 'skills', array( 'portfolio', 'blog' ), $args );
}

function create_blog_categories_taxonomies() {
	
	$labels = array(
		'name'              => _x( 'Blog Categories', 'taxonomy general name', 'browniandev' ),
		'singular_name'     => _x( 'Blog Category', 'taxonomy singular name', 'browniandev' ),
		'search_items'      => __( 'Search Blog Categories', 'browniandev' ),
		'all_items'         => __( 'All Blog Categories', 'browniandev' ),
		'parent_item'       => __( 'ParentBlog Category', 'browniandev' ),
		'parent_item_colon' => __( 'Parent Blog Category:', 'browniandev' ),
		'edit_item'         => __( 'Edit Blog Category', 'browniandev' ),
		'update_item'       => __( 'Update Blog Category', 'browniandev' ),
		'add_new_item'      => __( 'Add New Blog Category', 'browniandev' ),
		'new_item_name'     => __( 'New Blog Category', 'browniandev' ),
		'menu_name'         => __( 'Blog Categories', 'browniandev' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'blog_categories' ),
	);

	register_taxonomy( 'blog-categories', array( 'blog' ), $args );
}

