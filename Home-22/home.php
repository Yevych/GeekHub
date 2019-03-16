<?php
/*
 * Template Name: Blog Template
 */
?>

<?php get_header(); ?>

<main id="main" class="page-main" role="main">

    <div class="page-container">
        <div class="post">
            <div class="post__row">
                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>
                        <div class="post__item">
                            <div class="post__image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="post__info">
                                <div class="post__title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="post__description">
                                    <?php echo get_field('post_excerpt'); ?>
                                </div>
                                <div class="post__btn--wrapper">
                                    <a href="<?php echo get_permalink(); ?>" class="post__btn">
                                        read more
                                    </a>
                                </div>
                                <div class="post__navigation">
                                    <div class="date">
                                        <i class="far fa-calendar calendar"></i>
                                        <?php echo get_the_date('j.n.Y'); ?>
                                    </div>
                                    <div class="comment">
                                        <i class="fas fa-comment comment"></i>
                                        24
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="post__pagination">
            <?php the_posts_pagination(); ?>
        </div>
        <div class="scroll-top">
            <button class="scroll-top__prefooter js-scroll-top">
                <i class="fas fa-angle-up angle-up"></i>
            </button>
        </div>
    </div>

</main>

<?php get_footer(); ?>
