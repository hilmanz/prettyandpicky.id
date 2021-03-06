<?php
get_header();
?>

    <div class="content-wrapper">
      <div class="sticky-post">
        <div class="sticky-post-content">
          <?php 
            /**  
             * Get Recent Posts
             **/
            $args = array(
              'numberposts' => 1,
              'offset' => 0,
              'category' => 0,
              'orderby' => 'post_date',
              'order' => 'DESC',
              'post_type' => 'recipes',
              'post_status' => 'publish',
              'suppress_filters' => true
            );

            $recent_posts = wp_get_recent_posts($args, ARRAY_A);
            foreach($recent_posts as $post): 
          ?>
          <h1 class="title">
            <a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a>
          </h1>
          <p><?php echo wp_trim_excerpt($post['post_content']); ?></p>
          <div class="sticky-post-image">
            <?php echo get_the_post_thumbnail($post['ID']); ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="content-inside">
              <h1 class="title">Makanan Sehat Lezat</h1> 
              <h6 class="sub-title">Siapa bilang makanan sehat itu nggak enak? <br> Yuk cari tau gimana enaknya makan makanan sehat buatan sendiri!</h6>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
        				<?php
        					$customPostTaxonomies = get_object_taxonomies('recipes');
        						if(count($customPostTaxonomies) > 0){
        							foreach($customPostTaxonomies as $tax){
        								$args = array(
        									'orderby' => 'id',
        									'taxonomy' => $tax,
        									'title_li' => '',
        									'hide_empty'   => '0'
        								);
        								wp_list_categories( $args );
        							}
        						}
        				?>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="lifestyle">
                  <div class="lists">
                    <div class="row">
                        <?php query_posts("showposts=8&post_type=recipes") ?>
                        <?php if(have_posts()): ?>
                        <?php while(have_posts()) : the_post(); ?>
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
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="center-block text-center">
              <a href="#" class="btn btn-default">Selanjutnya</a>
            </div> -->
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>