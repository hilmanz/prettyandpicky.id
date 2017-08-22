<?php
/**
 * Helpers Function
 *
 * @author 		Kodr Indonesia <halo@kodrindonesia.com>
 * @since    	Mar 5, 2017
 **/

function using_front_page() {
	global $post; 

	if (!is_front_page()) {
		if(is_single()) {
			return 'inside single';
		} else {
			$tax = '';
			if(is_tax()) {
				$tax = 'taxonomy';
			}
			return 'inside ' . $tax . str_replace('.php','',str_replace('template/','',get_page_template_slug()));
		}
	} 
}

/**
 * Function to parse youtube iframe
 **/
function get_yt_id($video) {
	parse_str(parse_url($video, PHP_URL_QUERY ), $youtube);
	return $youtube['v'];
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function pp_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'pp_excerpt_length', 999);

function pp_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'pp_excerpt_more');