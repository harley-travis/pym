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
				<li id="categories"></li>
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
			<div id="response"></div>	
			
			
			
			<?php echo do_shortcode( '[searchandfilter id="38" show="results"]' ); ?>
			
			
			
<!--
			<div id="post-response"></div>
			
-->
			
			
		</div>
		
	</div>
</section>

<?php get_footer(); ?>