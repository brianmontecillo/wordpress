<?php

global $controller;

$options = $controller->options;

$styles = $options['themeple'];

if(isset($_COOKIE['themeple_skin'])){

	include(THEMEPLE_BASE.'/template_inc/admin/register_skins.php');

	if(is_array($predefined[$_COOKIE['themeple_skin']]) && count($predefined[$_COOKIE['themeple_skin']]) > 0 ){

		foreach($predefined[$_COOKIE['themeple_skin']] as $el_id => $value){

			$styles[$el_id] = $value;

		}

	}

}
if(isset($_COOKIE['themeple_color_skin'])){

  include(THEMEPLE_BASE.'/template_inc/admin/register_skins.php');

  if(is_array($skin[$_COOKIE['themeple_color_skin']]) && count($skin[$_COOKIE['themeple_color_skin']]) > 0 ){

    foreach($skin[$_COOKIE['themeple_color_skin']] as $el_id => $value){

      $styles[$el_id] = $value;

    }

  }

}

extract($styles);
if(isset($_COOKIE['themeple_pattern']) && $_COOKIE['themeple_pattern'] != '')
    $bg_img = $_COOKIE['themeple_pattern'];
?>



<style type="text/css">
  
	body{background: <?php echo $bg_color ?> 

	<?php if($bg_img != 'none' && $bg_your_img == '' && ((themeple_get_option('overall_layout') == 'boxed' && !isset($_COOKIE['themeple_layout'])) || (isset($_COOKIE['themeple_layout']) && $_COOKIE['themeple_layout'] == 'boxed' ))){ ?>

		url('<?php echo get_template_directory_uri(); ?>/img/backgrounds/<?php echo $bg_img ?>.png') repeat;

	<?php } ?>

  <?php if($bg_your_img != '' && $bg_type == 'repeat'): ?>

    url('<?php echo $bg_your_img ?>') repeat;

  <?php endif; ?>

	}
  .boxed_layout{background: <?php echo $bg_color ?>;}

  
   <?php $custom_css = themeple_get_option('custom_css'); 
   echo $custom_css;
    ?>

	input,button,select,textarea,body,span, aside .widget_twitter li,.ui-slider-tabs-list li a span, aside ul li a, nav .menu li ul.sub-menu li a, .skill_title{font-family: <?php if($font_page == 'standart') echo '"Helvetica Neue", Helvetica, Arial, sans-serif'; else echo $font_page ?>;  }
  input,button,select,textarea,body, aside .widget_twitter li, aside ul li a{ font-size: <?php echo $font_size_page ?>px; color:<?php echo $body_font_color ?>; font-weight:<?php echo $body_font_weight ?> }
	h1,h2,h3,h4,h5,h6, nav .menu > li > a,.ui-slider-tabs-list li a,.page_intro h1, .kwicks .box p.title, .single-post .single_title{font-family: <?php if($font_headings == 'standart') echo '"Helvetica Neue", Helvetica, Arial, sans-serif'; else echo $font_headings ?>}
  


	
  header#header, .header_3 #navigation, .header_7 #navigation{background: <?php echo $header_bg_color ?>;}
	h1{font-size: <?php echo $font_size_1 ?>px}

	h2{font-size: <?php echo $font_size_2 ?>px}

	h3{font-size: <?php echo $font_size_3 ?>px}

	h4{font-size: <?php echo $font_size_4 ?>px}

	h5{font-size: <?php echo $font_size_5 ?>px}

	h6{font-size: <?php echo $font_size_6 ?>px}

  .textbar h1{color: <?php echo $textbar_font_color ?>;}
	
  nav .menu li a{color:<?php echo $nav_font_color ?>;}
  nav .menu li ul.sub-menu li a{color:<?php echo $submenu_font_color ?>}
  nav .menu > li > ul.sub-menu, nav .menu > li > ul.sub-menu ul, .themeple_custom_menu_mega_menu{background:<?php echo $submenu_background_color ?>}
  nav .menu li > ul.sub-menu li{background-color:<?php echo $submenu_background_color ?>}
  nav .menu li ul.sub-menu li:hover>a, nav .menu li ul.sub-menu li li:hover>a{color:<?php echo $submenu_font_color_hover ?>;}
  .sticky_menu{background: <?php echo $header_bg_color ?>;}
  .services_medium .icon_wrapper:hover{border:1px solid <?php echo $bg_color ?> !important;}
  .top_nav, #slider-fullwidth, nav .menu li > ul.sub-menu li, .blog-article, .grid_row, .comment, #slider-fixed.section_active, .single_content .metas dl, .tabbable.style_1.tabs-top .nav-tabs, .tabbable.style_1.tabs-left .nav-tabs li:last-child, .tabbable.style_2.tabs-left, .plain_text .big_title, ul.default_list li, ol.default_list li, .header_1 header#header, .header_2 header#header, .header_3 header#header, .header_4 header#header, .header_5 header#header, .header_6 header#header, .header_7 header#header, .header_3 #navigation, .header_7 #navigation, .header_7 #navigation .menu>li, .header_8 header#header, #woocommerce .product .price, ul.products .product .price, .ordering-container .dropdown ul li a, header#header .cart .content .cart_item, .sticky_menu .cart .content .cart_item,.section-style, .with_text_thumbnail .flex-text-thumbnail li, .side-nav li, .side-nav .children li{border-bottom:1px solid <?php echo $various_dividers_color ?>;}
  .wp-caption, .sticky, .single-post .tags_social a.ctag, .single-post .prev, .single-post .next, #portfolio-filter ul li,#faq-filter ul li, #portfolio-filter .nav a, #faq-filter .nav a, #blog-filter ul li, #blog-filter .nav a, .single_content .prev, .single_content .next, .count_to, .tabbable.style_2.tabs-top .tab-content, .p_pagination .nav-previous a, .p_pagination .nav-next a, .p_pagination .pagi a,  .quantity, .variations .value select, .ordering-container .order li a, .ordering-container .dropdown .current-li, .woocommerce-pagination ul li a, .woocommerce-pagination ul li span.current, .woocommerce .cart-collaterals .shipping_calculator,.woocommerce-page .cart-collaterals .shipping_calculator, .woocommerce .cart-collaterals .cart_totals,.woocommerce-page .cart-collaterals .cart_totals, .woocommerce table.shop_table,.woocommerce-page table.shop_table, .coupon input.input-text, .shipping-calculator-form select, #customer_login .col-1, #customer_login .col-2, .checkout .tab-content .tab-pane, #edit_address .col2-set.addresses .col-1, #edit_address .col2-set.addresses .col-2, .checkout .tab-content .tab-pane, #myaccount .tab-content, .edit_address_form, .woocommerce .widget_layered_nav ul li.chosen a,.woocommerce-page .widget_layered_nav ul li.chosen a , .woocommerce .widget_layered_nav_filters ul li a,.woocommerce-page .widget_layered_nav_filters ul li a , .container #bbp_search, .side-nav  {border:1px solid <?php echo $various_dividers_color ?>;}
  .header_5_body .header_page, .tabbable.style_1 .nav-tabs li, .tabbable.style_1.tabs-left .nav-tabs li, .tabbable.style_1.tabs-left .nav-tabs li:hover, .tabbable.style_1.tabs-left .nav-tabs li.active, .tabbable.style_2 .nav-tabs li, .tabbable.style_2.tabs-left li, .tabbable.style_2.tabs-left .nav-tabs li:hover , .tabbable.style_2.tabs-left .nav-tabs li.active, .tabbable.style_2 .tab-content, .header_3 #navigation .menu>li, .header_7 #navigation .menu>li, .product-category h3, .woocommerce .cart-collaterals .cart_totals table,.woocommerce-page .cart-collaterals .cart_totals table, .woocommerce .cart-collaterals .cart_totals tr td,.woocommerce-page .cart-collaterals .cart_totals tr td,.woocommerce .cart-collaterals .cart_totals tr th,.woocommerce-page .cart-collaterals .cart_totals tr th, .woocommerce table.shop_table td,.woocommerce-page table.shop_table td, .woocommerce table.shop_table tfoot td,.woocommerce-page table.shop_table tfoot td,.woocommerce table.shop_table tfoot th,.woocommerce-page table.shop_table tfoot th, .menu-small ul.menu li, .section-style, .side-nav .children  {border-top:1px solid <?php echo $various_dividers_color ?>;}
  .with_text_thumbnail .flex-text-thumbnail li, .tabbable.style_1 .nav-tabs li, .tabbable.style_1.tabs-left .nav-tabs li, .tabbable.style_2.tabs-left, .tabbable.style_2 .nav-tabs li, .tabbable.style_2.tabs-left li, .tabbable.style_2.tabs-left .tab-content, .header_2 nav .menu>li>a, .header_3 #navigation .menu>li>a, .header_7 #navigation .menu>li>a, .ordering-container .dropdown ul li a, .accordion.style_2{border-left:1px solid <?php echo $various_dividers_color ?>;}
  .with_text_thumbnail .flex-text-thumbnail li:last-child, .tabbable.style_1.tabs-left .nav-tabs, .tabbable.style_1 .nav-tabs li:last-child, .tabbable.style_2.tabs-left, .tabbable.style_2.tabs-left .nav-tabs, .tabbable.style_2 .nav-tabs li:last-child, .quantity .minus, .quantity .qty, ul.products .product .add_to_cart_button, ul.products .product .product_type_variable, ul.products .product .product_type_grouped, .ordering-container .dropdown ul li a, .woocommerce .cart-collaterals .cart_totals th, .woocommerce table.shop_table th,.woocommerce-page table.shop_table th, .woocommerce table.shop_table td,.woocommerce-page table.shop_table td, .accordion.style_2, .widget_recent_content .tabbable.tabs-top.style_1 .nav-tabs li.active{border-right:1px solid <?php echo $various_dividers_color ?>;} 
  .divider__.solid_border{background:<?php echo $various_dividers_color ?>;}
  .container #bbpress-forums ul.bbp-lead-topic, #bbpress-forums ul.bbp-topics, #bbpress-forums ul.bbp-forums, #bbpress-forums ul.bbp-search-results, .bbp-login-form .bbp-username input, .bbp-login-form .bbp-email input, .bbp-login-form .bbp-password input, #bbpress-forums fieldset.bbp-form, #bbpress-forums legend, .code,  .contact_form input,.contact_form select, .contact_form textarea{border:1px solid <?php echo $various_dividers_color ?> !important;}
  #bbpress-forums li.bbp-body ul.forum, #bbpress-forums li.bbp-body ul.topic{border-top:1px solid <?php echo $various_dividers_color ?> !important;}
  .top_nav .little_icon i {color: <?php echo $topnav_icons_color ?>}
  .top_nav .widget{border-left:1px solid <?php echo $topnav_separator_color ?>;}
  .right_search_container .more{background-color:<?php echo $base_color; ?> } 
  .gform_wrapper .gform_footer input.button, .gform_wrapper .gform_footer input[type=submit]{background: <?php echo $base_color;?>;}
  .creative_header h1{color: <?php echo $creative_header_color ?>;}

  .single-post .tags_social .shares li,.accordion.style_3 .accordion-heading,.one-staff .social_widget ul li, #respond input[type="text"],.header_1_body .top_nav .social_widget ul li, .header_3_body .top_nav .social_widget ul li, #respond textarea, aside #s,.header_6_body .top_nav .social_widget ul li,.header_7_body .top_nav .social_widget ul li , .row-dynamic-el .pagination a,.row-fluid .pagination a, .themeple_sc .header .pagination a , .services_medium .icon_wrapper, .header_9_body .top_nav .social_widget ul li, .header_10_body .top_nav .social_widget ul li, header#header .cart .cart_icon, header .right_search, .sticky_menu .right_search,.sticky_menu .cart .cart_icon, .shipping-calculator-form input[type='text'], #customer_login input[type='text'], #customer_login input[type='password'], #customer_login input[type='email'], .checkout input[type='text'],.checkout_coupon input[type='text'],.edit_address_form input[type='text'], #customer_login input[type='password'], #customer_login input[type='email'], #myaccount input[type='password'], aside select, aside input, aside .tagcloud a {border:1px solid <?php echo $base_border_icon_color ?>;}
  .single-post .tags_social .shares li i, .services_medium i, .one-staff .social_widget ul li i, ul.default_list.check li:before, ul.default_list.icon li i, ol.default_list, .header_1_body .top_nav .social_widget ul li i, .header_3_body .top_nav .social_widget ul li i, .header_6_body .top_nav .social_widget ul li i,.header_7_body .top_nav .social_widget ul li i, .header_9_body .top_nav .social_widget ul li i, .header_10_body .top_nav .social_widget ul li i, header#header .cart .cart_icon i, header .right_search i, .sticky_menu .right_search i, .sticky_menu .cart .cart_icon i {color:<?php echo $base_border_icon_color ?>;}
  .accordion.style_1 .accordion-heading{border-left:1px solid <?php echo $base_border_icon_color ?>;border-right:1px solid <?php echo $base_border_icon_color ?>;border-bottom:1px solid <?php echo $base_border_icon_color ?>;}
  .accordion.style_2 .accordion-group{border-left:1px solid <?php echo $base_border_icon_color ?>;border-right:1px solid <?php echo $base_border_icon_color ?>;}
  .accordion.style_2 .accordion-heading, .accordion.style_2 .accordion-inner, .accordion.style_3 .accordion-inner{border-top:1px solid <?php echo $base_border_icon_color ?>;}
  .accordion.style_2 .accordion-group:last-child, .accordion.style_3 .accordion-group:last-child .accordion-heading {border-bottom:1px solid  <?php echo $base_border_icon_color ?>;}
  
  .textbar-container {background: <?php echo $textbar_bg_color ?> }

  .header_1_body .top_nav, .header_3_body .top_nav, .header_6_body .top_nav, .header_7_body .top_nav, .header_9_body .top_nav, .header_10_body .top_nav{ background: <?php echo $topnav_background_color ?>;color: <?php echo $topnav_font_color ?>;}
  .header_1_body .top_nav{border-top:2px solid <?php echo $base_color ?>;}

  .header_1 nav .menu li.current-menu-item > a, .header_1 nav .menu li.current-menu-parent > a, .header_1 nav .menu li.current-menu-ancestor > a{color: <?php echo $base_color ?>;}
  .header_1 nav .menu li.current-menu-item > a:before, .header_1 nav .menu li.current-menu-parent > a:before, .header_1 nav .menu li.current-menu-ancestor > a:before{background:<?php echo $base_color ?>;}
  
  .down_m nav .menu li.current-menu-item.hasSubMenu:after, .down_m nav .menu li.current-menu-parent.hasSubMenu:after{color: <?php echo $base_color ?>;}

  .header_2 nav .menu li.current-menu-item > a, .header_2 nav .menu li.current-menu-parent > a, .header_2 nav .menu li.current-menu-ancestor > a{color: <?php echo $base_color ?>;}
  
  .header_3_body .top_nav{border-top:2px solid <?php echo $base_color ?>;}
  .header_3 #navigation .menu > li.current-menu-item,  .header_3 #navigation .menu > li.current-menu-parent,  .header_3 #navigation .menu > li.current-menu-ancestor{border-top:1px solid <?php echo $base_color ?>;}
  .header_3 nav .menu li.current-menu-item > a, .header_3 nav .menu li.current-menu-parent > a, .header_3 nav .menu li.current-menu-ancestor > a{color: <?php echo $base_color ?>;}

  .header_4_body .top_nav{background: <?php echo $base_color ?>;}
  .header_4 nav .menu > li.current-menu-item > a, .header_4 nav .menu > li.current-menu-parent > a, .header_4 nav .menu > li.current-menu-ancestor > a{border:1px solid <?php echo $base_color ?>;}
  .header_4 nav .menu li.current-menu-item > a, .header_4 nav .menu li.current-menu-parent > a, .header_4 nav .menu li.current-menu-ancestor > a{color: <?php echo $base_color ?>;}

  .header_5 nav .menu > li.current-menu-item > a, .header_5 nav .menu > li.current-menu-parent > a, .header_5 nav .menu > li.current-menu-ancestor > a{border-bottom:2px solid <?php echo $base_color ?>;}
  header#header.header_5{border-top:2px solid <?php echo $base_color ?>;}
  .header_5 nav .menu li.current-menu-item > a, .header_5 nav .menu li.current-menu-parent > a, .header_5 nav .menu li.current-menu-ancestor > a{color: <?php echo $base_color ?>;}
  
  .header_6 nav .menu > li.current-menu-item > a:before, .header_6 nav .menu > li.current-menu-parent > a:before, .header_6 nav .menu > li.current-menu-ancestor > a:before{color:<?php echo $base_color ?>;}
  .header_6 nav .menu li.current-menu-item > a, .header_6 nav .menu li.current-menu-parent > a, .header_6 nav .menu li.current-menu-ancestor > a{color: <?php echo $base_color ?>;}
  
  .header_7 nav .menu li.current-menu-item > a, .header_7 nav .menu li.current-menu-parent > a, .header_7 nav .menu li.current-menu-ancestor > a{color: <?php echo $base_color ?>;} 
  .header_7 #navigation .menu > li.current-menu-item,  .header_7 #navigation .menu > li.current-menu-parent,  .header_7 #navigation .menu > li.current-menu-ancestor{border-top:1px solid <?php echo $base_color ?>;border-bottom:1px solid <?php echo $base_color ?>;}
  .header_7_body .top_nav{border-top:2px solid <?php echo $base_color ?>;}

  header#header.header_8{border-top:2px solid <?php echo $base_color ?>;}
  .header_8 #navigation .menu > li.current-menu-item,  .header_8 #navigation .menu > li.current-menu-parent,  .header_8 #navigation .menu > li.current-menu-ancestor{background:<?php echo $base_color ?>;}

  .header_9 #navigation .menu > li.current-menu-item,  .header_9 #navigation .menu > li.current-menu-parent  .header_9 #navigation .menu > li.current-menu-ancestor{background:<?php echo $base_color ?>;}

  .header_10_body .top_nav{border-top:2px solid <?php echo $base_color ?>;}
  .list_portfolio .portfolio-info a, .blog-article h1 a:hover, .blog-article  a.read_m, aside ul li a:hover,  .with_text_thumbnail .flex-text-thumbnail li.flex-active h5, .services_small .link, .accordion.style_1 .accordion-heading.in_head .accordion-toggle, .accordion.style_2 .accordion-heading.in_head .accordion-toggle,  .accordion.style_3 .accordion-heading.in_head .accordion-toggle, .carousel_blog li.blog-article h4 a:hover, .carousel_blog li.blog-article .readmore, .desc .readmore, .recent_news .news-article a.readmore, .recent_news .news-article.style_1 dd h4 a:hover, .services_medium_box .content_box h2 a:hover, .data_visualization i, .services_medium a.link, .portfolio-item .show_text h4 a:hover, nav .menu li ul.sub-menu li.current-menu-item > a, #woocommerce .product .price span, ul.products .product .price span, .star-rating, ul.products .product .links a:hover, ul.products .product .links a:before:hover, .variations .reset_variations:hover, .product .loading_ef i, .cart .content .cart_item .description .price, .woocommerce table.shop_table .product-subtotal span, .cart_totals .total strong, .edit, .myaccount_user a, .widget_shopping_cart ul li .quantity, .widget_shopping_cart .buttons a, footer.type_skin_color .tweet_list dt i{color:<?php echo $base_color ?>;}
  footer#footer.type_skin_color .inner, footer#footer.type_skin_color #copyright, #portfolio-filter ul li.active,#faq-filter ul li.active, #blog-filter ul li.active, .p_pagination .pagi a.selected, aside .tagcloud a:hover, .single-post .tags_social a.ctag:hover, #respond input[type="submit"], .ui-slider-tabs-list li, .ui-slider-tabs-list, .accordion.style_4 .accordion-heading.in_head, .btn-system, .wpcf7-submit, .skill .prog, .onsale, .product .added_to_cart, .woocommerce-pagination ul li span.current, .cart .cart_icon_active, .cart .checkout, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle, .ui-slider-tabs-list li.selected, .ui-slider-left-arrow, .ui-slider-right-arrow, .ui-slider-left-arrow.edge:hover, .ui-slider-right-arrow.edge:hover{background:<?php echo $base_color ?>;}
  #portfolio-filter ul li:hover,#faq-filter ul li:hover, #blog-filter ul li:hover, .p_pagination .nav-previous a:hover, .p_pagination .nav-next a:hover, .p_pagination .pagi a:hover, aside .tagcloud a:hover, .single-post .tags_social a.ctag:hover, .single-post .prev:hover, .single-post .next:hover,.single_content .prev:hover, .single_content .next:hover, .woocommerce-pagination ul li a:hover, .cart .cart_icon_active{border:1px solid <?php echo $base_color ?>;}
  .cart_icon_active, .pagi ul li.selected a{border:1px solid <?php echo $base_color ?> !important;}
  .flex-text-thumbnail li.flex-active{border-top:2px solid <?php echo $base_color ?> !important;}
  .accordion.style_1 .accordion-heading.in_head, .accordion.style_2 .accordion-heading.in_head, .tabbable.style_1 .nav-tabs li.active,  .tabbable.style_2 .nav-tabs li.active, .tabbable.style_3 .nav-tabs li.active, .cart .content{border-top:1px solid <?php echo $base_color ?>;}
  .accordion.style_4 .accordion-heading.in_head{border-bottom:1px solid <?php echo $base_color ?>;}
  .tabbable.style_1.tabs-left .nav-tabs li.active, .tabbable.style_2.tabs-left .nav-tabs li.active, .tabbable.style_3.tabs-left .nav-tabs li.active, .tabbable.style_3.tabs-left .nav-tabs li.active:first-child{border-left:1px solid <?php echo $base_color ?>;}
  <?php
    $base = HexToRGB($base_color); 
    $second = HexToRGB($second_color)
  ?>
  .chart_skill i.base{background: -webkit-linear-gradient(<?php echo $second_color ?>, <?php echo $base_color ?>);}
  .tpl2 .bg,  .blog_masonry .blog-article .bar_info, .services_medium_box .icon_box, .services_medium .icon_wrapper .overlay, .services_list dt, .swiper-slide.woocommerce-slide .overlay, .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content,.woocommerce-page .widget_price_filter .price_slider_wrapper .ui-widget-content{
    background: rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.95) ; /* Old browsers */
    background: -moz-linear-gradient(top,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.95) 0%, rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.95)  100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.95)), color-stop(100%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.95))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.95) 0%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.95) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.95) 0%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.95) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.95) 0%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.95) 100%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.95) 0%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.95) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.95)', endColorstr='rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.95)',GradientType=0 ); /* IE6-9 */
  }

  .gradient{ background: rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.95) ; /* Old browsers */
    background: -moz-linear-gradient(top,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90) 0%, rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.90)  100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90)), color-stop(100%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.95))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90) 0%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.90) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90) 0%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.90) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90) 0%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.90) 100%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90) 0%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.90) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90)', endColorstr='rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.90)',GradientType=0 ); /* IE6-9 */}

  .btn-system.gradient:hover{ 
  	background: -moz-linear-gradient(top,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90) 0%, rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.90)  100%) !important; /* FF3.6+ */
    background: -webkit-gradient(linear, top left, bottom left, color-stop(0%,rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90)), color-stop(100%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.90))) !important; /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(bottom,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90) 0%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.90) 100%) !important; /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(bottom,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90) 0%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.90) 100%) !important; /* Opera 11.10+ */
    background: -ms-linear-gradient(bottom,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90) 0%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.90) 100%) !important; /* IE10+ */
    background: linear-gradient(to top,  rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90) 0%,rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.90) 100%) !important; /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgba(<?php echo $second['r'] ?>, <?php echo $second['g'] ?>, <?php echo $second['b'] ?>, 0.90)', endColorstr='rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.90)',GradientType=0 ) !important; /* IE6-9 */}
  .scrollup:hover{background-color: rgba(<?php echo $base['r'] ?>,<?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 1) !important;}
  textarea:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus, .uneditable-input:focus{border-color:<?php echo $base_color; ?> !important;}
  .themeple_sc .themeple_blockquote{border-left:4px solid <?php echo $base_color ?>;}
  .bbp-pagination-links .page-numbers.current{background:<?php echo $base_color; ?> !important;}
  .bbp-pagination-links a:hover{border:1px solid <?php echo $base_color; ?> !important;}
  #portfolio-preview-items .portfolio-item.v3 .link:hover, .woocommerce-slide .overlay .link:hover{background:<?php echo $second_color ?>;}
  .price_1_col.level-max .header .title{background:<?php echo $base_color ?> !important;}
  .price_1_col.level-max .header .price, .price_1_col.level-max .header .period{background:<?php echo $second_color ?> !important;}
  .portfolio-item.v1 .link:hover, .carousel_blog li.blog-article .tpl2 a.link:hover, .recent_news .news-article .tpl2 a.link:hover, #blog .blog-article .tpl2 a.link:hover{background-color:<?php echo $second_color ?> !important;}
  .price_1_col.level-max .header .period{color:<?php echo $base_color ?> !important;}
  .bbp-forum-title{color:<?php echo $base_color; ?>}
  mark{background-color:<?php echo $base_color ?>;}
  #bbp_search_submit{background-color:<?php echo $base_color; ?>}
  .bbp-topic-permalink, .menu-small ul li.current-menu-item a{color:<?php echo $base_color ?>  !important;}
  nav .menu li ul.sub-menu, nav .themeple_custom_menu_mega_menu{border-top:1px solid <?php echo $base_color ?>;}
  #bbpress-forums .button.submit, aside .bbp-login-form .button.submit{background-color:<?php echo $base_color ?> ;}
  .container .bbp-body .sticky .bbp-topic-permalink:before, .container .bbp-body .super-sticky .bbp-topic-permalink:before {color:<?php echo $base_color; ?>}
  aside .widget_recent_content ul li.active a{color:<?php echo $base_color; ?> !important;}

  .accordion.style_1 .accordion-heading.in_head .accordion-toggle, .accordion.style_2 .accordion-heading.in_head .accordion-toggle {
    background:url('<?php echo $toggle_1_open ?>') no-repeat 10px center;
  }
  .accordion.style_3 .accordion-heading.in_head .accordion-toggle {
    background:url('<?php echo $toggle_3_open ?>') no-repeat right center;
  }
  .side-nav .current_page_parent > a, .side-nav .current_page_item > a{color:<?php echo $base_color ?>;}
  .recent_portfolio .desc .readmore, .latest_blog .desc .readmore, .carousel_blog li.blog-article .readmore, .services_medium a.link, .services_small .link, .recent_news .news-article a.readmore {background:url('<?php echo $small_right_c ?>') no-repeat center right;}
  .services_list ul li{background: url('<?php echo $small_right_c ?>') no-repeat left center;}
  .list_portfolio .portfolio-info a, .blog-article a.read_m{background:url('<?php echo $small_right_c ?>') right center no-repeat;}
  .skill{background:<?php echo $skill_bar_color ?>;}
  .row-dynamic-el .header h6,.themeple_sc .header h6 {color: <?php echo $el_header_font_color ?>;}
  .row-dynamic-el .header:before,.themeple_sc .header:before{background: <?php echo $el_header_bb_color ?>;}
  .page_intro h1{color: <?php echo $page_intro_font_color ?>;}
  .services_medium_box .content_box, .side-nav .page_item_has_children .children, .side-nav .children li, .tabbable.style_3 .tab-content{background:<?php echo $services_medium_bg_color ?>}
  .circle_testimonial p , .code{background:<?php echo $testimonial_bg_color ?>; ?>}
  .single_testimonial dd{background:<?php echo $single_testimonial_bg_color ?>;}
  aside h6.widget-title{color:<?php echo $sidebar_widget_title_color ?>}
  .colored_second, .with_white_background{color: <?php echo $base_color ?> !important;}
  .with_colored_background{background:<?php echo $base_color ?> !important;}
   .services_medium.new i{color:<?php echo $base_color ?>;}
  <?php if($footer_skin == 'change_option'): ?>
  
    footer#footer .inner{background:<?php echo $footer_bg_color ?>;}
    footer#footer #copyright{background:<?php echo $footer_copyright_bg ?>;}
  
  <?php endif; ?>

   <?php $new_color = colourBrightness($base_color, 0.6);
        $new = HexToRGB($new_color);

        $new_color2 = colourBrightness($base_color, 0.03); ?>

</style>


 		<?php $font = themeple_get_option('font_page');  ?>

        <?php $font_head = themeple_get_option('font_headings');  ?>



        <?php if($font != 'standart'): ?>

        <link href='http://fonts.googleapis.com/css?family=<?php echo str_replace(" ", "+", $font) ?>:100,400,300,500,600,300italic' rel='stylesheet' type='text/css' />

        <?php endif; ?>

        <?php if($font_head != 'font_headings'): ?>

        <link href='http://fonts.googleapis.com/css?family=<?php echo str_replace(" ", "+", $font_head) ?>:100,400,300,500,600,700,300italic' rel='stylesheet' type='text/css' />

 		<?php endif; ?>

 		<?php if($font == 'standart' || $font_head == 'standart'): ?>
        <style type="text/css">
       
        @font-face {
            font-family: 'Helvetica Neue';
            src: url('<?php echo get_stylesheet_directory_uri() ?>/css/Helvetica_Neue.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;

        }

        @font-face {
            font-family: 'Helvetica Neue';
            src: url('<?php echo get_stylesheet_directory_uri() ?>/css/Helvetica_Neue_Bold.ttf') format('truetype');
            font-weight: 600;
            font-style: normal;

        }

        </style>


        <?php endif; ?> 
	