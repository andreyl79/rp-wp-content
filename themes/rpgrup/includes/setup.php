<?php

function rp_setup_theme (){
	register_nav_menu('mainmenu', __('Main Menu', 'rpgrup'));
		register_nav_menu('singlemenu', __('Single Menu', 'rpgrup'));

}