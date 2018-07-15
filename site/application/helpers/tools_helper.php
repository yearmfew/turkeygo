<?php

function get_cover_image($tour_id){

    $t = &get_instance();

    $t->load->model("tour_image_model");

    $cover_image = $t->tour_image_model->get(
        array(
            "isCover"       => 1,
            "tour_id"    => $tour_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->tour_image_model->get(
            array(
                "tour_id"    => $tour_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}


function get_settings(){

    $t = &get_instance();


    $settings = $t->session->userdata("settings");

    if(empty($settings)){

        $t->load->model("settings_model");

        $settings = $t->settings_model->get();

        $t->session->set_userdata("settings", $settings);
    }

    return $settings;
}
