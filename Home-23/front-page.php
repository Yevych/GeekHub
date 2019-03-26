<?php
/**
 * Template Name: Home Template
 */
get_header();
?>

    <main id="main" class="site-main" role="main">

        <div class="banner" style="background: url('<?php echo get_field('banner_image'); ?>') no-repeat center/cover">
            <div class="page-container">
                <div class="banner__content">
                    <h1 class="banner__title">
                        <?php echo get_field('banner_title'); ?>
                    </h1>
                    <h2 class="banner__subtitle">
                        <?php echo get_field('banner_subtitle'); ?>
                    </h2>
                    <a href="<?php echo get_field('button_link'); ?>" class="more__btn btn">
                        <?php echo get_field('button_title'); ?>
                    </a>
                </div>
            </div>
        </div>

        <section class="process">
            <div class="page-container">
                <h2 class="section-header">
                    <?php echo get_field('process_title'); ?>
                </h2>
                <div class="row">
                    <?php if (have_rows('process')):

                        while (have_rows('process')): the_row();

                            // col 1
                            $icon_1 = get_sub_field('icon_1');
                            $title_1 = get_sub_field('title_1');
                            $description_1 = get_sub_field('description_1');

                            //col 2
                            $icon_2 = get_sub_field('icon_2');
                            $title_2 = get_sub_field('title_2');
                            $description_2 = get_sub_field('description_2');

                            //col 3
                            $icon_3 = get_sub_field('icon_3');
                            $title_3 = get_sub_field('title_3');
                            $description_3 = get_sub_field('description_3');

                            ?>
                            <div class="process__item">
                                <div class="process__icon">
                                    <img src="<?php echo $icon_1; ?>" alt="">
                                </div>
                                <h3 class="process__title">
                                    <?php echo $title_1; ?>
                                </h3>
                                <p class="process__description">
                                    <?php echo $description_1; ?>
                                </p>
                            </div>
                            <div class="process__item">
                                <div class="process__icon">
                                    <img src="<?php echo $icon_2; ?>" alt="">
                                </div>
                                <h3 class="process__title">
                                    <?php echo $title_2; ?>
                                </h3>
                                <p class="process__description">
                                    <?php echo $description_2; ?>
                                </p>
                            </div>
                            <div class="process__item">
                                <div class="process__icon">
                                    <img src="<?php echo $icon_3; ?>" alt="">
                                </div>
                                <h3 class="process__title">
                                    <?php echo $title_3; ?>
                                </h3>
                                <p class="process__description">
                                    <?php echo $description_3; ?>
                                </p>
                            </div>
                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="column">
                <div class="column__inner">
                    <h2 class="section-header section-header--about">
                        <?php echo get_field('about_title'); ?>
                    </h2>
                    <div class="about__description">
                        <?php echo get_field('about_description'); ?>
                    </div>
                    <a class="about__btn" href="<?php echo get_field('about_button_link'); ?>">
                        <?php echo get_field('about_button_title'); ?>
                    </a>
                </div>
            </div>
            <div class="column"
                 style="background: url('<?php echo get_field('about_background_image'); ?>') no-repeat center/cover"></div>
        </section>

        <section class="candidate">
            <div class="page-container">
                <h2 class="section-header">
                    <?php echo get_field('candidate_title'); ?>
                </h2>
                <?php

                $posts = get_field('candidate_items');

                if ($posts): ?>
                    <div class="row">
                        <?php foreach ($posts as $article): // variable must NOT be called $post (IMPORTANT) ?>
                            <div class="candidate__item">
                                <div class="candidate__post">
                                    <div class="candidate__image">
                                        <?php echo get_the_post_thumbnail($article->ID); ?>
                                        <div class="candidate__image--overlay">
                                            <a class="explore__btn" href="<?php echo get_permalink($article->ID); ?>">
                                                Explore
                                            </a>
                                        </div>
                                    </div>
                                    <div class="candidate__content">
                                        <div class="candidate__title">
                                            <?php echo get_the_title($article->ID); ?>
                                        </div>
                                        <div class="candidate__description">
                                            <?php echo get_field('post_excerpt', $article->ID); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                <?php endif; ?>
                <div class="candidate__more">
                    <a class="see__btn" href="<?php echo get_field('candidate_button_link'); ?>">
                        <?php echo get_field('candidate_button_title'); ?>
                    </a>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="page-container">
                <h2 class="section-header">
                    <?php echo get_field('testimonials_title'); ?>
                </h2>
                <div class="row">
                    <?php get_template_part('template-parts/content', 'testimonials'); ?>
                </div>
                <div class="testimonials__more">
                    <a class="see__btn" href="<?php echo get_field('testimonials_button_link'); ?>">
                        <?php echo get_field('testimonials_button_title'); ?>
                    </a>
                </div>
            </div>
        </section>

        <section class="build"
                 style="background: url('<?php echo get_field('build_background'); ?>') no-repeat center/cover">
            <div class="page-container">
                <h2 class="build__title">
                    <?php echo get_field('build_title'); ?>
                </h2>
                <p class="build__description">
                    <?php echo get_field('build_description'); ?>
                </p>
                <a href="<?php echo get_field('button_link'); ?>" class="more__btn btn">
                    <?php echo get_field('button_title'); ?>
                </a>
            </div>
        </section>

    </main>

<?php get_footer(); ?>