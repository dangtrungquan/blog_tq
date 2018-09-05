<div class="item-blog blog-single-feature-img">
    <div class="blog-feature-warp">
        <a href="<?php the_permalink(); ?>">
        <?php if( function_exists( 'rwmb_meta' ) ) { ?>
            <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
            <?php if($images){ ?>              
                <?php  foreach ( $images as $image ) {  ?>
                    <?php $img = $image['full_url']; ?>
                    <img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
                <?php } ?>                
            <?php } ?>
        <?php } ?>
        </a>
    </div>
    <div class="blog-feature-content">
        <div class="blog-feature-content-inner">
            <div class="blog-data">
                <div class="date-time bg-theme">
                    <span class="date"><?php the_time('d') ?></span>
                    <span class="month"><?php the_time('M') ?></span>
                </div>
                <div class="blog-type">
                    <i class="fa fa-picture-o"></i>
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