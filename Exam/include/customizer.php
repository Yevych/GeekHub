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

    //Add section header contact section
    $wp_customize->add_section('header_contact_section', array(
        'title' => __('Header contact section', 'theme'),
        'priority' => 250,
    ));

    //Value email
    $wp_customize->add_setting('contact_email', array(
        'default' => __('', 'theme'),
        'transport' => 'refresh',
    ));
    //Label email
    $wp_customize->add_control('contact_email', array(
        'label' => __('Contact email', 'theme'),
        'section' => 'header_contact_section',
        'settings' => 'contact_email',
        'type' => 'textarea',
    ));

    //Value phone
    $wp_customize->add_setting('contact_phone', array(
        'default' => __('', 'theme'),
        'transport' => 'refresh',
    ));
    //Label phone
    $wp_customize->add_control('contact_phone', array(
        'label' => __('Contact phone', 'theme'),
        'section' => 'header_contact_section',
        'settings' => 'contact_phone',
        'type' => 'textarea',
    ));

    //Add section footer section
    $wp_customize->add_section('footer_section', array(
        'title' => __('Footer section', 'theme'),
        'priority' => 250,
    ));

    //Value newsletter description
    $wp_customize->add_setting('newsletter_description', array(
        'default' => __('', 'theme'),
        'transport' => 'refresh',
    ));
    //Label newsletter description
    $wp_customize->add_control('newsletter_description', array(
        'label' => __('Newsletter description', 'theme'),
        'section' => 'footer_section',
        'settings' => 'newsletter_description',
        'type' => 'textarea',
    ));

    //Value copy
    $wp_customize->add_setting('copyright_text', array(
        'default' => __('', 'theme'),
        'transport' => 'refresh',
    ));
    //Label copy
    $wp_customize->add_control('copyright_text', array(
        'label' => __('Copyright text', 'theme'),
        'section' => 'footer_section',
        'settings' => 'copyright_text',
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
