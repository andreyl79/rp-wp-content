<?php

function rp_admin_init(){
	include ( 'create-metaboxes.php' );
	include ( 'info-options.php' );

	add_action( 'add_meta_boxes_rgprojects', 'rp_create_metaboxes' );
}