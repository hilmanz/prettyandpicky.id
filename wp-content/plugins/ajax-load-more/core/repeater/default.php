<div class="col-md-3 list">
	<?php if(get_post_type() != 'gallery'): ?> <a href="<?php the_permalink(); ?>"> <?php endif; ?>
		<div class="featured-image">
        	<?php if(get_post_type() == 'gallery'): ?>
        	<img src="<?php echo get_field('image'); ?>">
        	<?php else: ?>
			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>">
        	<?php endif; ?>
		</div>
		<h3><?php echo get_the_title(); ?></h3>
		<?php if(get_post_type() != 'recipes') the_excerpt(); ?>
	<?php if(get_post_type() != 'gallery'): ?> </a> <?php endif; ?>
</div>