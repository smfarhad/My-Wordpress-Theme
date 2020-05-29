<?php get_header(); ?>

<div class="row home-section">
    <div class="col-8">
        <div class="headline">
            <h2> Latest Trailer </h2>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'trailer',
                'post_per_page' => 1
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="single-post col-md-6">
                        <div class="post-meta">
                            <h1> <a class="post-title" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h1>
                            <div>
                                <?php the_content(); ?>
                            </div>
                            <em> Directed By: <?php the_field('director'); ?></em> <br>

                        </div>
                        <div class="post-excert">
                            <a class="post-title" href="<?php the_permalink() ?>">
                                <button class="btn btn-primary">Read More </button>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="col-md-12">
                <h2> Latest Posts</h2>
            </div>


            <?php wp_reset_postdata(); ?>
            <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="single-post col-md-6">
                        <div class="post-meta">
                            <div class="featured-image">
                                <?php the_post_thumbnail('medium_large') ?>
                            </div>
                            <div>
                                <h4> <a class="post-title" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h4>
                            </div>
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
    </div>
    <div class="col-4">
        <div class="home-sidebar">
            <?php dynamic_sidebar('home'); ?>
        </div>
    </div>

</div>

<h2> Latest Movie</h2>
<div class="row">
    <?php wp_reset_postdata(); ?>
    <?php $args = array(
        'post_type' => 'movie_review',
        'posts_per_page' => 2,
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="single-post col-md-6">
                <div class="post-meta">
                    <div class="featured-image">
                        <?php the_post_thumbnail('medium_large') ?>
                    </div>
                    <div>
                        <h4> <a class="post-title" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h4>
                    </div>
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

get_footer();
?>