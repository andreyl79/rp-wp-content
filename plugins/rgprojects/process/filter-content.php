<?php

function rp_filter_projects_info_content( $content ){
	if ( is_singular('rgprojects') ){
		return $content;
	}
	global $post;
	$rp_data                =   get_post_meta( $post->ID, 'rp_data', true );
	$projects_html          =   file_get_contents( 'project-template.php', true );
	$projects_html          =   str_replace( 'PROJECT_DATE_PH', $rp_data['date'], $projects_html );
	$projects_html          =   str_replace( 'PROJECT_CITY_PH', $rp_data['date'], $projects_html );
	$projects_html          =   str_replace( 'PROJECT_ORDERER_PH', $rp_data['date'], $projects_html );
	$projects_html          =   str_replace( 'PROJECT_ADDRESS_PH', $rp_data['date'], $projects_html );

	return $projects_html . $content;
}
