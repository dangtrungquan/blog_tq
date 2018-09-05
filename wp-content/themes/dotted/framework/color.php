<?php 

//Custom Style Frontend
if(!function_exists('dotted_color_scheme')){
    function dotted_color_scheme(){
        $main_color = '';

        //Main Color
        if(dotted_get_option('main_color')){
            $main_color = 
            '.bg-theme, .dropdown-menu > li.active > a, .dropdown-menu > .active > a, 
            .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus,
            .btn-main-color, .btn-sub-color:hover, .btn-sub-color:focus,
            .dropdown-menu li a:hover, .navi-right > li > a:hover, .dropdown-menu > li ul li a:hover,
			.navi-right > li > a:focus, .social-single-team li a:hover,
			.iconbox-set-3:hover .icon-2, .project-style-1 a.current,
			.project-style-2 a:hover, .project-style-2 a.current,
			.twitter-owl-warp .owl-page.active, .twitter-owl-warp .timePosted a,
			.team-slider .owl-page.active, .owl-team .owl-page.active,
			.owl-blog-landing .owl-page.active, .nav-links a:hover,
			.header-comment .comment-reply-link:hover, .owl-gallery-portfolio-post .owl-controls .owl-page.active,
			.countdown li span:before, .pricing-table.featured header,
			.pricing-tables-group-item.featured p.title, .fixbtt:hover,
			.bg-theme-callback, .bg-hover-theme:hover, .bg-sub-theme-callback:hover,
			.woocommerce #respond input#submit, .woocommerce a.button, 
			.woocommerce button.button, .woocommerce input.button,
			.woocommerce #respond input#submit.disabled, .woocommerce #respond input#submit:disabled, 
			.woocommerce #respond input#submit[disabled]:disabled, .woocommerce a.button.disabled, 
			.woocommerce a.button:disabled, .woocommerce a.button[disabled]:disabled, .woocommerce button.button.disabled, 
			.woocommerce button.button:disabled, .woocommerce button.button[disabled]:disabled, .woocommerce input.button.disabled, 
			.woocommerce input.button:disabled, .woocommerce input.button[disabled]:disabled,
			.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
			.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, 
			.woocommerce button.button.alt, .woocommerce input.button.alt,
			.woocommerce .button.add_to_cart_button, .woocommerce .added_to_cart.wc-forward,
			.woocommerce .woocommerce-pagination ul.page-numbers li span.current, 
			.woocommerce .woocommerce-pagination ul.page-numbers li a:hover,
			.woocommerce span.onsale, p.buttons a.button,
			.modal .close
			{
			  background-color: '.dotted_get_option('main_color').';
			}

			.btn-border-main-color, .btn-border-sub-color:hover,
			.btn-border-sub-color:focus, .nav-r.ver2 .navi-level-1 a:after,
			.nav-r.ver2 .navi-level-1 a:after, .header-v1 .navi-level-1 > li > a:focus,
			.header-v1 .navi-level-1 > li > a:hover, .navi-right-2 li a:hover,
			.navi-right-2 li a:focus, .mPS2id-highlight span,
			.icon-1 i, .iconbox:hover .hover-text-theme,
			.project-item p, .no-gutter .project-item h4 a:hover,
			.no-gutter .project-item p a:hover, .hover-text-theme a:hover,
			.call3 .sub-heading-call3, .nav-dark a.btn-1:hover,
			.twitter-widget-1 ul a:hover, .twitter-widget-1 ul .timePosted a,
			.twitter-widget-2 a:hover, .twitter-widget-2 .timePosted a,
			.icon-twitter-3, .twitter-owl-warp a:hover,
			p.rate .fa-star, ul.social-share li a:hover,
			.widget li a:hover, .widget-search form button:hover,
			.widget-category ul.category li:hover a, .comment-reply-title a,
			.col-description ul.social-share a:hover, .col-skill p i,
			.faq-heading, .services-heading, .btn-goback404:hover,
			.social-big-white li a:hover, .pricing-table .content ul li i.fa,
			.pricing-table header .price p.value, .reward-item p.date,
			.footer-v1 .contact-f2 ul li i, .color-theme, .hover-text-theme:hover,
			.blog-footer a:hover, 
			div.woocommerce a:hover, .product-item .product-detail a:hover h3,
			.woocommerce div.product p.price, .woocommerce div.product span.price,
			.woocommerce-info:before, .cart-button ul.cart_list li a:hover
			{
				color: '.dotted_get_option('main_color').';
			}

			.btn-border-main-color, .btn-border-sub-color:hover,
			.btn-border-sub-color:focus, .form-team-single-warp textarea.form-control:focus,
			.customNavigation-3 a.btn-1:hover, .overlay-1,
			.thumb-owl-testimonial-2 .owl-item.synced .thumb-owl-2 .avatar-owl-2,
			.nav-dark a.btn-1:hover, .twitter-logo-fix,
			.icon-twitter-3, .team-item:hover .overlay-1, 
			blockquote, .right-form-comment textarea.form-control:focus,
			.comment-form .form-control:focus, .comment-form .form-control,
			.form-inline .contact-form-landing .form-control:focus,
			.border-color-theme, .hover-border-theme:hover, .twitter-logo-fix
			{
				border-color: '.dotted_get_option('main_color').';
			}
			.panel-custom .panel-heading a,
			.panel-collapse.collapse.in,
			.preloader4, div.vc_tta-color-grey.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-heading,
			div.vc_tta-color-grey.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-body
			{
				border-left-color: '.dotted_get_option('main_color').';
			}
			.tab1 > li.active > a,
			.tab1 > li.active > a:hover,
			.tab1 > li.active > a:focus,
			.tab1 > li > a:hover,
			.tab1 > li > a:focus,
			div.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab.vc_active,
			.woocommerce-info, .cart-button .dropdown-cart,
			.form-search-navi
			{
				border-top-color: '.dotted_get_option('main_color').';
			}
			.modal-body .search-form input[type="search"]{
				border-bottom-color: '.dotted_get_option('main_color').';
			}
			.preloader4
			{
				border-bottom-color: '.dotted_get_option('main_color').';
				border-right-color: '.dotted_get_option('main_color').';
			}

			';
        }

        if(! empty($main_color)){
			echo '<style type="text/css">'.$main_color.'</style>';
		}
    }
}
add_action('wp_head', 'dotted_color_scheme');