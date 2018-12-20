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
					<!-- <form action="#" method="post">-->
					<div class="modal-header">
						<h5 class="modal-title">filter projects</h5>
						<input type="submit" name="clear" class="btn btn-link black-text" value="Clear"> <input type="submit" name="submit" class="btn btn-link black-text" value="Apply">
					</div>
					<div class="modal-body">
						
						<h5 class="filter-heading">industries</h5>
						<div class="list-group">
					
							
							
							<?php echo do_shortcode( '[searchandfilter id="38"]' ); ?>
							
						</div><!-- list-group -->
						
						<h5 class="filter-heading">platforms</h5>
						<div class="list-group">
							<a href="#" class="list-group-item list-group-item-action">web</a>
							<a href="#" class="list-group-item list-group-item-action">tablet</a>
							<a href="#" class="list-group-item list-group-item-action">mobile</a>
						</div>
						
					</div>
					<!-- </form>-->
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
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/bigslide.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-1.11.0.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/slick.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

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
							arrows: true,
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
					Chip.Widget.SendCategories();
				},
				Widget: {
					SendCategories: function(){
						
						$('#filter').submit(function(){					
							var filter = $('#filter');
							
							//console.log(filter.serialize()) // show form submission

							$.ajax({
								url:filter.attr('action'),
								data:filter.serialize(), // form data
								type:filter.attr('method'), // POST
								beforeSend:function(xhr){
									//Chip.Widget.InterceptCategoryData(filter.serialize());
									filter.find('button'); // changing the button label
								},
								success:function(data){
									console.log(data)
									$('#filter-modal').modal('hide'); // hide the modal 
									filter.find('button').text('Apply'); // changing the button label back							
									//$('#response').html(data); // insert data
									//$('#img-tag').innerHTML = '<img src="'+data.image+'" class="article-card-img" alt="">'; // insert data
									
									
									var obj = JSON.parse(data);
									//console.log(obj.data.category)
									
									var category = obj.data.category;
									
									$('<div class="article-card"><a href="'+obj.data.url+'"><img src="'+obj.data.image+'" class="article-card-img" alt="'+obj.data.title+'"><div class=""><span class=""><span class=""><h5>'+obj.data.title+'</h5></span></span></div></a></div>').insertAfter('#post-response'); // insert data

								}
							});
							
							return false;
						})
						
					},
					InterceptCategoryData: function(data) {
						
						console.log(data, ' this is data')
						
						$.ajax({
								url:filter.attr('action'),
								data:data, // form data
								type:filter.attr('method'), // POST
								beforeSend:function(xhr){},
								success:function(data){
				
									$('#categories').html(data); // insert data
									
									
								}
							});
							
							return false;
						
					},
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
						
					
				},
				ClearForm: {
					// to reset the form data
					
				},
				ClearResults: function() {
					// reset the post data
				},

			}
			};
				

			$(document).ready(function() {
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