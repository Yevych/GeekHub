<?php
/**
 * Template Name: Home Template
 */
get_header();
?>

    <main id="main" class="site-main" role="main">

        <div class="banner">
            <img src="<?php echo get_field('backgound_slide_1'); ?>" alt="">
            <div class="banner__block">

            </div>
        </div>
        <section class="about">
            <div class="page-container">
                <div class="about__flex">
                    <div class="about__content">
                        <h2 class="section-header">
                            <span><?php echo get_field('about_subtitle'); ?></span>
                            <?php echo get_field('about_title'); ?>
                        </h2>
                        <div class="about__description">
                            <?php echo get_field('about_description'); ?>
                        </div>
                    </div>
                    <div class="about__img">
                        <img src="<?php echo get_field('about_image'); ?>" alt="">
                        <div class="about-us">
                            <div class="years-block">
                                <span class="year-content"> <strong>25</strong><span>year of excellence</span> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="steps">
            <div class="page-container">
                <h2 class="section-header section-header--steps">
                    <span><?php echo get_field('steps_subtitle'); ?></span>
                    <?php echo get_field('steps_title'); ?>
                </h2>
                <div class="steps__row">
                    <div class="steps__item">
                        <ol>
                            <?php
                            //The query
                            $args = array(
                                'post_type' => 'steps',
                                'order' => 'DESC',
                            );
                            $steps = new WP_Query($args); ?>

                            <?php if ($steps->have_posts()): ?>

                                <!-- The loop -->
                                <?php while ($steps->have_posts()) : $steps->the_post(); ?>

                                    <li>
                                        <div class="steps__icon">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="steps__title">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="steps__description">
                                            <?php the_content(); ?>
                                        </div>
                                    </li>

                                <?php endwhile; ?>
                                <!-- End of the loop -->

                                <?php wp_reset_query(); ?>
                            <?php endif; ?>

                        </ol>
                    </div>


                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="page-container">
                <h2 class="section-header section-header--testimonials">
                    <span><?php echo get_field('steps_subtitle'); ?></span>
                    <?php echo get_field('steps_title'); ?>
                </h2>
                <?php
                //The query
                $args = array(
                    'post_type' => 'testimonials',
                    'order' => 'DESC',
                );
                $testimonials = new WP_Query($args); ?>

                <?php if ($testimonials->have_posts()): ?>

                    <!-- The loop -->
                    <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>

                        <blockquote>
                            <?php the_content(); ?>
                        </blockquote>
                        <div class="author__wrapper">
                            <div class="author__logo">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="author__info">
                                <span class="author__name"><?php the_title(); ?></span>
                                <span class="author__position"><?php echo get_field('position'); ?></span>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <!-- End of the loop -->

                    <?php wp_reset_query(); ?>
                <?php endif; ?>


            </div>
        </section>

    </main>

<?php get_footer(); ?>