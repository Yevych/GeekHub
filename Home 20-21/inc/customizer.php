<?php
/**
 * cantus Theme Customizer
 *
 * @package cantus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cantus_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'cantus_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'cantus_customize_partial_blogdescription',
        ));
    }

        //Add section for social information
        $wp_customize->add_section('social_information', array(
            'title' => __('Social information', 'cantus'),
            'priority' => 200,
        ));

        //Add social icon
        $wp_customize->add_setting('social_1', array(
            'default' => __('', 'cantus'),
            'transport' => 'refresh',
        ));
        $wp_customize->add_control('social_1', array(
            'label' => __('Social 1', 'cantus'),
            'section' => 'social_information',
            'settings' => 'social_1',
            'type' => 'textarea',
        ));

        $wp_customize->add_setting('social_2', array(
            'default' => __('', 'cantus'),
            'transport' => 'refresh',
        ));
        $wp_customize->add_control('social_2', array(
            'label' => __('Social 2', 'cantus'),
            'section' => 'social_information',
            'settings' => 'social_2',
            'type' => 'textarea',
        ));

        $wp_customize->add_setting('social_3', array(
            'default' => __('', 'cantus'),
            'transport' => 'refresh',
        ));
        $wp_customize->add_control('social_3', array(
            'label' => __('Social 3', 'cantus'),
            'section' => 'social_information',
            'settings' => 'social_3',
            'type' => 'textarea',
        ));

        //Add settings for Button - "purchase ticket"
        $wp_customize->add_setting('ticket_button', array(
            'default' => __('', 'cantus'),
            'transport' => 'refresh',
        ));
        $wp_customize->add_control('ticket_button', array(
            'label' => __('Title for button', 'cantus'),
            'section' => 'social_information',
            'settings' => 'ticket_button',
            'type' => 'text',
        ));
        $wp_customize->add_setting('url_ticket_button', array(
            'default' => __('', 'cantus'),
            'transport' => 'refresh',
        ));
        $wp_customize->add_control('url_ticket_button', array(
            'label' => __('Url for button', 'cantus'),
            'section' => 'social_information',
            'settings' => 'url_ticket_button',
            'type' => 'url',
        ));

        //Display or disabled btn
        $wp_customize->add_setting('button_display', array(
            'default' => true,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('button_display', array(
            'label' => 'Button Display',
            'section' => 'social_information',
            'settings' => 'button_display',
            'type' => 'radio',
            'choices' => array(
                'show' => 'Show Button',
                'hide' => 'Hide Button',
            ),
        ));

        //Add section for copyright information
        $wp_customize->add_section('copyright_information', array(
            'title' => __('Footer information', 'cantus'),
            'priority' => 250,
        ));

        //Value copyright
        $wp_customize->add_setting('copyright_text', array(
            'default' => __('', 'cantus'),
            'transport' => 'refresh',
        ));

        //Value copyright
        $wp_customize->add_setting('copyright_text', array(
            'default' => __('', 'cantus'),
            'transport' => 'refresh',
        ));

        //Label copyright
        $wp_customize->add_control('copyright_text', array(
            'label' => __('Copyright text', 'cantus'),
            'section' => 'copyright_information',
            'settings' => 'copyright_text',
            'type' => 'textarea',
        ));
}

add_action('customize_register', 'cantus_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cantus_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cantus_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cantus_customize_preview_js()
{
    wp_enqueue_script('cantus-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'cantus_customize_preview_js');
