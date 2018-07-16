<?php

class Contact extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "contact_v";

        $this->load->model("pages_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index(){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->pages_model->get();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/index", $viewData);
    }





    public function update($id)
    {
      $this->load->library("form_validation");

      $this->form_validation->set_rules("contact", "İçerik", "required|trim"); 
      $this->form_validation->set_message(
        array(
            "required"  => "<b>{field}</b> alanı doldurulmalıdır"
        )
    );

      $validate = $this->form_validation->run();

      if($validate){


        $update = $this->pages_model->update(
            array(
                "id"  => $id
            ),

            array(
                "contact"         => $this->input->post("contact"),                    
            )
        );

        if($update){

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

        redirect(base_url("dashboard"));

    } else {

        $viewData = new stdClass();


        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->pages_model->get(
            array(
                "id"    => $id,
            )
        );

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->form_error = true;
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/index", $viewData);
    }
}






}