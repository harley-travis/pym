        <footer class="container-fluid black-2-bg white-text">
            <div class="container footer-wrapper">
                <div class="row">
				</div>
            </div>
        </footer>

		<!-- filter modal -->
		<div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="filter-modal" aria-hidden="true">
			<div class="modal-dialog modal-full" role="document">
				<div class="modal-content">
					<form action="#" method="post">
					<div class="modal-header">
						<h5 class="modal-title">filter projects</h5>
						<input type="submit" name="clear" class="btn btn-link black-text" value="Clear"> <input type="submit" name="submit" class="btn btn-link black-text" value="Apply">
					</div>
					<div class="modal-body">
						
						<h5 class="filter-heading">industries</h5>
						<div class="list-group">
							<?php
								$categories = get_categories( array(
									'orderby' => 'name',
									'order'   => 'ASC'
								) );

								foreach( $categories as $category ) {
									$category_link = sprintf( 
										'<label for="category-'.$category->term_id .'" alt="%2$s" class="list-group-item list-group-item-action">%3$s</label><input type="checkbox" class="category-checkbox" name="category[]" id="category-'.$category->term_id .'" value="'.$category->term_id .'" onclick="
										+('.$category->term_id .')">',
										esc_url( get_category_link( $category->term_id ) ),
										esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
										esc_html( $category->name )
									);

									echo sprintf( esc_html__( '%s', 'textdomain' ), $category_link );
									//echo $category->term_id;
								}
							?>
						</div>
						
						<h5 class="filter-heading">platforms</h5>
						<div class="list-group">
							<a href="#" class="list-group-item list-group-item-action">web</a>
							<a href="#" class="list-group-item list-group-item-action">tablet</a>
							<a href="#" class="list-group-item list-group-item-action">mobile</a>
						</div>
						
					</div>
					</form>
					<div class="modal-footer modal-filter-footer">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			</div>
		</div>		

<div id="hidden_form_container" style="display:none;"></div>

		<?php dynamic_sidebar( 'footer-information' ); ?>

        <!-- javascripts -->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/bigslide.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-1.11.0.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/slick.js"></script>

		 <script type="text/javascript">
			$(document).ready(function(){
				var numSlides = $('#count').val();
				$('.slider').slick({
					infinite: true,
					speed: 300,
					slidesToShow: 3,
					slidesToScroll: 1,
					arrows: true,
					responsive: [{
						breakpoint: 768,
						settings: {
							arrows: false,
							centermode: true,
							slidesToShow: 3,
							centerPadding: '40px'
						}
					}]
				});
			});
		  </script>

		<script type="text/javascript">
			
			var Chip = {
				Init: function() {
					console.log('this is set')
				},
				Widget: {
					UpdateQuery: function(obj, id) {
				
						var index = obj.indexOf(id);
						if (index !== -1) obj.splice(index, 1);
						
						// create a form and push it
						var theForm, newInput1, newInput2;
						
					  // Start by creating a <form>
					  theForm = document.createElement('form');
					  theForm.action = '#';
					  theForm.method = 'post';
						
					  // Next create the <input>s in the form and give them names and values
					  newInput1 = document.createElement('input');
					  newInput1.type = 'hidden';
					  newInput1.name = 'category[]';
					  newInput1.value = obj;
					  
						console.log( newInput1.value)
						
					  // Now put everything together...
					  theForm.appendChild(newInput1);

					  // ...and it to the DOM...
					  document.getElementById('hidden_form_container').appendChild(theForm);
					  // ...and submit it
					  theForm.submit();
					}
				}
				
			}
			
			$(document).ready(function(){
				Chip.Init();
			});

			
			function emailChip() {
				document.getElementById('email-chip').style.display = "block";
			}
			function phoneChip() {
				document.getElementById('phone-chip').style.display = "block";
			}
		</script>

		<?php wp_footer(); ?>
    </body>
</html>