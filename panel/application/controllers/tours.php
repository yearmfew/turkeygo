<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tours extends CI_Controller {

	public $viewFolder = "";


	public function __construct()
	{
		parent::__construct();

		$this->viewFolder = "tours_v";

		$this->load->model("tours_model");
		$this->load->model("tour_image_model");

		if (!get_active_user()) {
			redirect(base_url("login"));
		}
	}
	public function index()	{
		$viewData = new stdClass();
		// veri tabanından verilerin getirilmesi
		$items = $this->tours_model->get_all(
			array(), "rank ASC");



		// view e gönderilecek değişkenlerin belirlenmesi

		$viewData ->viewFolder 		= $this->viewFolder;
		$viewData ->subViewFolder 	= "list";
		$viewData ->items 			= $items;

		

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}


	public function new_form(){
		$viewData = new stdClass();
		// view e gönderilecek değişkenlerin belirlenmesi
		$viewData ->viewFolder 		= $this->viewFolder;
		$viewData ->subViewFolder 	= "add";
		$viewData ->items =$item 	= $this->tours_model->get_all(
			array(), "tour_type ASC"
		);

		/*	$tour_types= $this->tours_model->get_all_distincted(
			array(), "tour_type ASC"
		); 
		$viewData ->tour_types 		= $tour_types;*/


		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}


	public function save(){

		$this->load->library("form_validation");

        // Kurallar yazilir..

		$detail_type = $this->input->post("detail_type");

		switch ($detail_type) {
			case 'auto':
			$this->form_validation->set_rules("title", "Başlık", "required|trim");
			$this->form_validation->set_rules("tour_type", "Tur Tipi", "required|trim");
			$this->form_validation->set_rules("highlights", "Highlights", "required");
			$this->form_validation->set_rules("itinerary", "Itinerary", "required");			
			$this->form_validation->set_rules("inclusions", "Inclusions", "required");			
			$this->form_validation->set_rules("exclusions", "Exclusions", "required");			
			$this->form_validation->set_rules("price", "Price", "required");			
			$this->form_validation->set_rules("date", "Date", "required|trim");
			$this->form_validation->set_rules("country", "Country", "required|trim");
			$this->form_validation->set_rules("city", "City", "required|trim");
			$this->form_validation->set_rules("duration", "Duration", "required|trim");
			$this->form_validation->set_rules("startEnd", "Start and End", "required|trim");
			$this->form_validation->set_rules("hotels", "Hotels", "required|trim");
			$this->form_validation->set_rules("meals", "Meals", "required|trim");




			$this->form_validation->set_message(
				array(
					"required"  => "<b>{field}</b> alanı doldurulmalıdır"
				)
			);

			break;
			case 'manual':
			$this->form_validation->set_rules("title", "Başlık", "required|trim");
			$this->form_validation->set_rules("tour_type", "Tur Tipi", "required|trim");
			$this->form_validation->set_rules("highlights", "Highlights", "required|trim");
			$this->form_validation->set_rules("itinerary", "Itinerary", "required|trim");
			$this->form_validation->set_rules("inclusions", "Inclusions", "required");			
			$this->form_validation->set_rules("exclusions", "Exclusions", "required");	
			$this->form_validation->set_rules("price", "Price", "required");			
			$this->form_validation->set_rules("manual_tour_details", "Tur Ayrıntıları", "required|trim");
			$this->form_validation->set_rules("date", "Date", "required|trim");
			$this->form_validation->set_rules("country", "Country", "required|trim");
			$this->form_validation->set_rules("city", "City", "required|trim");
			$this->form_validation->set_rules("duration", "Duration", "required|trim");
			$this->form_validation->set_rules("startEnd", "Start and End", "required|trim");
			$this->form_validation->set_rules("hotels", "Hotels", "required|trim");
			$this->form_validation->set_rules("meals", "Meals", "required|trim");


			$this->form_validation->set_message(
				array(
					"required"  => "<b>{field}</b> alanı doldurulmalıdır"
				)
			);
			break;
			case 'overwrite':
			$this->form_validation->set_rules("title", "Başlık", "required|trim");
			$this->form_validation->set_rules("tour_type", "Tur Tipi", "required|trim");
			$this->form_validation->set_rules("highlights", "Highlights", "required|trim");
			$this->form_validation->set_rules("itinerary", "Itinerary", "required|trim");
			$this->form_validation->set_rules("inclusions", "Inclusions", "required");			
			$this->form_validation->set_rules("exclusions", "Exclusions", "required");	
			$this->form_validation->set_rules("price", "Price", "required");			
			$this->form_validation->set_rules("overwrite_tour_details", "Tur Ayrıntılarını Giriniz", "required|trim");
			$this->form_validation->set_rules("date", "Date", "required|trim");
			$this->form_validation->set_rules("country", "Country", "required|trim");
			$this->form_validation->set_rules("city", "City", "required|trim");
			$this->form_validation->set_rules("duration", "Duration", "required|trim");
			$this->form_validation->set_rules("startEnd", "Start and End", "required|trim");
			$this->form_validation->set_rules("hotels", "Hotels", "required|trim");
			$this->form_validation->set_rules("meals", "Meals", "required|trim");

			$this->form_validation->set_message(
				array(
					"required"  => "<b>{field}</b> alanı doldurulmalıdır"
				)
			);
			break;
			default:
			break;
		}


			/*	$tour_type = $this->input->post("tour_type");

		if($tour_type = "yeni ekle"){
		$type=$this->input->post("tour_type_written");
		}
		else{ print_r($tour_type); die();
			$type=$tour_type;			}*/

        // Form Validation Calistirilir..
			$validate = $this->form_validation->run();
			if ($validate) {			
				switch ($detail_type) {
					case 'auto':
					$data = array(
						"title"     	=> $this->input->post("title"),
						"url"           => convertToSEO($this->input->post("title")),
						"tour_type"		=> $this->input->post("tour_type"),
						"highlights"    => $this->input->post("highlights"),
						"itinerary"     => $this->input->post("itinerary"),
						"inclusions"    => $this->input->post("inclusions"),
						"exclusions"    => $this->input->post("exclusions"),
						"price"     	=> $this->input->post("price"),
						"all_details"   => "auto", 
						"detail_type"	=>$this->input->post("detail_type"),  
						"date"		  	=> $this->input->post("date"),
						"country"		=> $this->input->post("country"),
						"city"			=> $this->input->post("city"),
						"duration"		=> $this->input->post("duration"),
						"startEnd"		=> $this->input->post("startEnd"),
						"hotels"		=> $this->input->post("hotels"),
						"meals"			=> $this->input->post("meals"),                
						"rank"      	=> 0,
						"isActive"      => 1,
						"createdAt"     => date("Y-m-d H:i:s"),
					);

					break;
					case 'manual':
					$data = array(
						"title"     	=> $this->input->post("title"),
						"url"           => convertToSEO($this->input->post("title")),
						"tour_type"		=> $this->input->post("tour_type"),
						"highlights"    => $this->input->post("highlights"),
						"itinerary"     => $this->input->post("itinerary"),
						"inclusions"    => $this->input->post("inclusions"),
						"exclusions"    => $this->input->post("exclusions"),
						"price"     	=> $this->input->post("price"),
						"all_details"   => $this->input->post("manual_tour_details"),                  
						"detail_type"	=>$this->input->post("detail_type"),   
						"date"			=> $this->input->post("date"),
						"country"		=> $this->input->post("country"),
						"city"			=> $this->input->post("city"),
						"duration"		=> $this->input->post("duration"),
						"startEnd"		=> $this->input->post("startEnd"),
						"hotels"		=> $this->input->post("hotels"),
						"meals"			=> $this->input->post("meals"),               
						"rank"      	=> 0,
						"isActive"      => 1,
						"createdAt"     => date("Y-m-d H:i:s"),
					);
					break;
					case 'overwrite':
					$data = array(
						"title"     	=> $this->input->post("title"),
						"url"           => convertToSEO($this->input->post("title")),
						"tour_type"		=> $this->input->post("tour_type"),
						"highlights"    => $this->input->post("highlights"),
						"itinerary"     => $this->input->post("itinerary"),
						"inclusions"    => $this->input->post("inclusions"),
						"exclusions"    => $this->input->post("exclusions"),
						"price"     	=> $this->input->post("price"),
						"all_details"   => $this->input->post("overwrite_tour_details"),                  
						"detail_type"	=>$this->input->post("detail_type"),  
						"date"			=> $this->input->post("date"),
						"country"		=> $this->input->post("country"),
						"city"			=> $this->input->post("city"),
						"duration"		=> $this->input->post("duration"),
						"startEnd"		=> $this->input->post("startEnd"),
						"hotels"		=> $this->input->post("hotels"),
						"meals"			=> $this->input->post("meals"),                
						"rank"      	=> 0,
						"isActive"      => 1,
						"createdAt"     => date("Y-m-d H:i:s"),

					);
					break;
					default:
					break;
				}

				$insert = $this->tours_model->add($data);


				if ($insert) {
					$alert = array(
						"title" => "Tebrikler",
						"text" => "Tur eklendi",
						"type" => "success"
					);



				} 
				else{

					$alert = array(
						"title" => "Tebrikler",
						"text" => "Tur eklendi",
						"type" => "success"
					);


				}
				$this->session->set_flashdata("alert", $alert);
				redirect(base_url("tours"));

				die();


			} else{ 

				$viewData = new stdClass();

				/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
				$viewData->viewFolder = $this->viewFolder;
				$viewData->subViewFolder = "add";
				$viewData->form_error = true;
				$viewData->detail_type = $detail_type;
				$viewData ->items =$item 	= $this->tours_model->get_all(
					array(), "tour_type ASC"
				);


				$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);


			}

		} 
		public function update_form($id){

			$viewData = new stdClass();

			/** Tablodan Verilerin Getirilmesi.. */
			$item = $this->tours_model->get(
				array(
					"id"    => $id,
				)
			);

			/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
			$viewData->viewFolder = $this->viewFolder;
			$viewData->subViewFolder = "update";
			$viewData->item = $item;

			$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
		}


		public function update($id){ 
			$this->load->library("form_validation");

        // Kurallar yazilir..

			$detail_type = $this->input->post("detail_type");

			switch ($detail_type) {
				case 'auto':
				$this->form_validation->set_rules("title", "Başlık", "required|trim");
				$this->form_validation->set_rules("tour_type", "Tur Tipi", "required|trim");
				$this->form_validation->set_rules("highlights", "Highlights", "required");
				$this->form_validation->set_rules("itinerary", "Itinerary", "required");			
				$this->form_validation->set_rules("inclusions", "Inclusions", "required");			
				$this->form_validation->set_rules("exclusions", "Exclusions", "required");			
				$this->form_validation->set_rules("price", "Price", "required");			
				$this->form_validation->set_rules("date", "Date", "required|trim");
				$this->form_validation->set_rules("country", "Country", "required|trim");
				$this->form_validation->set_rules("city", "City", "required|trim");
				$this->form_validation->set_rules("duration", "Duration", "required|trim");
				$this->form_validation->set_rules("startEnd", "Start and End", "required|trim");
				$this->form_validation->set_rules("hotels", "Hotels", "required|trim");
				$this->form_validation->set_rules("meals", "Meals", "required|trim");




				$this->form_validation->set_message(
					array(
						"required"  => "<b>{field}</b> alanı doldurulmalıdır"
					)
				);

				break;
				case 'manual':
				$this->form_validation->set_rules("title", "Başlık", "required|trim");
				$this->form_validation->set_rules("tour_type", "Tur Tipi", "required|trim");
				$this->form_validation->set_rules("highlights", "Highlights", "required|trim");
				$this->form_validation->set_rules("itinerary", "Itinerary", "required|trim");
				$this->form_validation->set_rules("inclusions", "Inclusions", "required");			
				$this->form_validation->set_rules("exclusions", "Exclusions", "required");	
				$this->form_validation->set_rules("price", "Price", "required");					
				$this->form_validation->set_rules("manual_tour_details", "Tur Ayrıntıları", "required|trim");
				$this->form_validation->set_rules("date", "Date", "required|trim");
				$this->form_validation->set_rules("country", "Country", "required|trim");
				$this->form_validation->set_rules("city", "City", "required|trim");
				$this->form_validation->set_rules("duration", "Duration", "required|trim");
				$this->form_validation->set_rules("startEnd", "Start and End", "required|trim");
				$this->form_validation->set_rules("hotels", "Hotels", "required|trim");
				$this->form_validation->set_rules("meals", "Meals", "required|trim");


				$this->form_validation->set_message(
					array(
						"required"  => "<b>{field}</b> alanı doldurulmalıdır"
					)
				);
				break;
				case 'overwrite':
				$this->form_validation->set_rules("title", "Başlık", "required|trim");
				$this->form_validation->set_rules("tour_type", "Tur Tipi", "required|trim");
				$this->form_validation->set_rules("highlights", "Highlights", "required|trim");
				$this->form_validation->set_rules("itinerary", "Itinerary", "required|trim");
				$this->form_validation->set_rules("inclusions", "Inclusions", "required");			
				$this->form_validation->set_rules("exclusions", "Exclusions", "required");
				$this->form_validation->set_rules("price", "Price", "required");					
				$this->form_validation->set_rules("overwrite_tour_details", "Tur Ayrıntılarını Giriniz", "required|trim");
				$this->form_validation->set_rules("date", "Date", "required|trim");
				$this->form_validation->set_rules("country", "Country", "required|trim");
				$this->form_validation->set_rules("city", "City", "required|trim");
				$this->form_validation->set_rules("duration", "Duration", "required|trim");
				$this->form_validation->set_rules("startEnd", "Start and End", "required|trim");
				$this->form_validation->set_rules("hotels", "Hotels", "required|trim");
				$this->form_validation->set_rules("meals", "Meals", "required|trim");

				$this->form_validation->set_message(
					array(
						"required"  => "<b>{field}</b> alanı doldurulmalıdır"
					)
				);
				break;
				default:
				break;
			}

        // Form Validation Calistirilir..
			$validate = $this->form_validation->run();
			if ($validate) {			
				switch ($detail_type) {
					case 'auto':
					$data = array(
						"title"     	=> $this->input->post("title"),
						"url"           => convertToSEO($this->input->post("title")),
						"tour_type"		=> $this->input->post("tour_type"),
						"highlights"     	=> $this->input->post("highlights"),
						"itinerary"     => $this->input->post("itinerary"),
						"inclusions"     => $this->input->post("inclusions"),
						"exclusions"     => $this->input->post("exclusions"),
						"price"     => $this->input->post("price"),
						"all_details"   => "auto", 
						"detail_type"	=>$this->input->post("detail_type"),  
						"date"		=> $this->input->post("date"),
						"country"		=> $this->input->post("country"),
						"city"		=> $this->input->post("city"),
						"duration"		=> $this->input->post("duration"),
						"startEnd"		=> $this->input->post("startEnd"),
						"hotels"		=> $this->input->post("hotels"),
						"meals"		=> $this->input->post("meals"),                
						"rank"      	=> 0,
						"isActive"      => 1,
						"createdAt"     => date("Y-m-d H:i:s"),
					);

					break;
					case 'manual':
					$data = array(
						"title"     	=> $this->input->post("title"),
						"url"           => convertToSEO($this->input->post("title")),
						"tour_type"		=> $this->input->post("tour_type"),
						"highlights"     	=> $this->input->post("highlights"),
						"itinerary"     => $this->input->post("itinerary"),
						"inclusions"     => $this->input->post("inclusions"),
						"exclusions"     => $this->input->post("exclusions"),
						"price"     => $this->input->post("price"),
						"all_details"   => $this->input->post("manual_tour_details"),                  
						"detail_type"	=>$this->input->post("detail_type"),   
						"date"		=> $this->input->post("date"),
						"country"		=> $this->input->post("country"),
						"city"		=> $this->input->post("city"),
						"duration"		=> $this->input->post("duration"),
						"startEnd"		=> $this->input->post("startEnd"),
						"hotels"		=> $this->input->post("hotels"),
						"meals"		=> $this->input->post("meals"),               
						"rank"      	=> 0,
						"isActive"      => 1,
						"createdAt"     => date("Y-m-d H:i:s"),
					);
					break;
					case 'overwrite':
					$data = array(
						"title"     	=> $this->input->post("title"),
						"url"           => convertToSEO($this->input->post("title")),
						"tour_type"		=> $this->input->post("tour_type"),
						"highlights"     	=> $this->input->post("highlights"),
						"itinerary"     => $this->input->post("itinerary"),
						"inclusions"     => $this->input->post("inclusions"),
						"exclusions"     => $this->input->post("exclusions"),
						"price"     => $this->input->post("price"),
						"all_details"   => $this->input->post("overwrite_tour_details"),                  
						"detail_type"	=>$this->input->post("detail_type"),  
						"date"		=> $this->input->post("date"),
						"country"		=> $this->input->post("country"),
						"city"		=> $this->input->post("city"),
						"duration"		=> $this->input->post("duration"),
						"startEnd"		=> $this->input->post("startEnd"),
						"hotels"		=> $this->input->post("hotels"),
						"meals"		=> $this->input->post("meals"),                
						"rank"      	=> 0,
						"isActive"      => 1,
						"createdAt"     => date("Y-m-d H:i:s"),

					);
					break;
					default:
					break;
				}



				$update = $this->tours_model->update(array("id" => $id), $data);

				if ($update) {
					$alert = array(
						"title" => "Tebrikler",
						"text" => "Tur güncellendi",
						"type" => "success"
					);



				} 
				else{

					$alert = array(
						"title" => "olmadı",
						"text" => "Tur eklendi",
						"type" => "warning"
					);


				}
				$this->session->set_flashdata("alert", $alert);
				redirect(base_url("tours"));

				die();


			} else{ 

				$viewData = new stdClass();
				/** Tablodan Verilerin Getirilmesi.. */
				$item = $this->tours_model->get(
					array(
						"id"    => $id,
					)
				);

				/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */ 
				$viewData->viewFolder = $this->viewFolder;
				$viewData->subViewFolder = "update";
				$viewData->form_error = true;
				$viewData->detail_type = $detail_type;
				$viewData ->item 	= $item;


				$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);


			}

		} 

		public function delete($id){
			$item_images = $this->tour_image_model->get_all(
				array(
					"tour_id" => $id
				), "id ASC"
			);
			foreach ($item_images as $image ) {
				$delete_image = $this->tour_image_model->delete(
					array(
						"tour_id" => $image->tour_id,
					)
				);
			}
			$delete = $this->tours_model->delete(
				array(
					"id" => $id,
				)
			);

			if($delete && $delete_image){

				foreach ($item_images as $image ) {
					unlink("uploads/{$this->viewFolder}/$image->img_url"); }

					$alert = array(
						"title" => "Tebrikler...",
						"text" => "İşleminiz başarılı",
						"type"  => "success"
					);

				} else {

					$alert = array(
						"title" => "ooppss",
						"text" => "Bir sorun oluştu",
						"type"  => "error"
					);
				}

            		// İşlemin Sonucunu Session'a yazma işlemi...
				$this->session->set_flashdata("alert", $alert);

				redirect(base_url("tours"));

			}

			public function isActiveSetter($id){
				if($id){
					$isActive = ($this->input->post("data") === "true") ? 1 : 0;

					$this->tours_model->update(array(
						"id"  => $id
					),
					array(
						"isActive"  => $isActive
					)
				);

				}
			}


			public function rankSetter(){
				$data = $this->input->post("data");
				parse_str($data, $order);
				$items = $order["ord"];
				foreach ($items as $rank => $id){
					$this->tours_model->update(
						array(
							"id"        => $id,
							"rank !="   => $rank
						),
						array(
							"rank"      => $rank
						)
					);
				}
			}

			public function imageRankSetter(){


				$data = $this->input->post("data");

				parse_str($data, $order);

				$items = $order["ord"];

				foreach ($items as $rank => $id){

					$this->tour_image_model->update(
						array(
							"id"        => $id,
							"rank !="   => $rank
						),
						array(
							"rank"      => $rank
						)
					);

				}
			}


			public function image_form($id){

				$viewData = new stdClass();

				// tablodan verilerin getirilmesi
				$item = $this->tours_model->get(
					array(
						"id"    => $id,
					)
				);

				/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
				$viewData->viewFolder = $this->viewFolder;
				$viewData->subViewFolder = "image";
				$viewData->item=$item;
				$viewData->item_images = $this->tour_image_model->get_all(
					array(
						"tour_id" => $id
					), "rank ASC"
				);

				$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
			}

			public function image_upload($id){

				$file_name = convertToSEO(pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME)) .
				"." . pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

				$config["allowed_types"] 	= "jpg|jpeg|png";
				$config["upload_path"]   	= "uploads/$this->viewFolder/";
				$config["file_name"]        = $file_name;

				$this->load->library("upload", $config);

				$upload = $this->upload->do_upload("file");

				if($upload){

					$uploaded_file = $this->upload->data("file_name");

					$this->tour_image_model->add(
						array(
							"img_url"		=>$uploaded_file,
							"rank"			=>0,
							"isActive"		=>1,
							"createdAt"		=>date("Y-m-d H:i:s"),
							"tour_id"	=>$id
						)
					);


				}else{
					echo "işlem başarısız";
				}
			}

			public function refresh_image_list($id){

				$viewData = new stdClass();

				/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
				$viewData->viewFolder = $this->viewFolder;
				$viewData->subViewFolder = "image";

				$viewData->item_images = $this->tour_image_model->get_all(
					array(
						"tour_id"    => $id
					)
				);

				$render_html = $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/render_elements/image_list_v", $viewData, true);

				echo $render_html;

			}

			public function imageDelete($id, $parent_id){

				$fileName = $this->tour_image_model->get(
					array(
						"id"    => $id
					)
				);


				$delete = $this->tour_image_model->delete(
					array(
						"id" => $id,
					)
				);



				if ($delete) {

					unlink("uploads/{$this->viewFolder}/$fileName->img_url");

					redirect(base_url("tours/image_form/$parent_id"));

				}else {

					redirect(base_url("tours/image_form/$parent_id"));

				}

			}
			public function imageIsActiveSetter($id)
			{
				if($id){
					$isActive = ($this->input->post("data") === "true") ? 1 : 0;

					$this->tour_image_model->update(array(
						"id"  => $id
					),
					array(
						"isActive"  => $isActive
					)
				);

				}
			}


			public function isCoverSetter($id, $parent_id){
				if($id && $parent_id){
					$isCover = ($this->input->post("data") === "true") ? 1 : 0;

				// Kapak yapılmak istenen kayıt
					$this->tour_image_model->update(array(
						"id"		  => $id,
						"tour_id"  => $parent_id
					),
					array(
						"isCover"  => $isCover
					)
				);
				// Kapak yapılmayan diğer kayıtlar
					$this->tour_image_model->update(array(
						"id !="		  => $id,
						"tour_id"  => $parent_id
					),
					array(
						"isCover"  => 0
					)
				);

					$viewData = new stdClass();

					/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
					$viewData->viewFolder = $this->viewFolder;
					$viewData->subViewFolder = "image";

					$viewData->item_images = $this->tour_image_model->get_all(
						array(
							"tour_id"    => $parent_id
						), "rank ASC"
					);

					$render_html = $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/render_elements/image_list_v", $viewData, true);

					echo $render_html;

				}
			}






		}

