<article class="articles__offset" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="post__item">
        <div class="post__image">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="post__content">
            <div class="post__title">
                <?php the_title(); ?>
            </div>
            <div class="post__info">
                <div class="post__author">
                    By <?php the_author(); ?>
                </div>
                <div class="post__date">
                    <?php echo get_the_date('j F Y'); ?>
                </div>
            </div>
            <div class="post__description">
                <?php echo get_field('post_excerpt'); ?>
            </div>
            <div class="post__more">
                <a class="see__btn" href="<?php echo get_permalink(); ?>">
                    See more
                </a>
            </div>
        </div>
    </div>

</article>