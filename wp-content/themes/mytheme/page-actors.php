<?php

/**
 * Template Name: Actors 
 **/
?>
<?php get_header(); ?>
<div class="row">
    <?php
    $args = array(
        'post_type' => 'actor'
    );
    $the_query = new WP_Query($args);

    ?>
    <?php if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="single-post col-md-6">
                <div class="post-meta">
                    <h1> <a class="post-title" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h1>
                    <div class="featured-Image"> <?php the_post_thumbnail('blog-thumbnail'); ?></div>
                    <em> Height - <?php the_field('height'); ?></em> <br>
                    <?php
                    $dob = get_field('dob', false, false);
                    $dob = new DateTime($dob);
                    ?>
                    <em> Date Of Birth - <?php echo $dob->format('F j, Y')  ?></em> <br>
                    <em> Nationality - <?php the_field('nationality'); ?></em> <br>
                    <em> Top Movies - <?php the_field('top_movies'); ?></em>
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