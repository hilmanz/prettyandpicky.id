<?php
/*
Template Name: contact
*/
get_header();
?>

    <div class="content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-xs-12">
            <div class="content-inside">
              <h1 class="title"><?php the_title(); ?></h1> 
              <div class="forms">
                <?php if ( have_posts() ) : ?>
                  <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content();  ?>
                  <?php endwhile; ?>
                <?php endif; ?> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>