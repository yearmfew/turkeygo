<!doctype html>
<html>
<head>
	<?php $this->load->view("includes/head"); ?>

</head>
<body>


	
	<?php $this->load->view("includes/sidebar"); ?>
	
	<?php $this->load->view("{$viewFolder}/content"); ?>

    
	<!--JavaScript files-->

	<?php $this->load->view("includes/include_script"); ?>

	<!--/JavaScript files-->

	
</body>
</html>