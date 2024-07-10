<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallary extends CI_Controller
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



    function manage_gallary()
    {

        $data['title'] = 'Gallery ';
        $data['breadcrums'] = ' Gallery ';
        $data["gallary"] = $this->Common_model->all_data("gallary", "*");
        $this->load->view('super_admin/gallary/manage_gallary', $data);
    }


    function get_gallary_data()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            // print_r($val);
            

            $con = array("id" => $val['id']);
            $data["gallary"] = $this->Common_model->get_data("gallary", $con, "*");
            $this->load->view("super_admin/gallary/edit_gallary", $data);
        }
    }


    function update_gallary()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id", $val['id']);

            $dat = array(
                "gallary_limit"        => $val['limit'],
                "image_size"           => $val['size'],
                "image_width"          => $val['width'],
                "image_height"         => $val['width'],            

            );
           
            if ($this->Common_model->update_data("gallary", $con, $dat)) {
                $data = array('text' => "gallary updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);
    }

    function activate_gallary()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data = array("status" => 1);
            $con = array("id", $val['id']);
            if ($this->Common_model->update_data("gallary", $con, $data)) {
                $data = array('text' => "service updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);
    }


    function deactivate_gallary()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data = array("status" => 0);
            $con = array("id", $val['id']);
            if ($this->Common_model->update_data("gallary", $con, $data)) {
                $data = array('text' => "service updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);


    }
}
