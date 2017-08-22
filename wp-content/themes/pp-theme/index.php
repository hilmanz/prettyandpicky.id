<?php 
get_header(); 
?>

  <div class="top__video">
      <a href="javascript:void(0)" id="btn-play-video" class="btn-play">Play</a>
      <iframe src="https://www.youtube.com/channel/UCbSvIqeSziNo6KFupY5rzrQ" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="main__banner">
      <img src="assets/img/main-banner.jpg">
    </div> 

    <div class="content-wrapper">
      <div class="widgets-wrapper">
        <div class="widgets-content">
          <!-- spotlight widgets -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <div class="widgets banners dibalik-fakta">
                  <h5>temukan fakta dibalik label makananmu!</h5>
                  <a href="#" class="btn btn-default">Cari tau disini!</a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="widgets banners bmi">
                  <h5>temukan bentuk <br> badan idealmu!</h5>
                  <form class="form-horizontal" action="bmi.html" method="post">
                    <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <input type="text" name="tanggal_lahir" class="form-control" placeholder="TANGGAL">
                          </div>
                          <div class="col-md-4">
                            <input type="text" name="tanggal_lahir" class="form-control" placeholder="BULAN">
                          </div>
                          <div class="col-md-4">
                            <input type="text" name="tanggal_lahir" class="form-control" placeholder="TAHUN">
                          </div>
                        </div>   
                    </div>
                    <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <label for="berat_badan" class="control-label">Berat Badan</label>
                            <input type="text" name="tanggal_lahir" class="form-control" placeholder="KG">
                          </div>
                          <div class="col-md-6">
                            <label for="berat_badan" class="control-label">Tinggi Badan</label>
                            <input type="text" name="tanggal_lahir" class="form-control" placeholder="CM">
                          </div>
                        </div>  
                    </div>
                    <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                            <!-- <select name="jenis_kelamin" class="form-control">
                              <option value="">LAKI-LAKI/PEREMPUAN</option>
                              <option value="1">LAKI-LAKI</option>
                              <option value="2">PEREMPUAN</option>
                            </select> -->
                            <input type="text" name="tanggal_lahir" class="form-control" placeholder="LAKI-LAKI / PEREMPUAN">
                          </div>
                        </div>  
                    </div>
                    <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
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
                  <div class="col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/article-small-dummy.png">
                    <h3>5 makanan sehat bermanfaat</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                  </div>
                  <div class="col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/article-small-dummy.png">
                    <h3>5 makanan sehat bermanfaat</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                  </div>
                  <div class="col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/article-small-dummy.png">
                    <h3>5 makanan sehat bermanfaat</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                  </div>
                  <div class="col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/article-small-dummy.png">
                    <h3>5 makanan sehat bermanfaat</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <a href="articles.html" class="btn btn-default">Lihat semua</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // end article widget -->

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
                  <div class="col-md-3">
                    <div class="overlay">
                      <a href="#" class="btn-play">Play</a>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recipe-small-dummy.png">
                    <h3>5 makanan sehat bermanfaat</h3>
                  </div>
                  <div class="col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recipe-small-dummy.png">
                    <h3>5 makanan sehat bermanfaat</h3>
                  </div>
                  <div class="col-md-3">
                    <div class="overlay">
                      <a href="#" class="btn-play">Play</a>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recipe-small-dummy.png">
                    <h3>5 makanan sehat bermanfaat</h3>
                  </div>
                  <div class="col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recipe-small-dummy.png">
                    <h3>5 makanan sehat bermanfaat</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <a href="#" class="btn btn-default">Lihat semua</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // end article widget -->

      </div>
    </div>

<?php get_footer(); ?>