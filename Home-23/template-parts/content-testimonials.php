<?php
//The query
$args = array(
    'post_type' => 'testimonials',
    'posts_per_page' => 2,
    'order' => 'DESC',
);
$testimonials = new WP_Query($args); ?>

<?php if ($testimonials->have_posts()): ?>

    <!-- The loop -->
    <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>

        <div class="testimonials__item">
            <div class="column">
                <div class="testimonials__avatar">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="testimonials__wrapper">
                    <div class="testimonials__content">
                        <?php the_content(); ?>
                    </div>
                    <div class="testimonials__author">
                        <div class="testimonials__author--name">
                            <?php the_title(); ?>
                        </div>
                        <div class="testimonials__author--company">
                            <?php echo get_field('testimonials_company'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
    <!-- End of the loop -->

    <?php wp_reset_query(); ?>
<?php endif; ?>