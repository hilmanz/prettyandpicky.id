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


/**
 * Recipes Shortcode
 **/
add_shortcode('pp-recipes-recent-post','pp_sc_recipes_recent_posts');
function pp_sc_recipes_recent_posts()
{
	$args = array(
      'numberposts' => 1,
      'offset' => 0,
      'category' => 0,
      'orderby' => 'post_date',
      'order' => 'DESC',
      'post_type' => 'recipes',
      'post_status' => 'publish',
      'suppress_filters' => true
    );

    $recent_posts = wp_get_recent_posts($args, ARRAY_A);

    $html = '';
    if($recent_posts) {
    	$html .= '<div class="sticky-post">
        			<div class="sticky-post-content">';
        				 foreach($recent_posts as $post) {
					        $html .= '<h1 class="title">
										<a href="'.get_the_permalink($post['ID']).'">'.$post['post_title'].'</a>
									  </h1>
							          <p>'.wp_trim_words(strip_tags(get_field('benefit')), 60, '').'</p>
							          <div class="sticky-post-image">
							            '.get_the_post_thumbnail($post['ID']).'
							          </div>';
	          			}
        $html .= '  </div>
        		  </div>';
    }


    return $html;
}

add_shortcode('pp-category','pp_sc_cpt_category');
function pp_sc_cpt_category($atts = [])
{
	// normalize attribute keys, lowercase
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
 
    // override default attributes with user attributes
    $pp_atts = shortcode_atts([
    	'taxonomy' => 'recipes_category',
       	'post_type' => 'recipes'
    ], $atts, $tag);

	ob_start();
	$current_cat = get_query_var($pp_atts['taxonomy']);
	echo '<ul class="nav nav-tabs" role="tablist">';
    if($pp_atts['post_type'] == 'recipes') 
    	echo '<li class="'.(($current_cat == '') ? 'current-cat' : '').'"><a href="'.get_post_type_archive_link($pp_atts['post_type']).'">All</a></li>';
	$args = array(
		'orderby' => 'id',
		'taxonomy' => $pp_atts['taxonomy'],
		'title_li' => '',
		'hide_empty' => '0',
		'show_option_none' => ''
	);
	echo wp_list_categories($args). '</ul>';

	return ob_get_clean();
}


/**
 * Related Articles
 *
 * @author  Kodr Indonesia <halo@kodrindonesia.com>
 * @since 	Mar 10, 2017	
 **/
add_shortcode('pp-related-posts','pp_sc_related_posts');
function pp_sc_related_posts($atts = []) 
{
	// normalize attribute keys, lowercase
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
 
    // override default attributes with user attributes
    $pp_atts = shortcode_atts([
       'title' => 'Related Articles',
       'post_type' => 'post',
       'post_per_page' => 4
    ], $atts, $tag);

    $html = '<h5 class="title">'.$pp_atts['title'].'</h5>';


    $exclude_post  = get_the_ID();
    $qry = new WP_Query(array( 
	      'posts_per_page' => $pp_atts['post_per_page'],
	      'post_type' => $pp_atts['post_type'], 
	      'post__not_in' => array($exclude_post),
	      'orderby' => 'rand'
	));

    if($qry->have_posts()) {
    	while($qry->have_posts()) {
    		$qry->the_post();

    		$html .= '<div class="list">
				          <a href="'.get_the_permalink().'">
				            <div class="overlay">
				              <img src="'.get_the_post_thumbnail_url(get_the_ID(), 'large').'">
				            </div>
				            <h5>'.get_the_title().'</h5>
				            <p>'.(($pp_atts['post_type'] == 'recipes') ? wp_trim_words(strip_tags(get_field('benefit')), 20, '') : get_the_excerpt()).'</p>
				          </a>
				      </div>';
    	}
    }

    wp_reset_query();
    return $html;
}

/**
 * Display Post Tag
 *
 * @author 		Kodr Indonesia <halo@kodrindonesia.com>
 * @since 		Mar 10, 2017
 **/

add_shortcode('pp-tags','pp_sc_post_tags');
function pp_sc_post_tags() 
{
	$tags = wp_get_post_tags(get_the_ID(), array('orderby' => 'count', 'order' => 'ASC'));

	if(!$tags) return '';


	$html = '<ul class="tags">';
	foreach($tags as $tag) {
		$html .= '<li>'.ucfirst($tag->name).'</li>';
	}
	$html .= '</ul>';
	return $html;
}