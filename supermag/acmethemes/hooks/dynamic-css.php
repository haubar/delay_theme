<?php
/**
 * Dynamic css
 *
 * @since supermag 1.1.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'supermag_dynamic_css' ) ) :

    function supermag_dynamic_css() {

        global $supermag_customizer_all_values;
        /*Color options */
        $supermag_primary_color = $supermag_customizer_all_values['supermag-primary-color'];

        $custom_css = '';

        /*background*/
        $custom_css .= "
            mark,
            .comment-form .form-submit input,
            .read-more,
            .bn-title,
            .home-icon.front_page_on,
            .header-wrapper .menu li:hover > a,
            .header-wrapper .menu > li.current-menu-item a,
            .header-wrapper .menu > li.current-menu-parent a,
            .header-wrapper .menu > li.current_page_parent a,
            .header-wrapper .menu > li.current_page_ancestor a,
            .header-wrapper .menu > li.current-menu-item > a:before,
            .header-wrapper .menu > li.current-menu-parent > a:before,
            .header-wrapper .menu > li.current_page_parent > a:before,
            .header-wrapper .menu > li.current_page_ancestor > a:before,
            .header-wrapper .main-navigation ul ul.sub-menu li:hover > a,
            .header-wrapper .main-navigation ul ul.children li:hover > a,
            .slider-section .cat-links a,
            .featured-desc .below-entry-meta .cat-links a,
            #calendar_wrap #wp-calendar #today,
            #calendar_wrap #wp-calendar #today a,
            .wpcf7-form input.wpcf7-submit:hover,
            .breadcrumb{
                background: {$supermag_primary_color};
            }
        ";
        $custom_css .= "
            a:hover,
            .screen-reader-text:focus,
            .bn-content a:hover,
            .socials a:hover,
            .site-title a,
            .search-block input#menu-search,
            .widget_search input#s,
            .search-block #searchsubmit,
            .widget_search #searchsubmit,
            .footer-sidebar .featured-desc .above-entry-meta a:hover,
            .slider-section .slide-title:hover,
            .besides-slider .post-title a:hover,
            .slider-feature-wrap a:hover,
            .slider-section .bx-controls-direction a,
            .besides-slider .beside-post:hover .beside-caption,
            .besides-slider .beside-post:hover .beside-caption a:hover,
            .featured-desc .above-entry-meta span:hover,
            .posted-on a:hover,
            .cat-links a:hover,
            .comments-link a:hover,
            .edit-link a:hover,
            .tags-links a:hover,
            .byline a:hover,
            .nav-links a:hover,
            #supermag-breadcrumbs a:hover,
            .wpcf7-form input.wpcf7-submit,
             .woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current{
                color: {$supermag_primary_color};
            }";

        /*border*/
        $custom_css .= "
             .search-block input#menu-search,
            .widget_search input#s,
            .tagcloud a{
                border: 1px solid {$supermag_primary_color};
            }";
        $custom_css .= "
            .footer-wrapper .border,
            .nav-links .nav-previous a:hover,
            .nav-links .nav-next a:hover{
                border-top: 1px solid {$supermag_primary_color};
            }";

        $custom_css .= "
             .besides-slider .beside-post{
                border-bottom: 3px solid {$supermag_primary_color};
            }";

        $custom_css .= "
            .widget-title,
            .footer-wrapper,
            .page-header .page-title,
            .single .entry-header .entry-title{
                border-bottom: 1px solid {$supermag_primary_color};
            }";

        $custom_css .= "
            .widget-title:before,
            .page-header .page-title:before,
            .single .entry-header .entry-title:before{
                border-bottom: 7px solid {$supermag_primary_color};
            }";

        $custom_css .= "
           .wpcf7-form input.wpcf7-submit,
            article.post.sticky{
                border: 2px solid {$supermag_primary_color};
            }";

        $custom_css .= "
           .breadcrumb::after {
                border-left: 5px solid {$supermag_primary_color};
            }";

        $custom_css .= "
           .header-wrapper #site-navigation{
                border-bottom: 5px solid {$supermag_primary_color};
            }";

        /*media width*/
        $custom_css .= "
           @media screen and (max-width:992px){
                .slicknav_btn.slicknav_open{
                    border: 1px solid {$supermag_primary_color};
                }
                 .header-wrapper .main-navigation ul ul.sub-menu li:hover > a,
                 .header-wrapper .main-navigation ul ul.children li:hover > a
                 {
                         background: #2d2d2d;
                 }
                .slicknav_btn.slicknav_open:before{
                    background: { $supermag_primary_color };
                    box-shadow: 0 6px 0 0 {$supermag_primary_color}, 0 12px 0 0 {$supermag_primary_color};
                }
                .slicknav_nav li:hover > a,
                .slicknav_nav li.current-menu-ancestor a,
                .slicknav_nav li.current-menu-item  > a,
                .slicknav_nav li.current_page_item a,
                .slicknav_nav li.current_page_item .slicknav_item span,
                .slicknav_nav li .slicknav_item:hover a{
                    color: {$supermag_primary_color};
                }
            }";

        /*custom css*/
        $supermag_custom_css = wp_strip_all_tags ( $supermag_customizer_all_values['supermag-custom-css'] );
        if ( ! empty( $supermag_custom_css ) ) {
            $custom_css .= $supermag_custom_css;
        }
        wp_add_inline_style( 'supermag-style', $custom_css );

    }
endif;
add_action( 'wp_enqueue_scripts', 'supermag_dynamic_css', 99 );