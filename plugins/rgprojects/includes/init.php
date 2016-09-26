<?php

function rp_init(){
	$labels = array(
		'name'               => __( 'Info', 'post type general name', 'rgprojects' ),
		'singular_name'      => __( 'Info', 'post type singular name', 'rgprojects' ),
		'menu_name'          => __( 'Projects Info', 'admin menu', 'rgprojects' ),
		'name_admin_bar'     => __( 'Info', 'add new on admin bar', 'rgprojects' ),
		'add_new'            => __( 'Add New', 'info', 'rgprojects' ),
		'add_new_item'       => __( 'Add New Info', 'rgprojects' ),
		'new_item'           => __( 'New Info', 'rgprojects' ),
		'edit_item'          => __( 'Edit Info', 'rgprojects' ),
		'view_item'          => __( 'View Info', 'rgprojects' ),
		'all_items'          => __( 'All Info', 'rgprojects' ),
		'search_items'       => __( 'Search Info', 'rgprojects' ),
		'parent_item_colon'  => __( 'Parent Info:', 'rgprojects' ),
		'not_found'          => __( 'No info found.', 'rgprojects' ),
		'not_found_in_trash' => __( 'No info found in Trash.', 'rgprojects' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'A custom post type for RP-Grup projects info.', 'rgprojects' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'info' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
		'taxonomies'         => array( 'category', 'post_tag' )
	);

	register_post_type( 'rgprojects', $args );
};