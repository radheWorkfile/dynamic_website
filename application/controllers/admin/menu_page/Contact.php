<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $con = array("id" => 1);
        $this->load->model('admin/common_model', 'Common_model');


        date_default_timezone_set("Asia/Calcutta");

        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }

    function permission()
    {
        $con = array("id" => 1);
        $data['navbar'] = $this->Common_model->get_data("navbar", $con, "*");
        // $data['banner_p'] = $this->Common_model->get_data("banner", $con, "*");
        // $data['news_p'] = $this->Common_model->get_data("news", $con, "*");
        // $data['service_p'] = $this->Common_model->get_data("service", $con, "*");



        return $data;
    }



    function off()
    {
        $msg = array("sowmthing went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data = array("contact" => 0);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {
                $data = array("text" => "Service Off", "icon" => "success");
            } else {
                $data = array("text" =>  $msg, "icon" => "error");
            }
        } else {
            $data = array("text" =>  $msg, "icon" => "error");
        }

        echo json_encode($data);
    }


    function on()
    {

        $msg = array("sowmthing went wrong");

        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);

            $data = array("contact" => 1);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {

                $data = array("text" => "Service On", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }



    function map_off()
    {
        $msg = array("sowmthing went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data = array("map" => 0);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {
                $data = array("text" => "Map Off", "icon" => "success");
            } else {
                $data = array("text" =>  $msg, "icon" => "error");
            }
        } else {
            $data = array("text" =>  $msg, "icon" => "error");
        }

        echo json_encode($data);
    }


    function map_on()
    {

        $msg = array("sowmthing went wrong");

        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);

            $data = array("map" => 1);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {

                $data = array("text" => "Map On", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }




}
