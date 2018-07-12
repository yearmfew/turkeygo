<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public $viewFolder ="";


public function __construct()
{
	parent::__construct();
	$this->viewFolder = "homepage";

	
}
	public function index()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "homepage";

		$this->load->model("tours_model");

		$viewData->tours = $this->tours_model->get_all(

			array(
				"isActive" =>1
				), "rank ASC"

		);

		$this->load->view("$viewData->viewFolder/index", $viewData);

	}




	public function tour_page()
	{
		$this->load->view("tourpage_v/index");
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */