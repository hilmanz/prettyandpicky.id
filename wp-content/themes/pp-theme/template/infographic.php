<?php
/*
Template Name: infographic
*/
get_header();
?>
    <div class="content-wrapper">
    	<?php if(get_field('infographic_desktop_image') != ""): ?>
			<img src="<?php echo get_field('infographic_desktop_image'); ?>" class="hidden-sm hidden-xs">
    	<?php endif; ?>

    	<?php if(get_field('infographic_mobile_image') != ""): ?>
 			<img src="<?php echo get_field('infographic_mobile_image'); ?>" class="visible-sm visible-xs">
    	<?php endif; ?>

    	<a href="<?php the_field('infographic_link'); ?>" class="btn btn-default">Klik di sini ya!</a>
    </div>
<?php get_footer(); ?>