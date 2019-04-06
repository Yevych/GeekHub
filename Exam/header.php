<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php get_template_part('template-parts/head'); ?>
</head>

<body <?php body_class("page-body"); ?>>

<header class="page-header">

    <div class="page-header__bar">
        <div class="page-container">
            <div class="contact">
                <div class="contact__email">
                    <?php echo get_theme_mod('contact_email'); ?>
                </div>
                <div class="contact__phone">
                    <?php echo get_theme_mod('contact_phone'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="page-container">
        <div class="page-header__row">
            <div class="page-header__logo">
                <?php the_custom_logo(); ?>
            </div>
            <nav class="nav page-header__nav-list" role="navigation">
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => false)); ?>
            </nav>
            <div class="js-burger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

</header>
