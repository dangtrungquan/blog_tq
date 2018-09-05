<?php 

//Custom Style Frontend
if(!function_exists('dotted_custom_frontend_style')){
    function dotted_custom_frontend_style(){
    	$style_css 	= '';
        $bg_top 	= '';
        $color_top 	= '';
        $bg_h 		= '';
        $color_m 	= '';
        $sepe 		= '';
        $bg_sh 		= '';

        $logo_mar 	= '';
        $logo_w 	= '';
        $logo_h 	= '';

        $bg_ft		= '';
        $bg_fimg	= '';
        $color_ft	= '';
        $color_fti	= '';
        $bg_bt		= '';
        $color_bt	= '';

        $boxed		= '';
        $bg_bd		= '';
        $bg_ibd		= '';
        $bg_rp		= '';

        $bgcms 		= '';

        if(dotted_get_option('bg_top')){
        	$bg_top = '.topbar-1, .header-v2{ background: '.dotted_get_option('bg_top').'; } .social-1 li a{ color: '.dotted_get_option('bg_top').'; }';
        }
        if(dotted_get_option('color_top')){
        	$color_top = '.subnavi a, .topbar-info-1 li, .topbar-info-1 li a, .topbar-info-2 li, .topbar-info-2 li a{ color: '.dotted_get_option('color_top').'; } .social-1 li a{ background: '.dotted_get_option('color_top').';';
        }

        if(dotted_get_option('bg_menu')){
        	$bg_h = '.header-v1, .header-v1.is_stuck, .stick-warp-2{ background: '.dotted_get_option('bg_menu').'; }';
        }
        if(dotted_get_option('color_menu')){
        	$color_m = '.navi-level-1 > li > a, .navi-warp-h2 .navi-level-1 > li > a, .navi-warp-h2 .navi-level-1 a:after{ color: '.dotted_get_option('color_menu').'; } .navi-warp-h2 .navi-level-1 a:after{ opacity: 0.7; }';
        }
        if(!dotted_get_option('sepe')){
            $sepe = '.navi-level-1 a:after, .copyright-1 li:after{ display: none; } .navi-level-1 > li > a, .header-v1 .navi-level-1 > li > a{ padding-left: 15px; padding-right: 15px; }';
        }
        if(dotted_get_option('page_header_bg')){
        	$bg_sh = '.sub-header-2{ background-image: url('.dotted_get_option('page_header_bg').'); }';
        }

        //Logo
        if(dotted_get_option('logo_width')){
        	$logo_w = '.logo .img-responsive{ width: '.dotted_get_option('logo_width').'px; }';
        }
        if(dotted_get_option('logo_height')){
        	$logo_h = '.logo .img-responsive{ height: '.dotted_get_option('logo_height').'px; }';
        }
        if(dotted_get_option('logo_position')){
        	$space = dotted_get_option('logo_position');
        	$logo_mar = '.logo .img-responsive{ margin: '.$space["top"].' '.$space["right"].' '.$space["bottom"].' '.$space["left"].'; }';
        }

        //Coming Soon
        if(dotted_get_option('bgcms')){
        	$bgcms = '.bgcms{ background-image: url('.dotted_get_option('bgcms').'); }';
        }

        //Footer
        if(dotted_get_option('bg_fimg')){
        	$bg_fimg = 'footer{ background-image: url('.dotted_get_option('bg_fimg').'); }';
        }
        if(dotted_get_option('bg_footer')){
        	$bg_ft = 'footer{ background: '.dotted_get_option('bg_footer').'; }';
        }
        if(dotted_get_option('color_footer')){
        	$color_ft = 'footer, .useful-link li a, .footer-v1 .contact-f1 a, .widget .social-f1 li a{ color: '.dotted_get_option('color_footer').'; }';
        }
        if(dotted_get_option('color_ftitle')){
        	$color_fti = 'footer .widget h3, footer .hover-text-theme a{ color: '.dotted_get_option('color_ftitle').'; }';
        }
        if(dotted_get_option('bg_bottom')){
        	$bg_bt = '#copyright-1{ background: '.dotted_get_option('bg_bottom').'; }';
        }
        if(dotted_get_option('color_bottom')){
        	$color_bt = '#copyright-1 p, .copyright-1 li a{ color: '.dotted_get_option('color_bottom').'; }';
        }

        //Styling
        if(dotted_get_option('boxed')){
        	$boxed = '#page{ max-width: 1230px; margin: 40px auto; box-shadow: 0 3px 8px #666; }';
        }
        if(dotted_get_option('bg_body')){
        	$bg_bd = 'body{ background-color: '.dotted_get_option('bg_body').'; }';
        }
        if(dotted_get_option('bg_ibody')){
        	$bg_ibd = 'body{ background: url('.dotted_get_option('bg_ibody').') top center; background-size: cover; } #page{ box-shadow: none; }';
        }
        if(dotted_get_option('repeat')){
        	$bg_rp = 'body{ background-repeat: url('.dotted_get_option('repeat').'); background-size: inherit; background-repeat: repeat; }';
        }


        $style_css .= dotted_get_option('custom_css');
        $style_css .= $bg_top;
        $style_css .= $color_top;
        $style_css .= $bg_h;
        $style_css .= $color_m;
        $style_css .= $sepe;
        $style_css .= $bg_sh;
        $style_css .= $logo_w;
        $style_css .= $logo_h;
        $style_css .= $logo_mar;
        $style_css .= $bgcms;
        $style_css .= $bg_ft;
        $style_css .= $bg_fimg;
        $style_css .= $color_ft;
        $style_css .= $color_fti;
        $style_css .= $bg_bt;
        $style_css .= $color_bt;
        $style_css .= $boxed;
        $style_css .= $bg_bd;
        $style_css .= $bg_ibd;
        $style_css .= $bg_rp;
        if(! empty($style_css)){
			echo '<style type="text/css">'.$style_css.'</style>';
		}
    }
}
add_action('wp_head', 'dotted_custom_frontend_style');