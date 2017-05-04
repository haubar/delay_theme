<?php
/**
 * Reset options
 * Its outside options panel
 *
 * @param  array $reset_options
 * @return void
 *
 * @since supermag 1.1.0
 */
if ( ! function_exists( 'supermag_reset_db_options' ) ) :
    function supermag_reset_db_options( $reset_options ) {
        set_theme_mod( 'supermag_theme_options', $reset_options );
    }
endif;

function supermag_reset_setting_callback( $input, $setting ){
    // Ensure input is a slug.
    $input = sanitize_text_field( $input );
    if( '0' == $input ){
        return '0';
    }
    $supermag_default_theme_options = supermag_get_default_theme_options();
    $supermag_get_theme_options = get_theme_mod( 'supermag_theme_options');

    switch ( $input ) {
        case "reset-color-options":
            $supermag_get_theme_options['supermag-primary-color'] = $supermag_default_theme_options['supermag-primary-color'];
            supermag_reset_db_options($supermag_get_theme_options);
            break;

        case "reset-all":
            supermag_reset_db_options($supermag_default_theme_options);
            break;

        default:
            break;
    }
}
/*adding sections for Reset Options*/
$wp_customize->add_section( 'supermag-reset-options', array(
    'priority'       => 220,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Reset Options', 'supermag' )
) );

/*Reset Options*/
$wp_customize->add_setting( 'supermag_theme_options[supermag-reset-options]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['supermag-reset-options'],
    'sanitize_callback' => 'supermag_reset_setting_callback',
    'transport'			=> 'postMessage'
) );

$choices = supermag_reset_options();
$wp_customize->add_control( 'supermag_theme_options[supermag-reset-options]', array(
    'choices'  	=> $choices,
    'label'		=> __( 'Reset Options', 'supermag' ),
    'description'=> __( 'Caution: Reset theme settings according to the given options. Refresh the page after saving to view the effects. ', 'supermag' ),
    'section'   => 'supermag-reset-options',
    'settings'  => 'supermag_theme_options[supermag-reset-options]',
    'type'	  	=> 'select'
) );