<footer class="page-footer" role="contentinfo">

    <div class="page-container">
        <div class="footer-wrapper">
            <div class="footer__logo">
                <a href="/">
                    <img src="<?php echo get_theme_mod('footer_logo'); ?>" alt="">
                </a>
            </div>
            <div class="footer__nav">
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ));
                    ?>
                </nav>
            </div>
            <div class="footer__form">
                <?php echo do_shortcode('[contact-form-7 id="45" title="Contact form 1"]'); ?>
            </div>
        </div>
        <div class="footer__copy">
            <div class="footer__copyright">
                <?php echo get_theme_mod('copyright_text'); ?>
            </div>
            <div class="footer__author">
                <span class="design"><?php echo get_theme_mod('design_text'); ?></span>
                <span><?php echo get_theme_mod('developed_text'); ?></span>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
