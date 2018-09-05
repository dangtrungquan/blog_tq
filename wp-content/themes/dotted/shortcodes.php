<?php 

// Icon box
add_shortcode('servicesbox', 'servicesbox_func');
function servicesbox_func($atts, $content = null){
	extract(shortcode_atts(array(
		'icon'		=>	'',
		'title'		=>	'',	
		'stitle'	=>	'',
		'style'		=>	'',
		'linkbox'	=>	'',
	), $atts));
		$style1 = (!empty($style) ? $style : 'style1');
		$url 	= vc_build_link( $linkbox );
	ob_start(); ?>

	<?php if($style1=='style1'){ ?>
	    <div class="iconbox iconbox-set-1">
			<div class="icon-1">
				<i class="<?php echo esc_attr($icon); ?> color-theme" aria-hidden="true"></i>
			</div>
			<h4 class="text-up"><?php echo htmlspecialchars_decode($title); ?></h4>
			<?php if($content){ ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
			<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
				echo '<a class="ot-btn btn-main-color btn-rounded text-up" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ).' <i class="fa fa-plus" aria-hidden="true"></i></a>';
			} ?>
		</div>
	<?php }elseif($style1=='style2'){ ?>
        <div class="iconbox iconbox-set-2">
			<div class="icon-1">
				<i class="<?php echo esc_attr($icon); ?> color-theme" aria-hidden="true"></i>
			</div>
			<h4 class="text-up"><?php echo htmlspecialchars_decode($title); ?></h4>
			<?php if($stitle){ ?><p class="sub-text"><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
			<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
				echo '<a class="ot-btn btn-main-color btn-rounded text-up" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ).' <i class="fa fa-plus" aria-hidden="true"></i></a>';
			} ?>
		</div>
    <?php }elseif($style1=='style3'){ ?>
    	<div class="iconbox-set-3">
			<div class="icon-2 border-color-theme">
				<i class="<?php echo esc_attr($icon); ?> color-theme" aria-hidden="true"></i>
			</div>
			<h4 class="text-up"><?php echo htmlspecialchars_decode($title); ?></h4>
			<p><?php echo htmlspecialchars_decode($content); ?></p>
		</div>
    <?php }?>
    	
<?php
    return ob_get_clean();
}

// Button
add_shortcode('otbutton','otbutton_func');
function otbutton_func($atts, $content = null){
	extract(shortcode_atts(array(
		'btn'		=>	'',
		'icon'		=>	'',
		'size'		=>	'',
		'style'		=>	'',
		'bg'		=>	'btn-main-color',
	), $atts));
		$url 	= vc_build_link( $btn );
		$icon1 = '';
		if($icon){
			$icon1 = ' <i class="'.$icon.'"></i>';
		}
	ob_start(); 
?>

    <?php if ( strlen( $btn ) > 0 && strlen( $url['url'] ) > 0 ) {
		echo '<a class="ot-btn'. esc_attr(' '.$size) . esc_attr(' '.$style). esc_attr(' '.$bg). '" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ). $icon1 .'</a>';
	} ?>
  	
<?php
    return ob_get_clean();
}


// Member Team
add_shortcode('member','member_func');
function member_func($atts, $content = null){
	extract(shortcode_atts(array(
		'photo'		=>	'',
		'name'		=>	'',
		'job'		=>	'',
		'link'		=>	'#',
		'social1'	=>	'',
		'social2'	=>	'',
		'social3'	=>	'',
		'social4'	=>	'',
		'style'		=>	'',
	), $atts));
		$img = wp_get_attachment_image_src($photo,'full');
		$img = $img[0];
		$url 	= vc_build_link( $social1 );
		$url2 	= vc_build_link( $social2 );
		$url3 	= vc_build_link( $social3 );
		$url4 	= vc_build_link( $social4 );
	ob_start(); 
?>
	
	
	<div class="team-item <?php if($style == 'style2') echo 'team-circle'; ?>">
    	<div class="team-item-img-container">
    		<img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
    		<div class="overlay-1 hover-border-theme">
    			<a href="<?php echo esc_url($link); ?>">
    				<i class="fa fa-link hover-border-theme "></i>
    			</a>
    			<a class="single-img-popup" href="<?php echo esc_url($img); ?>"><i class="fa fa-expand hover-border-theme "></i></a>
		 	</div>
    	</div>
    	<h4 class="team-name"><?php echo htmlspecialchars_decode($name); ?></h4>

    	<p class="team-job color-theme "><?php echo htmlspecialchars_decode($job); ?></p>
    	<p class="team-info "><?php echo htmlspecialchars_decode($content); ?></p>
    	<div class="team-social-warp border-color-theme">
    		<?php if ( strlen( $social1 ) > 0 && strlen( $url['url'] ) > 0 ) {
				echo '<a class="hover-text-theme" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '"><i class="fa '. esc_attr( $url['title'] ).'" aria-hidden="true"></i></a>';
			} ?>
			<?php if ( strlen( $social2 ) > 0 && strlen( $url2['url'] ) > 0 ) {
				echo '<a class="hover-text-theme" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url2['target'] ) > 0 ? esc_attr( $url2['target'] ) : '_self' ) . '"><i class="fa '. esc_attr( $url2['title'] ).'" aria-hidden="true"></i></a>';
			} ?>
			<?php if ( strlen( $social3 ) > 0 && strlen( $url3['url'] ) > 0 ) {
				echo '<a class="hover-text-theme" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url3['target'] ) > 0 ? esc_attr( $url3['target'] ) : '_self' ) . '"><i class="fa '. esc_attr( $url3['title'] ).'" aria-hidden="true"></i></a>';
			} ?>
			<?php if ( strlen( $social4 ) > 0 && strlen( $url4['url'] ) > 0 ) {
				echo '<a class="hover-text-theme" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url4['target'] ) > 0 ? esc_attr( $url4['target'] ) : '_self' ) . '"><i class="fa '. esc_attr( $url4['title'] ).'" aria-hidden="true"></i></a>';
			} ?>
    	</div>
    </div>

<?php
    return ob_get_clean();
}

