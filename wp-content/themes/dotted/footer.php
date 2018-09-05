<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dotted
 */
?>
        <?php if(dotted_get_option('fwidget')) { ?>
        <!-- Footer -->
        <footer class="footer-v1">
            <div class="container"> 
                <div class="row">
                    <?php get_sidebar('footer');?>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
        <?php } ?>
        
        <?php if(dotted_get_option('bfooter')) { ?>
        <section class="no-padding" id="copyright-1">
            <div class="container">
                <div class="row">
                    <div class="warp-copyright-1">
                        <?php
                            $footermenu = array(
                            'theme_location'  => 'footer',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'copyright-1',
                            'menu_id'         => 'navigation',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker(),
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                        );
                        if ( has_nav_menu( 'footer' ) ) {
                            wp_nav_menu( $footermenu );
                        }
                        ?>
                        <p class="text-copyright-1">
                            <?php echo wp_kses( dotted_get_option('copy_right'), wp_kses_allowed_html('post') ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
    </div>
</div>
<a id="to-the-top" class="fixbtt"><i class="fa fa-chevron-up"></i></a>

<?php wp_footer(); ?>

</body>
</html>
