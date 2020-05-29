<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mytheme
 */
get_header();
?>

<div class="row">
    <div class="col-12">
        <h1> <?php single_cat_title('Category - ') ?> </h1>
    </div>
    <div class="col-8">

        <?php
        if (have_posts()) :
            if (is_home() && !is_front_page()) :
        ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
        <?php
            endif;
            /* Start the Loop */
            /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
            get_template_part('template-parts/content', 'blog');

        else :
            get_template_part('template-parts/content', 'none');

        endif;
        ?>
    </div>
    <div class="col-4">
        <?php dynamic_sidebar('blog-sidebar'); ?>
    </div>
</div>
<?php


get_footer();
