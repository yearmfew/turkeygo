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

		$this->load->model("tour_image_model");

		$viewData->coverimage = $this->tour_image_model->get(
			array(
				"tour_id" => $id,
				"isCover" =>1
			)

		);

//print_r($coverimage); die();


		$this->load->view("$viewData->viewFolder/index", $viewData);

	}




	public function tour_page($id)
	{


		$viewData = new stdClass();
		$viewData->viewFolder = "tourpage_v";
			$this->load->model("tours_model");
		$viewData->tour = $this->tours_model->get(
			array(
				"id"=> $id,
			)
		); 
			$this->load->model("tour_image_model");

		$viewData->image = $this->tour_image_model->get(
			array(
				"tour_id" => $id,
				"isActive" =>1,
			)
		);

 get_cover_image(47); die();

		$this->load->view("tourpage_v/index", $viewData);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */