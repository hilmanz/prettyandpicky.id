<?php
/**
 * Shortcode Function
 *
 * @author 		Kodr Indonesia <halo@kodrindonesia.com>
 * @since    	Mar 8, 2017
 **/


function share() {
	$text = get_the_title();
	$url = urlencode(get_the_permalink());

	$html = '<div class="social-icons">
	            <ul>
	              	<li>SHARE IT ON</li>
	              	<li>
		                <a href="https://www.facebook.com/sharer/sharer.php?u='.$url.'" class="btn-share"> 
		                  <i class="fa fa-facebook"></i>
		                </a>
		            </li>  
		            <li>
		                <a href="https://twitter.com/share?text='.$text.'&url='.$url.'" class="btn-share"> 
		                  <i class="fa fa-twitter"></i>
		                </a>
		            </li> 
		            <li>
		                <a href="https://www.tumblr.com/share/link?url='.$url.'" class="btn-share"> 
		                  <i class="fa fa-tumblr"></i>
		                </a>
		            </li>   
		            <li>
		                <a href="https://plus.google.com/share?url='.$url.'" class="btn-share"> 
		                  <i class="fa fa-google-plus"></i>
		                </a>
		            </li>
		            <li>
		                <a href="'.get_the_permalink().'/feed?withoutcomments=1"> 
		                  <i class="fa fa-rss"></i>
		                </a>
		            </li>
		        </ul>
		    </div>'; 
	return $html;         
}
add_shortcode('social-share','share');


/**
 * Pagination shortcode
 **/
function pp_sc_pagination() {
	$html  =  '<ul class="pagination">';
	$html .=    '<li>'.get_previous_post_link('%link','previous post');
		            if(!get_adjacent_post(false, '', true)) { 
		              $html .= '<a href="'.get_the_permalink().'" style="opacity: 0.5; cursor: default">previous post</a>'; 
		            }
	$html .=    '</li>';
    $html .=    '<li>'.get_next_post_link('%link','next post');
		            if(!get_adjacent_post(false, '', false)) { 
		              $html .= '<a href="'.get_the_permalink().'" style="opacity: 0.5; cursor: default">next post</a>'; 
		            }
    $html .=    '</li>';
    $html .=  '</ul>';

    return $html;
}
add_shortcode('pp-pagination','pp_sc_pagination');


//Insert ads after second paragraph of single post content.
add_filter( 'the_content', 'prefix_insert_post_ads' );
function prefix_insert_post_ads( $content ) {
	
	$ad_code = '<a href="'.get_field('banner_link','options').'" style="margin-bottom: 20px; margin-top: 20px; display: block;"><img src="'.get_field('banner_image','options').'"></a>';

	$display_after = get_field('display_after','options');
	if($display_after == "") $display_after = 4;

	if (is_single() && ! is_admin() && get_field('banner_image','options') != "") {
		return prefix_insert_after_paragraph( $ad_code, $display_after, $content );
	}
	
	return $content;
}
 
// Parent Function that makes the magic happen
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
	$closing_p = '</p>';
	$paragraphs = explode( $closing_p, $content );
	foreach ($paragraphs as $index => $paragraph) {

		if ( trim( $paragraph ) ) {
			$paragraphs[$index] .= $closing_p;
		}

		if ( $paragraph_id == $index + 1 ) {
			$paragraphs[$index] .= $insertion;
		}
	}
	
	return implode( '', $paragraphs );
}