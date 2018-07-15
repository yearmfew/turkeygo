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


						<a href="<?php echo base_url("home/inclusions/$tour->id"); ?>" class="btn btn-toranj alt btn-icon w250"><i class="fa fa-info-circle "></i> Inclusions & Exclusions</a>
						<a href="<?php echo base_url("home/itinerary/$tour->id"); ?>" class="btn btn-toranj alt btn-icon w250"><i class="fa fa-calendar "></i> Itinerary</a>
						<a href="<?php echo base_url("home/all_details/$tour->id"); ?>" class="btn btn-toranj alt btn-icon w250"><i class="fa fa-globe "></i> All Details</a>
						<a class="btn btn-toranj alt btn-icon w250"><i class="fa fa-eur "></i> Price</a>
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
<?php $image = get_cover_image($tour->id);  ?>

					<!-- parallax header -->
					<div class="parallax-head set-bg sync-width">
						<img src="http://localhost/turkeygo/panel/uploads/tours_v/<?php echo $image; ?>" class="img-responsive" alt="image" >
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


<a class="btn btn-toranj alt btn-icon"><i class="fa fa-edit"></i>Icon button</a>

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
							<?php echo $tour->highlights; ?>
							</p>
						</div>	

						<div class="custom-grid-row">
							<div class="col-1-1">
								<img src="" class="img-responsive inview-animate inview-scale" alt="">
							</div>
						</div>
						<div class="custom-grid-row">

							<?php $num=0;  foreach ($images as $image){ ?>
								<div class="col-1-2">
									<img src="http://localhost/turkeygo/panel/uploads/tours_v/<?php echo $image->img_url; ?>" class="img-responsive inview-animate inview-scale" alt="">
								</div>
							<?php  } ?>
					</div>


				</div>	
			</div>
			<!-- /main contents -->

		</div>
	</div>
		<!-- /Page main wrapper -->