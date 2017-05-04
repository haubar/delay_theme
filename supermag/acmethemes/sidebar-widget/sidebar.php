<?php
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function supermag_widget_init(){

    register_sidebar(array(
        'name' => __('Main Sidebar Area', 'supermag'),
        'id'   => 'supermag-sidebar',
        'description' => __('Displays items on sidebar.', 'supermag'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ));

    register_sidebar(array(
        'name' => __('Home Main Content Area', 'supermag'),
        'id'   => 'supermag-home',
        'description' => __('Displays widgets on home page main content area.', 'supermag'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title"><span>',
        'after_title' => '</span></h2>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer Column One', 'supermag'),
        'id' => 'footer-col-one',
        'description' => __('Displays items on top footer section.', 'supermag'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Column Two', 'supermag'),
        'id' => 'footer-col-two',
        'description' => __('Displays items on top footer section.', 'supermag'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Column Three', 'supermag'),
        'id' => 'footer-col-three',
        'description' => __('Displays items on top footer section.', 'supermag'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ));
}
add_action('widgets_init', 'supermag_widget_init');