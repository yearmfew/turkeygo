<!doctype html>
<html>
    <head>
<?php $this->load->view("includes/head"); ?>

    </head>
    <body>
		<?php $this->load->view("includes/sidebar"); ?>

		<!-- Page main wrapper -->
	<?php $this->load->view("{$viewFolder}/content"); ?>
		<!-- /Page main wrapper -->


		<?php $this->load->view("includes/include_script"); ?>

		
    </body>
</html>