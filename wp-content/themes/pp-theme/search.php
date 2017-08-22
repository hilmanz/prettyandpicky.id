<?php

get_header();
?>
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="content-inside">
              <h1 class="title">Pencarian</h1> 
	            <?php
					global $wp_query;
					$total_results = $wp_query->found_posts;
				?>
				<?php
				    $args = array(
				        's' =>$s
				    );
				    $the_query = new WP_Query( $args );
				?>

              <h6 class="sub-title">Total Pencarian Menemukan TOTAL <?php echo $total_results ?> Hasil Pencarian Dengan Kata <?php _e("<b><i>".get_query_var('s')."</i></b>"); ?></h6>
              <!-- Nav tabs -->
              <!-- <ul class="nav nav-tabs" role="tablist">
					<?php
						$categories = get_categories( array(
							'orderby' => 'name',
							'order'   => 'ASC',
							'hide_empty'   => '0'
						) );
						foreach( $categories as $category ) {?>
							<li role="presentation" ><a href="#lifestyle" aria-controls="home" role="tab" data-toggle="tab"><?php echo $category->name ?></a></li>
					<?php
						}
					?>			
				</ul> -->
              <!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="lifestyle">
						<div class="lists">
			                <div class="row">
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
    </div>


    <?php get_footer(); ?>
