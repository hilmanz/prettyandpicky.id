<h1 class="title">Artikel</h1> 
<h6 class="sub-title">Siapa bilang hidup sehat itu susah? <br> Yuk temukan informasi, tips&trik, fakta terbaru dan apa pun yang kamu mau tau di sini!</h6>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
<?php
	$args = array(
		'orderby' => 'name',
		'order' => 'ASC',
		'title_li' => '',
		'hide_empty' => '0'
	);
	echo wp_list_categories($args); 
?>		
</ul>
	<!-- Tab panes -->
<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="lifestyle">
		<div class="lists">
            <div class="row">
            	<?php 
                    $cat = get_category(get_query_var('cat')); 
                    echo do_shortcode('[ajax_load_more post_type="post" category="'.$cat->slug.'" button_label="Selanjutnya" images_loaded="true" scroll="false" posts_per_page="8"]'); 
                ?>
              
            </div>
          </div>
	</div>
</div>