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
function theme_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    //Add section footer section
    $wp_customize->add_section('footer_section', array(
        'title' => __('Footer section', 'dwellings'),
        'priority' => 250,
    ));
    //Value logo
    $wp_customize->add_setting('footer_logo', array(
        'default' => __('', 'dwellings'),
        'transport' => 'refresh',
    ));
    //Label logo
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo',
            array(
                'label' => __('Footer logo', 'dwellings'),
                'section' => 'footer_section',
                'settings' => 'footer_logo',
            )
        )
    );

    //Value copyright
    $wp_customize->add_setting('copyright_text', array(
        'default' => __('', 'dwellings'),
        'transport' => 'refresh',
    ));
    //Label copyright
    $wp_customize->add_control('copyright_text', array(
        'label' => __('Copyright text', 'dwellings'),
        'section' => 'footer_section',
        'settings' => 'copyright_text',
        'type' => 'text',
    ));

    //Value design
    $wp_customize->add_setting('design_text', array(
        'default' => __('', 'dwellings'),
        'transport' => 'refresh',
    ));
    //Label design
    $wp_customize->add_control('design_text', array(
        'label' => __('Design text', 'dwellings'),
        'section' => 'footer_section',
        'settings' => 'design_text',
        'type' => 'text',
    ));

    //Value developed
    $wp_customize->add_setting('developed_text', array(
        'default' => __('', 'dwellings'),
        'transport' => 'refresh',
    ));
    //Label developed
    $wp_customize->add_control('developed_text', array(
        'label' => __('Developed text', 'dwellings'),
        'section' => 'footer_section',
        'settings' => 'developed_text',
        'type' => 'text',
    ));
}

add_action('customize_register', 'theme_customize_register');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function theme_customize_preview_js()
{
    wp_enqueue_script('theme_customizer', get_template_directory_uri() . '/assets/scripts/customizer.js', array('customize-preview'), false, true);
}

add_action('customize_preview_init', 'theme_customize_preview_js');
