<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('super_admin/common_model', 'Common_model');
        // $this->load->model('super_admin/dashboard_model', 'Dashboard_model');
        ($this->session->userdata('user_cate') != 2) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }
    function index()
    {
        $data['title'] = 'Super Dashboard';
        $data['breadcrumb'] = ' Super Dashboard';
        $this->load->view('super_admin/dashboard', $data);
    }



    function manage_logo()
    {

        $data['title'] = 'Logo ';
        $data['breadcrums'] = ' Logo ';
        $data["logo"] = $this->Common_model->all_data("logo", "*");
        $this->load->view('super_admin/logo/manage', $data);
    }


    function get_logo_data()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            // print_r($val);
            

            $con = array("id" => $val['id']);
            $data["logo"] = $this->Common_model->get_data("logo", $con, "*");
            $this->load->view("super_admin/logo/edit", $data);
        }
    }


    function update()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id"=> 1);

            $dat = array(
               
                "logo_size"           => $val['size'],
                "logo_width"          => $val['width'],
                "logo_height"         => $val['height'],            

            );
           
            if ($this->Common_model->update_data("logo", $con, $dat)) {
                $data = array('text' => "Logo updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);
    }

    function activate()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data = array("status" => 1);
            $con = array("id", $val['id']);
            if ($this->Common_model->update_data("logo", $con, $data)) {
                $data = array('text' => "Logo updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);
    }


    function deactivate()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data = array("status" => 0);
            $con = array("id", $val['id']);
            if ($this->Common_model->update_data("logo", $con, $data)) {
                $data = array('text' => "Logo updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);


    }
}
