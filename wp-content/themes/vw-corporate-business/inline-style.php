<?php

	/*----------------------First highlight color-------------------*/

	$vw_corporate_business_first_color = get_theme_mod('vw_corporate_business_first_color');

	$vw_corporate_business_custom_css = '';

	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='.get-started a, .more-btn a, .about-btn a, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, input[type="submit"], .footer-2, nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce span.onsale, #sidebar input[type="submit"], .scrollup i, .hvr-sweep-to-right:before, .pagination span, .pagination a, .footer .tagcloud a:hover, #sidebar .tagcloud a:hover, .entry-audio audio, #comments a.comment-reply-link, .toggle-nav i, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, .footer .widget_price_filter .ui-slider .ui-slider-range, .footer .widget_price_filter .ui-slider .ui-slider-handle, .footer .woocommerce-product-search button, .footer a.custom_read_more:hover, #sidebar a.custom_read_more:hover, .footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover, .nav-previous a, .nav-next a, .woocommerce nav.woocommerce-pagination ul li a, #preloader, .footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button,.bradcrumbs a, .post-categories li a,.bradcrumbs span{';
			$vw_corporate_business_custom_css .='background-color: '.esc_attr($vw_corporate_business_first_color).';';
		$vw_corporate_business_custom_css .='}';
	} 
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='#comments input[type="submit"].submit, #sidebar ul li::before, #sidebar ul.cart_list li::before, #sidebar ul.product_list_widget li::before{';
			$vw_corporate_business_custom_css .='background-color: '.esc_attr($vw_corporate_business_first_color).'!important;';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='a, .top-bar i, .top-bar .custom-social-icons i:hover, #header, .about h2, .footer h3, .woocommerce-message::before, .post-info i, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, #sidebar td, #sidebar caption, #sidebar th, #sidebar td#prev a, #sidebar ul li a:hover, .footer li a:hover, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .footer .custom-social-icons i, #sidebar .custom-social-icons i, .post-main-box:hover h2 a, .post-main-box:hover .post-info a, .post-info:hover a, .top-bar span a:hover, .logo .site-title a:hover, #slider .inner_carousel h1 a:hover, .footer .wp-block-search .wp-block-search__label{';
			$vw_corporate_business_custom_css .='color: '.esc_attr($vw_corporate_business_first_color).';';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='.post-main-box:hover, .footer .custom-social-icons i, #sidebar .custom-social-icons i, .footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover{';
			$vw_corporate_business_custom_css .='border-color: '.esc_attr($vw_corporate_business_first_color).'!important;';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='.main-navigation ul ul{';
			$vw_corporate_business_custom_css .='border-top-color: '.esc_attr($vw_corporate_business_first_color).';';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='.top-bar, .main-navigation ul ul, .header-fixed{';
			$vw_corporate_business_custom_css .='border-bottom-color: '.esc_attr($vw_corporate_business_first_color).';';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='.abt-image img{
		box-shadow: -12px 12px 0 0 '.esc_attr($vw_corporate_business_first_color).';
		}';
	}
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='#header{
		box-shadow: 0 3px 3px '.esc_attr($vw_corporate_business_first_color).';
		}';
	}

	$vw_corporate_business_custom_css .='@media screen and (max-width:1000px) {';
		if($vw_corporate_business_first_color != false){
			$vw_corporate_business_custom_css .='.search-box i{
			background-color:'.esc_attr($vw_corporate_business_first_color).';
			}';
		}
	$vw_corporate_business_custom_css .='}';

	/*---------------------------Width Layout -------------------*/

	$vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_width_option','Full Width');
    if($vw_corporate_business_theme_lay == 'Boxed'){
		$vw_corporate_business_custom_css .='body{';
			$vw_corporate_business_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_corporate_business_custom_css .='}';
		$vw_corporate_business_custom_css .='.scrollup i{';
		  $vw_corporate_business_custom_css .='right: 100px;';
		$vw_corporate_business_custom_css .='}';
		$vw_corporate_business_custom_css .='.scrollup.left i{';
		  $vw_corporate_business_custom_css .='left: 100px;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_theme_lay == 'Wide Width'){
		$vw_corporate_business_custom_css .='body{';
			$vw_corporate_business_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_corporate_business_custom_css .='}';
		$vw_corporate_business_custom_css .='.scrollup i{';
		  $vw_corporate_business_custom_css .='right: 30px;';
		$vw_corporate_business_custom_css .='}';
		$vw_corporate_business_custom_css .='.scrollup.left i{';
		  $vw_corporate_business_custom_css .='left: 30px;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_theme_lay == 'Full Width'){
		$vw_corporate_business_custom_css .='body{';
			$vw_corporate_business_custom_css .='max-width: 100%;';
		$vw_corporate_business_custom_css .='}';
	}

	/*------------------------ Slider Opacity -------------------*/

	$vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_slider_opacity_color','0.7');
	if($vw_corporate_business_theme_lay == '0'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.1'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.1';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.2'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.2';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.3'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.3';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.4'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.4';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.5'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.5';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.6'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.6';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.7'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.7';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.8'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.8';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.9'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.9';
		$vw_corporate_business_custom_css .='}';
		}

		/*---------------------- Slider Image Overlay ------------------------*/

	$vw_corporate_business_slider_image_overlay = get_theme_mod('vw_corporate_business_slider_image_overlay', true);
	if($vw_corporate_business_slider_image_overlay == false){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:1;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_slider_image_overlay_color = get_theme_mod('vw_corporate_business_slider_image_overlay_color', true);
	if($vw_corporate_business_slider_image_overlay_color != false){
		$vw_corporate_business_custom_css .='#slider{';
			$vw_corporate_business_custom_css .='background-color: '.esc_attr($vw_corporate_business_slider_image_overlay_color).';';
		$vw_corporate_business_custom_css .='}';
	}

	/*----------------Slider Content Layout -------------------*/

	$vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_slider_content_option','Center');
    if($vw_corporate_business_theme_lay == 'Left'){
		$vw_corporate_business_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, .more-btn, #slider .inner_carousel p{';
			$vw_corporate_business_custom_css .='text-align:left; left:15%; right:45%;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_theme_lay == 'Center'){
		$vw_corporate_business_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, .more-btn, #slider .inner_carousel p{';
			$vw_corporate_business_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_theme_lay == 'Right'){
		$vw_corporate_business_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, .more-btn, #slider .inner_carousel p{';
			$vw_corporate_business_custom_css .='text-align:right; left:45%; right:15%;';
		$vw_corporate_business_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$vw_corporate_business_slider_content_padding_top_bottom = get_theme_mod('vw_corporate_business_slider_content_padding_top_bottom');
	$vw_corporate_business_slider_content_padding_left_right = get_theme_mod('vw_corporate_business_slider_content_padding_left_right');
	if($vw_corporate_business_slider_content_padding_top_bottom != false || $vw_corporate_business_slider_content_padding_left_right != false){
		$vw_corporate_business_custom_css .='#slider .carousel-caption{';
			$vw_corporate_business_custom_css .='top: '.esc_attr($vw_corporate_business_slider_content_padding_top_bottom).'; bottom: '.esc_attr($vw_corporate_business_slider_content_padding_top_bottom).';left: '.esc_attr($vw_corporate_business_slider_content_padding_left_right).';right: '.esc_attr($vw_corporate_business_slider_content_padding_left_right).';';
		$vw_corporate_business_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_corporate_business_slider_height = get_theme_mod('vw_corporate_business_slider_height');
	if($vw_corporate_business_slider_height != false){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='height: '.esc_attr($vw_corporate_business_slider_height).';';
		$vw_corporate_business_custom_css .='}';
	}

	/*--------------------------- Slider -------------------*/

	$vw_corporate_business__slider = get_theme_mod('vw_corporate_business_slider_hide_show');
	if($vw_corporate_business__slider == false){
		$vw_corporate_business_custom_css .='.page-template-custom-home-page #header{';
			$vw_corporate_business_custom_css .='margin-bottom: 20px;';
		$vw_corporate_business_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_blog_layout_option','Default');
    if($vw_corporate_business_theme_lay == 'Default'){
		$vw_corporate_business_custom_css .='.post-main-box{';
			$vw_corporate_business_custom_css .='';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_theme_lay == 'Center'){
		$vw_corporate_business_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p{';
			$vw_corporate_business_custom_css .='text-align:center;';
		$vw_corporate_business_custom_css .='}';
		$vw_corporate_business_custom_css .='.post-info{';
			$vw_corporate_business_custom_css .='margin-top:10px;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_theme_lay == 'Left'){
		$vw_corporate_business_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p{';
			$vw_corporate_business_custom_css .='text-align:Left;';
		$vw_corporate_business_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$vw_corporate_business_blog_page_posts_settings = get_theme_mod( 'vw_corporate_business_blog_page_posts_settings','Into Blocks');
    if($vw_corporate_business_blog_page_posts_settings == 'Without Blocks'){
		$vw_corporate_business_custom_css .='.post-main-box{';
			$vw_corporate_business_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_corporate_business_custom_css .='}';
	}

	/*-----------------Responsive Media -----------------------*/

	$vw_corporate_business_resp_topbar = get_theme_mod( 'vw_corporate_business_resp_topbar_hide_show',false);
	if($vw_corporate_business_resp_topbar == true && get_theme_mod( 'vw_corporate_business_topbar_hide_show', false) == false){
    	$vw_corporate_business_custom_css .='.top-bar{';
			$vw_corporate_business_custom_css .='display:none;';
		$vw_corporate_business_custom_css .='} ';
	}
    if($vw_corporate_business_resp_topbar == true){
    	$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='.top-bar{';
			$vw_corporate_business_custom_css .='display:block;';
		$vw_corporate_business_custom_css .='} }';
	}else if($vw_corporate_business_resp_topbar == false){
		$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='.top-bar{';
			$vw_corporate_business_custom_css .='display:none;';
		$vw_corporate_business_custom_css .='} }';
	}

	$vw_corporate_business_resp_stickyheader = get_theme_mod( 'vw_corporate_business_stickyheader_hide_show',false);
	if($vw_corporate_business_resp_stickyheader == true && get_theme_mod( 'vw_corporate_business_sticky_header',false) != true){
    	$vw_corporate_business_custom_css .='.header-fixed{';
			$vw_corporate_business_custom_css .='position:static;';
		$vw_corporate_business_custom_css .='} ';
	}
    if($vw_corporate_business_resp_stickyheader == true){
    	$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='.header-fixed{';
			$vw_corporate_business_custom_css .='position:fixed;';
		$vw_corporate_business_custom_css .='} }';
	}else if($vw_corporate_business_resp_stickyheader == false){
		$vw_corporate_business_custom_css .='@media screen and (max-width:575px){';
		$vw_corporate_business_custom_css .='.header-fixed{';
			$vw_corporate_business_custom_css .='position:static;';
		$vw_corporate_business_custom_css .='} }';
	}

	$vw_corporate_business_resp_slider = get_theme_mod( 'vw_corporate_business_resp_slider_hide_show',false);
	if($vw_corporate_business_resp_slider == true && get_theme_mod( 'vw_corporate_business_slider_hide_show', false) == false){
    	$vw_corporate_business_custom_css .='#slider{';
			$vw_corporate_business_custom_css .='display:none;';
		$vw_corporate_business_custom_css .='} ';
	}
    if($vw_corporate_business_resp_slider == true){
    	$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='#slider{';
			$vw_corporate_business_custom_css .='display:block;';
		$vw_corporate_business_custom_css .='} }';
	}else if($vw_corporate_business_resp_slider == false){
		$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='#slider{';
			$vw_corporate_business_custom_css .='display:none;';
		$vw_corporate_business_custom_css .='} }';
	}

	$vw_corporate_business_resp_sidebar = get_theme_mod( 'vw_corporate_business_sidebar_hide_show',true);
    if($vw_corporate_business_resp_sidebar == true){
    	$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='#sidebar{';
			$vw_corporate_business_custom_css .='display:block;';
		$vw_corporate_business_custom_css .='} }';
	}else if($vw_corporate_business_resp_sidebar == false){
		$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='#sidebar{';
			$vw_corporate_business_custom_css .='display:none;';
		$vw_corporate_business_custom_css .='} }';
	}

	$vw_corporate_business_resp_scroll_top = get_theme_mod( 'vw_corporate_business_resp_scroll_top_hide_show',true);
	if($vw_corporate_business_resp_scroll_top == true && get_theme_mod( 'vw_corporate_business_hide_show_scroll',true) != true){
    	$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='visibility:hidden !important;';
		$vw_corporate_business_custom_css .='} ';
	}
    if($vw_corporate_business_resp_scroll_top == true){
    	$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='visibility:visible !important;';
		$vw_corporate_business_custom_css .='} }';
	}else if($vw_corporate_business_resp_scroll_top == false){
		$vw_corporate_business_custom_css .='@media screen and (max-width:575px){';
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='visibility:hidden !important;';
		$vw_corporate_business_custom_css .='} }';
	}

	$vw_corporate_business_resp_menu_toggle_btn_bg_color = get_theme_mod('vw_corporate_business_resp_menu_toggle_btn_bg_color');
	if($vw_corporate_business_resp_menu_toggle_btn_bg_color != false){
		$vw_corporate_business_custom_css .='.toggle-nav i{';
			$vw_corporate_business_custom_css .='background-color: '.esc_attr($vw_corporate_business_resp_menu_toggle_btn_bg_color).';';
		$vw_corporate_business_custom_css .='}';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_corporate_business_topbar_padding_top_bottom = get_theme_mod('vw_corporate_business_topbar_padding_top_bottom');
	if($vw_corporate_business_topbar_padding_top_bottom != false){
		$vw_corporate_business_custom_css .='.top-bar{';
			$vw_corporate_business_custom_css .='padding-top: '.esc_attr($vw_corporate_business_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_corporate_business_topbar_padding_top_bottom).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_navigation_menu_font_size = get_theme_mod('vw_corporate_business_navigation_menu_font_size');
	if($vw_corporate_business_navigation_menu_font_size != false){
		$vw_corporate_business_custom_css .='.main-navigation a{';
			$vw_corporate_business_custom_css .='font-size: '.esc_attr($vw_corporate_business_navigation_menu_font_size).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_navigation_menu_font_weight = get_theme_mod('vw_corporate_business_navigation_menu_font_weight','700');
	if($vw_corporate_business_navigation_menu_font_weight != false){
		$vw_corporate_business_custom_css .='.main-navigation a{';
			$vw_corporate_business_custom_css .='font-weight: '.esc_attr($vw_corporate_business_navigation_menu_font_weight).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_menu_text_transform','Uppercase');
	if($vw_corporate_business_theme_lay == 'Capitalize'){
		$vw_corporate_business_custom_css .='.main-navigation a{';
			$vw_corporate_business_custom_css .='text-transform:Capitalize;';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_theme_lay == 'Lowercase'){
		$vw_corporate_business_custom_css .='.main-navigation a{';
			$vw_corporate_business_custom_css .='text-transform:Lowercase;';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_theme_lay == 'Uppercase'){
		$vw_corporate_business_custom_css .='.main-navigation a{';
			$vw_corporate_business_custom_css .='text-transform:Uppercase;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_header_menus_color = get_theme_mod('vw_corporate_business_header_menus_color');
	if($vw_corporate_business_header_menus_color != false){
		$vw_corporate_business_custom_css .='.main-navigation a{';
			$vw_corporate_business_custom_css .='color: '.esc_attr($vw_corporate_business_header_menus_color).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_header_menus_hover_color = get_theme_mod('vw_corporate_business_header_menus_hover_color');
	if($vw_corporate_business_header_menus_hover_color != false){
		$vw_corporate_business_custom_css .='.main-navigation a:hover{';
			$vw_corporate_business_custom_css .='color: '.esc_attr($vw_corporate_business_header_menus_hover_color).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_header_submenus_color = get_theme_mod('vw_corporate_business_header_submenus_color');
	if($vw_corporate_business_header_submenus_color != false){
		$vw_corporate_business_custom_css .='.main-navigation ul ul a{';
			$vw_corporate_business_custom_css .='color: '.esc_attr($vw_corporate_business_header_submenus_color).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_header_submenus_hover_color = get_theme_mod('vw_corporate_business_header_submenus_hover_color');
	if($vw_corporate_business_header_submenus_hover_color != false){
		$vw_corporate_business_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$vw_corporate_business_custom_css .='color: '.esc_attr($vw_corporate_business_header_submenus_hover_color).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_menus_item = get_theme_mod( 'vw_corporate_business_menus_item_style','None');
    if($vw_corporate_business_menus_item == 'None'){
		$vw_corporate_business_custom_css .='.main-navigation a{';
			$vw_corporate_business_custom_css .='';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_menus_item == 'Zoom In'){
		$vw_corporate_business_custom_css .='.main-navigation a:hover{';
			$vw_corporate_business_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #7fbe4b;';
		$vw_corporate_business_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_corporate_business_sticky_header_padding = get_theme_mod('vw_corporate_business_sticky_header_padding');
	if($vw_corporate_business_sticky_header_padding != false){
		$vw_corporate_business_custom_css .='.header-fixed{';
			$vw_corporate_business_custom_css .='padding: '.esc_attr($vw_corporate_business_sticky_header_padding).';';
		$vw_corporate_business_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/

	$vw_corporate_business_search_font_size = get_theme_mod('vw_corporate_business_search_font_size');
	if($vw_corporate_business_search_font_size != false){
		$vw_corporate_business_custom_css .='.search-box i{';
			$vw_corporate_business_custom_css .='font-size: '.esc_attr($vw_corporate_business_search_font_size).';';
		$vw_corporate_business_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_corporate_business_button_padding_top_bottom = get_theme_mod('vw_corporate_business_button_padding_top_bottom');
	$vw_corporate_business_button_padding_left_right = get_theme_mod('vw_corporate_business_button_padding_left_right');
	if($vw_corporate_business_button_padding_top_bottom != false || $vw_corporate_business_button_padding_left_right != false){
		$vw_corporate_business_custom_css .='.blogbutton-small{';
			$vw_corporate_business_custom_css .='padding-top: '.esc_attr($vw_corporate_business_button_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_corporate_business_button_padding_top_bottom).';padding-left: '.esc_attr($vw_corporate_business_button_padding_left_right).';padding-right: '.esc_attr($vw_corporate_business_button_padding_left_right).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_button_border_radius = get_theme_mod('vw_corporate_business_button_border_radius');
	if($vw_corporate_business_button_border_radius != false){
		$vw_corporate_business_custom_css .='.blogbutton-small, .hvr-sweep-to-right:before{';
			$vw_corporate_business_custom_css .='border-radius: '.esc_attr($vw_corporate_business_button_border_radius).'px;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_button_font_size = get_theme_mod('vw_corporate_business_button_font_size',14);
	$vw_corporate_business_custom_css .='.blogbutton-small{';
		$vw_corporate_business_custom_css .='font-size: '.esc_attr($vw_corporate_business_button_font_size).';';
	$vw_corporate_business_custom_css .='}';

	$vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_button_text_transform','Uppercase');
	if($vw_corporate_business_theme_lay == 'Capitalize'){
		$vw_corporate_business_custom_css .='.blogbutton-small{';
			$vw_corporate_business_custom_css .='text-transform:Capitalize;';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_theme_lay == 'Lowercase'){
		$vw_corporate_business_custom_css .='.blogbutton-small{';
			$vw_corporate_business_custom_css .='text-transform:Lowercase;';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_theme_lay == 'Uppercase'){
		$vw_corporate_business_custom_css .='.blogbutton-small{';
			$vw_corporate_business_custom_css .='text-transform:Uppercase;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_button_letter_spacing = get_theme_mod('vw_corporate_business_button_letter_spacing',14);
	$vw_corporate_business_custom_css .='.blogbutton-small{';
		$vw_corporate_business_custom_css .='letter-spacing: '.esc_attr($vw_corporate_business_button_letter_spacing).';';
	$vw_corporate_business_custom_css .='}';


	/*------------- Single Blog Page------------------*/

	$vw_corporate_business_featured_image_border_radius = get_theme_mod('vw_corporate_business_featured_image_border_radius', 0);
	if($vw_corporate_business_featured_image_border_radius != false){
		$vw_corporate_business_custom_css .='.service-image img, .single-post img{';
			$vw_corporate_business_custom_css .='border-radius: '.esc_attr($vw_corporate_business_featured_image_border_radius).'px;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_featured_image_box_shadow = get_theme_mod('vw_corporate_business_featured_image_box_shadow',0);
	if($vw_corporate_business_featured_image_box_shadow != false){
		$vw_corporate_business_custom_css .='.service-image img, .features-box img, #content-vw img{';
			$vw_corporate_business_custom_css .='box-shadow: '.esc_attr($vw_corporate_business_featured_image_box_shadow).'px '.esc_attr($vw_corporate_business_featured_image_box_shadow).'px '.esc_attr($vw_corporate_business_featured_image_box_shadow).'px #cccccc;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_single_blog_post_navigation_show_hide = get_theme_mod('vw_corporate_business_single_blog_post_navigation_show_hide',true);
	if($vw_corporate_business_single_blog_post_navigation_show_hide != true){
		$vw_corporate_business_custom_css .='.post-navigation{';
			$vw_corporate_business_custom_css .='display: none;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_comment_width = get_theme_mod('vw_corporate_business_single_blog_comment_width');
	if($vw_corporate_business_comment_width != false){
		$vw_corporate_business_custom_css .='#comments textarea{';
			$vw_corporate_business_custom_css .='width: '.esc_attr($vw_corporate_business_comment_width).';';
		$vw_corporate_business_custom_css .='}';
	}

	// featured image dimention
	$vw_corporate_business_blog_post_featured_image_dimension = get_theme_mod('vw_corporate_business_blog_post_featured_image_dimension', 'default');
	$vw_corporate_business_blog_post_featured_image_custom_width = get_theme_mod('vw_corporate_business_blog_post_featured_image_custom_width',250);
	$vw_corporate_business_blog_post_featured_image_custom_height = get_theme_mod('vw_corporate_business_blog_post_featured_image_custom_height',250);
	if($vw_corporate_business_blog_post_featured_image_dimension == 'custom'){
		$vw_corporate_business_custom_css .='.service-image img{';
			$vw_corporate_business_custom_css .='width: '.esc_attr($vw_corporate_business_blog_post_featured_image_custom_width).'; height: '.esc_attr($vw_corporate_business_blog_post_featured_image_custom_height).';';
		$vw_corporate_business_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_corporate_business_copyright_background_color = get_theme_mod('vw_corporate_business_copyright_background_color');
	if($vw_corporate_business_copyright_background_color != false){
		$vw_corporate_business_custom_css .='.footer-2{';
			$vw_corporate_business_custom_css .='background-color: '.esc_attr($vw_corporate_business_copyright_background_color).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_footer_widgets_heading = get_theme_mod( 'vw_corporate_business_footer_widgets_heading','Left');
    if($vw_corporate_business_footer_widgets_heading == 'Left'){
		$vw_corporate_business_custom_css .='.footer h3, .footer .wp-block-search .wp-block-search__label{';
		$vw_corporate_business_custom_css .='text-align: left;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_footer_widgets_heading == 'Center'){
		$vw_corporate_business_custom_css .='.footer h3, .footer .wp-block-search .wp-block-search__label{';
			$vw_corporate_business_custom_css .='text-align: center;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_footer_widgets_heading == 'Right'){
		$vw_corporate_business_custom_css .='.footer h3, .footer .wp-block-search .wp-block-search__label{';
			$vw_corporate_business_custom_css .='text-align: right;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_footer_widgets_content = get_theme_mod( 'vw_corporate_business_footer_widgets_content','Left');
    if($vw_corporate_business_footer_widgets_content == 'Left'){
		$vw_corporate_business_custom_css .='.footer .widget{';
		$vw_corporate_business_custom_css .='text-align: left;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_footer_widgets_content == 'Center'){
		$vw_corporate_business_custom_css .='.footer .widget{';
			$vw_corporate_business_custom_css .='text-align: center;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_footer_widgets_content == 'Right'){
		$vw_corporate_business_custom_css .='.footer .widget{';
			$vw_corporate_business_custom_css .='text-align: right;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_footer_background_color = get_theme_mod('vw_corporate_business_footer_background_color');
	if($vw_corporate_business_footer_background_color != false){
		$vw_corporate_business_custom_css .='.footer{';
			$vw_corporate_business_custom_css .='background-color: '.esc_attr($vw_corporate_business_footer_background_color).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_copyright_font_size = get_theme_mod('vw_corporate_business_copyright_font_size');
	if($vw_corporate_business_copyright_font_size != false){
		$vw_corporate_business_custom_css .='.copyright p{';
			$vw_corporate_business_custom_css .='font-size: '.esc_attr($vw_corporate_business_copyright_font_size).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_copyright_padding_top_bottom = get_theme_mod('vw_corporate_business_copyright_padding_top_bottom');
	if($vw_corporate_business_copyright_padding_top_bottom != false){
		$vw_corporate_business_custom_css .='.footer-2{';
			$vw_corporate_business_custom_css .='padding-top: '.esc_attr($vw_corporate_business_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_corporate_business_copyright_padding_top_bottom).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_copyright_alignment = get_theme_mod('vw_corporate_business_copyright_alignment');
	if($vw_corporate_business_copyright_alignment != false){
		$vw_corporate_business_custom_css .='.copyright p{';
			$vw_corporate_business_custom_css .='text-align: '.esc_attr($vw_corporate_business_copyright_alignment).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_footer_padding = get_theme_mod('vw_corporate_business_footer_padding');
	if($vw_corporate_business_footer_padding != false){
		$vw_corporate_business_custom_css .='.footer{';
			$vw_corporate_business_custom_css .='padding: '.esc_attr($vw_corporate_business_footer_padding).' 0;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_footer_icon = get_theme_mod('vw_corporate_business_footer_icon');
	if($vw_corporate_business_footer_icon == false){
		$vw_corporate_business_custom_css .='.copyright p{';
			$vw_corporate_business_custom_css .='width:100%; text-align:center; float:none;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_footer_background_image = get_theme_mod('vw_corporate_business_footer_background_image');
	if($vw_corporate_business_footer_background_image != false){
		$vw_corporate_business_custom_css .='.footer{';
			$vw_corporate_business_custom_css .='background: url('.esc_attr($vw_corporate_business_footer_background_image).');';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_img_footer','scroll');
	if($vw_corporate_business_theme_lay == 'fixed'){
		$vw_corporate_business_custom_css .='.footer{';
			$vw_corporate_business_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$vw_corporate_business_custom_css .='}';
	}elseif ($vw_corporate_business_theme_lay == 'scroll'){
		$vw_corporate_business_custom_css .='.footer{';
			$vw_corporate_business_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$vw_corporate_business_custom_css .='}';
	}


	/*----------------Sroll to top Settings ------------------*/

	$vw_corporate_business_scroll_to_top_font_size = get_theme_mod('vw_corporate_business_scroll_to_top_font_size');
	if($vw_corporate_business_scroll_to_top_font_size != false){
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='font-size: '.esc_attr($vw_corporate_business_scroll_to_top_font_size).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_scroll_to_top_padding = get_theme_mod('vw_corporate_business_scroll_to_top_padding');
	$vw_corporate_business_scroll_to_top_padding = get_theme_mod('vw_corporate_business_scroll_to_top_padding');
	if($vw_corporate_business_scroll_to_top_padding != false){
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='padding-top: '.esc_attr($vw_corporate_business_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_corporate_business_scroll_to_top_padding).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_scroll_to_top_width = get_theme_mod('vw_corporate_business_scroll_to_top_width');
	if($vw_corporate_business_scroll_to_top_width != false){
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='width: '.esc_attr($vw_corporate_business_scroll_to_top_width).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_scroll_to_top_height = get_theme_mod('vw_corporate_business_scroll_to_top_height');
	if($vw_corporate_business_scroll_to_top_height != false){
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='height: '.esc_attr($vw_corporate_business_scroll_to_top_height).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_scroll_to_top_border_radius = get_theme_mod('vw_corporate_business_scroll_to_top_border_radius');
	if($vw_corporate_business_scroll_to_top_border_radius != false){
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='border-radius: '.esc_attr($vw_corporate_business_scroll_to_top_border_radius).'px;';
		$vw_corporate_business_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_corporate_business_social_icon_font_size = get_theme_mod('vw_corporate_business_social_icon_font_size');
	if($vw_corporate_business_social_icon_font_size != false){
		$vw_corporate_business_custom_css .='#sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_corporate_business_custom_css .='font-size: '.esc_attr($vw_corporate_business_social_icon_font_size).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_social_icon_padding = get_theme_mod('vw_corporate_business_social_icon_padding');
	if($vw_corporate_business_social_icon_padding != false){
		$vw_corporate_business_custom_css .='#sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_corporate_business_custom_css .='padding: '.esc_attr($vw_corporate_business_social_icon_padding).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_social_icon_width = get_theme_mod('vw_corporate_business_social_icon_width');
	if($vw_corporate_business_social_icon_width != false){
		$vw_corporate_business_custom_css .='#sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_corporate_business_custom_css .='width: '.esc_attr($vw_corporate_business_social_icon_width).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_social_icon_height = get_theme_mod('vw_corporate_business_social_icon_height');
	if($vw_corporate_business_social_icon_height != false){
		$vw_corporate_business_custom_css .='#sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_corporate_business_custom_css .='height: '.esc_attr($vw_corporate_business_social_icon_height).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_social_icon_border_radius = get_theme_mod('vw_corporate_business_social_icon_border_radius');
	if($vw_corporate_business_social_icon_border_radius != false){
		$vw_corporate_business_custom_css .='#sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_corporate_business_custom_css .='border-radius: '.esc_attr($vw_corporate_business_social_icon_border_radius).'px;';
		$vw_corporate_business_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_corporate_business_related_product_show_hide = get_theme_mod('vw_corporate_business_related_product_show_hide',true);
	if($vw_corporate_business_related_product_show_hide != true){
		$vw_corporate_business_custom_css .='.related.products{';
			$vw_corporate_business_custom_css .='display: none;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_products_padding_top_bottom = get_theme_mod('vw_corporate_business_products_padding_top_bottom');
	if($vw_corporate_business_products_padding_top_bottom != false){
		$vw_corporate_business_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_corporate_business_custom_css .='padding-top: '.esc_attr($vw_corporate_business_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_corporate_business_products_padding_top_bottom).'!important;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_products_padding_left_right = get_theme_mod('vw_corporate_business_products_padding_left_right');
	if($vw_corporate_business_products_padding_left_right != false){
		$vw_corporate_business_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_corporate_business_custom_css .='padding-left: '.esc_attr($vw_corporate_business_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_corporate_business_products_padding_left_right).'!important;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_products_box_shadow = get_theme_mod('vw_corporate_business_products_box_shadow');
	if($vw_corporate_business_products_box_shadow != false){
		$vw_corporate_business_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_corporate_business_custom_css .='box-shadow: '.esc_attr($vw_corporate_business_products_box_shadow).'px '.esc_attr($vw_corporate_business_products_box_shadow).'px '.esc_attr($vw_corporate_business_products_box_shadow).'px #ddd;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_products_border_radius = get_theme_mod('vw_corporate_business_products_border_radius');
	if($vw_corporate_business_products_border_radius != false){
		$vw_corporate_business_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_corporate_business_custom_css .='border-radius: '.esc_attr($vw_corporate_business_products_border_radius).'px;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_products_btn_padding_top_bottom = get_theme_mod('vw_corporate_business_products_btn_padding_top_bottom');
	if($vw_corporate_business_products_btn_padding_top_bottom != false){
		$vw_corporate_business_custom_css .='.woocommerce a.button{';
			$vw_corporate_business_custom_css .='padding-top: '.esc_attr($vw_corporate_business_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($vw_corporate_business_products_btn_padding_top_bottom).' !important;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_products_btn_padding_left_right = get_theme_mod('vw_corporate_business_products_btn_padding_left_right');
	if($vw_corporate_business_products_btn_padding_left_right != false){
		$vw_corporate_business_custom_css .='.woocommerce a.button{';
			$vw_corporate_business_custom_css .='padding-left: '.esc_attr($vw_corporate_business_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($vw_corporate_business_products_btn_padding_left_right).' !important;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_products_button_border_radius = get_theme_mod('vw_corporate_business_products_button_border_radius');
	if($vw_corporate_business_products_button_border_radius != false){
		$vw_corporate_business_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$vw_corporate_business_custom_css .='border-radius: '.esc_attr($vw_corporate_business_products_button_border_radius).'px;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_woocommerce_sale_position = get_theme_mod( 'vw_corporate_business_woocommerce_sale_position','right');
    if($vw_corporate_business_woocommerce_sale_position == 'left'){
		$vw_corporate_business_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_corporate_business_custom_css .='left: -10px; right: auto;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_woocommerce_sale_position == 'right'){
		$vw_corporate_business_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_corporate_business_custom_css .='left: auto; right: 0;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_woocommerce_sale_font_size = get_theme_mod('vw_corporate_business_woocommerce_sale_font_size');
	if($vw_corporate_business_woocommerce_sale_font_size != false){
		$vw_corporate_business_custom_css .='.woocommerce span.onsale{';
			$vw_corporate_business_custom_css .='font-size: '.esc_attr($vw_corporate_business_woocommerce_sale_font_size).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_woocommerce_sale_border_radius = get_theme_mod('vw_corporate_business_woocommerce_sale_border_radius', 100);
	if($vw_corporate_business_woocommerce_sale_border_radius != false){
		$vw_corporate_business_custom_css .='.woocommerce span.onsale{';
			$vw_corporate_business_custom_css .='border-radius: '.esc_attr($vw_corporate_business_woocommerce_sale_border_radius).'px;';
		$vw_corporate_business_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$vw_corporate_business_logo_padding = get_theme_mod('vw_corporate_business_logo_padding');
	if($vw_corporate_business_logo_padding != false){
		$vw_corporate_business_custom_css .='.logo{';
			$vw_corporate_business_custom_css .='padding: '.esc_attr($vw_corporate_business_logo_padding).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_logo_margin = get_theme_mod('vw_corporate_business_logo_margin');
	if($vw_corporate_business_logo_margin != false){
		$vw_corporate_business_custom_css .='.logo{';
			$vw_corporate_business_custom_css .='margin: '.esc_attr($vw_corporate_business_logo_margin).';';
		$vw_corporate_business_custom_css .='}';
	}

	// Site title Font Size
	$vw_corporate_business_site_title_font_size = get_theme_mod('vw_corporate_business_site_title_font_size');
	if($vw_corporate_business_site_title_font_size != false){
		$vw_corporate_business_custom_css .='.logo h1 a, .logo p.site-title a{';
			$vw_corporate_business_custom_css .='font-size: '.esc_attr($vw_corporate_business_site_title_font_size).';';
		$vw_corporate_business_custom_css .='}';
	}

	// Site tagline Font Size
	$vw_corporate_business_site_tagline_font_size = get_theme_mod('vw_corporate_business_site_tagline_font_size');
	if($vw_corporate_business_site_tagline_font_size != false){
		$vw_corporate_business_custom_css .='p.site-description{';
			$vw_corporate_business_custom_css .='font-size: '.esc_attr($vw_corporate_business_site_tagline_font_size).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_site_title_color = get_theme_mod('vw_corporate_business_site_title_color');
	if($vw_corporate_business_site_title_color != false){
		$vw_corporate_business_custom_css .='p.site-title a{';
			$vw_corporate_business_custom_css .='color: '.esc_attr($vw_corporate_business_site_title_color).'!important;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_site_tagline_color = get_theme_mod('vw_corporate_business_site_tagline_color');
	if($vw_corporate_business_site_tagline_color != false){
		$vw_corporate_business_custom_css .='.logo p.site-description{';
			$vw_corporate_business_custom_css .='color: '.esc_attr($vw_corporate_business_site_tagline_color).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_logo_width = get_theme_mod('vw_corporate_business_logo_width');
	if($vw_corporate_business_logo_width != false){
		$vw_corporate_business_custom_css .='.logo img{';
			$vw_corporate_business_custom_css .='width: '.esc_attr($vw_corporate_business_logo_width).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_logo_height = get_theme_mod('vw_corporate_business_logo_height');
	if($vw_corporate_business_logo_height != false){
		$vw_corporate_business_custom_css .='.logo img{';
			$vw_corporate_business_custom_css .='height: '.esc_attr($vw_corporate_business_logo_height).';';
		$vw_corporate_business_custom_css .='}';
	}

	// Woocommerce img

	$vw_corporate_business_shop_featured_image_border_radius = get_theme_mod('vw_corporate_business_shop_featured_image_border_radius', 0);
	if($vw_corporate_business_shop_featured_image_border_radius != false){
		$vw_corporate_business_custom_css .='.woocommerce ul.products li.product a img{';
			$vw_corporate_business_custom_css .='border-radius: '.esc_attr($vw_corporate_business_shop_featured_image_border_radius).'px;';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_shop_featured_image_box_shadow = get_theme_mod('vw_corporate_business_shop_featured_image_box_shadow');
	if($vw_corporate_business_shop_featured_image_box_shadow != false){
		$vw_corporate_business_custom_css .='.woocommerce ul.products li.product a img{';
				$vw_corporate_business_custom_css .='box-shadow: '.esc_attr($vw_corporate_business_shop_featured_image_box_shadow).'px '.esc_attr($vw_corporate_business_shop_featured_image_box_shadow).'px '.esc_attr($vw_corporate_business_shop_featured_image_box_shadow).'px #ddd;';
		$vw_corporate_business_custom_css .='}';
	}
 

	/*------------------ Preloader Background Color  -------------------*/

	$vw_corporate_business_preloader_bg_color = get_theme_mod('vw_corporate_business_preloader_bg_color');
	if($vw_corporate_business_preloader_bg_color != false){
		$vw_corporate_business_custom_css .='#preloader{';
			$vw_corporate_business_custom_css .='background-color: '.esc_attr($vw_corporate_business_preloader_bg_color).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_preloader_border_color = get_theme_mod('vw_corporate_business_preloader_border_color');
	if($vw_corporate_business_preloader_border_color != false){
		$vw_corporate_business_custom_css .='.loader-line{';
			$vw_corporate_business_custom_css .='border-color: '.esc_attr($vw_corporate_business_preloader_border_color).'!important;';
		$vw_corporate_business_custom_css .='}';
	}