// Team Slider
add_shortcode('teamslider', 'teamslider_func');
function teamslider_func($atts, $content = null){
	extract(shortcode_atts(array(
		'col'		=>	'3',
		'speed'		=>	'6000',
		'style'		=>	'',	
	), $atts));
	$id = uniqid( 'team-slider-' );
	ob_start(); ?>

	<div class="row">
		<div id="<?php echo esc_attr($id); ?>" class="owl-theme owl-carousel team-slider">
			<?php			
				$args = array(
					'post_type' => 'team',
					'posts_per_page' => -1 
				);
				$team = new WP_Query($args);
				if($team->have_posts()) : while($team->have_posts()) : $team->the_post();
				$image = wp_get_attachment_url(get_post_thumbnail_id());
				$job = get_post_meta(get_the_ID(),'_cmb_job_team', true);
				$team_fb = get_post_meta(get_the_ID(),'_cmb_team_fb', true);
				$team_tt = get_post_meta(get_the_ID(),'_cmb_team_tt', true);
				$team_li = get_post_meta(get_the_ID(),'_cmb_team_li', true);
				$team_gg = get_post_meta(get_the_ID(),'_cmb_team_gg', true);
				$team_in = get_post_meta(get_the_ID(),'_cmb_team_in', true);
				$team_yo = get_post_meta(get_the_ID(),'_cmb_team_yo', true);
				$team_dr = get_post_meta(get_the_ID(),'_cmb_team_dr', true);
			?>
			<div class="steam">
				<div class="team-item <?php if($style == 'style2') echo 'team-circle'; ?>">
			    	<div class="team-item-img-container">
			    		<img src="<?php echo esc_url($image); ?>" class="img-responsive" alt="">
			    		<div class="overlay-1 hover-border-theme">
			    			<a href="<?php the_permalink(); ?>">
			    				<i class="fa fa-link hover-border-theme "></i>
			    			</a>
			    			<a class="single-img-popup" href="<?php echo esc_url($image); ?>"><i class="fa fa-expand hover-border-theme "></i></a>
					 		</div>
			    	</div>
			    	<a href="<?php the_permalink(); ?>"><h4 class="team-name hover-text-theme"><?php the_title(); ?></h4></a>

			    	<p class="team-job color-theme "><?php echo htmlspecialchars_decode($job); ?></p>
			    	<div class="team-info"><?php the_excerpt(); ?></div>
			    	<div class="team-social-warp border-color-theme">
			    	<?php if($team_fb) { ?>
			    		<a href="<?php echo esc_url($team_fb); ?>" class="hover-text-theme"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			    	<?php }if($team_tt) { ?>
			    		<a href="<?php echo esc_url($team_tt); ?>" class="hover-text-theme"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			    	<?php }if($team_li) { ?>
			    		<a href="<?php echo esc_url($team_li); ?>" class="hover-text-theme"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
			    	<?php }if($team_gg) { ?>
			    		<a href="<?php echo esc_url($team_gg); ?>" class="hover-text-theme"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
			    	<?php }if($team_in) { ?>
			    		<a href="<?php echo esc_url($team_in); ?>" class="hover-text-theme"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			    	<?php }if($team_yo) { ?>
			    		<a href="<?php echo esc_url($team_yo); ?>" class="hover-text-theme"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
			    	<?php }if($team_dr) { ?>
			    		<a href="<?php echo esc_url($team_dr); ?>" class="hover-text-theme"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
			    	<?php } ?>
			    	</div>
			    </div>
		    </div>

			<?php endwhile; wp_reset_postdata(); endif; ?>
		</div>
	</div>
	<script>
		(function($) { "use strict";
			$('#<?php echo esc_attr($id); ?>').owlCarousel({       
	            autoPlay: <?php echo esc_js($speed); ?>, //Set AutoPlay to 3 seconds
	            items : <?php echo esc_js($col); ?>,
	            itemsDesktop      : [1199,3],
	            itemsDesktopSmall     : [979,3],
	            itemsTablet       : [768,2],
	            itemsMobile       : [479,1],
	            pagination:true,
	            navigation:false,
	        });
		})(jQuery); 
	</script>

<?php
    return ob_get_clean();
}


