<footer class="page-footer" role="contentinfo">

    <div class="page-container">
        <div class="page-footer__flex">
            <div class="page-footer__newsletter">
                <h2>News letter</h2>
                <p><?php echo get_theme_mod('newsletter_description'); ?></p>
                <div class="page-footer__form">
                    <?php echo do_shortcode('[contact-form-7 id="44" title="Contact form 1"]'); ?>
                </div>
            </div>
            <div class="page-footer__navigation">
                <h2>Navigation</h2>
                <?php wp_nav_menu(array('theme_location' => 'secondary-menu', 'container' => false)); ?>
            </div>
            <div class="page-footer__industry">
                <h2>Industry</h2>
                <?php wp_nav_menu(array('theme_location' => 'industry-menu', 'container' => false)); ?>
            </div>
            <div class="page-footer__follow">
                <h2>Follow us</h2>
                <?php wp_nav_menu(array('theme_location' => 'social-menu', 'container' => false)); ?>
            </div>
        </div>
        <div class="page-footer__inner">
            <p class="copyright"><?php echo get_theme_mod('copyright_text'); ?></p>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
