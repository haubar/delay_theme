<?php
/*adding sections for Single post options*/
$wp_customize->add_section( 'supermag-single-post', array(
    'priority'       => 200,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Single Post Options', 'supermag' )
) );

/*blog layout*/
$wp_customize->add_setting( 'supermag_theme_options[supermag-single-post-layout]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['supermag-single-post-layout'],
    'sanitize_callback' => 'supermag_sanitize_select'
) );
$choices = supermag_blog_layout();
$wp_customize->add_control( 'supermag_theme_options[supermag-single-post-layout]', array(
    'choices'  	=> $choices,
    'label'		=> __( 'Single Post Layout', 'supermag' ),
    'description'=> __( 'Image display options', 'supermag' ),
    'section'   => 'supermag-single-post',
    'settings'  => 'supermag_theme_options[supermag-single-post-layout]',
    'type'	  	=> 'select',
    'priority'  => 10
) );

/*single image layout*/
$wp_customize->add_setting( 'supermag_theme_options[supermag-single-image-layout]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['supermag-single-image-layout'],
    'sanitize_callback' => 'supermag_sanitize_select'
) );
$choices = supermag_get_image_sizes_options();
$wp_customize->add_control( 'supermag_theme_options[supermag-single-image-layout]', array(
    'choices'  	=> $choices,
    'label'		=> __( 'Image Layout Options', 'supermag' ),
    'section'   => 'supermag-single-post',
    'settings'  => 'supermag_theme_options[supermag-single-image-layout]',
    'type'	  	=> 'select',
    'priority'  => 20
) );


/*show rlated posts*/
$wp_customize->add_setting( 'supermag_theme_options[supermag-show-related]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['supermag-show-related'],
    'sanitize_callback' => 'supermag_sanitize_checkbox'
) );
$wp_customize->add_control( 'supermag_theme_options[supermag-show-related]', array(
    'label'		=> __( 'Show Related Posts In Single Post', 'supermag' ),
    'section'   => 'supermag-single-post',
    'settings'  => 'supermag_theme_options[supermag-show-related]',
    'type'	  	=> 'checkbox',
    'priority'  => 30
) );