// Testimonial Item
add_shortcode('testitem', 'testitem_func');
function testitem_func($atts, $content = null){
	extract(shortcode_atts(array(
		'photo'		=>	'',
		'name'		=>	'',	
		'job'		=>	'',
	), $atts));
		$img = wp_get_attachment_image_src($photo,'full');
		$img = $img[0];
	ob_start(); ?>

	<div class="testimonial-item">
		<?php if($img) { ?>
    	<div class="avatar">
    		<img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
    	</div>
    	<?php } ?>
    	
    	<blockquote>
		  <span class="quote-square bg-theme"><i class="fa fa-quote-right" aria-hidden="true"></i>
		  		<span class="arrow-down-l-2 border-color-theme"></span>
		  </span>
		  <?php echo htmlspecialchars_decode($content); ?>
		  <footer><?php echo esc_html($name); ?><?php if($job) { ?>, <cite title="Earthworks Garden Kare" class="color-theme"><?php echo htmlspecialchars_decode($job); ?></cite><?php } ?></footer>
		</blockquote>
    </div>

<?php
    return ob_get_clean();
}

// Testimonial Silder
add_shortcode('testslide','testslide_func');
function testslide_func($atts, $content = null){
	extract(shortcode_atts(array(
		'speed'		=>	'6000',
		'title'		=>	'',
		'style'		=>	'style1',
	), $atts));
		$id = uniqid( 'owl-testimonial-' );
		$id2 = uniqid( 'owl-avatar-' );
		$id3 = uniqid( 'owl-avatar2-' );
	ob_start(); 
?>

	<?php if($style == 'style1') { ?>
	<div id="<?php echo esc_attr($id); ?>" class="owl-carousel owl-theme owl-testimonial-1 ">
		<?php			
			$args = array(
				'post_type' => 'testimonial',
				'posts_per_page' => -1,
			);
			$testimonial = new WP_Query($args);
			if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post();
			$image = wp_get_attachment_url(get_post_thumbnail_id());
			$job = get_post_meta(get_the_ID(),'_cmb_job_testi', true);
		?>
        <div class="item">
            <div class="testimonial-1-item border-color-theme">
            	<i class="fa fa-quote-left" aria-hidden="true"></i>
            	<blockquote>
				  <?php the_content(); ?>
				  <footer class="color-theme"><?php the_title(); ?><?php if($job) echo esc_html(', '. $job); ?></footer>
				</blockquote>
            </div>
            <div class="arrow-down border-color-theme"></div>
        </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
    <?php }elseif($style == 'style2') { ?>
    	<?php if($title) { ?>
	    	<div class="title-warp title-testi">
				<h3 class="title-inline"><?php echo htmlspecialchars_decode($title); ?></h3>
				<div class="customNavigation customNavigation-1">
		            <a class="btn-1 prev-testimonia3 hover-border-theme hover-text-theme"><i class="fa fa-chevron-left"></i></a>
		            <a class="btn-1 next-testimonia3 hover-border-theme hover-text-theme"><i class="fa fa-chevron-right"></i></a>
	    		</div><!-- End owl button -->
	    	</div>
	    <?php } ?>
    	<div id="<?php echo esc_attr($id2); ?>" class="owl-carousel owl-theme owl-testimonial-2 ">
	    	<?php			
				$args = array(
					'post_type' => 'testimonial',
					'posts_per_page' => -1,
				);
				$testimonial = new WP_Query($args);
				if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post();
				$image = wp_get_attachment_url(get_post_thumbnail_id());
				$job = get_post_meta(get_the_ID(),'_cmb_job_testi', true);
			?>
	        <div class="item">
	            <div class="testimonial-2-item border-color-theme">
	            	<i class="fa fa-quote-left" aria-hidden="true"></i>
	            	<blockquote>
					    <?php the_content(); ?>
					</blockquote>
	            </div>
	            <div class="arrow-down-l border-color-theme"></div>
	            <div class="thumb-owl-2">
	             	<div class="avatar-owl-2">
	                 	<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img-responsive" alt="">
	             	</div>
	             	<div class="info-client">
	                 	<h4><?php the_title(); ?></h4>
	                 	<p><?php echo htmlspecialchars_decode($job); ?></p>
	             	</div>
	          	</div>
	        </div>
	        <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    <?php }else{ ?>
    	<?php if($title) { ?>
	    	<div class="title-warp title-testi">
				<h3 class="title-inline"><?php echo htmlspecialchars_decode($title); ?></h3>
				<div class="customNavigation customNavigation-1">
		            <a class="btn-1 prev-testimonia3 hover-border-theme hover-text-theme"><i class="fa fa-chevron-left"></i></a>
		            <a class="btn-1 next-testimonia3 hover-border-theme hover-text-theme"><i class="fa fa-chevron-right"></i></a>
	    		</div><!-- End owl button -->
	    	</div>
	    <?php } ?>
    	<div id="<?php echo esc_attr($id3); ?>" class="owl-carousel owl-theme owl-testimonial-3 border-color-theme">
    		<?php			
				$args = array(
					'post_type' => 'testimonial',
					'posts_per_page' => -1,
				);
				$testimonial = new WP_Query($args);
				if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post();
				$image = wp_get_attachment_url(get_post_thumbnail_id());
				$job = get_post_meta(get_the_ID(),'_cmb_job_testi', true);
			?>
            <div class="item">
                <div class="testimonial-item">
                	<div class="avatar">
                		<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img-responsive" alt="">
                	</div>
                	
                	<blockquote>
					  <span class="quote-square bg-theme"><i class="fa fa-quote-right" aria-hidden="true"></i>
					  		<span class="arrow-down-l-2 border-color-theme"></span>
					  </span>
					  <?php the_content(); ?>
					  <footer><?php the_title(); ?>, <cite title="Earthworks Garden Kare" class="color-theme"><?php echo htmlspecialchars_decode($job); ?></cite></footer>
					</blockquote>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    <?php } ?>

	<script>
		(function($) { "use strict";
			$("#<?php echo esc_attr($id); ?>").owlCarousel({
       
			    autoPlay: <?php echo esc_js($speed); ?>, //Set AutoPlay to 3 seconds
			    items : 1,
			    itemsDesktop      : [1199,1],
			    itemsDesktopSmall     : [979,1],
			    itemsTablet       : [768,1],
			    itemsMobile       : [479,1],
			    pagination:true,
			    navigation:false,
			    transitionStyle : "fade"
			});
			$("#<?php echo esc_attr($id2); ?>").owlCarousel({
           
                autoPlay: <?php echo esc_js($speed); ?>, //Set AutoPlay to 3 seconds
                items : 1,
                itemsDesktop      : [1199,1],
                itemsDesktopSmall     : [979,1],
                itemsTablet       : [768,1],
                itemsMobile       : [479,1],
                pagination:false,
                navigation:false,
                transitionStyle : "fade"
            });
            $("#<?php echo esc_attr($id3); ?>").owlCarousel({
           
                autoPlay: <?php echo esc_js($speed); ?> , //Set AutoPlay to 3 seconds
                items : 1,
                itemsDesktop      : [1199,1],
                itemsDesktopSmall     : [979,1],
                itemsTablet       : [768,1],
                itemsMobile       : [479,1],
                pagination:false,
                navigation:false,
                transitionStyle : "fade"
            });
            var owlTestimonial3 = $("#<?php echo esc_attr($id3); ?>, #<?php echo esc_attr($id2); ?>");
           
	        // Custom Navigation Events

	        $("body").on("click",".next-testimonia3",function(event){
	          owlTestimonial3.trigger("owl.next");
	        });
	        $("body").on("click",".prev-testimonia3",function(event){
	          owlTestimonial3.trigger("owl.prev");
	        });
		})(jQuery); 
	</script>
<?php
    return ob_get_clean();
}

