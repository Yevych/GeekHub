<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="page-container page-container--single">
        <header class="entry-header">
            <div class="single-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <div class="social-wrapper">
                <div class="single-date">
                    <i class="far fa-calendar calendar"></i>
                    <?php echo get_the_date('j/n/Y'); ?>
                </div>
                <div class="single-comment">
                    <i class="fas fa-comment comment"></i>
                    201
                </div>
                <div class="single-like">
                    <i class="fas fa-heart heart"></i>
                    400
                </div>
            </div>
        </header>

        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <div class="share">
            <div class="share__social">
                <span>Share</span>
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-pinterest-p"></i>
                </a>
            </div>
            <div class="share__retweet">
                <a href="#">
                    <i class="fas fa-retweet"></i>
                </a>
            </div>
        </div>
        <div class="comments">
            <span class="comments__count">10 Comments</span>
            <div class="comments__navigation">
                <div class="comments__accent">
                    <span class="comments__author">Robert Smith</span>
                    <span class="comments__date">02 June 2014, 15:20</span>
                </div>
                <div class="comments__reply">
                    <a href="#">
                        <i class="fas fa-redo-alt alt"></i>
                        Reply
                    </a>
                </div>
            </div>
            <div class="comments__content">
                <div class="comments__avatar">
                    <i class="fas fa-user user"></i>
                </div>
                <div class="comments__text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis
                        pharetra, lacus turpis dapibus magna, eget aliquam diam erat at velit.
                    </p>
                </div>
            </div>
            <div class="comments__navigation comments__navigation--sub">
                <div class="comments__accent">
                    <span class="comments__author">Greg Rouge</span>
                    <span class="comments__date">02 June 2014, 15:20</span>
                </div>
            </div>
            <div class="comments__content comments__content--sub">
                <div class="comments__avatar">
                    <i class="fas fa-user user"></i>
                </div>
                <div class="comments__text comments__text--sub">
                    <p>
                        Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing
                        iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.
                    </p>
                </div>
            </div>
            <div class="comments__navigation">
                <div class="comments__accent">
                    <span class="comments__author">Ely Grogoelar</span>
                    <span class="comments__date">02 June 2014, 15:20</span>
                </div>
                <div class="comments__reply">
                    <a href="#">
                        <i class="fas fa-redo-alt alt"></i>
                        Reply
                    </a>
                </div>
            </div>
            <div class="comments__content">
                <div class="comments__avatar">
                    <i class="fas fa-user user"></i>
                </div>
                <div class="comments__text">
                    <p>
                        Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing
                        iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.
                    </p>
                </div>
            </div>
        </div>
        <div class="leave-comment">
            <span class="leave-comment__title">Leave a comment</span>
            <form action="#" method="post" class="leave-comment__form">
                <input type="text" placeholder="Name" required>
                <input type="email" placeholder="E-mail" required>
                <input type="text" placeholder="Web site">
                <input type="text" placeholder="Job">
                <textarea name="comment-area" id="comment-area" placeholder="Comment"></textarea>
                <button type="submit" class="comment-btn btn">Send</button>
            </form>
            <span class="leave-comment__description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis semper nisl, vitae malesuada
                massa egestas a. Vestibulum vestibulum urna sapien, eu bibendum magna ornare non.
            </span>
        </div>
    </div>

    <div class="page-container">
        <div class="prefooter-wrapper">
            <?php get_template_part('template-parts/sidebar', 'workshop'); ?>
            <div class="recent">
                <div class="recent__header">Recent post</div>
                <?php $args = array('posts_per_page' => 3, 'post_type' => 'post');
                $posts = get_posts($args);
                foreach ($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="recent__item">
                        <div class="left-part">
                            <div class="recent__img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                        <div class="right-part">
                            <div class="recent__title">
                                <?php the_title(); ?>
                            </div>
                            <div class="recent__date">
                                <?php echo get_the_date('j.n.Y'); ?>
                            </div>
                            <div class="recent__description">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="category">
                <div class="category__header">Category</div>
                <?php get_template_part('template-parts/sidebar', 'category'); ?>
            </div>
        </div>
    </div>

</article>