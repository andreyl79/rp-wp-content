<?php

function rp_enqueue(){
	wp_register_style('rp_reset' , get_template_directory_uri() . '/assets/css/reset.css');
	wp_register_style('rp_fa' , 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css');
	wp_register_style('rp_opensans' , 'https://fonts.googleapis.com/css?family=Roboto:300,400,500&subset=cyrillic-ext');
	wp_register_style('rp_fonts' , get_template_directory_uri() . '/assets/css/fonts.css');
	wp_register_style('rp_style-index' , get_template_directory_uri() . '/assets/css/style-index.css');
	wp_register_style('rp_style-main' , get_template_directory_uri() . '/assets/css/style-main.css');

	wp_enqueue_style('rp_reset');
	wp_enqueue_style('rp_fa');
	wp_enqueue_style('rp_opensans');
	wp_enqueue_style('rp_fonts');

	if ( is_home() ){
		wp_enqueue_style('rp_style-index');
	}else{
		wp_enqueue_style('rp_style-main');
	}

	wp_register_script('rp_script' , get_template_directory_uri() . '/assets/js/script.js', array(), false, true);

	wp_enqueue_script('jquery');
	wp_enqueue_script('rp_script');
}