// Pricing Table
add_shortcode('table', 'table_func');
function table_func($atts, $content = null){
	extract(shortcode_atts(array(
		'style'		=>	'style1',
		'title'		=>	'',
		'desc'		=>	'',
		'feature'	=>	'',
		'linkbox'	=>	'',
		'price'		=>	'',
		'border'	=>	'',
		'per'		=>	'',
	), $atts)); 
		$url 	= vc_build_link( $linkbox );
	ob_start(); ?>

	<?php if($style=='style1'){ ?>

	    <div class="pricing-table <?php if($feature) echo 'featured'; ?>">
		   <header>
		      <p class="title"><?php echo htmlspecialchars_decode($title); ?></p>
		      <div class="price">
		         <p class="value"><?php echo htmlspecialchars_decode($price); ?></p>
		         <p class="condition"><?php echo htmlspecialchars_decode($per); ?></p>
		      </div>
		   </header>
		   <div class="content">
		      <?php echo htmlspecialchars_decode($content); ?>
		   </div>
		   <div class="fplan">
		   		<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
					echo '<p><a class="ot-btn btn-main-color btn-rounded text-up white-text" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ).'</a></p>';
				} ?>
		   </div>
		</div>

	<?php }else{ ?>
		<div class="pricing-tables-group-item <?php if($feature) echo 'featured'; ?> <?php if($border) echo 'fborder'; ?>">
	      	<p class="title"><?php echo htmlspecialchars_decode($title); ?></p>
	      	<p class="price"><?php echo htmlspecialchars_decode($price); ?></p>
	      	<p class="desc"><?php echo htmlspecialchars_decode($desc); ?></p>
	      	<div class="details">
	         	<?php echo htmlspecialchars_decode($content); ?>
	      	</div>
	      	<p class="buy">
	      		<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
					echo '<a class="ot-btn btn-main-color btn-rounded bg-theme text-up white-text" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ).'</a>';
				} ?>
	     	</p>
	   	</div>
	<?php } ?>

<?php
    return ob_get_clean();
}



// Call To Action
add_shortcode('call_to', 'call_to_func');
function call_to_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title'		=>	'',
		'subtitle'	=>	'',
		'linkbox'	=>	'',
		'linkbox2'	=>	'',
		'icon'		=>	'',
		'style'		=>	'style1',
	), $atts));
		$url 	= vc_build_link( $linkbox );
		$url2 	= vc_build_link( $linkbox2 );
		$icon1 = '';
		if($icon){
			$icon1 = ' <i class="'.$icon.'"></i>';
		}
	ob_start(); ?>

	<?php if($style=='style1'){ ?>
		<div class="call1 call-action">
			<h3><?php echo htmlspecialchars_decode($title); ?></h3>
			<?php if($content){ ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
			<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
				echo '<a class="ot-btn btn-main-color btn-rounded text-up white-text" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ). $icon1 .'</a>';
			} ?>
		</div>
	<?php }elseif($style=='style2'){ ?>
      	<div class="call2 call-action">
			<h3><?php echo htmlspecialchars_decode($title); ?></h3>
			<?php if($content){ ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
			<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
				echo '<a class="ot-btn btn-main-color btn-rounded text-up white-text" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ). $icon1 .'</a>';
			} ?>
		</div>
	<?php }else{ ?>
		<div class="call3 call-action">
			<h3><?php echo htmlspecialchars_decode($title); ?></h3>
			<?php if($content){ ?><div class="des-text"><p><?php echo htmlspecialchars_decode($content); ?></p></div><?php } ?>
			<div class="group-call-btn">
				<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
					echo '<a class="ot-btn btn-main-color white-text btn-rounded" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ). $icon1 .'</a>';
				} ?>
				<?php if ( strlen( $linkbox2 ) > 0 && strlen( $url2['url'] ) > 0 ) {
					echo '<a class="ot-btn btn-sub-color btn-rounded" href="' . esc_attr( $url2['url'] ) . '" target="' . ( strlen( $url2['target'] ) > 0 ? esc_attr( $url2['target'] ) : '_self' ) . '">' . esc_attr( $url2['title'] ). $icon1 .'</a>';
				} ?>
			</div>
		</div>
	<?php } ?>

