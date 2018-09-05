<!-- Subheader -->
<section id="subheader" class="no-padding sub-header-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sub-header-warp">
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
            </div>
        </div>
    </div>
</section>
<?php if(dotted_get_option('breadcrumb')) { ?>  
<section class="no-padding sub-header-border sub3">
    <div class="container">
        <div class="breadcrumb">
            <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
        </div>
    </div>
</section>
<?php } ?>
<!-- /Subheader -->