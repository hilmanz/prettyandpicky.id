<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-md-3 list">
            <a href="<?php the_permalink(); ?>">
                <?php if(get_field("video_url")): ?>
                    <div class="overlay">
                        <a href="<?php echo get_yt_id(get_field("video_url")); ?>" class="btn-play">Play</a>
                    </div>
                <?php endif; ?>
                <img src="<?php $img=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); echo $img[0]; ?>"/>
                <h3><?php echo get_the_title(); ?></h3>
            </a>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
<?php endif; ?> 