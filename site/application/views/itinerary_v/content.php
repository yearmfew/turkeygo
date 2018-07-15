	<!-- Page main wrapper -->
	<div id="main-content">
		<div class="page-wrapper">
			<div id="blog-single">

				<!-- Post header -->
				<div id="post-header" class="parallax-parent">

					<!-- Header image -->
					<div class="header-cover set-bg">

						<?php $image = get_cover_image($tour->id);  ?>

						<img src="http://localhost/turkeygo/panel/uploads/tours_v/<?php echo $image; ?>" alt="">
					</div>
					<!-- /Header image -->

					<!-- Header content -->
					<div class="header-content tj-parallax" data-ratio="1">
						<div class="container">
							<h1 class="post-title">
								Itinerary
							</h1>
						</div>
					</div>
					<!-- /Header content -->

				</div>
				<!-- /Post header -->

				<div class="container">

					<!-- Post body -->
					<div id="post-body">
						<div class="row">

						<?php $this->load->view("{$viewFolder}/tour_detail_sidebar"); ?>

							<!-- Post main area -->
							<div class="col-md-10">

								<!-- Post Content -->
								<div id="post-content">

									<h1>Inclusions</h1>
									<p>
										<?php echo $tour->inclusions; ?>
									</p>
									
									<h2>Exclusions</h2>
									<p>
										<?php echo $tour->exclusions;  ?>
									</p>
									<blockquote>
										Happiness is on the road, not the end of the road. - Epiktetos <br>
										Going on a journey is worth every price and sacrifice. - Elizabeth Gilbert <br>
										Live, travel, adventure, be thankful and never regret it. - Jack Kerouac <br>
										It does not matter where your last stop is, how memories and experiences you have! - Penelope Riley
									</blockquote>	
								</div>
								<!-- /Post Content -->



								<div class="pull-right"><br>
									<a href="#" target="_blank"><i class=" btn btn-md fa fa-envelope"> Send</i></a>
									<a href="#" target="_blank"><i class=" btn btn-md fa fa-file-pdf-o"> Print</i></a>

								</div>

							</div>
							<!-- /Post main area -->

						</div>
					</div>
					<!-- /Post body -->
				</div>
			</div>
		</div>
	</div>
		<!-- /Page main wrapper -->