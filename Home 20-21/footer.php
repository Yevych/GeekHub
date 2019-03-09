<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cantus
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="nav-list">
            <nav class="footer-nav-list">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ));
                ?>
            </nav>
        </div>
        <p class="copy">
            <?php echo get_theme_mod('copyright_text'); ?>
        </p>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
