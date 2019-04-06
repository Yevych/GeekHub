<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
        <div class="blog-content">
            <div class="page-container">
                <div class="blog-content__wrapper">
                    <div class="left-part">
                        <h2 class="section-header section-header--blog">
                            <span>Our</span>
                            Blog Post
                        </h2>
                        <div class="post__image">
                            <?php the_post_thumbnail(); ?>
                            <div class="inner-blog-content">
                                <span class="inner-blog-content__time"><?php echo get_the_date('j-F-Y'); ?></span>
                                <h3><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                            </div>
                        </div>
                        <div class="post__content">
                            <?php the_content(); ?>
                        </div>
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
    </div>

</article>