<?php
    return ob_get_clean();
}


// Lastest Blog Slider
add_shortcode('lastest_sli','lastest_sli_func');
function lastest_sli_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title'		=>	'',
		'speed'		=>	'6000',
		'visible'	=>	'1',
		'number'	=>	'-1',
	), $atts));

	ob_start(); 
?>

	<?php if($title) { ?>
	<div class="title-warp title-testi">
		<h3 class="title-inline"><?php echo htmlspecialchars_decode($title); ?></h3>
			<div class="customNavigation customNavigation-1">
	        <a class="btn-1 prev-blog hover-border-theme hover-text-theme"><i class="fa fa-chevron-left"></i></a>
	        <a class="btn-1 next-blog hover-border-theme hover-text-theme"><i class="fa fa-chevron-right"></i></a>
		</div><!-- End owl button -->
	</div>
	<?php } ?>
	<div id="owl-blog" class="owl-carousel owl-theme owl-blog">
		<?php			
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => $number,
			);
			$blogpost = new WP_Query($args);
			if($blogpost->have_posts()) : while($blogpost->have_posts()) : $blogpost->the_post();
			$format = get_post_format();
		?>
        <div class="item">
            <div class="blog-item">
            	<?php if ( has_post_thumbnail() ) { ?>
			    	<?php 
                        $params = array( 'width' => 200, 'height' => 200, 'crop' => true );
                        $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id()), $params );  
                    ?>
			        <a href="<?php the_permalink(); ?>" class="img-demo-blog">
			            <img src="<?php echo esc_url($image); ?>" class="img-responsive" alt="">
			        </a>
			    <?php } ?>
            	<div class="blog-sum-warp <?php if ( !has_post_thumbnail() ) echo 'wid100'; ?>">
                	<div class="blog-sum-inner">
                		<div class="blog-data">
                			<div class="date-time bg-theme">
                				<span class="date"><?php the_time('d') ?></span>
                				<span class="month"><?php the_time('M') ?></span>
                			</div>
                			<div class="blog-type">
			                    <i class="fa fa-pencil"></i>
			                </div>
                		</div>
                    	<h4 class="hover-text-theme"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    	<p><?php echo dotted_excerpt(20); ?></p>
                	</div>
                	<div class="blog-footer border-color-theme">
                		<ul>
			                <li><?php echo esc_html__('Posted by ', 'dotted'); ?><?php the_author_posts_link(); ?></li>
			                <li><?php echo esc_html__('on ', 'dotted'); ?> <?php the_category( ', ' ); ?></li>
			                <li><?php comments_number( '0 '.esc_html__("comment","dotted"), '1 '.esc_html__("comment","dotted"), '% '.esc_html__("comments","dotted") ); ?></li>
			            </ul>
                	</div>
                </div>
            </div>
        </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>

	<script>
		(function($) { "use strict";
			$("#owl-blog").owlCarousel({
   
		        autoPlay: <?php echo esc_js($speed); ?>, //Set AutoPlay to 3 seconds
		        items : <?php echo esc_js($visible); ?>,
		        itemsDesktop      : [1199,<?php echo esc_js($visible); ?>],
		        itemsDesktopSmall     : [979,<?php echo esc_js($visible); ?> - 1],
		        itemsTablet       : [768,1],
		        itemsMobile       : [479,1],
		        pagination:false,
		        navigation:false,
		    });
			var owlBlog = $("#owl-blog");
			// Custom Navigation Events

			$("body").on("click",".next-blog",function(event){
			  owlBlog.trigger("owl.next");
			});
			$("body").on("click",".prev-blog",function(event){
			  owlBlog.trigger("owl.prev");
			});
		})(jQuery); 
	</script>
				  	
<?php
    return ob_get_clean();
}

