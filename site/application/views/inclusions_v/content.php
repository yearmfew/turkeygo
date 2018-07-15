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
								Inclusions And Exclusions
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

							<!-- Post sidebar -->
							<div id="post-side" class="col-md-2">

								<!-- Post meta -->
								<div class="post-meta">
									<div class="post-author-image">
										<img src="assets/img/blog/author1.jpg" alt="">
									</div>
									<div class="post-meta-inner">
										<div class="post-date"><i class="fa fa-calendar-o list-icon"></i><?php echo $tour->startEnd; ?> </div>
										<div class="post-categories">

											<a href="<?php echo base_url("home/itinerary/$tour->id"); ?>">	<i class="fa fa-folder-o list-icon"></i> Itinerary</a><br>
											<a href="<?php echo base_url("home/all_details/$tour->id"); ?>"><i class="fa fa-folder-o list-icon"></i>All Details</a><br>
											<a href="<?php echo base_url("home/hotels/$tour->id"); ?>"><i class="fa fa-folder-o list-icon"></i>Hotels</a><br>

										</div>
										<div class="post-tags">
											<i class="fa fa-tags list-icon"></i> 
											<ul>
												<li><a href="#"><?php echo $tour->tour_type; ?></a></li><br>
												<li><a href="#"><?php echo $tour->meals; ?></a></li><br>
												<li><a href="#"><?php echo $tour->duration; ?></a></li><br>
												<li><a href="#"><?php echo $tour->city; ?></a></li><br>

											</ul>
										</div>
									</div>
								</div>
								<!-- /Post meta -->

								<!-- Post Social sharing -->
								<div id="post-share" class="box-social">
									<h4 class="u-heading">Share with Friends</h4>
									<ul>
										<!--  Sosyal medya paylaşımları sonra eklenebilir -->
									<!--<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li> -->
										<li><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
										<li><a href="#" target="_blank"><i class="fa fa-file-pdf-o"></i></a></li>
									</ul>
								</div>
								<!-- /Post Social sharing -->

							</div>
							<!-- /Post sidebar -->

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