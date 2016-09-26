<?php
/**
 * Plugin Name: RP Projects
 * Description: A simple plugin that allows to add projects information with custom fields.
 * Version: 1.0
 * Author: Stenbix
 * Author URI: http://stenbix.com
 * Text Domain: rgprojects
 */
if( !function_exists( 'add_action' ) ){
	echo 'Not allowed!';
	exit;
}
//  Setup


//  Includes
include ( 'includes/activate.php' );
include ( 'includes/init.php' );
include ( 'includes/admin/init.php' );
include ( 'process/save-post.php' );
include ( 'process/filter-content.php' );

// Hooks
register_activation_hook( __FILE__, 'rp_activate_plugin' );
add_action( 'init', 'rp_init' );
add_action( 'admin_init', 'rp_admin_init' );
add_action( 'save_post_rgprojects', 'rp_save_post_admin', 10, 3 );
add_filter( 'the_content', 'rp_filter_projects_info_content' );

//Shortcodes