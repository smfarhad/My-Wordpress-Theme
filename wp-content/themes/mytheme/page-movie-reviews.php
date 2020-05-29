<?php

/**
 * Template Name: Movie Reviews
 **/
?>
<?php get_header(); ?>
<div class="row">
    <?php
    $args = array(
        'post_type' => 'movie_review'
    );
    $the_query = new WP_Query($args);

    ?>
    <?php if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="single-post col-md-6">
                <div class="post-meta">
                    <h1> <a class="post-title" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h1>

                </div>
                <div class="featured-Image"> <?php the_post_thumbnail('blog-thumbnail'); ?></div>
                <em> Released at - <?php the_field('date_of_release'); ?></em> |
                <em> Director - <?php the_field('director'); ?></em> |
                <p> Stars - <?php the_field('stars'); ?>
                    <div class="post-excert">
                        <em> Synopsis - <?php the_field('synopsis'); ?></em> <?php the_excerpt(100); ?>
                </p>
            </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php dynamic_sidebar('movie-reviews-sidebar'); ?>
<?php get_footer(); ?>