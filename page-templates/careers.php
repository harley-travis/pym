<?php 
/**
 * Template Name: Careers
*/
get_header(); ?>

<h2>Careers</h2>

<?php while (have_posts()) : the_post(); ?>
	<?php the_content('[...]'); ?> 
<?php endwhile; ?>

<?php get_footer(); ?>