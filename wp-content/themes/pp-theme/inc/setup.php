<?php
/**
 * Setup / Prepare the Theme
 *
 * @author 		Kodr Indonesia <halo@kodrindonesia.com>
 * @since    	Mar 5, 2017
 **/

register_nav_menus(array(
	'primary' => 'Main Navigation'
));


add_theme_support('post-thumbnails'); 

if(function_exists('acf_add_options_page')) {
	acf_add_options_page();
}