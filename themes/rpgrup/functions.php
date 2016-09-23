<?php

// Set up
add_theme_support('menus');

// Includes
include (get_template_directory() . '/includes/front/enqueue.php');
include (get_template_directory() . '/includes/setup.php');

// Action & Filter Hooks
add_action('wp_enqueue_scripts', 'rp_enqueue');
add_action('after_setup_theme' , 'rp_setup_theme');

// Shortcodes