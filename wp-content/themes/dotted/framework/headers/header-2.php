<!-- Header -->
<header class="header-v2 header">
    <div class="header-v2-inner">
        <h1 id="stick-logo" class="logo-2 logo">
            <?php $logo = dotted_get_option( 'logo' ) ? dotted_get_option( 'logo' ) : get_template_directory_uri().'/images/logo.png'; ?>
            <a href="<?php echo esc_url( home_url('/') ); ?>">
                <img src="<?php echo esc_url($logo); ?>" class="img-responsive" alt="">
            </a>
        </h1>
        <?php $socials = dotted_get_option( 'socials', array() ); ?>
        <?php if($socials) { ?>
        <ul class="social social-2">
            <?php foreach ( $socials as $social ) { ?>
            <li><a target="_blank" href="<?php echo esc_url($social['link']); ?>" class="hover-color-theme"><i class="fa <?php echo esc_attr($social['icon']); ?>" aria-hidden="true"></i></a></li>
            <?php } ?>
        </ul>
        <?php } ?>

        <?php if(dotted_get_option( 'top_info' )){ ?>
        <div class="topbar-info topbar-info-2">
            <?php echo dotted_get_option( 'top_info' ); ?>
        </div>
        <?php } ?>

        <a href="#menu" class="btn-menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></a>
    </div>
</header>
<!-- <div class="header-line"></div> -->
<div id="<?php if(dotted_get_option('sticky')) echo 'stick'; ?>" class="navi-warp-h2 stick-warp-2 bg-theme">
    <div class="navi-warp-h2-inner">
        <nav class="nav-l <?php echo dotted_get_option('sepe_list'); ?>">
            <?php
                $primary = array(
                    'theme_location'  => 'primary',
                    'menu'            => '',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker(),
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul class="navi-level-1">%3$s</ul>',
                    'depth'           => 0,
                );
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( $primary );
                }
            ?>
        </nav>

        <ul class="navi-right-2">
            <?php if(dotted_get_option( 'search' )) { ?>
            <li>
                <a href="" class="btn-search-navi hover-text-theme" data-toggle="modal" data-target="#myModal2"><i class="fa fa-search"></i></a>
                <div id="myModal2" class="modal fade" role="dialog" aria-hidden="true">
                  <button type="button" class="close" data-dismiss="modal">x</button>
                  <div class="modal-dialog myModal-search">
                    <!-- Modal content-->
                    <div class="modal-content">                                        
                        <div class="modal-body">
                            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url('/') ); ?>">
                                <input type="search" class="search-field" name="s" placeholder="<?php echo esc_html__('Type & Search', 'dotted'); ?>" value="" title="">
                                <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
            </li>
            <?php } ?>
            <?php if(dotted_get_option( 'cart' ) && class_exists('Woocommerce') ) { ?>
            <li class="cart-button">
                <a href="#" class="hover-text-theme" data-toggle="dropdown"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                <div class="dropdown-cart top_cart_list_product">
                    <div class="widget_shopping_cart_content">
                        <?php woocommerce_mini_cart(); ?>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>

        <a href="#menu" class="btn-menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></a>
    </div>
</div>
<!-- /Header -->