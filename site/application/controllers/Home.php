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

		$viewData->images = $this->tour_image_model->get_all(
			array(
				"tour_id" => $id,
				"isActive" =>1,
			), "rank ASC"
		);



		$this->load->view("tourpage_v/index", $viewData);
	}




	public function inclusions($id){
		$viewData = new stdClass();
		$viewData->viewFolder = "inclusions_v";
		$this->load->model("tours_model");
		$viewData->tour = $this->tours_model->get(
			array(
				"id"=> $id,
			)
		); 
		
		$this->load->view("$viewData->viewFolder/index", $viewData);
	}


	public function itinerary($id){
		$viewData = new stdClass();
		$viewData->viewFolder = "itinerary_v";
		$this->load->model("tours_model");
		$viewData->tour = $this->tours_model->get(
			array(
				"id"=> $id,
			)
		); 
		
		$this->load->view("$viewData->viewFolder/index", $viewData);
	}


	public function all_details($id){
		$viewData = new stdClass();
		$viewData->viewFolder = "all_details_v";
		$this->load->model("tours_model");
		$viewData->tour = $this->tours_model->get(
			array(
				"id"=> $id,
			)
		); 
		
		$this->load->view("$viewData->viewFolder/index", $viewData);
	}

	public function about()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "about_v";
		$this->load->view("$viewData->viewFolder/index", $viewData);

	}

	public function contact()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "contact_v";
		$this->load->view("$viewData->viewFolder/index", $viewData);

	}

	public function tours()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "tours_v";
		$this->load->model("tours_model");

		$viewData->tours = $this->tours_model->get_all(

			array(
				"isActive" =>1
			), "rank ASC"

		);



		$this->load->view("$viewData->viewFolder/index", $viewData);

	}


	function my_mPDF(){

		$viewData = new stdClass();
		$viewData->viewFolder = "contact_v";
		$filename = time()."_order.pdf";
	

		$html = $this->load->view('contact_v/index',$viewData,true);

// unpaid_voucher is unpaid_voucher.php file in view directory and $data variable has infor mation that you want to render on view.

		$this->load->library('M_pdf');

		$this->m_pdf->pdf->WriteHTML($html);

//download it D save F.

		$this->m_pdf->pdf->Output("base_url()".$filename, "F");
	}


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */