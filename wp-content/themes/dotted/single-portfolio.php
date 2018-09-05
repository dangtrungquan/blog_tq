<?php 
	get_header(); 
?>
    <?php 
        if(dotted_get_option('page_header')) { 

        if( dotted_get_option('sheader_layout')=="2" ){
            get_template_part('framework/subheaders/subheader2');
        }elseif( dotted_get_option('sheader_layout')=="3" ){
            get_template_part('framework/subheaders/subheader3');
        }else{
            get_template_part('framework/subheaders/subheader1'); 
        }
    }

    ?>
    
    <?php if (have_posts()){ ?>
        <?php while (have_posts()) : the_post() ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php }else {
        esc_html_e('Page Canvas For Page Builder', 'dotted'); 
    }?>

    <?php if(dotted_get_option('single_related')) { ?>
    <div class="container">
        <div class="relate-project relate-post">
            <div class="over-hidden">
                <h3 class="title-inline"><?php echo esc_html__('Related Project', 'dotted'); ?></h3>
                <div class="customNavigation customNavigation-1">
                    <a class="btn-1 prev-relate-portfolio hover-border-theme hover-text-theme"><i class="fa fa-chevron-left"></i></a>
                    <a class="btn-1 next-relate-portfolio hover-border-theme hover-text-theme"><i class="fa fa-chevron-right"></i></a>
                </div><!-- End owl button -->
            </div>
            <div class="relate-portfolio-warp row">
                <div id="owl-relate-portfolio" class="owl-carousel owl-theme owl-relate-portfolio ">
                    <?php 
                        $i = 0;
                        $custom_taxterms = wp_get_object_terms( $post->ID, 'categories', array('fields' => 'ids') );
                        $args = array(   
                            'post_type' => 'portfolio',
                            'tax_query' => array(
                                            array(
                                                'taxonomy' => 'categories',
                                                'field' => 'id',
                                                'terms' => $custom_taxterms
                                            )
                                        ),
                            'post__not_in' => array ($post->ID),        
                        );  
                        $wp_query = new WP_Query($args);
                        while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                        $cates = get_the_terms(get_the_ID(),'categories');
                        $cate_name ='';
                        $cate_slug = '';
                        foreach((array)$cates as $cate){
                            if(count($cates)>0){
                                $cate_name .= $cate->name.'<span>, </span>' ;
                                $cate_slug .= $cate->slug .' ';     
                            } 
                        }

                        $popup_video = get_post_meta(get_the_ID(),'_cmb_popup_video', true);
                        $image = wp_get_attachment_url(get_post_thumbnail_id());
                    ?>
                    <div class="item number-<?php echo esc_attr($i); ?>">
                        <div class="project-item">
                            <div class="project-item-img-container">
                                
                                <img src="<?php echo esc_url($image); ?>" class="img-responsive" alt="Image">
                                <!-- Overlay -->
                                <div class="overlay-1 ">
                                    <a href="<?php the_permalink(); ?>">
                                        <i class="fa fa-link hover-border-theme "></i>
                                    </a>
                                    
                                    <?php if($popup_video) { ?>
                                        <a class="popup-youtube" href="<?php echo esc_url($popup_video); ?>"><i class="fa fa-expand hover-border-theme "></i></a>
                                    <?php }else{ ?>
                                        <a class="single-img-popup" href="<?php echo esc_url($image); ?>"><i class="fa fa-expand hover-border-theme "></i></a>
                                    <?php } ?>
                                </div>
                                <!-- /overlay -->
                            </div>
                            <h4 class="hover-text-theme"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h4>
                            
                            <p class="cate-project"><?php echo htmlspecialchars_decode($cate_name); ?></p>
                            
                        </div>
                    </div>
                    <?php $i++; endwhile; wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
    </div>
    <?php } ?>
            
    
<?php get_footer(); ?>