// Lastest Blog 2
add_shortcode('lastest_blog','lastest_blog_func');
function lastest_blog_func($atts, $content = null){
	extract(shortcode_atts(array(
		'speed'		=>	'6000',
		'visible'	=>	'1',
		'number'	=>	'-1',
	), $atts));

	ob_start(); 
?>

	
	<div id="owl-blog-landing" class="owl-carousel owl-theme owl-blog-landing">
	<?php		
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => $number,
		);
		$blogpost = new WP_Query($args);
		if($blogpost->have_posts()) : while($blogpost->have_posts()) : $blogpost->the_post();
		$format = get_post_format();
	?>
	<div class="item">
		<div class="item-blog blog-single-feature-img">
		    <?php if ( has_post_thumbnail() ) { ?>
		    <div class="blog-feature-warp">
		    	<?php 
                    $params = array( 'width' => 640, 'height' => 400, 'crop' => true );
                    $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id()), $params );  
                ?>
		        <a href="<?php the_permalink(); ?>">
		            <img src="<?php echo esc_url($image); ?>" class="img-responsive" alt="">
		        </a>
		    </div>
		    <?php } ?>
		    <div class="blog-feature-content">
		        <div class="blog-feature-content-inner">
		            <div class="blog-data">
		                <div class="date-time bg-theme">
		                    <span class="date"><?php the_time('d') ?></span>
		                    <span class="month"><?php the_time('M') ?></span>
		                </div>
		                <div class="blog-type">
		                    <i class="fa fa-pencil"></i>
		                </div>
		            </div>
		            <div class="blog-text">
		                <h4><a class="hover-text-theme" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		                <p><?php echo dotted_excerpt(20); ?></p>
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
	<?php endwhile; wp_reset_postdata(); endif; ?>
	</div>

	<script>
		(function($) { "use strict";
			$("#owl-blog-landing").owlCarousel({
           
                autoPlay: <?php echo esc_js($speed); ?>, //Set AutoPlay to 3 seconds
                items : <?php echo esc_js($visible); ?>,
                itemsDesktop      : [1199,<?php echo esc_js($visible); ?>],
                itemsDesktopSmall     : [979,<?php echo esc_js($visible); ?> - 1],
                itemsTablet       : [768,2],
                itemsMobile       : [479,1],
                pagination:true,
                navigation:false,
            });
		})(jQuery); 
	</script>

<?php
    return ob_get_clean();
}

