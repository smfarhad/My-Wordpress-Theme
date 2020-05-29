<?php

/**
 * Template for display single Actors
 * 
 */
?>
<?php get_header(); ?>
<main id="primary" class="site-main">
    <?php while (have_posts()) : the_post(); ?>
        <h3> <?php the_title(); ?> </h3>
        <div>
            <?php the_post_thumbnail('medium'); ?>
            <h6> Nationality - <?php the_field('nationality'); ?></h6>
            <h6> Height - <?php the_field('height'); ?> cm </h6>

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