<?php
/**
 * Template Name: Shop
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

    <div class="site-content">
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-md-9">                   
                        <?php while (have_posts()) : the_post()?>                                                                
                            <?php the_content(); ?>
                        <?php endwhile; ?>                
                    </div>
                    <div class="col-md-3">
                        <?php get_sidebar('shop');?>
                    </div> 
                   
                </div>
            </div>
        </section>
    </div>
    
<?php get_footer(); ?>
