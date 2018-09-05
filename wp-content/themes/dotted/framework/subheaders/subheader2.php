<!-- Subheader -->
<section id="subheader" class="no-padding sub-header-2">
	<div class="container">
		<div class="row">
			<div class="sub-header-warp">
				<div class="col-sm-6">
	                <h3 class="title-subheader">
	                	<?php 
		                if(is_singular( 'post' )){
		                    esc_html_e('Blog Single', 'dotted');
		                }elseif(is_search()){
		                    printf( esc_html__( 'Search Results for: %s', 'dotted' ), '<span>' . get_search_query() . '</span>' );
		                }elseif(is_post_type_archive('product')){
		                        woocommerce_page_title();
		                }elseif(is_archive()) {
		                        the_archive_title();
		                }else{
		                    the_title(); 
		                }
		                ?>
	                </h3>
	            </div>
	            <div class="col-sm-6">
	            	<?php if(dotted_get_option('breadcrumb')) { ?>   
	                <div class="breadcrumb">
	                    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
	                </div>
	                <?php } ?>
	            </div>
			</div>
		</div>
	</div>
</section>
<!-- /Subheader -->