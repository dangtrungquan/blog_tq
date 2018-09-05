<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dotted
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	

	<?php if ( have_comments() ) : ?>
		<div class="comments-wrapper">
			<h3><?php esc_html_e('Comments', 'dotted') ?></h3>
			<p class="comment-count"><?php esc_html_e('There are ', 'dotted') ?><span class="text-primary"><?php comments_number( esc_html__('0', 'dotted'), esc_html__('1', 'dotted'), esc_html__('%', 'dotted') ); ?></span><?php esc_html_e(' comments on this post.', 'dotted') ?></p>
		    <ol class="comment-list">
					<?php wp_list_comments('callback=dotted_theme_comment'); ?>
				<?php
					// Are there comments to navigate through?
					if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				?>
					<nav class="navigation comment-navigation" role="navigation">		   
						<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'dotted' ) ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'dotted' ) ); ?></div>
		                <div class="clearfix"></div>
					</nav><!-- .comment-navigation -->
				<?php endif; // Check for comment navigation ?>

				<?php if ( ! comments_open() && get_comments_number() ) : ?>
					<p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'dotted' ); ?></p>
				<?php endif; ?>	
		    </ol>
		</div>		
	<?php endif; ?>	

	<div class="comment-form-warp">
	<?php
    	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
		$aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => 'reply-form',                                
                'title_reply'=> esc_html__('Leave A Comment', 'dotted'),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="col-md-6 comment-author"><input id="author" name="author" id="name" class="form-control" type="text" value="" placeholder="'. esc_html__( 'Your Name', 'dotted' ) .'" /></div>',
                    'email' => '<div class="col-md-6 comment-email"><input id="author" name="email" id="name" class="form-control" type="text" value="" placeholder="'. esc_html__( 'Your Email', 'dotted' ) .'" /></div>',
                ) ),                                
                 'comment_field' => '<div class="comment-mess"><textarea rows="7" name="comment" '.$aria_req.' id="comment-message" class="form-control" placeholder="'. esc_html__( 'Your Comment', 'dotted' ) .'" ></textarea></div>',
                 'label_submit' => esc_html__( 'post comment', 'dotted' ),
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',   
                 'class_submit'      => 'ot-btn btn-main-bg btn-rounded bg-theme bg-main-theme-callback text-up white-text',            
	        )
	    ?>
	    <?php comment_form($comment_args); ?>
	</div>
</div>	

<!-- #comments -->
