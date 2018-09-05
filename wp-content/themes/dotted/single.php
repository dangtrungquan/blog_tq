<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dotted
 */
get_header(); ?>
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
            <div class="row">
                <div class="main-page">
                    <div id="single-blog" class="single-blog-warp">
                        <?php 
                            while (have_posts()): the_post();                         
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
                        <div class="item-blog">
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
                            <div class="blog-feature-content single-feature-blog">
                                <div class="blog-feature-content-inner">
                                    <div class="blog-data">
                                        <div class="date-time bg-theme">
                                            <span class="date"><?php the_time('d') ?></span>
                                            <span class="month"><?php the_time('M') ?></span>
                                        </div>
                                        <div class="blog-type">
                                            <i class="fa fa-<?php echo esc_attr($icon); ?>"></i>
                                        </div>
                                    </div>
                                    <div class="blog-text">
                                        <h4><?php the_title(); ?></h4>
                                        <?php the_content(); ?>
                                        <?php
                                            wp_link_pages( array(
                                                'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'dotted' ) . '</span>',
                                                'after'       => '</div>',
                                                'link_before' => '<span>',
                                                'link_after'  => '</span>',
                                                'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'dotted' ) . ' </span>%',
                                                'separator'   => '<span class="screen-reader-text">, </span>',
                                            ) );
                                        ?>
                                    </div>
                                </div>
                                <div class="blog-footer-2 border-color-theme">
                                    <ul class="left-info">
                                        <li class="meta-a"><?php echo esc_html__('Posted by ', 'dotted'); ?><?php the_author_posts_link(); ?></li>
                                        <li class="meta-c"><?php echo esc_html__('on ', 'dotted'); ?> <?php the_category( ', ' ); ?></li>
                                        <li class="meta-cm"><?php comments_number( '0 '.esc_html__("comment","dotted"), '1 '.esc_html__("comment","dotted"), '% '.esc_html__("comments","dotted") ); ?></li>
                                    </ul>
                                    <?php if(dotted_get_option('single_sharing')) { ?>
                                    <ul class="social-share">
                                        <li><?php echo esc_html__('Share this article : ', 'dotted'); ?></li>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://twitter.com/home?status=<?php the_permalink(); ?>" class=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <?php } ?>
                                </div>
                            </div>
                            
                        </div>
                        <?php endwhile; ?>
                    </div>

                    <?php 
                        the_post_navigation( array(
                          'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Article <i class="fa fa-angle-right"></i>', 'dotted' ) . '</span> ' .
                            '<span class="screen-reader-text">' . esc_html__( 'Next Article:', 'dotted' ) . '</span> ',
                          'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '<i class="fa fa-angle-left"></i> Previous Article', 'dotted' ) . '</span> ' .
                            '<span class="screen-reader-text">' . esc_html__( 'Previous Article:', 'dotted' ) . '</span> ',
                        ) ); 
                    ?>
                    <?php if(dotted_get_option('single_related')) { ?>
                    <div class="relate-post">
                        <div class="over-hidden">
                            <h3 class="title-inline"><?php echo esc_html__('Related Posts', 'dotted'); ?></h3>
                            <div class="customNavigation customNavigation-1">
                                <a class="btn-1 prev-relate-blog hover-border-theme hover-text-theme"><i class="fa fa-chevron-left"></i></a>
                                <a class="btn-1 next-relate-blog hover-border-theme hover-text-theme"><i class="fa fa-chevron-right"></i></a>
                            </div><!-- End owl button -->
                        </div>
                        <div class="relate-blog-warp">
                            <div id="owl-relate-blog" class="owl-carousel owl-theme owl-relate-blog ">
                                <?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
                                $i = 0;
                                if( $related ) foreach( $related as $post ) {
                                setup_postdata($post); ?>

                                <div class="item number-<?php echo esc_attr($i); ?>">
                                    <div class="item-blog-sidebar">
                                        <?php if(has_post_thumbnail()) { ?>
                                        <div class="blog-feature-warp">
                                            <?php 
                                                $params = array( 'width' => 64, 'height' => 64, 'crop' => true );
                                                $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id()), $params );  
                                            ?>
                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($image); ?>" alt="" /></a>
                                        </div>
                                        <?php } ?>
                                        <div class="blog-feature-content <?php if(!has_post_thumbnail()) echo 'none-img'; ?>">
                                            <h4 class="hover-text-theme"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p><?php echo dotted_excerpt(7); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; } wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <div class="comment-area">
                    <?php
                       if ( comments_open() || get_comments_number() ) :
                        comments_template();
                       endif;
                    ?>
                    </div>

                </div>

                <div class="sidebar-page">
                    <div id="sidebar" class="main-sidebar">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>