<?php
/**
 * theme Theme Customizer
 *
 * @package theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    //Add section for footer information
    $wp_customize->add_section('copyright_information', array(
        'title' => __('Footer information', 'square'),
        'priority' => 250,
    ));
    //Value copyright
    $wp_customize->add_setting('footer_text', array(
        'default' => __('', 'square'),
        'transport' => 'refresh',
    ));
    //Label copyright
    $wp_customize->add_control('footer_text', array(
        'label' => __('Copyright text', 'square'),
        'section' => 'copyright_information',
        'settings' => 'footer_text',
        'type' => 'textarea',
    ));
    //Value copyright
    $wp_customize->add_setting('copyright_text', array(
        'default' => __('', 'square'),
        'transport' => 'refresh',
    ));
    //Label copyright
    $wp_customize->add_control('copyright_text', array(
        'label' => __('Copyright text', 'square'),
        'section' => 'copyright_information',
        'settings' => 'copyright_text',
        'type' => 'text',
    ));
}
add_action( 'customize_register', 'theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function theme_customize_preview_js() {
	wp_enqueue_script( 'theme_customizer', get_template_directory_uri() . '/assets/scripts/customizer.js', array( 'customize-preview' ), false, true );
}
add_action( 'customize_preview_init', 'theme_customize_preview_js' );
