<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="col-md-3 list">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php $img=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); echo $img[0]; ?>"/>
				<h3><?php echo get_the_title(); ?></h3>
				<?php the_excerpt(); ?>
			</a>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
<?php endif; ?> 
		
    