<?php

function rp_activate_plugin (){
	if(version_compare(get_bloginfo('version'), '4.2', '<')){
		wp_die(__('You must update WordPress to use this plugin', 'rgprogects'));
	}
}