<?php
/**
 * Template Name: acara
 **/
get_header();
?>

<?php //echo get_template_part('template/partials/loop','acara'); ?>
<?php if(get_field('coming_soon_image','options')) : ?>
	<style type="text/css">
		.content-wrapper {
			background: url('<?php echo get_field('coming_soon_image','option'); ?>') center center / cover !important;
		}
	</style>
<?php endif; ?>
<div class="content-wrapper"></div>
<?php get_footer(); ?>