<?php
/**
 * Template Name: Blog TimeLine FullWidth
 */
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
    <!-- Main Content -->
    <section id="main-content">
        <div class="container">
            <ul class="timeline">
                <?php 
                    $args = array(    
                        'paged' => $paged,
                        'post_type' => 'post'
                    );
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()): $wp_query -> the_post();                         
                    $format = get_post_format();
                    $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true);
                    $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true);
                    $icon = '';
                    if( $format == 'video' ){
                        $icon = 'film';
                    }elseif( $format == 'audio' ){
                        $icon = 'volume-up';
                    }elseif( $format == 'gallery' ){
                        $icon = 'picture-o';
                    }elseif( $format == 'image' ){
                        $icon = 'picture-o';
                    }else{
                        $icon = 'pencil';
                    }
                ?>
                <li class="<?php if($i%2 == 0) echo 'timeline-inverted';?>">
                    <div class="blog-data">
                        <div class="date-time bg-theme">
                            <span class="date"><?php the_time('d') ?></span>
                            <span class="month"><?php the_time('M') ?></span>
                        </div>
                        <div class="blog-type">
                            <i class="fa fa-<?php echo esc_attr($icon); ?>"></i>
                        </div>
                    </div>
                    <div class="timeline-panel">
                        <div class="item-blog blog-single-feature-img">
                            <div class="blog-feature-warp <?php if($format == '') echo 'hide';?>">
                                <?php if($format == 'video') {  ?>
                                    <div class="embed-responsive embed-responsive-16by9">

                                        <iframe class="embed-responsive-item" src="<?php echo esc_url($link_video); ?>"></iframe>

                                    </div>
                                <?php }elseif($format == 'audio') { ?>
                                    <iframe src="<?php echo esc_url($link_audio); ?>"></iframe>
                                <?php }elseif($format == 'gallery') { ?>
                                    <div class="gallery-blog-post-warp">
                                        <div id="owl-gallery-blog-post" class="owl-carousel owl-theme owl-gallery-blog-post ">
                                        <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                                            <?php $images = rwmb_meta( '_cmb_images', "type=image" ); ?>
                                            <?php if($images){ ?>              
                                                <?php  foreach ( $images as $image ) {  ?>
                                                    <?php $img = $image['full_url']; ?>
                                                    <div class="item"><img src="<?php echo esc_url($img); ?>" alt=""></div>
                                                <?php } ?>                
                                            <?php } ?>
                                        <?php } ?>
                                        </div>
                                    </div>
                                <?php }elseif($format == 'image') { ?>
                                    <a href="<?php the_permalink(); ?>">
                                    <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                                        <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
                                        <?php if($images){ ?>              
                                            <?php  foreach ( $images as $image ) {  ?>
                                                <?php $img = $image['full_url']; ?>
                                                <img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
                                            <?php } ?>                
                                        <?php } ?>
                                    <?php } ?>
                                    </a>

                                <?php } ?>
                            </div>
                            <div class="blog-feature-content">
                                <div class="blog-feature-content-inner">
                                    
                                    <div class="blog-text">
                                        <h4><a class="hover-text-theme" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <p><?php echo dotted_excerpt_length(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="readmore hover-text-theme"><?php esc_html_e('[ read more ]', 'dotted'); ?></a>
                                    </div>
                                </div>
                                <div class="blog-footer-2 border-color-theme">
                                    <ul>
                                        <li><?php echo esc_html__('Posted by ', 'dotted'); ?><?php the_author_posts_link(); ?></li>
                                        <li><?php echo esc_html__('on ', 'dotted'); ?> <?php the_category( ', ' ); ?></li>
                                        <li><?php comments_number( '0 '.esc_html__("comment","dotted"), '1 '.esc_html__("comment","dotted"), '% '.esc_html__("comments","dotted") ); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php $i++; endwhile; ?>
            </ul>
                       
            <!-- Pagination start -->
            <nav class="pagination-blog">
                <?php echo dotted_pagination(); ?>    
            </nav><!-- Pagination end -->

        </div>

    </section>
    
<?php get_footer(); ?>
