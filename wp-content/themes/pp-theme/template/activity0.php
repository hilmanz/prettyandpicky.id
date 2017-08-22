<?php
/**
 * Template Name: Activity
 *
 * @author 		Kodr Indonesia <halo@kodrindonesia.com>
 * @since 		Mar 15, 2017
 **/
get_header();
?>
	<?php if(count(get_field('cara_ikutan_content')) > 0): ?>
		<style type="text/css">
			.activity .content-wrapper .main__banner {
				padding-top: 33px !important;
			}
		</style>
	<?php endif; ?>
    <div class="content-wrapper">
    	<?php if(get_field('banner_image')): ?>
    	<div class="main__banner">
		  	<img src="<?php echo get_field('banner_image'); ?>">
		</div> 
		<?php endif; ?>

		<?php if(get_field('highlight_description')): ?>
		<div class="higlights">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-12 text-right">
						<h2><?php echo get_field('highlight_title'); ?></h2>
					</div>
					<div class="col-md-6 col-sm-12 ">
						<?php echo get_field('highlight_description'); ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>	
		
		<?php if(have_rows('cara_ikutan_content') && count(get_field('cara_ikutan_content')) > 0): ?>
		<div class="how-to">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h2 class="title">Cara Ikutan</h2>
					</div>
					<div class="how-to-content">
						<?php while(have_rows('cara_ikutan_content') ) : the_row(); ?>
						<div class="<?php echo strtolower(get_sub_field('title')); ?> box text-center col-md-4 col-sm-12" style="background-image: url('<?php echo get_sub_field('image'); ?>');">
							<h4><?php echo get_sub_field('title'); ?></h4>
							<?php echo get_sub_field('description'); ?>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	
		<?php if(get_field('mekanisme')): ?>
		<div class="mechanism">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h2 class="title">Mekanisme</h2>
						<?php echo get_field('mekanisme'); ?>
					</div>
				</div>
			</div>
		</div>	
		<?php endif; ?>
		
		<?php if(get_field('syarat_ketentuan')): ?>
		<div class="terms">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h2 class="title">Syarat & Ketentuan</h2>
						<?php echo get_field('syarat_ketentuan'); ?>
					</div>
				</div>
			</div>
		</div>	
		<?php endif; ?>
    </div>
<?php get_footer(); ?>