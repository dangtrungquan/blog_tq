<?php
/**
 * Template Name: FullWidth
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

    
    <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php get_footer(); ?>