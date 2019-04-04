<?php
/**
* Create custom post types.
*/
add_action('init', 'create_posttype');

function create_posttype()
{
  register_post_type('testimonials',
    array(
      'supports' => array('title', 'editor', 'thumbnail'),
      'labels' => array(
        'name' => __('Testimonials'),
        'singular_name' => __('Testimonial')
      ),
      'public' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-format-quote',
      'rewrite' => array('slug' => 'testimonials'),
      )
  );
    register_post_type('Donors',
        array(
            'supports' => array('title'),
            'labels' => array(
                'name' => __('Donors'),
                'singular_name' => __('Donor')
            ),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-admin-users',
            'rewrite' => array('slug' => 'donors'),
        )
    );
}
