<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cantus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header class="page-header">
        <div class="header-nav-list">
            <nav class="nav-list">
                <div class="main-nav-list">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'menu_class' => 'menu-list',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ));
                    ?>

                    <ul class="social-list">
                        <li>
                            <?php echo get_theme_mod('social_1'); ?>
                        </li>
                        <li>
                            <?php echo get_theme_mod('social_2'); ?>
                        </li>
                        <li>
                            <?php echo get_theme_mod('social_3'); ?>
                        </li>
                        <li>
                            <?php if (get_theme_mod('button_display', 'show') == 'show') : ?>
                            <a class="main-btn-light" href="<?php echo get_theme_mod('url_ticket_button'); ?>">
                                <?php echo get_theme_mod('ticket_button'); ?>
                            </a>
                            <?php endif ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="logo">
            <?php the_custom_logo(); ?>
        </div>
        <div class="js-burger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <div id="content" class="site-content">
