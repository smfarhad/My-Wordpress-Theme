<?php

/**
 * Template for display single movie reviews.
 * 
 * 
 */
?>
<?php get_header(); ?>
<main id="primary" class="site-main">
    <?php while (have_posts()) : the_post(); ?>
        <h2> <?php the_title(); ?> </h2>
        <div>
            <h6> Director - <?php the_field('director'); ?></h6>
            <h6> Released at - <?php the_field('date_of_release'); ?></h6>
            <?php the_post_thumbnail('stars'); ?>
            <h6> Starring </strong> <?php the_field('stars'); ?><h6>
                    <h6>The Review </h6>
                    <?php the_content() ?>
        </div>

    <?php endwhile; ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();

?>