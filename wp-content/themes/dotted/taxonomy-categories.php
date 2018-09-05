<?php
/**
 * The template for displaying archive portfolio.
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
            <div class="portfolio-warp">
            
				<div class="list-portfolio-warp row ">
					<?php 
		      			while (have_posts()) : the_post(); 
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
					<div class="col-md-4 element-item <?php echo esc_attr($cate_slug); ?>">
			            <div class="project-item">
			            	<div class="project-item-img-container">
			            		
			            		<img src="<?php echo esc_url($image); ?>" class="img-responsive" alt="Image">
			            		<!-- Overlay -->
			            		<div class="overlay-1 ">
			            			<a href="<?php the_permalink(); ?>">
			            				<i class="fa fa-link hover-border-theme"></i>
			            			</a>
			            			<?php if($popup_video) { ?>
			            				<a class="popup-youtube" href="<?php echo esc_url($popup_video); ?>"><i class="fa fa-expand hover-border-theme "></i></a>
			            			<?php }else{ ?>
			            				<a class="single-img-popup" href="<?php echo esc_url($image); ?>"><i class="fa fa-expand hover-border-theme "></i></a>
			            			<?php } ?>
			       		 		</div>
			       		 		<!-- /overlay -->
			            	</div>
			            	<h4><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h4>
			            	<p class="cate-project"><?php echo htmlspecialchars_decode($cate_name); ?></p>
			            </div>
			      	</div>
			      	<?php endwhile; wp_reset_postdata(); ?>
			    </div>

			</div>
        </div>
    </section>

<?php get_footer(); ?>