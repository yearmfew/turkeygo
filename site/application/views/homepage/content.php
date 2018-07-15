	<!--Page main wrapper-->
	<div id="main-content" class="dark-template">
		<div class="page-wrapper">
			
			
			<div class="page-main ajax-element no-side">
				
				<?php $this->load->view("includes/grid_filter.php"); ?>




				<!-- portfolio wrapper -->	
				<div class="grid-portfolio no-padding same-ratio-items">
					<?php foreach ($tours as $tour) { ?>
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 <?php echo $tour->tour_type; ?>">
							<a href="<?php echo base_url("home/tour_page/$tour->id"); ?> " class="ajax-portfolio normal">
								<?php $image = get_cover_image($tour->id);  ?>


								<img  src=" http://localhost/turkeygo/panel/uploads/tours_v/<?php echo $image; ?>" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<div class="overlay-texts">
										<h3 class="title"><?php echo $tour->title; ?></h3>
										<h4 class="subtitle"><?php echo $tour->tour_type;  ?> , <?php echo $tour->city; ?> </h4>
									</div>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->

						


					<?php } ?>	
				</div>
				<!-- /portfolio wrapper -->	


				
				
			</div>

			<!--Ajax folio-->
			<div id="ajax-folio-loader">
				<!-- loading css3 -->
				<div id="followingBallsG">
					<div id="followingBallsG_1" class="followingBallsG">
					</div>
					<div id="followingBallsG_2" class="followingBallsG">
					</div>
					<div id="followingBallsG_3" class="followingBallsG">
					</div>
					<div id="followingBallsG_4" class="followingBallsG">
					</div>
				</div>
			</div>
			<div id="ajax-folio-item"></div>
			<!--Ajax folio-->	
		</div>
	</div>
	<!--/Page main wrapper-->