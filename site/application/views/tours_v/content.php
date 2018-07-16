<?php $settings= get_settings(); ?>

<div id="main-content" class="dark-template">
	<div class="page-wrapper">

		<!-- Sidebar -->
		<div class="page-side ajax-element">
			<div class="inner-wrapper vcenter-wrapper">
				<div class="side-content vcenter">
					<div class="title">
						<span class="second-part">TurkeyGo</span>
						<span>Tours</span>
					</div>
					<p>Here is our tours...</p>

					<div class="row">
						<div class="col-md-12 col-sm-6">
							<div class="supervisor">
								<div class="sv-avatar">
									<img src="http://localhost/turkeygo/panel/uploads/settings_v/<?php echo $settings->logo; ?>" alt="staff image">
								
								</div>
								<div class="sv-detail">
									<h3 class="sv-name"><?php echo $settings->company_name; ?></h3><br>
									<ul class="list-iconed">
										<li><i class="fa fa-thumb-tack"></i><?php echo $settings->address; ?></li>
										<li><i class="fa fa-envelope"></i><?php echo $settings->email; ?></li>
										<li><i class="fa fa-phone"></i><?php echo $settings->phone_1; ?></li>
										<li><i class="fa fa-phone"></i><?php echo $settings->phone_2; ?></li>
									</ul>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Main Content -->
		<div class="page-main ajax-element">
			<!-- Portflio wrapper -->	
			<div class="ajax-folio vertical-folio">
				<?php foreach ($tours as $tour) {  ?>

					<!-- Portflio Item -->		
					<div class="vf-item tj-hover-3 inview-animate inview-fadeleft">
						<a href="<?php echo base_url("home/tour_page/$tour->id"); ?>" class="ajax-portfolio">

							<?php $image = get_cover_image($tour->id);  ?>
							<img class="" style="width:100%; height:100%;" src="http://localhost/turkeygo/panel/uploads/tours_v/<?php echo $image; ?>"></img>

							<!-- Item Overlay -->	
							<div class="tj-overlay vcenter-wrapper">
								<div class="overlay-texts vcenter">
									<h3 class="title"><?php echo $tour->title; ?></h3>
								
								</div>
							</div>
							<!-- /Item Overlay -->	
						</a>
					</div>
					<!-- /Portflio Item -->	
				<?php } ?>




			</div>
			<!-- /Portflio wrapper -->	
		</div>
		<!-- Main Content -->


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