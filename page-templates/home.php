<?php 
/**
 * Template Name: Home page 
*/
get_header(); ?>

<!-- banner -->
<section class="container-fluid banner black-bg white-text">
	<div class="container">
		<div class="selected-filters">
			<span class="" id="filter-init">
				<button type="button" class="btn btn-link" data-toggle="modal" data-target="#filter-modal">
					filter projects  <i class="fas fa-angle-down filter-arrow-icon"></i>
				</button> 
			</span>
			<ul class="filter-list">
				
				<?php
		
					// display the category names
					if(!empty($_POST['category'])){
						$items = array();
						
						// grab all the ids and put them in an array
						foreach($_POST['category'] as $selected){
							$items[] = $selected;
						}
						
						// display the categories in chips
						foreach($_POST['category'] as $selected){
							echo '<li class="filter-item">'. get_cat_name( $selected ).'<span class="filterClose" onclick="Chip.Widget.UpdateQuery('. htmlspecialchars(json_encode($items, JSON_NUMERIC_CHECK )).', '.$selected.')">&times;</span></li>';
						}
						
					}

				?>

			</ul>
		</div>
	</div>
	<div class="container banner-wrapper">
		<div class="row">
			<div class="col-md-6">
				<h1 class="site-title">mahesh marath</h1>
				<span class="sub-title">sr. design head</span>
			</div>
			<div class="col-md-6 left-nav">
				<ul class="icon-menu" id="icon-menu" style="display:inherit;">
					<li><a href="https://www.linkedin.com/" target="_blank" class="icon"><i class="fab fa-linkedin-in"></i></a></li>
					<li><a href="#" class="icon"><i class="fas fa-file-alt"></i></a></li>
					<li><a href="#" onClick="emailChip()" class="icon"><i class="fas fa-envelope"></i></a></li>
					<li><a href="#" onClick="phoneChip()" class="icon"><i class="fas fa-phone"></i></a></li>
				</ul>
				<div class="chip" style="display: none;" id="email-chip">
				  <span class="purple-text chip-length">maheshmarath@gmail.com</span><span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
				</div>
				<div class="chip" style="display: none;" id="phone-chip">
				  <span class="purple-text chip-length">+91 8892076999</span><span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
				</div>
			</div>
		</div>
	</div>
	<div class="mahesh-wrapper">
			<img src="<?php echo ROOT.'assets/img/mahesh.jpg'; ?>" class="mahesh-img" alt="">
		</div>
</section>

<section class="container-fluid article-list">
	<div class="container article-list-wrapper">
	
		<!-- http://kenwheeler.github.io/slick/ -->
		<div class="slider">
		<?php
						
			// filter through posts by category
			if(isset($_POST['category'])) {
				$categories = implode(' ', $_POST['category']);
				$counter = 0;
				$the_query = new WP_Query( array( 'category__and' => array( $categories ) ) );

				if ( $the_query->have_posts() ) {
			
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						$counter++;
					?>
			
				<a href="<?php the_permalink(); ?>">
					<div class="filter-card" style="background-image: url('<?php the_post_thumbnail_url( 'full' );  ?>')">
						<div class="filter-card-wrapper">
								<h5><?php echo get_the_title(); ?></h5>
						</div>
					</div>
				</a>
		
		
				<?php } ?>
			<input type="hidden" id="count" value="<?php echo $counter ?>">
			<?php
					wp_reset_postdata();
				} else {
					// no posts found
				}

			}
		?>
			
	
		</div>
	</div>
</section>

<?php get_footer(); ?>