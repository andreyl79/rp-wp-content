<?php

function rp_create_metaboxes(){
	add_meta_box(
		'rp_info_options_mb',
		__( 'RP-GRUP Projects Info', 'rgprojects' ),
		'rp_info_options_mb',
		'rgprojects',
		'normal',
		'high'
	);
}