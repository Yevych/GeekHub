<?php get_header('blog'); ?>
    <div class="breadcrumbs">
        <div class="page-container">
            <div class="breadcrumbs-flex">
                <div class="breadcrumbs__nav">
                    <a href="/" class="crumb">Home</a>
                    <span class="crumb">
                <svg class="separator" xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9">
    <path fill="#5D6166" fill-rule="evenodd"
          d="M0 .225c0 .062.025.118.066.16l3.9 4.115-3.9 4.116A.224.224 0 0 0 .225 9a.223.223 0 0 0 .16-.066l4.05-4.275a.223.223 0 0 0 0-.318L.384.066A.225.225 0 0 0 0 .226"></path>
</svg><a href="/blog" class="crumb">Candidate families</a></span>
                    <svg class="separator" xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9">
                        <path fill="#5D6166" fill-rule="evenodd"
                              d="M0 .225c0 .062.025.118.066.16l3.9 4.115-3.9 4.116A.224.224 0 0 0 .225 9a.223.223 0 0 0 .16-.066l4.05-4.275a.223.223 0 0 0 0-.318L.384.066A.225.225 0 0 0 0 .226"></path>
                    </svg>
                    <?php the_title(); ?></span>
                </div>
            </div>
        </div>
    </div>
    <main id="main" class="site-main site-main--single" role="main">

        <div class="page-container">
            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content', 'single'); ?>

            <?php endwhile; ?>
        </div>

    </main>

<?php get_footer(); ?>