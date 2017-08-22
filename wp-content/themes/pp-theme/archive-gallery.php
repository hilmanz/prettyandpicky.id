<?php
/**
 * Template Name: gallery
 **/
get_header();
?>

	<?php //echo get_template_part('template/partials/loop','gallery'); ?>
<?php if(get_field('coming_soon_image','options')) : ?>
	<style type="text/css">
		.content-wrapper {
			background: url('<?php echo get_field('coming_soon_image','option'); ?>') center center / cover !important;
		}

		.content-wrapper:before {
			content: "" !important;
		}

		.content-wrapper:after {
			content: "" !important;
		}

		.footer:before {
			content: "" !important;
		}
	</style>
<?php endif; ?>
<div class="content-wrapper"></div>
<?php get_footer(); ?>