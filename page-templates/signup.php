<?php 
/**
 * Template Name: Sign Up 
*/
get_header(); ?>

<h2>Signup</h2>

<?php while (have_posts()) : the_post(); ?>
	<?php the_content('[...]'); ?> 
<?php endwhile; ?>

<?php get_footer(); ?>