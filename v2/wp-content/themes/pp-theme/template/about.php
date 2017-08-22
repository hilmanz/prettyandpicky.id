<?php
/*
Template Name: about
*/
get_header();
?>
    <div class="content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <div class="content-inside">
              <?php while ( have_posts() ) : the_post(); ?>
                <h1 class="title"><?php the_title(); ?></h1> 
                <div class="content-top">
                  <div class="row">
                    <div class="col-md-7 col-xs-12">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food1.jpg">
                    </div>
                    <div class="col-md-5 col-xs-12">
                      <h5 class="quote">Hidup sehat ala The <br> Pretty and Picky itu <br> gampang dan <br> menyenangkan!</h5>
                    </div>
                  </div>
                </div>
                <div class="content-bottom">
                  <div class="row">
                    <div class="col-md-6 col-xs-12 content-left"><?php the_content(); ?></div>
                    <div class="col-md-6 col-xs-12">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food2.jpg">
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	<?php get_footer(); ?>