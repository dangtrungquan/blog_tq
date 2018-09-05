<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package dotted
 */

if ( ! function_exists( 'dotted_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function dotted_entry_meta() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><!--<time class="updated" datetime="%3$s">%4$s</time>-->';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', 'dotted' ),
		//'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
        $time_string . '<span class="separator">|</span>'
	);

    echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

    $format = get_post_format();
    switch ($format) {
        case $format == 'video':
            echo "<i class='fa fa-film'></i>";
            break;
        case $format == 'audio':
            echo "<i class='fa fa-music'></i>";
            break;
        case $format == 'gallery':
            echo "<i class='fa fa-picture-o'></i>";
            break;      
        case $format == 'quote':
            echo "<i class='fa fa-quote-right'></i>";
            break;
        case $format == 'image':
            echo "<i class='fa fa-picture-o'></i>";
            break;                                   
        default:
           echo "<i class='fa fa-pencil'></i>";
    }

	$byline = sprintf(
		esc_html_x( 'By: %s', 'post author', 'dotted' ),
		'<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
	);

    echo '<span class="separator">|</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'dotted_excerpt_length' ) ) :
/**** Change length of the excerpt ****/
function dotted_excerpt_length() {
      
      if(dotted_get_option('excerpt_length')){
        $limit = dotted_get_option('excerpt_length');
      }else{
        $limit = 30;
      }  
      $excerpt = explode(' ', get_the_excerpt(), $limit);

      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
      return $excerpt;
}
endif;

if ( ! function_exists( 'dotted_excerpt' ) ) :
/** Excerpt Section Blog Post **/
function dotted_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
endif;


if ( ! function_exists( 'dotted_tag_cloud_widget' ) ) :
/**custom function tag widgets**/
function dotted_tag_cloud_widget($args) {
    $args['number'] = 0; //adding a 0 will display all tags
    $args['largest'] = 18; //largest tag
    $args['smallest'] = 14; //smallest tag
    $args['unit'] = 'px'; //tag font unit
    $args['format'] = 'list'; //ul with a class of wp-tag-cloud
    $args['exclude'] = array(20, 80, 92); //exclude tags by ID
    return $args;
}
add_filter( 'widget_tag_cloud_args', 'dotted_tag_cloud_widget' );
endif;

/** Excerpt Section Blog Post **/
function dotted_blog_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

if ( ! function_exists( 'dotted_pagination' ) ) :
//pagination
function dotted_pagination($prev = '<i class="fa fa-angle-double-left"></i>', $next = '<i class="fa fa-angle-double-right"></i>', $pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
        'base'          => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
        'format'        => '',
        'current'       => max( 1, get_query_var('paged') ),
        'total'         => $pages,
        'prev_text'     => $prev,
        'next_text'     => $next,       
        'type'          => 'list',
        'end_size'      => 3,
        'mid_size'      => 3
);
    $return =  paginate_links( $pagination );
    echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
}
endif;

if ( ! function_exists( 'dotted_custom_wp_admin_style' ) ) :
function dotted_custom_wp_admin_style() {

        wp_register_style( 'dotted_custom_wp_admin_css', get_template_directory_uri() . '/framework/admin/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'dotted_custom_wp_admin_css' );

        wp_enqueue_script( 'dotted-backend-js', get_template_directory_uri()."/framework/admin/admin-script.js", array( 'jquery' ), '1.0.0', true );
        wp_enqueue_script( 'dotted-backend-js' );
}
add_action( 'admin_enqueue_scripts', 'dotted_custom_wp_admin_style' );
endif;

if ( ! function_exists( 'dotted_search_form' ) ) :
/* Custom form search */
function dotted_search_form( $form ) {
    $form = '<div class="widget widget-search"><form role="search" method="get" action="' . esc_url(home_url( '/' )) . '" class="form-inline" >  
        <input type="search" id="search" class="form-control" value="' . get_search_query() . '" name="s" placeholder="'.__('Type & Search...', 'dotted').'" />
        <button type="submit" class="reset-btn hover-text-theme"><i class="fa fa-search"></i></button>
    </form></div>';
    return $form;
}
add_filter( 'get_search_form', 'dotted_search_form' );
endif;

/* Custom comment List: */
function dotted_theme_comment($comment, $args, $depth) {    
   $GLOBALS['comment'] = $comment; ?>
   <li class="comment-item ">
        <article class="comment-body" id="comment-<?php comment_ID(); ?>">

          <div class="header-comment">
            <div class="avatar-comment">
              <?php echo get_avatar($comment,$size='58',$default='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=100' ); ?>
            </div>
            <p class="author-name"><?php printf(__('%s','dotted'), get_comment_author()) ?></p>
            <p><?php the_time( get_option( 'date_format' ) ); ?></p>
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
          </div>
          <div class="body-comment">
            <?php if ($comment->comment_approved == '0'){ ?>
                 <p><em><?php esc_html_e('Your comment is awaiting moderation.','dotted') ?></em></p>
            <?php }else{ ?>
                <?php comment_text() ?>
            <?php } ?>
          </div>  

        </article>
    </li> 
<?php
}

//Remove Customizer
add_action( "customize_register", "dotted_customize_register" );
function dotted_customize_register( $wp_customize ) {
  $wp_customize->remove_section('header_image');
  $wp_customize->remove_section('background_image');
  $wp_customize->remove_section('colors');
}

/*Support Woocommerce*/
add_action( 'after_setup_theme', 'dotted_woocommerce_support' );
function dotted_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );