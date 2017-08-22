<?php
/*
Template Name: homepage
*/
get_header();
?>
  <div class="top__video" style="background-image: url('<?php echo get_field( "image" ); ?>');">
    <a href="javascript:void(0)" id="btn-play-video" class="btn-play">Play</a>
	  <video id="video" src="<?php echo get_template_directory_uri(); ?>/assets/video.mp4" controls poster="<?php echo get_field( "image" ); ?>"></video>
  </div>
  <!--<div class="top__video">
      <?php //putRevSlider( 'pretty-and-picky-post-slider' ); ?>
  </div>-->
	<div class="main__banner">
    <a href="<?php echo get_field("banner_hero_link" ); ?>">
  		<img src="<?php echo get_field("banner_desktop_image"); ?>" class="hidden-sm hidden-xs">
        <img src="<?php echo get_field("banner_mobile_image"); ?>" class="visible-sm visible-xs">
    </a>
	</div>

    <div class="content-wrapper">
        <div class="widgets-wrapper">
            <!-- article widget -->
            <div class="widgets-wrapper article-widgets-wrapper">
              <div class="widgets-content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="title">Artikel</h2>
                      <h6 class="sub-title">Siapa bilang hidup sehat itu susah? <br> Yuk temukan informasi, tips&trik, fakta terbaru dan apa pun yang kamu mau tau di sini!</h6>
                    </div>
                  </div>
                  <div class="lists">
                    <div class="row">
                      <?php query_posts("showposts=4") ?>
                      <?php if(have_posts()): ?>
                        <?php while(have_posts()) : the_post(); ?>
                          <div class="col-md-3 list">
                            <a href="<?php the_permalink(); ?>">
                              <div class="featured-image">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>">
                              </div>
                              <h3><?php echo get_the_title(); ?></h3>
                              <?php the_excerpt(); ?>
                            </a>
                          </div>
                      <?php
                          endwhile;
                        endif;
                        wp_reset_query();
                      ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="<?php the_field('article_home_link2'); ?>" class="btn btn-default">Lihat semua</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- // end article widget -->
        </div>

    </div>

    <div class="content-wrapper">
      <div class="widgets-wrapper">
        <div class="widgets-content">
          <!-- spotlight widgets -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="widgets banners dibalik-fakta">
                  <h5>temukan fakta dibalik komposisi makananmu!</h5>
                  <a href="<?php the_field("infographic_link"); ?>" class="btn btn-default">Cari tau disini! </a>
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                  <div class="widgets banners bmi">
                  <h5>temukan bentuk <br> badan idealmu!</h5>
                  <form class="form-horizontal" action="<?php the_field('bmi_link'); ?>" method="post">
                    <div class="form-group">
                        <div class="row">
                          <div class="col-md-12 col-xs-12">
                            <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 col-xs-4">
                            <select name="tanggal_lahir" class="form-control select-tanggal-lahir">
                              <option value="">TANGGAL</option>
                              <?php for($i = 1; $i <= 31; $i++): ?>
                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php endfor; ?>
                            </select>
                          </div>
                          <div class="col-md-4 col-xs-4">
                            <select name="bulan_lahir" class="form-control select-bulan-lahir">
                              <option value="">BULAN</option>
                              <?php for($i = 1; $i <= 12; $i++): ?>
                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php endfor; ?>
                            </select>
                          </div>
                          <div class="col-md-4 col-xs-4">
                            <select name="tahun_lahir" class="form-control select-tahun-lahir">
                              <?php
                                $min_year = date("Y") - 19;
                                $max_year = date("Y") - 12;
                              ?>
                              <option value="">TAHUN</option>
                              <?php for($i = $min_year; $i <= $max_year; $i++): ?>
                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php endfor; ?>
                            </select>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                          <div class="col-md-6 col-xs-6">
                            <label for="berat_badan" class="control-label">Berat Badan</label>
                            <input type="text" name="berat_badan" class="form-control" placeholder="KG" maxlength="3">
                          </div>
                          <div class="col-md-6 col-xs-6">
                            <label for="berat_badan" class="control-label">Tinggi Badan</label>
                            <input type="text" name="tinggi_badan" class="form-control" placeholder="CM">
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                          <div class="col-md-12 col-xs-12">
                            <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control select-jenis-kelamin">
                              <option value=""></option>
                              <option value="1">LAKI-LAKI</option>
                              <option value="2">PEREMPUAN</option>
                            </select>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                          <div class="col-md-12 col-xs-12">
                            <button type="submit" class="btn btn-default">Submit</button>
                          </div>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // end spotlight widgets -->

        <!-- makan sehat widget -->
        <div class="widgets-wrapper recipes-widgets-wrapper">
          <div class="widgets-content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="title">Makan Sehat Lezat</h2>
                  <h6 class="sub-title">Siapa bilang makanan sehat itu nggak enak? <br> Yuk cari tau gimana enaknya makan makanan sehat buatan sendiri!</h6>
                </div>
              </div>
              <div class="lists">
                <div class="row">
                    <?php query_posts("showposts=4&post_type=recipes") ?>
                    <?php if(have_posts()): ?>
                      <?php while(have_posts()) : the_post(); ?>
                        <div class="col-md-3 list">
                          <a href="<?php the_permalink(); ?>">
                            <!--
                            <?php if(get_field("video_url")): ?>
                            <div class="overlay">
                              <a href="#" class="btn-play">Play</a>
                            </div>
                            <?php endif; ?>
                            -->
                            <div class="featured-image">
                              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>">
                            </div>
                            <h3><?php echo get_the_title(); ?></h3>
                          </a>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <a href="<?php echo get_post_type_archive_link('recipes');  ?>" class="btn btn-default">Lihat semua</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // end article widget -->

        <!-- Instagram Feed -->
        <div class="widgets-wrapper instagram-widgets-wrapper">
          <h2 class="title">@ThePrettyAndPicky</h2>
          <div class="widgets-content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <?php echo do_shortcode('[instashow id="1"]'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- //Instagram Feed -->
      </div>
    </div>

<?php get_footer(); ?>
