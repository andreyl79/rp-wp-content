<?php

function rp_save_post_admin($post_id, $post, $update){
	if ( !$update ){
		return;
	}

	$rp_data                    =   array();
	$rp_data['date']            =   sanitize_text_field( $_POST['rp_inputProjectDate'] );
	$rp_data['city']            =   sanitize_text_field( $_POST['rp_inputProjectCity'] );
	$rp_data['orderer']         =   sanitize_text_field( $_POST['rp_inputProjectOrderer'] );
	$rp_data['address']         =   sanitize_text_field( $_POST['rp_inputProjectAddress'] );

	update_post_meta( $post_id, 'rp_data', $rp_data );
}