<?php
/**
 * Template Name: coming soon
 **/
get_header();
?>
	<?php if(get_field('coming_soon_image','options')) : ?>
		<style type="text/css">
			.content-wrapper {
				background-image: url('<?php echo get_field('coming_soon_image','option'); ?>') !important;
			}
		</style>
	<?php endif; ?>
    <div class="content-wrapper"></div>
<?php get_footer(); ?>