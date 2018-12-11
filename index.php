<?php 
/**
 *
 * The main template file
 *
 * @link https://maheshmarath.com
 * @package WordPress
 * @subpackage Midtown
 * @since Midtown 1.0
 *
 */
get_header(); ?>

<!-- this file is the blog template -->
<?php if ($wp_query->have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
<article class="container-fluid">
	<div class="row article-row">
		<div class="col-md-9 article-body">
			<div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' );  ?>')">
				<div class="featured-post-img-wrapper">
					<div class="blog-title">
						<h1 class=""><?php the_title(); ?></h1>
					</div>
				</div>
				<div class="exit-article">
					<div class="exit-aricle-wrapper">
						<a href="<?php echo ROOT_URL; ?>"><i class="fas fa-times exit-icon"></i></a>
					</div>
				</div>
			</div>
			<div class="pad">
				<div class="article-body-wrapper">
					<div class="blog-content">
						<?php the_content('[...]'); ?> 
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
		</div>
		<div class="col-md-3 sidebar">
			<div class="sidebar-wrapper">
				<h2 class="site-title">mahesh marath</h2>
				<span class="sub-title">sr. design head</span>
			</div>
			<div class="side-bar-menu">
				<ul class="sidebar-icon-menu">
					<li><a href="linkedin.com" target="_blank" class="icon"><i class="fab fa-linkedin-in"></i></a></li>
					<li><a href="#" class="icon"><i class="fas fa-file-alt"></i></a></li>
					<li><a href="#" class="icon"><i class="fas fa-envelope"></i></a></li>
					<li><a href="#" class="icon"><i class="fas fa-phone"></i></a></li>
				</ul>
			</div>
			<div class="side-mahesh">
				<div class="side-mahesh-wrapper">
					<img src="<?php echo ROOT.'assets/img/mahesh.jpg'; ?>" class="side-mahesh-img" alt="">
				</div>
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>