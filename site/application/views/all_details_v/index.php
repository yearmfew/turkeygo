<!doctype html>
<html>
<head>
	<?php $this->load->view("includes/head"); ?>

</head>
<body>
	
	
	<?php $this->load->view("includes/sidebar"); ?>
	<?php $this->load->view("{$viewFolder}/content"); ?>

	

	
	<!-- Javascript files -->

	<?php $this->load->view("includes/include_script"); ?>
	

	<!-- /Javascript files -->

	
</body>
</html>