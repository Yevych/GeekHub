<?php
/*
 * Template Name: Blog Template
 */
?>

<?php get_header(); ?>

    <main id="main" class="page-main" role="main">

        <div class="blog-banner">
            <div class="page-container">
                <h1>Blog</h1>
            </div>
        </div>
        <div class="blog-content">
            <div class="page-container">
                <div class="blog-content__wrapper">
                    <div class="left-part">
                        <h2 class="section-header section-header--blog">
                            <span>Our</span>
                            Blog
                        </h2>
                        <?php while (have_posts()) : the_post(); ?>

                            <?php get_template_part('template-parts/content', 'blog'); ?>

                        <?php endwhile; ?>
                    </div>
                    <div class="right-part">
                        <aside>
                            <div class="blog-search">
                                <h4>search</h4>
                                <form class="blog-search__form" method="get"action="">
                                    <input type="search" name="search" placeholder="Search" value="">
                                    <button type="submit" class="blog-search__btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="sidebar-category">
                                <div class="sidebar-category__title">
                                    <?php get_template_part('template-parts/sidebar', 'category'); ?>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

    </main>

<?php get_footer(); ?>