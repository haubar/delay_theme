<?php
/*adding sections for header date*/
$wp_customize->add_section( 'supermag-header-date', array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Enable Date', 'supermag' ),
    'panel'          => 'supermag-header-panel'
) );

/*show date*/
$wp_customize->add_setting( 'supermag_theme_options[supermag-show-date]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['supermag-show-date'],
    'sanitize_callback' => 'supermag_sanitize_checkbox',
) );

$wp_customize->add_control( 'supermag_theme_options[supermag-show-date]', array(
    'label'		=> __( 'Show Date', 'supermag' ),
    'section'   => 'supermag-header-date',
    'settings'  => 'supermag_theme_options[supermag-show-date]',
    'type'	  	=> 'checkbox',
    'priority'  => 7,
) );