<?php 
/**
 * Template Name: Blog Overview
*/
get_header(); ?>

<h2>Blog overview</h2>

<?php while (have_posts()) : the_post(); ?>
	<?php the_content('[...]'); ?> 
<?php endwhile; ?>

<?php get_footer(); ?>