<?php $settings= get_settings(); ?>
<div id="main-content" class="abs dark-template">
	<div class="page-wrapper">

		<!-- Sidebar -->
		<div class="page-side ajax-element">
			<div class="inner-wrapper vcenter-wrapper">
				<div class="side-content vcenter">
					<h1 class="title">
						<span>Contact us</span>
					</h1>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>

					<div class="contact-detail">
						<h5 class="bordered-fine">Location</h5>
						<?php echo $settings->address; ?>
					</div>

					<div class="contact-detail">
						<h5 class="bordered-fine">Contact</h5>
						<ul class="list-iconed">
							<li>
								<i class="fa fa-envelope"></i>
								<?php echo $settings->email; ?>
							</li>
							<li>
								<i class="fa fa-phone"></i><?php echo $settings->phone_1; ?>
							</li>
							<li>
								<i class="fa fa-phone"></i><?php echo $settings->phone_2; ?>							</li>
							</ul>
						</div>

						<div class="contact-detail">
							<h5 class="bordered-fine">Socials</h5>
							<ul class="social-icons">
								<li><a href="<?php echo $settings->facebook; ?> "><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?php echo $settings->twitter; ?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?php echo $settings->instagram; ?>"><i class="fa fa-instagram"></i></a></li>
								<li><a href="<?php echo $settings->linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>

							</ul>
						</div>

					</div>
				</div>
			</div>
			<!-- Sidebar -->

			<!-- Main Content -->
			<div class="page-main">

				HARİTA EKLENEBİLİR...
						</div>
			<!-- /Main Content -->

		</div>
	</div>