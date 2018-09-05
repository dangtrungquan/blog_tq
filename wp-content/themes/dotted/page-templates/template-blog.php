<?php
/**
 * Template Name: Blog
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
            <div class="row">
                <div class="main-page">
                    <div id="list-blog" class="list-blog-warp">
                        <?php 
                            $args = array(    
                                'paged' => $paged,
                                'post_type' => 'post',
                            );
                            $wp_query = new WP_Query($args);
                            while ($wp_query -> have_posts()): $wp_query -> the_post();                         
                            $format = get_post_format(); 
                        ?>
                        <?php 
                            
                            get_template_part( 'content', get_post_format() ) ;   // End the loop.
                            
                        ?>

                        <?php endwhile; ?>
                        <!-- Pagination start -->
                        <nav class="pagination-blog">
                            <?php echo dotted_pagination(); ?>    
                        </nav><!-- Pagination end -->
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
