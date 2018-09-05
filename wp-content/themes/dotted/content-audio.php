<div class="item-blog blog-single-feature-img">
    <div class="audio-player">
        <?php if( function_exists( 'rwmb_meta' ) ) { ?>
            <?php $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true); ?>
            <?php if($link_audio){ ?>  
                <iframe style="width:100%" height="150" scrolling="no" frameborder="no" src="<?php echo esc_url( $link_audio ); ?>"></iframe>
            <?php } ?>
        <?php } ?> 
    </div>
    <div class="blog-feature-content">
        <div class="blog-feature-content-inner">
            <div class="blog-data">
                <div class="date-time bg-theme">
                    <span class="date"><?php the_time('d') ?></span>
                    <span class="month"><?php the_time('M') ?></span>
                </div>
                <div class="blog-type">
                    <i class="fa fa-volume-up"></i>
                </div>
            </div>
            <div class="blog-text">
                <h4><a class="hover-text-theme" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p><?php echo dotted_excerpt_length(); ?></p>
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