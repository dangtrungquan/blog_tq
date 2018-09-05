<!-- /Mobile Menu -->
<?php if(dotted_get_option( 'top_bar' )) { ?>
<!-- topbar -->
    <div class="topbar-1 bg-theme">
        <div class="topbar-1-inner">
            <?php
                $topmenu = array(
                'theme_location'  => 'top',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'subnavi',
                'menu_id'         => '',
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
            if ( has_nav_menu( 'top' ) ) {
                wp_nav_menu( $topmenu );
            }
            ?>

            <?php $socials = dotted_get_option( 'socials', array() ); ?>
            <?php if($socials) { ?>
            <ul class="social social-1">
                <?php foreach ( $socials as $social ) { ?>
                <li><a target="_blank" href="<?php echo esc_url($social['link']); ?>" class="color-theme hover-text-dark"><i class="fa <?php echo esc_attr($social['icon']); ?>" aria-hidden="true"></i></a></li>
                <?php } ?>
            </ul>
            <?php } ?>

            <?php if(dotted_get_option( 'top_info' )){ ?>
            <div class="topbar-info topbar-info-1">
                <?php echo dotted_get_option( 'top_info' ); ?>
            </div>
            <?php } ?>
        </div>
    </div>
<!-- /topbar -->
<?php } ?>
<!-- Header -->
<header id="<?php if(dotted_get_option('sticky')) echo 'stick'; ?>" class="header-v1 header">
    <div class="header-v1-inner">
        <h1 class="logo-1 logo">
            <?php $logo = dotted_get_option( 'logo' ) ? dotted_get_option( 'logo' ) : get_template_directory_uri().'/images/logo.png'; ?>
            <a href="<?php echo esc_url( home_url('/') ); ?>">
                <img src="<?php echo esc_url($logo); ?>" class="img-responsive" alt="">
            </a>
        </h1>
        
        <ul class="navi-right">
            <?php if(dotted_get_option( 'search' )) { ?>
            <li>
                <a href="" class="btn-search-navi color-theme border-color-theme bg-hover-theme" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></a>
                <div id="myModal" class="modal fade" role="dialog" aria-hidden="true">
                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
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
                <a href="#" class="toggle-cart color-theme border-color-theme bg-hover-theme" data-toggle="dropdown"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                <div class="dropdown-cart top_cart_list_product">
                    <div class="widget_shopping_cart_content">
                        <?php woocommerce_mini_cart(); ?>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
        <nav id="main-navi" class="nav-r <?php echo dotted_get_option('sepe_list'); ?>">
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
        <a href="#menu" class="btn-menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></a>
    </div>
</header>

<div class="header-line"></div>