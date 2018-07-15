	<!-- Page main wrapper -->
	<div id="main-content" class="dark-template">
		<div class="page-wrapper">

			<!-- Sidebar -->
			<div class="page-side hidden-sm hidden-xs">
				<div class="inner-wrapper vcenter-wrapper">
					<div class="side-content vcenter">

						<h2 class="title"><?php echo $tour->title; ?></h2>

						<ul class="list-items">
							<li>
								<div class="list-label">Tour Type:</div>
								<div class="list-des"><?php echo $tour->tour_type; ?></div>
							</li>
							<li>
								<div class="list-label">Date:</div>
								<div class="list-des"><?php echo $tour->date; ?></div>
							</li>
							<li>
								<div class="list-label">City:</div>
								<div class="list-des"><?php echo $tour->city; ?></div>
							</li>
							<li>
								<div class="list-label">Start End:</div>
								<div class="list-des"><?php echo $tour->startEnd; ?></div>
							</li>
							<li>
								<div class="list-label">Meals:</div>
								<div class="list-des"><?php echo $tour->meals; ?></div>
							</li>
							<li>
								<div class="list-label">Duration:</div>
								<div class="list-des"><?php echo $tour->duration; ?></div>
							</li>
						</ul>	
					</div>
				</div>
				<!-- portfolio nav -->
				<ul class="portfolio-nav">
					<li>
						<a class="portfolio-prev" href="portfolio-item2-video.html">
							<i class="fa fa-angle-left"></i>
							<span>Prev</span>
						</a>
					</li>
					<li>
						<a class="portfolio-close" href="#">
							<i class="fa fa-times"></i>
							<span>Close</span>
						</a>
					</li>
					<li>
						<a class="portfolio-next" href="portfolio-item2.html">
							<i class="fa fa-angle-right"></i>
							<span>Next</span>
						</a>
					</li>
				</ul>
				<!--/ portfolio nav -->
			</div>
			<!-- /Sidebar -->

			<!-- main contents -->
			<div class="page-main">
				<div class="inner-wrapper sync-width-parent">


					<!-- parallax header -->
					<div class="parallax-head set-bg sync-width">
						<img src="<?php echo base_url("assets"); ?>/img/portfolio/single1/cover.jpg" class="img-responsive" alt="image" >
					</div>

					<!-- the contents of the page -->
					<div class="parallax-contents">

						<div class="portfolio-md-detail visible-sm visible-xs">

							<h2 class="title"><?php echo $tour->title; ?></h2>

							<ul class="list-items">
								<li>
									<div class="list-label">Tour Type:</div>
									<div class="list-des"><?php echo $tour->tour_type; ?></div>
								</li>
								<li>
									<div class="list-label">Date:</div>
									<div class="list-des"><?php echo $tour->date; ?></div>
								</li>
								<li>
									<div class="list-label">City:</div>
									<div class="list-des"><?php echo $tour->city; ?></div>
								</li>
								<li>
									<div class="list-label">Start End:</div>
									<div class="list-des"><?php echo $tour->startEnd; ?></div>
								</li>
								<li>
									<div class="list-label">Meals:</div>
									<div class="list-des"><?php echo $tour->meals; ?></div>
								</li>
								<li>
									<div class="list-label">Duration:</div>
									<div class="list-des"><?php echo $tour->duration; ?></div>
								</li>
							</ul>	

							<!-- portfolio nav -->
							<ul class="portfolio-nav">
								<li>
									<a class="portfolio-prev" href="portfolio-item2-video.html">
										<i class="fa fa-angle-left"></i>
										<span>Prev</span>
									</a>
								</li>
								<li>
									<a class="portfolio-close" href="#">
										<i class="fa fa-times"></i>
										<span>Close</span>
									</a>
								</li>
								<li>
									<a class="portfolio-next" href="portfolio-item2.html">
										<i class="fa fa-angle-right"></i>
										<span>Next</span>
									</a>
								</li>
							</ul>
							<!--/ portfolio nav -->
						</div>


						<div class="centered-description">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
							</p>
						</div>	

						<div class="custom-grid-row">
							<div class="col-1-1">
								<img src="<?php echo base_url("uploads/tours_v/"); echo $image->img_url; ?>" class="img-responsive inview-animate inview-scale" alt="">
							</div>
						</div>

						<div class="custom-grid-row">
							<div class="col-1-2">
								<img src="<?php echo base_url("assets"); ?>/img/portfolio/single1/01.jpg" class="img-responsive inview-animate inview-scale" alt="">
							</div>
							<div class="col-1-2">
								<img src="<?php echo base_url("assets"); ?>/img/portfolio/single1/02.jpg" class="img-responsive inview-animate inview-scale" alt="">
							</div>
						</div>

						<div class="custom-grid-row">
							<div class="col-1-2">
								<img src="<?php echo base_url("assets"); ?>/img/portfolio/single1/03.jpg" class="img-responsive inview-animate inview-scale" alt="">
							</div>
							<div class="col-1-2">
								<img src="<?php echo base_url("assets"); ?>/img/portfolio/single1/04.jpg" class="img-responsive inview-animate inview-scale" alt="">
							</div>
						</div>

						<div class="custom-grid-row">
							<div class="col-1-1">
								<img src="<?php echo base_url("assets"); ?>/img/portfolio/single1/08.jpg" class="img-responsive inview-animate inview-scale" alt="">
							</div>
						</div>

					</div>


				</div>	
			</div>
			<!-- /main contents -->

		</div>
	</div>
		<!-- /Page main wrapper -->