<?php
/**
 * Template Name: Home
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="main-slider">
                <ul class="slide">
                    <li class="slide__first"
                        style="background: url('<?php echo get_field('banner_image'); ?>') no-repeat center/cover">
                        <div class="slide__content">
                            <h1>
                                <?php echo get_field('banner_title'); ?>
                            </h1>
                            <a class="main-btn-dark" href="<?php echo get_field('banner_button_link'); ?>">
                                <?php echo get_field('banner_button_title'); ?>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="container">
                <section class="introducing">
                    <div class="section-header">
                        <h2 class="section-header__title">
                            <?php echo get_field('introducing_title'); ?> <br>
                            <span class="section-header__subtitle"><?php echo get_field('introducing_subtitle'); ?></span>
                        </h2>
                    </div>
                    <div class="introducing-wrapper">
                        <div class="introducing-items">

                            <?php
                            //The query
                            $args = array(
                                'post_type' => 'members',
                                'order' => 'DESC',
                            );
                            $members = new WP_Query($args); ?>

                            <?php if ($members->have_posts()): ?>

                                <!-- The loop -->
                                <?php while ($members->have_posts()) : $members->the_post(); ?>

                                    <div class="introducing-item">
                                        <?php the_post_thumbnail(); ?>
                                        <div class="member">
                                            <p class="member__name">
                                                <?php the_title(); ?> <br>
                                                <span class="member__position">
                                                    <?php echo get_field('member_position'); ?>
                                                </span>
                                            </p>
                                            <ul class="social-list">
                                                <li>
                                                    <a href="<?php echo get_field('member_social_link_1'); ?>">
                                                        <?php echo get_field('member_social_1'); ?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo get_field('member_social_link_2'); ?>">
                                                        <?php echo get_field('member_social_2'); ?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo get_field('member_social_link_3'); ?>">
                                                        <?php echo get_field('member_social_3'); ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                <?php endwhile; ?>
                                <!-- End of the loop -->

                                <?php wp_reset_query(); ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </section>

                <section class="event">
                    <div class="upcoming-flex">
                        <div class="left-part">
                            <div class="section-header">
                                <h2 class="section-header__title">
                                    <?php echo get_field('concert_section_title'); ?> <br>
                                    <span class="section-header__subtitle">
                                        <?php echo get_field('concert_section_subtitle'); ?>
                                    </span>
                                </h2>
                            </div>
                            <div class="concert-wrapper">
                                <div class="ticket">
                                    <?php
                                    // get raw date
                                    $date = get_field('concert_date', false, false);

                                    // make date object
                                    $date = new DateTime($date);
                                    ?>
                                    <img src="<?php echo get_field('concert_poster'); ?>">
                                    <span class="ticket__date">
                                        <strong><?php echo $date->format('j'); ?></strong>
                                        <?php echo $date->format('M'); ?>
                                    </span>
                                </div>
                                <div class="ticket-description">
                                    <h3><?php echo get_field('concert_title'); ?></h3>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>Location <span>:</span></td>
                                            <td><?php echo get_field('concert_location'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Date <span>:</span></td>
                                            <td><?php echo get_field('concert_date'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Time <span>:</span></td>
                                            <td><?php echo get_field('concert_time'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Price <span>:</span></td>
                                            <td><?php echo get_field('concert_price'); ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <a class="main-btn-dark" href="<?php echo get_field('concert_button_link'); ?>">
                                        <?php echo get_field('concert_button_title'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <div class="videos">
                                <div class="section-header">
                                    <h2 class="section-header__title">
                                        <?php echo get_field('videos_title'); ?> <br>
                                        <span class="section-header__subtitle">
                                            <?php echo get_field('video_subtitle'); ?>
                                        </span>
                                    </h2>
                                </div>
                                <div class="video-slider">

                                    <?php
                                    //The query
                                    $args = array(
                                        'post_type' => 'videos',
                                        'order' => 'DESC',
                                    );
                                    $videos = new WP_Query($args); ?>

                                    <?php if ($videos->have_posts()): ?>

                                        <!-- The loop -->
                                        <?php while ($videos->have_posts()) : $videos->the_post(); ?>
                                            <div class="video-frame">
                                                <?php echo get_field('video_url'); ?>
                                            </div>
                                        <?php endwhile; ?>
                                        <!-- End of the loop -->

                                        <?php wp_reset_query(); ?>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                </section>

                <section class="history"
                         style="background: <?php the_field('history_background_color'); ?> url('<?php echo get_field('history_image'); ?>') no-repeat right center">
                    <div class="history__content">
                        <h2 class="history__text">
                            <?php echo get_field('history_title'); ?> <br>
                            <div class="history__subtitle">
                                <?php echo get_field('history_subtitle'); ?>
                            </div>
                        </h2>
                        <a class="main-btn-light" href="<?php echo get_field('history_button_link'); ?>">
                            <?php echo get_field('history_button_title'); ?>
                        </a>
                    </div>
                </section>

                <section class="popular">
                    <div class="popular-flex">
                        <div class="left-part">
                            <div class="section-header">
                                <h2 class="section-header__title">
                                    <?php echo get_field('songs_title'); ?> <br>
                                    <span class="section-header__subtitle">
                                        <?php echo get_field('songs_subtitle'); ?>
                                    </span>
                                </h2>
                            </div>
                            <div class="player">
                                <?php $args = array('posts_per_page' => 1, 'post_type' => 'songs');
                                $songs = get_posts($args);
                                foreach ($songs as $post) {
                                    setup_postdata($post);
                                    ?>
                                    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                                            name="modal"
                                            src="<?php echo get_field('song_url'); ?>">
                                    </iframe>
                                    <?php
                                }
                                wp_reset_postdata();
                                ?>

                                <ol class="songs-list">

                                    <?php
                                    //The query
                                    $args = array(
                                        'post_type' => 'songs',
                                        'order' => 'DESC',
                                    );
                                    $songs = new WP_Query($args); ?>

                                    <?php if ($songs->have_posts()): ?>

                                        <!-- The loop -->
                                        <?php while ($songs->have_posts()) : $songs->the_post(); ?>
                                            <li>
                                                <a href="<?php echo get_field('song_url'); ?>" target="modal">
                                                    <?php trim_title_chars(27, '...'); ?>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                        <!-- End of the loop -->

                                        <?php wp_reset_query(); ?>
                                    <?php endif; ?>

                                </ol>
                            </div>
                        </div>
                        <div class="right-part">
                            <div class="section-header">
                                <h2 class="section-header__title">
                                    <?php echo get_field('instagram_title'); ?> <br>
                                    <span class="section-header__subtitle">
                                        <?php echo get_field('instagram_subtitle'); ?>
                                    </span>
                                </h2>
                            </div>
                            <div class="recent-post">
                                <div class="insta-post">
                                    <?php echo do_shortcode('[instagram-feed imagepadding=7.5]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="download"
                         style="background: url('<?php echo get_field('download_background_image'); ?>') no-repeat right center/cover">
                    <h2 class="header"><?php echo get_field('download_title'); ?></h2>
                    <p class="header__title"><?php echo get_field('download_subtitle'); ?></p>
                    <?php

                    if (have_rows('apps')):
                        while (have_rows('apps')) : the_row();
                            ?>
                            <div class="apps">
                                <a href="<?php echo get_sub_field('app_link_1'); ?>">
                                    <img src="<?php echo get_sub_field('app_image_1'); ?>">
                                </a>
                                <a href="<?php echo get_sub_field('app_link_2'); ?>">
                                    <img src="<?php echo get_sub_field('app_image_2'); ?>">
                                </a>
                            </div>
                        <?php
                        endwhile;
                    endif;

                    ?>

                    <style>
                        .download:after {
                            opacity: <?php echo get_field('download_opacity'); ?>;
                        }
                    </style>

                </section>

                <div class="newsletter">
                    <?php echo do_shortcode('[contact-form-7 id="219" title="Contact form 1"]'); ?>
                </div>

            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();