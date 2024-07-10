<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
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

    function manage_service()
    {

        $data['title'] = 'service ';
        $data['breadcrums'] = ' service ';
        $data["service"] = $this->Common_model->all_data("service", "*");
        $this->load->view('super_admin/service/manage_service', $data);
    }
    function get_service_data()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            // print_r($val);

            $con = array("id" => $val['id']);
            $data["service"] = $this->Common_model->get_data("service", $con, "*");
            $this->load->view("super_admin/service/edit_service", $data);
        }
    }


    function update_service()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id", $val['id']);

            $dat = array(
                "service_limit"   => $val['Service_limit'],
                "icon_size"           => $val['size'],
                "icon_width"          => $val['width'],
                "icon_height"         => $val['height'],
                "content"         => $val['content'],

            );
            if ($this->Common_model->update_data("service", $con, $dat)) {
                $data = array('text' => "service updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);
    }

    function activate_service()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data = array("status" => 1);
            $con = array("id", $val['id']);
            if ($this->Common_model->update_data("service", $con, $data)) {
                $data = array('text' => "service updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);
    }


    function deactivate_service()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data = array("status" => 0);
            $con = array("id", $val['id']);
            if ($this->Common_model->update_data("service", $con, $data)) {
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
