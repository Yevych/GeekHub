<div class="articles-wrapper">
    <div class="articles articles--single">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="entry-header">
                <h1><?php the_title(); ?>, <?php echo get_the_date('F Y'); ?></h1>
            </header>

            <div class="entry-content">
                <div class="content-row">
                    <div class="content__video">
                        <iframe width="560" height="315" src="<?php echo get_field('video_url'); ?>"></iframe>
                    </div>
                    <div class="content__info">
                        <div class="sponsor">
                            <div class="sponsor__avatar">
                                <img src="<?php echo get_field('sponsor_avatar'); ?>" alt="">
                            </div>
                            <div class="sponsor__description">
                                <span class="sponsor__status">Sponsor</span>
                                <span class="sponsor__team"><?php echo get_field('sponsor_location'); ?></span>
                            </div>
                        </div>
                        <div class="progress">
                            <progress max="100" value="0"></progress>
                            <div class="progress-value"></div>
                            <div class="progress-bg">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                        <div class="amount">
                            <div class="amount__now">
                                <span class="amount__raised">Amount raised:</span>
                                <div class="total-wrapper">
                                    $ <span class="amount__total" id="res"></span>
                                </div>
                            </div>
                            <div class="amount__need">
                                <span class="amount__goal">Goal:</span>
                                <div class="total-wrapper">
                                    $<span class="amount__total" id="goal">
                                        <?php echo get_field('goal_collect'); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="action">
                            <div class="action__social">
                                <ul>
                                    <li class="tweet">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="tumblr">
                                        <a href="#"><i class="fab fa-tumblr"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="action__donate">
                                <a href="#" class="donate__btn btn">
                                    Donate
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
<div class="articles-wrapper articles-wrapper--second">
    <div class="articles articles--left">
        <div class="wrapper">
            <ul class="tabs">
                <li class="tab">Description</li>
                <li class="tab">Updates</li>
                <li class="tab">Donors</li>
                <li class="tab">Map</li>
            </ul>
            <div class="tab_content">
                <div class="tab_item">
                    <?php echo get_field('description_information'); ?>
                </div>
                <div class="tab_item">
                    <?php echo get_field('updates_information'); ?>
                </div>
                <div class="tab_item">
                    <?php

                    $posts = get_field('donors_list');

                    if ($posts): ?>
                        <ul class="donor-list">
                            <?php foreach ($posts as $donor): // variable must NOT be called $post (IMPORTANT) ?>
                                <li>
                                    <div class="donor-title">
                                        <?php echo get_the_title($donor->ID); ?>
                                    </div>
                                    <div class="donor-donate">
                                        $<span class="price" id="price-1">
                                            <?php echo get_field('donate', $donor->ID); ?>
                                        </span>
                                        <span class="date">
                                            <?php echo meks_time_ago(); /* post date in time ago format */ ?>
                                        </span>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="tab_item">
                    <?php echo get_field('map_information'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="articles articles--right">
        <?php get_template_part('template-parts/sidebar', 'involved'); ?>
    </div>
</div>