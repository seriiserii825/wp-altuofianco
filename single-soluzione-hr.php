<?php

/**
 * Template Name: Easy hr
 * Template Post Type: soluzioni
 */

get_header(); ?>
<?php if (have_posts()): ?>
	<?php the_post(); ?>
	<?php the_content(); ?>

<?php endif; ?>


<?php get_footer(); ?>
