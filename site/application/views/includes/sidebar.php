      <?php $settings= get_settings(); ?>
<a href="#" id="menu-toggle-wrapper">
	<div id="menu-toggle"></div>	
</a>

<!-- inner bar wrapper -->
<a href="#" id="inner-bar">
	<!-- Small logo -->
	<div class="logo-alt">
		<img src="http://localhost/turkeygo/panel/uploads/settings_v/<?php echo $settings->logo; ?>" alt="logo-mini">
	</div>
	<!-- /Small logo -->
</a>
<!-- /inner bar wrapper -->


<!-- Sidebar -->	
<div id="side-bar">
	<div class="inner-wrapper">	
		<div id="side-inner">

			<!-- Logo -->	
			<div id="logo-wrapper">
				<a href="index.html"><img src="http://localhost/turkeygo/panel/uploads/settings_v/<?php echo $settings->logo; ?>" alt="logo"></a>
			</div>
			<!-- /Logo -->	

			<div id="side-contents">

				<!-- Navigation -->	
				<ul id="navigation">
					<li class="menu-item current-menu-parent"><a href="<?php echo base_url(); ?> ">Home</a></li>
					<li class="menu-item"><a href="<?php echo base_url("home/about"); ?>">About Us</a></li>
					<li class="menu-item"><a href="<?php echo base_url("home/tours"); ?> ">Tours</a>
				
					</li>
					<li class="menu-item"><a href="<?php echo base_url("home/contact"); ?>">Contact</a></li>

						
				</ul>
				<!-- /Navigation -->	

			</div>	

			<!-- Sidebar footer -->	
			<div id="side-footer">
				<!-- Social icons -->	
				<ul class="social-icons">
					<li><a href="<?php echo $settings->facebook; ?> "><i class="fa fa-facebook"></i></a></li>
					<li><a href="<?php echo $settings->twitter; ?>"><i class="fa fa-twitter"></i></a></li>
					<li><a href="<?php echo $settings->instagram; ?>"><i class="fa fa-instagram"></i></a></li>
					<li><a href="<?php echo $settings->linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
				</ul>
				<!-- /Social icons -->	
				<div id="copyright">
					All Rights Reserved ©<?php echo date("Y") . " " . $settings->company_name; ?> 
				</div>
			</div>
			<!-- /Sidebar footer -->	

		</div>
	</div>
	
	
</div>
		<!-- /Sidebar -->