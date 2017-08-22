<?php
/**
 * Enqueue Function
 *
 * @author 		Kodr Indonesia <halo@kodrindonesia.com>
 * @since    	Mar 5, 2017
 **/

function pp_theme_scripts() {
    wp_enqueue_style('pp-theme-styles', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), '0.4.7');
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery2-scripts', get_stylesheet_directory_uri() . '/assets/js/vendor/select2/select2.min.js', array(), '0.4.7', true);
    wp_enqueue_script('pp-theme-scripts', get_template_directory_uri() . '/assets/js/app.js', array(), '0.4.7', true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'pp_theme_scripts' );