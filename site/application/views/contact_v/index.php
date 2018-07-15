<!doctype html>
<html>

<head>

	<?php $this->load->view("includes/head"); ?>
</head>
<body>

	<?php $this->load->view("includes/sidebar"); ?>
	
	<?php $this->load->view("{$viewFolder}/content"); ?>


	<!-- jquery core -->
	<?php $this->load->view("includes/include_script"); ?>



</body>

</html>