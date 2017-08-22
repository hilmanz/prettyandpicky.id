<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="content-inside">
				<h1 class="title">Acara</h1>
        <?php echo do_shortcode('[pp-category post_type="events" taxonomy="events_category"]'); ?>
			  <!-- Tab panes -->
          <div class="tab-content" style="margin-top: 80px">
            <div role="tabpanel" class="tab-pane active" id="lifestyle">
              <div class="lists">
                <div class="row">
                    <?php 
                        $cat = get_query_var('events_category'); 
                        echo do_shortcode('[ajax_load_more post_type="events" post_type="events" taxonomy="events_category" taxonomy_terms="'.$cat.'" taxonomy_operator="IN"  button_label="Selanjutnya" images_loaded="true" scroll="false" posts_per_page="8"]'); 
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