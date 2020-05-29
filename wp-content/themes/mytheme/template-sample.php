<?php

/**
 * Template Name: Sample Page 
 **/
?>
<?php get_header(); ?>
<h1> <?php the_title('BEGIN ', ' END') ?></h1>
<?php the_post_thumbnail('medium') ?>
<?php get_footer(); ?>