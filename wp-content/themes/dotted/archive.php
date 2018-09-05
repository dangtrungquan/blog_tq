<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
                    <div id="list-blog" class="list-blog-warp">
                        <?php 
                            while (have_posts()) : the_post();
                                get_template_part( 'content', get_post_format() ) ;   // End the loop.
                            endwhile;
                        ?>
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