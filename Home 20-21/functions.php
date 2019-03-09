<?php
/**
 * cantus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cantus
 */

if (!function_exists('cantus_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function cantus_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on cantus, use a find and replace
         * to change 'cantus' to the name of your theme in all the template files.
         */
        load_theme_textdomain('cantus', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'header-menu' => esc_html__('Header menu', 'cantus'),
            'footer-menu' => esc_html__('Footer menu', 'cantus'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('cantus_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'cantus_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cantus_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('cantus_content_width', 640);
}

add_action('after_setup_theme', 'cantus_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cantus_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'cantus'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'cantus'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'cantus_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function cantus_scripts()
{
    wp_enqueue_style('cantus-style', get_stylesheet_uri());

    wp_enqueue_script('cantus-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('cantus-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'cantus_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

// Add jQuery
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
    wp_enqueue_script( 'jquery' );
}

// Add template unique style sheet
function add_cantus_scripts()
{
    //Font-awesome
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');

    //All fonts
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700|Oswald:400,500,700');

    //Slick css
    wp_enqueue_style('slider-css', get_template_directory_uri() . '/assets/slick/slick.css');

    //Theme style
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');

    //Slick scripts
    wp_enqueue_script('slider-js', get_template_directory_uri() . '/assets/slick/slick.min.js', array(), '', true);

    //Theme script
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);

}

add_action('wp_enqueue_scripts', 'add_cantus_scripts');

/**
 * Register a custom post type called "Testimonials".
 */
add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type('members', array(
        'label' => null,
        'labels' => array(
            'name' => 'Members', // general name for post type
            'singular_name' => 'Member', // singular name this type
        ),
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-users',
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => array(),
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ));

    register_post_type('videos', array(
        'label' => null,
        'labels' => array(
            'name' => 'Videos', // general name for post type
            'singular_name' => 'Video', // singular name this type
        ),
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-video',
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => array(),
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ));

    register_post_type('songs', array(
        'label' => null,
        'labels' => array(
            'name' => 'Songs', // general name for post type
            'singular_name' => 'Song', // singular name this type
        ),
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-audio',
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => array(),
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ));
}

//Character limit
function trim_title_chars($count, $after) {
    $title = get_the_title();
    if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
    else $after = '';
    echo $title . $after;
}