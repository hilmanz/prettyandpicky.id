<?php
/*
Template Name: article
*/
get_header();
?>

    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="content-inside">
              <h1 class="title">Artikel</h1> 
              <h6 class="sub-title">Siapa bilang hidup sehat itu susah? <br> Yuk temukan informasi, tips&trik, fakta terbaru dan apa pun yang kamu mau tau di sini!</h6>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
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
				</ul>
              <!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="lifestyle">
						<div class="lists">
			                <div class="row">
			                  <?php query_posts("showposts=8") ?>
			                  <?php echo get_template_part('template/partials/loop','articles'); ?> 
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
