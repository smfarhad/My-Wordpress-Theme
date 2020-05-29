<?php

/**
 * Template Name: Trailers 
 **/
?>
<?php get_header(); ?>
<div class="row">
    <?php
    $args = array(
        'post_type' => 'trailer'
    );
    $the_query = new WP_Query($args);

    ?>
    <?php if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="single-post col-md-6">
                <div class="post-meta">
                    <h1> <a class="post-title" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h1>
                    <em> Nationality - <?php the_field('nationality'); ?></em> <br>

                </div>
                <div class="post-excert">
                    <a class="post-title" href="<?php the_permalink() ?>">
                        <button class="btn btn-primary">Read More </button>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php
dynamic_sidebar('actor-sidebar');
get_footer();
?>