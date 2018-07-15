	<!-- Page main wrapper -->
	<div id="main-content">
		<div id="print" class="page-wrapper">
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
								All Details
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
						<?php $this->load->view("includes/tour_detail_sidebar"); ?>
							<!-- /Post sidebar -->

							<!-- Post main area -->
							<div class="col-md-10">

								<!-- Post Content -->
								<div id="post-content">

									<p>
										<?php echo $tour->all_details; ?>
									</p>
									
								
								<?php $this->load->view("includes/blackquote_buttons"); ?>

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