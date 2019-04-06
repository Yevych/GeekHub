<?php get_header(); ?>

<main id="main" class="site-main" role="main">
    <div class="blog-banner">
        <div class="page-container">
            <h1>Blog Post</h1>
        </div>
    </div>

    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'single'); ?>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
