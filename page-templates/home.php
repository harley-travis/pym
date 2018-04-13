<?php 
/**
 * Template Name: Home page 
*/
get_header(); ?>

<header class="container">
	<div class="col-md-6">
		<div class="logo">
			<h1>Site Heading</h1>
		</div>
	</div>
	<div class="col-md-6">
		<nav>
			<ul class="nav justify-content-end">
				<li class="nav-item">
					<a class="nav-link active" href="#">Pricing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				</li>
			</ul>
		</nav>
	</div>
</header>

<section class="container-fluid">
	<div class="container banner-wrapper">
		<div class="banner">
			<h1>Important Banner Titles To Attract Call To Actions!</h1>
			<div class="banner-btn-wrapper">
				<button type="button" class="btn btn-primary btn-lg">Watch Video</button>
				<button type="button" class="btn btn-outline-primary btn-lg">Sign Up</button>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid">
	<div class="container">
	<h2>Features</h2>
		<ul>
			<li>cPanel</li>
			<li>eCommerced Optimized</li>
			<li>One-Click WordPress Install</li>
			<li>Email</li>
			<li>Security</li>
			<li>FTP Access</li>
		</ul>
	</div>
</section>

<section class="container-fluid">
	<div class="container">
	<h2>Pricing</h2>
		<div class="pricing-wrapper">
			<div class="pricing-col">
				<div class="pricing-col-wrapper">
					<div class="pricing-title">
						<h4>Package 1</h4>
					</div>
					<div class="price">
						<span class="price-format">$xx.xx</span>
					</div>
					<div class="features">
						<ul class="list-group">
							<li class="list-group-item">Cras justo odio</li>
							<li class="list-group-item">Dapibus ac facilisis in</li>
							<li class="list-group-item">Morbi leo risus</li>
							<li class="list-group-item">Porta ac consectetur ac</li>
							<li class="list-group-item">Vestibulum at eros</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="pricing-wrapper">
			<div class="pricing-col">
				<div class="pricing-col-wrapper">
					<div class="pricing-title">
						<h4>Package 2</h4>
					</div>
					<div class="price">
						<span class="price-format">$xx.xx</span>
					</div>
					<div class="features">
						<ul class="list-group">
							<li class="list-group-item">Cras justo odio</li>
							<li class="list-group-item">Dapibus ac facilisis in</li>
							<li class="list-group-item">Morbi leo risus</li>
							<li class="list-group-item">Porta ac consectetur ac</li>
							<li class="list-group-item">Vestibulum at eros</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="pricing-wrapper">
			<div class="pricing-col">
				<div class="pricing-col-wrapper">
					<div class="pricing-title">
						<h4>Package 3</h4>
					</div>
					<div class="price">
						<span class="price-format">$xx.xx</span>
					</div>
					<div class="features">
						<ul class="list-group">
							<li class="list-group-item">Cras justo odio</li>
							<li class="list-group-item">Dapibus ac facilisis in</li>
							<li class="list-group-item">Morbi leo risus</li>
							<li class="list-group-item">Porta ac consectetur ac</li>
							<li class="list-group-item">Vestibulum at eros</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php while (have_posts()) : the_post(); ?>
	<?php the_content('[...]'); ?> 
<?php endwhile; ?>

<?php get_footer(); ?>