// Portfolio Filter
add_shortcode('portfoliof', 'portfoliof_func');
function portfoliof_func($atts, $content = null){
	extract(shortcode_atts(array(
		'all'		=> 	'All',
		'num'		=> 	'6',
		'col'   	=> 	'4',
		'style2'	=>	'',
		'gutter'	=>	'',
		'filter'	=>	'',
		'categ'		=>	'',		
	), $atts));

	ob_start(); ?>

	<div class="portfolio-warp">

		<?php if(!$filter) { ?>
		<div class="filter-portfolio-warp">
			<div class="projectFilter project-style-1">
	            <a href="#" data-filter="*" class="current "><?php echo esc_html($all); ?></a>
		            <?php 
		  			$categories = get_terms('categories');
		   			foreach( (array)$categories as $categorie){
		    			$cat_name = $categorie->name;
		    			$cat_slug = $categorie->slug;
				?>
		      	<a href="#" data-filter=".<?php echo htmlspecialchars_decode( $cat_slug ); ?>"><?php echo htmlspecialchars_decode( $cat_name ); ?></a>
		    	<?php } ?>
	  		</div> <!-- End Project Fillter -->
		</div>
		<?php } ?>

		<div class="list-portfolio-warp row <?php if($style2) echo 'no-gutter'; ?> <?php if($gutter) echo 'no-padding'; ?>">
			<?php 
      			$args = array(   
        			'post_type' => 'portfolio',   
        			'posts_per_page' => $num,	            
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
			<div class="col-md-<?php echo esc_attr($col); ?> element-item <?php echo esc_attr($cate_slug); ?>">
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
	            	<?php if(!$categ) { ?>
	            	<p class="cate-project"><?php echo htmlspecialchars_decode($cate_name); ?></p>
	            	<?php } ?>
	            </div>
	      	</div>
	      	<?php endwhile; wp_reset_postdata(); ?>
	    </div>

	</div>

<?php
    return ob_get_clean();
}


// Portfolio Slider
add_shortcode('portfolio_sli','portfolio_sli_func');
function portfolio_sli_func($atts, $content = null){
	extract(shortcode_atts(array(
		'number'	=>	'-1',
		'visible'	=>	'2',
		'title'		=>	'',
		'categ'		=>	'',
		'gutter'	=>	'',
		'navi'		=>	'',
		'style'		=>	'style1',
	), $atts));
	ob_start(); 
?>

	<?php if($title){ ?>
	<h3 class="title-inline title-clients"><?php echo htmlspecialchars_decode($title); ?></h3>
	<div class="customNavigation customNavigation-1">
        <a class="btn-1 prev-project hover-border-theme hover-text-theme"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-1 next-project hover-border-theme hover-text-theme"><i class="fa fa-chevron-right"></i></a>
	</div>
	<?php } ?>
	<div id="owl-project" class="owl-carousel owl-theme owl-project row <?php if($style == 'style2') echo 'no-gutter'; ?> <?php if($gutter) echo 'no-padding'; ?>">
		<?php 
  			$args = array(   
    			'post_type' => 'portfolio',
    			'posts_per_page' => $number,	            
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
	 	<div class="item">
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
            	<?php if(!$categ) { ?>
            	<p class="cate-project"><?php echo htmlspecialchars_decode($cate_name); ?></p>
            	<?php } ?>
            </div>
        </div>
    	<?php endwhile; wp_reset_postdata(); ?>
    </div>

    <?php if($navi) { ?>
    <div class="customNavigation customNavigation-1 customNavigation-5">
        <a class="btn-1 prev-project hover-border-theme hover-text-theme"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-1 next-project hover-border-theme hover-text-theme"><i class="fa fa-chevron-right"></i></a>
	</div><!-- End owl button -->
	<?php } ?>

  	<script>
		(function($) { "use strict";
			$("#owl-project").owlCarousel({
		          autoPlay: false, //Set AutoPlay to 3 seconds
		          items : <?php echo esc_js($visible); ?>,
		          itemsDesktop      : [1199,<?php echo esc_js($visible); ?> - 1],
		          itemsDesktopSmall     : [979,2],
		          itemsTablet       : [768,2],
		          itemsMobile       : [600,1],
		          pagination:false,
		          navigation:false,
		      });
		  var owlProject = $("#owl-project");
		  // Custom Navigation Events

		  $("body").on("click",".next-project",function(event){
		    owlProject.trigger("owl.next");
		  });
		  $("body").on("click",".prev-project",function(event){
		    owlProject.trigger("owl.prev");
		  });

		})(jQuery); 
	</script>

<?php
    return ob_get_clean();
}


// Our Facts
add_shortcode('facts','facts_func');
function facts_func($atts, $content = null){
	extract(shortcode_atts(array(
		'icon'		=>	'',
		'num'		=>	'',
		'title'		=>	'',
		'stitle'	=>	'',
		'dark'		=>	'',
	), $atts));
		
	ob_start(); 
?>

    <div class="icon-box effect small clean <?php if($dark) echo 'white-text'; ?>">
    	<?php if($icon) { ?>
		<div class="icon icon-dark">
			<i class="fa <?php echo esc_attr($icon); ?>" aria-hidden="true"></i>
		</div>
		<?php } ?>
		<h3><?php echo htmlspecialchars_decode($title); ?></h3>
		<?php if($stitle) { ?><p><?php echo htmlspecialchars_decode($stitle); ?></p><?php } ?>
		<span class="counter"><?php echo htmlspecialchars_decode($num); ?></span>
	</div>
  	
<?php
    return ob_get_clean();
}

// Our Skill
add_shortcode('skill','skill_func');
function skill_func($atts, $content = null){
	extract(shortcode_atts(array(
		'num'	=>	'',
		'title'	=>	'',
	), $atts));
		
	ob_start(); 
?>
	<div class="chart-h-item">
		<h4><?php echo htmlspecialchars_decode($title); ?> <span class="percent-h update-h"></span></h4>
		<div class="progress progress-h">
	        <div class="progress-bar bar-chart bg-theme" role="progressbar" data-transitiongoal="<?php echo esc_attr($num); ?>"></div>
	    </div>
    </div>

<?php
    return ob_get_clean();
}


// Logo Clients
add_shortcode('clients','clients_func');
function clients_func($atts, $content = null){
	extract(shortcode_atts(array(
		'gallery'		=> 	'',
		'title'		  	=>	'',	
		'col'		  	=>	'4',	
		'style'		  	=>	'style1',	
	), $atts));
		$img = wp_get_attachment_image_src($gallery,'full');
		$img = $img[0];
		$id = uniqid( 'logos-' );
	ob_start(); ?>
	
		<?php if($style == 'style1') { ?>
		<?php if($title) { ?>
		<div class="title-clients">
			<h3 class="title-inline"><?php echo htmlspecialchars_decode($title); ?></h3>
			<div class="customNavigation customNavigation-1">
	            <a class="btn-1 prev-partner hover-border-theme hover-text-theme"><i class="fa fa-chevron-left"></i></a>
	            <a class="btn-1 next-partner hover-border-theme hover-text-theme"><i class="fa fa-chevron-right"></i></a>
	    	</div><!-- End owl button -->
		</div>
		<?php } ?>
		<div id="<?php echo esc_attr($id); ?>" class="owl-carousel owl-theme owl-partner ">
			<?php 
				$img_ids = explode(",",$gallery);
				foreach( $img_ids AS $img_id ){
				$meta = wp_prepare_attachment_for_js($img_id);
				$caption = $meta['caption'];
				$title = $meta['title'];	
				$description = $meta['description'];
				$image_src = wp_get_attachment_image_src($img_id,''); 
			?>
            <div class="item">
                <div class="partner-item">
                	<?php if($caption){ ?><a href="<?php echo esc_url($caption); ?>" target="_blank" ><?php } ?>
                		<img src="<?php echo esc_url( $image_src[0] ); ?>" alt="">
                	<?php if($caption){ ?></a><?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php }else{ ?>
        <div class="group-partner">
        	<?php 
				$img_ids = explode(",",$gallery);
				$i = 1;
				$wid = 100/$col;
				foreach( $img_ids AS $img_id ){
				$meta = wp_prepare_attachment_for_js($img_id);
				$caption = $meta['caption'];
				$title = $meta['title'];	
				$description = $meta['description'];
				$image_src = wp_get_attachment_image_src($img_id,'');				
			?>
			<div class="logo-group-item <?php if($i % $col == 0) echo ' lastInRow'; if($i > $col) echo ' lastRow'; ?>" style="width: <?php echo $wid; ?>%;">
				<?php if($caption){ ?><a href="<?php echo esc_url($caption); ?>" target="_blank" ><?php } ?>
            		<img src="<?php echo esc_url( $image_src[0] ); ?>" alt="">
            	<?php if($caption){ ?></a><?php } ?>
			</div>
			<?php $i++; } ?>
		</div>
        <?php } ?>

		<script>
			(function($) { "use strict";	

				var $logos = $( "#<?php echo esc_js($id); ?>" );
      			$logos.owlCarousel({
      				autoPlay: true,
      				items : <?php echo esc_attr($col); ?>,
      				itemsDesktop : [1200,<?php echo esc_attr($col); ?> - 1],
      				itemsDesktopSmall     : [979,3],
		          	itemsTablet       : [768,2],
		          	itemsMobile       : [480,1],
      				pagination: false
      			});
      			var logos2 = $("#<?php echo esc_attr($id); ?>");
		        // Custom Navigation Events

		        $("body").on("click",".next-partner",function(event){
		          logos2.trigger("owl.next");
		        });
		        $("body").on("click",".prev-partner",function(event){
		          logos2.trigger("owl.prev");
		        });

			})(jQuery); 
		</script>

<?php
    return ob_get_clean();	
}

// Image Carousel
add_shortcode('carousel','carousel_func');
function carousel_func($atts, $content = null){
	extract(shortcode_atts(array(
		'gallery'		=> 	'',
	), $atts));
		$img = wp_get_attachment_image_src($gallery,'full');
		$img = $img[0];
	ob_start(); ?>

	<div class="portfolio-feature-warp">
			   								
        <a class="prev-portfolio-image hover-border-theme hover-text-theme"></a>
        <a class="next-portfolio-image hover-border-theme hover-text-theme"></a>
    
    	<div class="gallery-portfolio-post-warp">
        	<div id="owl-gallery-portfolio-post" class="owl-carousel owl-theme owl-gallery-portfolio-post ">
    	 		<?php 
					$img_ids = explode(",",$gallery);
		            foreach( $img_ids AS $img_id ){
		            $image_src = wp_get_attachment_image_src($img_id,'full'); ?>
						<div class="item"><img src="<?php echo esc_url($image_src[0]); ?>" alt=""></div>
	            <?php } ?>
        	</div>
        </div>
	</div>
	

<?php
    return ob_get_clean();	
}

// Twitter
add_shortcode('twitter','twitter_func');
function twitter_func($atts, $content = null){
	extract(shortcode_atts(array(
		'user'		=> 	'579924271629094913',	
		'navi'		=>	'',
		'dark'		=>	'',
		'number'	=>	'5',
		'style'		=>	'style1',
	), $atts));

	ob_start(); ?>
	
	<?php if($style == 'style1') { ?>
	<div class="twitter-warp <?php if($dark) echo 'nav-dark'; ?>">
		<?php if($navi) { ?>
		<div class="customNavigation customNavigation-4">
	        <a class="btn-1 prev-twitter-2 hover-border-theme hover-text-theme"><i class="fa fa-chevron-up"></i></a>
	        <a class="btn-1 next-twitter-2 hover-border-theme hover-text-theme"><i class="fa fa-chevron-down"></i></a>
		</div><!-- End owl button -->
		<?php } ?>
		<i class="fa fa-twitter twitter-logo-fix border-color-theme color-theme"></i>
		<div class="twitter1-warp <?php if($dark) echo 'bg-dark'; ?>">
			<div id="twitter-dotted" class="twitter-widget twitter-widget-1 jcarousel"></div>
		</div>
	</div>
	
	<div class="blog3-warp">
		<div id="jcarousel-blog2" class="jcarousel-wrapper jcarousel-wrapper2">	 		
                <div id="tweecool" class="twitter jcarousel"></div>  
       	</div>      
    </div>
    <?php }else{ ?>
    <i class="fa fa-twitter icon-twitter-3" aria-hidden="true"></i>
	<div id="twitter-dotted" class="twitter-owl-warp <?php if($dark) echo 'bg-dark'; ?>"></div>
	<?php } ?>

    <script>
		(function($) { "use strict";
			
	        var config3 = {
	        "id": '<?php echo esc_js($user); ?>',
	        "domId": 'twitter-dotted',
	        "maxTweets": <?php echo esc_js($number); ?>,
	        "enableLinks": true,
	        "showUser": false,
	        "showTime": true,
	        "showImages": false,
	        "lang": 'en'
	    };
	    twitterFetcher.fetch(config3);
	    /* 
	    Tweet & Bx Slider
	       ========================================================================== */
	    <?php if($style == 'style1') { ?>

	    var myVar2 = setInterval(myTimer, 1000);
	    var executed2 = false;
	    function myTimer() {
	        if (!executed2) {
	        executed2 = true;
	        $(function() {
	           var twitter2 = $('.twitter-widget-1 ul').bxSlider({
	                slideSelector:'li',
	                mode: 'vertical',
	                auto:true,
	                pause: 6000,
	                minSlides: 1,
	                slideMargin: 10,
	                moveSlides: 1,
	                controls:false,
	                pager:false,
	              });
	                $('.next-twitter-2').click(function(){
	                  twitter2.goToNextSlide();
	                  return false;
	                });

	                $('.prev-twitter-2').click(function(){
	                  twitter2.goToPrevSlide();
	                  return false;
	                });

	        });
	      }
	    };

	    <?php }else{ ?>

	    var myVar = setInterval(myTimer, 1000);

	    function myTimer() {
	            $(function() {
	                $(".twitter-owl-warp ul").owlCarousel({
	           
	                autoPlay: 6000, //Set AutoPlay to 3 seconds
	                items : 1,
	                itemsDesktop      : [1199,1],
	                itemsDesktopSmall     : [979,1],
	                itemsTablet       : [768,1],
	                itemsMobile       : [479,1],
	                pagination:true,
	                navigation:false,
	                transitionStyle : "fade"
	                });
	            });
	    }

	    <?php } ?>

		})(jQuery);
	</script>

<?php
    return ob_get_clean();	
}

?>