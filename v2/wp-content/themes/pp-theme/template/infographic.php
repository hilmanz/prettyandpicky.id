<?php
/*
Template Name: infographic
*/
get_header();
?>
    <div class="content-wrapper">
    	<a href="<?php the_field('infographic_link'); ?>">
	    	<?php if(get_field('infographic_desktop_image') != ""): ?>
				<img src="<?php echo get_field('infographic_desktop_image'); ?>" class="hidden-sm hidden-xs">
	    	<?php endif; ?>

	    	<?php if(get_field('infographic_mobile_image') != ""): ?>
				<img src="<?php echo get_field('infographic_mobile_image'); ?>" class="visible-sm visible-xs">
	    	<?php endif; ?>
    	</a>
    	<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/infographic.jpg"> -->
    </div>
<?php get_footer(); ?>