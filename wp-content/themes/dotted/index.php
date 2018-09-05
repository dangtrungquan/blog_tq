<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dotted
 */

get_header(); ?>
    <!-- Subheader -->
    <section id="subheader" class="sub-header-border">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="title-subheader"><?php echo esc_html__('Blog News', 'dotted'); ?></h3>
                </div>
            </div>
        </div>
    </section>
    <!-- /Subheader -->
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
