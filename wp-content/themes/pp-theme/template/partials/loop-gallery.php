<div class="content-wrapper">
  <?php 

    //querying sticky posts
    $sticky = query_posts(array(
      'posts_per_page' => 1,
      'post_type' => 'gallery',
      'order' => 'desc',
      'orderby' => 'date'
    ));

    if(have_posts()) :
      while(have_posts()): the_post();
  ?>
  <div class="top__video" style="background-image: url('<?php echo get_field('image'); ?>">
    <?php if(get_field('video_url') != ""): ?>
      <a href="javascript:void(0)" id="btn-play-video-gallery" class="btn-play">Play</a>
      <?php echo wp_oembed_get(get_field('video_url')); ?>
    <?php endif; ?>
  </div>
  <?php 
      endwhile;
    endif;
  ?>
  <?php //echo do_shortcode('[pp-sticky-post post_type="gallery"]'); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="content-inside">
  				<h1 class="title">Galeri</h1> 
          <h6 class="sub-title">mau tahu keseruan the pretty and picky sama bestiesnya? <br> cek video & foto dibawah ini yuk!</h6>
          <!-- Nav tabs -->
  			  <?php echo do_shortcode('[pp-category post_type="gallery" taxonomy="gallery_categories"]'); ?>
  			  <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="lifestyle">
              <div class="lists">
                <div class="row">
                    <?php 
                        $cat = get_query_var('gallery_category'); 
                        echo do_shortcode('[ajax_load_more post_type="gallery" taxonomy="gallery_category" taxonomy_terms="'.$cat.'" taxonomy_operator="IN" button_label="Selanjutnya" images_loaded="true" scroll="false" posts_per_page="8"]'); 
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>