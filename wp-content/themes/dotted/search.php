<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                        <?php if(have_posts()) :

                            while ( have_posts()): the_post();                        

                            get_template_part( 'content', get_post_format() ) ;

                            endwhile;?>

                            <?php // If no content, include the "No posts found" template.
                            else : ?>
                                                           
                                <h2 class="page-title"><?php esc_html_e( 'Nothing Found', 'dotted' ); ?></h2>
                                
                                <div class="page-content">
                                    <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dotted' ); ?></p>
                                    <div class="widget_search">
                                        <?php get_search_form(); ?>
                                    </div>
                                </div><!-- .page-content -->
                        <?php endif; ?>
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