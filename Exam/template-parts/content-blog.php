<article class="articles__offset" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="post__item">
        <div class="post__image">
            <?php the_post_thumbnail(); ?>
            <div class="inner-blog-content">
                <span class="inner-blog-content__time"><?php echo get_the_date('j-F-Y'); ?></span>
                <h3><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
            </div>
        </div>
        <div class="post__content">
            <?php echo get_field('excerpt'); ?>
        </div>
        <div class="post__more">
            <a class="see__btn" href="<?php echo get_permalink(); ?>">
                Read more
            </a>
        </div>
    </div>

</article>