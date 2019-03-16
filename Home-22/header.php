<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>

	<header class="page-header">
        <div class="page-container">
            <div class="js-burger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="social-list">

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ));
                ?>

            </div>
        </div>
    </header>
