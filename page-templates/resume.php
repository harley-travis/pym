<?php 
/**
 * Template Name: Resume
*/
get_header(); ?>

<section class="container-fluid resume-bg black-bg white-text">
	<div class="container">
		<div class="resume-content">
			<div class="resume-content-wrapper">
				<?php the_content(); ?>
				
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#resume">
				  Launch demo modal
				</button>


				<!-- Modal -->
				<div class="modal fade" id="resume" tabindex="-1" role="dialog" aria-labelledby="resumeLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<img src="#" alt="" class="">
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					  </div>
					</div>
				  </div>
				</div>
				
			</div>
		</div>
		<div class="mahesh-password">
			<img src="<?php echo ROOT.'assets/img/mahesh.jpg'; ?>" class="side-mahesh-img" alt="">
		</div>
		<div class="password-info">
			<span>type in the password I have sent you, if not kindly request me on</span><br>
			<span class="password-email purple-text">maheshmarath@gmail.com</span>
		</div>
	</div>
</section>

<?php get_footer(); ?>