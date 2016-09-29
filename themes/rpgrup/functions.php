<?php

// Set up
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

// Includes
include (get_template_directory() . '/includes/front/enqueue.php');
include (get_template_directory() . '/includes/setup.php');

// Action & Filter Hooks
add_action('wp_enqueue_scripts', 'rp_enqueue');
add_action('after_setup_theme' , 'rp_setup_theme');

// Shortcodes

/* Modify the read more link on the_excerpt() */
 
function et_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'et_excerpt_length');
 
/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/
 
function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. esc_url( get_permalink($post->ID) ) . '" class="view-full-post-btn">View Full Post</a></div>';
}
add_filter('excerpt_more', 'et_excerpt_more');
 


