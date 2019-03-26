<?php get_header('blog'); ?>

<main id="main" class="site-main site-main--single" role="main">

    <div class="page-container">
        <div class="articles-wrapper">
            <div class="articles">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'single'); ?>

                <?php endwhile; ?>

            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>