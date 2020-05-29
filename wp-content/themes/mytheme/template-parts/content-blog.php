<div class="row">
    <?php

    ?>
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="single-post col-md-6">
                <div class="post-meta">
                    <h1> <a class="post-title" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h1>
                    <em> Posted on - <?php echo get_the_date(); ?></em> |
                    <em> Written by - <?php the_author(); ?></em>|
                    <em> cateory - <?php the_category(' ') ?> </em>
                </div>
                <div class="featured-Image"> <?php the_post_thumbnail('blog-thumbnail'); ?></div>
                <div> <?php the_excerpt(50); ?> </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>