<?php 



class sliderpost_widget extends WP_Widget {



function __construct() {



parent::__construct(



// Base ID of your widget



'sliderpost_widget', 







// Widget name will appear in UI



__('Slider Recent Posts', 'dotted'), 







// Widget description



array( 'description' => esc_html__( 'Dotted Latest News', 'dotted' ), ) 



);



}







// Creating widget front-end



// This is where the action happens



public function widget( $args, $instance ) {



	// these are the widget options


    $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? esc_html__( 'Recent Blog Posts', 'dotted' ) : $instance['title'], $instance, $this->id_base );



// before and after widget arguments are defined by themes



echo htmlspecialchars_decode($args['before_widget']);



if ( ! empty( $title ) ){

	echo htmlspecialchars_decode($args['before_title']) . $title . htmlspecialchars_decode($args['after_title']); 

}?>
        <div class="blog2-warp">
            <div class="slider8">
            <?php 

            $recent = new WP_Query( array(

            'post_type' => 'post', 

            'posts_per_page' => $instance['posts_per_page']

              ) );

            while ($recent->have_posts()) :$recent-> the_post();?>  

                
            <div class="blog2-item <?php if ( !has_post_thumbnail() ) echo 'no-thumb'; ?>">
                <a href="<?php the_permalink(); ?>" class="blog2-img">
                    <?php 
                        $params = array( 'width' => 69, 'height' => 69, 'crop' => true );
                        $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id()), $params );  
                    ?>
                    <img src="<?php echo esc_url($image); ?>" class="img-responsive" alt="" />
                </a>
                <div class="blog2-detail">
                    <h3 class="hover-text-theme"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo dotted_excerpt(8); ?></p>
                </div>
            </div>
            
            <?php endwhile; ?>
        </div></div>        
        <?php if($instance['link']) { ?><a href="<?php echo esc_url($instance['link']); ?>" class="ot-btn btn-main-bg bg-theme btn-rounded white-text"><?php echo esc_html__('READ BLOG','dotted'); ?></a><?php } ?>
    </div>



<?php 





}



public function update( $new_instance, $old_instance ) {

    $instance = $old_instance;

    $instance['title'] = strip_tags($new_instance['title']);

    $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';

    $instance['posts_per_page'] = ( ! empty( $new_instance['posts_per_page'] ) ) ? strip_tags( $new_instance['posts_per_page'] ) : '';



    return $instance;

}	



// Widget Backend 



public function form( $instance ) {



// Check values



     //$title = esc_attr($instance['title']);



	 $title = esc_attr( $instance['title'] );

     $link = esc_attr($instance['link']);

     $posts_per_page = esc_attr($instance['posts_per_page']);



// Widget admin form



?>



<p><label><?php esc_html_e( 'Title:', 'dotted' ); ?></label>

    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

<p>

<label><?php esc_html_e( 'Number of posts to show:', 'dotted' ); ?></label> 



<input size="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('posts_per_page')); ?>" name="<?php echo esc_attr($this->get_field_name('posts_per_page')); ?>" type="text" value="<?php echo esc_attr($posts_per_page); ?>" />



</p>


<p><label><?php esc_html_e( 'Button Link:', 'dotted' ); ?></label> 

<input size="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('link')); ?>" name="<?php echo esc_attr($this->get_field_name('link')); ?>" type="text" value="<?php echo esc_attr($link); ?>" />

</p>

<?php 



}

	



} // Class wpb_widget ends here







// Register and load the widget



function wpb_sliderpost_widget() {



	register_widget( 'sliderpost_widget' );



}



add_action( 'widgets_init', 'wpb_sliderpost_widget' );



