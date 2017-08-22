
<div class="content-wrapper">
  <?php echo do_shortcode('[pp-recipes-recent-post]'); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="content-inside">
          <h1 class="title">Makanan Sehat Lezat</h1> 
          <h6 class="sub-title">Siapa bilang makanan sehat itu nggak enak? <br> Yuk cari tau gimana enaknya makan makanan sehat buatan sendiri!</h6>
          <!-- Nav tabs -->
          <?php echo do_shortcode('[pp-category]'); ?>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="lifestyle">
              <div class="lists">
                <div class="row">
                    <?php 
                        $cat = get_query_var('recipes_category'); 
                        echo do_shortcode('[ajax_load_more post_type="recipes" taxonomy="recipes_category" taxonomy_terms="'.$cat.'" taxonomy_operator="IN" button_label="Selanjutnya" images_loaded="true" scroll="false" posts_per_page="8"]'); 
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