<?php
if ( ! function_exists( 'birkita_custom_css' ) ) {
    function birkita_custom_css() {
        $birkita_option = birkita_global_var_declare('birkita_option');
        $birkita_custom_css = '';
        if ( isset($birkita_option)):
            $primary_color = $birkita_option['birkita_primary-color'];
            $page_color = $birkita_option['birkita_page-color'];
            $archive_page_color = $birkita_option['birkita_archive-page-color'];
            $bg_switch = $birkita_option['birkita_site-layout'];
            $meta_review = $birkita_option['birkita_meta-review-sw'];
            $meta_author = $birkita_option['birkita_meta-author-sw'];
            $meta_date = $birkita_option['birkita_meta-date-sw'];
            $meta_comments = $birkita_option['birkita_meta-comments-sw'];
            $custom_css = $birkita_option['birkita_css-code'];
            $sb_responsive_sw = $birkita_option['birkita_sb-responsive-sw'];
            $single_feat_img = $birkita_option['birkita_single-featimg'];
            ?>
            <?php
            if ( ($meta_review) == 0) {$birkita_custom_css .= ('.rating-wrap {display: none !important;}');}
            if ( ($meta_author) == 0) {$birkita_custom_css .= ('.post-author, .post-meta .post-author {display: none !important;}');} 
            if ( ($meta_date) == 0) {$birkita_custom_css .= ('.post-meta .date {display: none !important;}'); }
            if ( ($meta_comments) == 0) {$birkita_custom_css .= ('.post-meta .meta-comment {display: none !important;}');}
            if ( ($single_feat_img) == 0) {$birkita_custom_css .= ('.single-page .feature-thumb {display: none !important;}'); }
    
            if ($primary_color != null) {

                
                $birkita_custom_css .= "#birkita_gallery-slider .flex-control-paging li a.flex-active, .flex-control-thumbs .flex-active,
                 h3.ticker-header, .post-cat-main-slider, .module-main-slider .carousel-ctrl .slides li.flex-active-slide,
                .ajax-load-btn span, .s-tags a:hover,.post-page-links > span, .post-page-links a span:hover, #comment-submit,
                .birkita_review-box .birkita_overlay span, #back-top, .contact-form .wpcf7-submit, .searchform-wrap .search-icon,
                .birkita_score-box, #pagination .current, .widget_archive ul li:hover, .widget_categories ul li:hover, span.discount-label,
                .widget_tag_cloud a:hover, .archive-share-but i:hover, .widget .searchform-wrap .search-icon,
                .flex-control-paging li a.flex-active, .woocommerce #respond input#submit, .woocommerce a.button,
                .woocommerce button.button, .woocommerce input.button, .woocommerce nav.woocommerce-pagination ul li a:focus,
                .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,
                .widget_product_search input[type='submit'], .woocommerce #respond input#submit.alt,
                .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,
                .article-content button, .textwidget button, .article-content input[type='button'], .textwidget input[type='button'],
                .article-content input[type='reset'], .textwidget input[type='reset'], .article-content input[type='submit'], .textwidget input[type='submit'],
                .post-cat-main-slider, .s-tags a:hover, .post-page-links > span, .post-page-links a span:hover, #comment-submit, .birkita_score-box,
                #pagination .current, .widget .searchform-wrap .search-icon, .woocommerce ul.products li.product .onsale,
                .birkita_mega-menu .flexslider:hover .flex-next:hover, .birkita_mega-menu .flexslider:hover .flex-prev:hover, .birkita_review-box .birkita_overlay span,
                #birkita_gallery-slider .flex-control-paging li a.flex-active, .wcps-container .owl-nav.middle-fixed .owl-next:hover,
                .wcps-container .owl-nav.middle-fixed .owl-prev:hover, .birkita_mega-menu .flex-direction-nav a,
                #birkita_gallery-slider .flex-control-paging li a:hover, .flex-control-thumbs img:hover
                {background-color: $primary_color;}";
                
                
                $birkita_custom_css .= ".birkita_author-box .author-info .birkita_author-page-contact a:hover, .error-number h1, #birkita_404-wrap .birkita_error-title,
                .page-404-wrap .redirect-home, .article-content p a, .read-more:hover, .header-social li a:hover, #footer-menu ul li:hover,
                .woocommerce .star-rating, .woocommerce ul.products li.product .onsale:before, .woocommerce span.onsale:before, 
                .wcps-items-price del, .wcps-items-price ins, .wcps-items-price span, .woocommerce ul.products li.product .price,
                .widget_recently_viewed_products ins, .widget_recently_viewed_products del, .widget_products ins, .widget_products del,
                .widget_top_rated_products ins, .widget_top_rated_products del, .birkita_author-box .author-info .birkita_author-page-contact a:hover,
                #birkita_404-wrap .birkita_error-title, .page-404-wrap .redirect-home, .article-content p a, .error-number h1,
                .woocommerce div.product p.price, .woocommerce div.product span.price, .widget_top_rated_products .product_list_widget li span.woocommerce-Price-amount,
                .widget_products .product_list_widget li span.woocommerce-Price-amount, .post-author a, h3.post-title:hover, .widget-posts-list .post-title:hover,
                .main-nav #main-menu .menu > li:hover a, .main-nav #main-menu .menu > li.current-menu-item a, .woocommerce-info:before,
                .woocommerce a.added_to_cart:hover, .woocommerce .woocommerce-breadcrumb a:hover,
                .sticky.classic-blog-style .post-title, .sticky.large-blog-style .post-title, .sticky.grid-1-type .post-title,
                .rating-wrap, .footer_photostream_wrapper h3 span,
                .module-main-slider .slider-wrap .slides .post-info .post-cat a,
                .module-main-grid .post-cat a,
                .module-post-two .large-post .post-cat a,
                .module-post-three .large-post .post-cat a,
                .module-post-four .large-post .post-cat a,
                .module-post-one .sub-posts .post-cat a,
                .post-jaro-type .post-cat a,
                .post-three-type .post-cat a,
                .post-four-type .post-cat a,
                .type-in .post-cat a,
                .singletop .post-cat a, .widget-audio ul li .post-cat a, .widget-posts-list ul li .post-cat a,
                .large-blog-style .post-cat a, .classic-blog-style .post-cat a, .module-post-four .post-cat a, .grid-1-type .post-cat a
                {color: #006;}";
                
                $birkita_custom_css .= "::selection
                {background-color: $primary_color;}";
                
                $birkita_custom_css .= "::-moz-selection 
                {background-color: $primary_color);}";
                
                $birkita_custom_css .= "body::-webkit-scrollbar-thumb
                {background-color: $primary_color;}";
                
                $birkita_custom_css .= ".article-content blockquote, .textwidget blockquote, #birkita_gallery-slider .flex-control-paging li a.flex-active,
                .widget_flickr li a:hover img, .post-page-links > span, .post-page-links a span:hover,
                #comment-submit, #pagination .current, .widget_archive ul li:hover, #birkita_gallery-slider .flex-control-paging li a.flex-active,
                .widget_tag_cloud a:hover, .article-content blockquote, .textwidget blockquote, .read-more:hover, .widget_flickr li a:hover img,
                .post-page-links > span, .post-page-links a span:hover, #comment-submit, #pagination .current
                {border-color: $primary_color;}";
                
                $birkita_custom_css .= ".woocommerce-info 
                {border-top-color: $primary_color;}";
        
            }

            if ( $page_color != null) {
                $birkita_custom_css .= ".page-wrap.clear-fix, .widget
                {background-color:  $page_color;}";
            }

            if ( $archive_page_color != null) {
                $birkita_custom_css .= ".birkita_archive-content, div#main-content, .woocommerce .woocommerce-breadcrumb, h1.page-title, .woocommerce ul.products, .woocommerce div.product, .woocommerce .woocommerce-ordering .orderby
                { background-color: $archive_page_color;}";
            }

            if ( $bg_switch == 1) {
                $birkita_custom_css .= "body
                {background: none !important}";
            }

            if ( $sb_responsive_sw == 0) {
                $birkita_custom_css .= "@media screen and (max-width: 1079px) {
                    .sidebar {display: none !important}
                }";
            }

            if ($custom_css != '') 
                $birkita_custom_css .= "$custom_css";
        endif;
        wp_add_inline_style( 'birkita-style', $birkita_custom_css );
    }
    add_action( 'wp_enqueue_scripts', 'birkita_custom_css' );
}