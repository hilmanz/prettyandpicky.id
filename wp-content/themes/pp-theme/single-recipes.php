<?php get_header(); ?>
	
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="content-inside">
            <ol class="breadcrumb">
              <li><?php the_title(); ?></li>
              <li class="active">Recipes</li>
            </ol>
            <h1 class="title"><?php the_title(); ?></h1> 
            <div class="meta">
              <div class="row">
                <div class="col-md-4 col-xs-3 col-xs-12 col-sm-12">
                  <p><?php the_date('d M Y'); ?></p>
                </div>
                <div class="col-md-4 col-xs-6 text-center">
                  <?php echo do_shortcode('[social-share]'); ?>
                </div>
                <div class="col-md-4 col-xs-3 text-right">
                  <?php echo do_shortcode('[pp-pagination]'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="row">
        <div class="col-md-8">
              <div class="post-content">
                <?php if(has_post_thumbnail() && get_field('video_url') == ""): ?>
                <div class="featured-image">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>">
                </div>
                <?php endif; ?>
                <?php if(get_field('video_url')) echo wp_oembed_get(get_field('video_url')); ?>
					      <h5>Porsi: <?php echo strip_tags(get_field("porsion")); ?></h5>
					      <h5>Bahan-bahan:</h5>
						    <?php echo get_field("ingredients"); ?>
					      <h5>Cara Membuat:</h5>
						    <?php echo get_field("directions"); ?>
					      <h5>Manfaat:</h5>
						    <?php echo get_field("benefit"); ?>
                <div class="meta">
                  <div class="row">
                    <div class="col-md-6">
                      <?php echo do_shortcode('[pp-tags]'); ?>
                    </div>
                    <div class="col-md-6 text-right">
                      <?php echo do_shortcode('[social-share]'); ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <div class="col-md-4">
          <div class="widgets related-posts">
            <?php echo do_shortcode('[pp-related-posts post_type="recipes"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>