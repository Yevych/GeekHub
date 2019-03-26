<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php get_template_part('template-parts/head'); ?>
</head>

<body <?php body_class("page-body"); ?>>

<header class="page-header page-header--blog">

    <div class="page-container">
        <div class="header-flex">
            <div class="header__logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="header__nav">
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ));
                    ?>
                </nav>
            </div>
            <div class="js-burger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

</header>
