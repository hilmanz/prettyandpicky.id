<?php get_header(); ?>
	
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="content-inside">
            <ol class="breadcrumb">
              <?php
                $posts = get_post_type();
                $obj = get_post_type_object($posts);
              ?>

              <?php 
                if ($obj->labels->singular_name == 'Post') {
                  $labelssingle = "Artikel";
                }else{
                  $labelssingle = $obj->labels->singular_name;
                }
              ?>
              <li><a href="#"><?php echo  $labelssingle ?> </a>
              </li>
              <li class="active">
                <?php  
                  $category_detail=get_the_category();//$post->ID
                  foreach($category_detail as $cd){
                    $category = $cd->cat_name;
                    echo $category;
                  }
                ?>
              </li>
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
        <div class="col-md-8 col-xs-12">
              <div class="post-content">
                <div class="featured-image">
                  <img src="<?php $img=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); echo $img[0]; ?>">
                </div>
                <?php echo the_content(); ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <div class="col-md-4 col-xs-12">
          <div class="widgets related-posts">
            <h5 class="title">Related Articles</h5>
            <?php 
              $exclude_post  = get_the_ID();
              $newQuery = new WP_Query(array( 
                  'posts_per_page' => 4,
                  'post_type' => 'post', 
                  'post__not_in' => array($exclude_post)
              ));  
            ?>
            <?php if($newQuery->have_posts()): ?>
              <?php while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                  <div class="list">
                      <a href="<?php the_permalink(); ?>">
                        <div class="overlay">
                          <img src="<?php $img= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); echo $img[0]; ?>" />
                        </div>
                        <h5><?php the_title(); ?></h5>
                        <p><?php the_excerpt(); ?></p>
                      </a>
                  </div>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            <?php endif; ?> 
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>