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
  register_post_type('steps',
    array(
      'supports' => array('title', 'editor', 'thumbnail'),
      'labels' => array(
        'name' => __('Steps'),
        'singular_name' => __('Step')
      ),
      'public' => true,
      'menu_position' => 6,
      'menu_icon' => 'dashicons-chart-bar',
      'rewrite' => array('slug' => 'steps'),
      )
  );
}
