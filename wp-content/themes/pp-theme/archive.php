<?php
/*
Template Name: article
*/
get_header();
?>

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
          	<div class="col-md-12">
	            <div class="content-inside">
	              <?php echo get_template_part('template/partials/loop','articles'); ?> 
				</div>
			</div>
		</div>
    </div>
</div>
<?php get_footer(); ?>