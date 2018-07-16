	      <?php $settings= get_settings(); ?>

	<!-- Post sidebar -->
	<div id="post-side" class="col-md-2">

		<!-- Post meta -->
		<div class="post-meta">
			<div class="post-author-image">
				<img src="http://localhost/turkeygo/panel/uploads/settings_v/<?php echo $settings->logo; ?>" alt="">
			</div>
			<div class="post-meta-inner">
				<div class="post-date"><i class="fa fa-calendar-o list-icon"></i><?php echo $tour->startEnd; ?> <hr> </div>
				<div class="post-categories">

					<a href="<?php echo base_url("home/itinerary/$tour->id"); ?>">	<i class="fa fa-folder-o list-icon"></i> Itinerary</a><br>
					<a href="<?php echo base_url("home/all_details/$tour->id"); ?>"><i class="fa fa-folder-o list-icon"></i>All Details</a><br>
					<a href="<?php echo base_url("home/inclusions/$tour->id"); ?>"><i class="fa fa-folder-o list-icon"></i>Inc. & Excl</a><br>
					<a href="<?php echo base_url("home/hotels/$tour->id"); ?>"><i class="fa fa-folder-o list-icon"></i>Hotels</a><br><hr>

					



					<a href="#"><i class="fa fa-tags list-icon"></i><?php echo $tour->tour_type; ?></a><br>
					<a href="#"><i class="fa fa-tags list-icon"></i><?php echo $tour->duration; ?></a><br>
					<a href="#"><i class="fa fa-tags list-icon"></i><?php echo $tour->city; ?></a>


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
										<li><a href="#" id="pdfDownloader"><i class="fa fa-file-pdf-o"></i></a></li>
									</ul>
								</div>
								<!-- /Post Social sharing -->

							</div>
							<!-- /Post sidebar -->