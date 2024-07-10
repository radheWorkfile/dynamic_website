<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Favicon extends CI_Controller
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



    function manage_favicon()
    {

        $data['title'] = 'Favicon ';
        $data['breadcrums'] = ' Favicon ';
        $data["favicon"] = $this->Common_model->all_data("favicon", "*");
        $this->load->view('super_admin/favicon/manage', $data);
    }


    function get_favicon_data()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            // print_r($val);
            

            $con = array("id" => $val['id']);
            $data["favicon"] = $this->Common_model->get_data("favicon", $con, "*");
            $this->load->view("super_admin/favicon/edit", $data);
        }
    }


    function update()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id"=> 1);

            $dat = array(
               
                "favicon_size"           => $val['size'],
                "favicon_width"          => $val['width'],
                "favicon_height"         => $val['height'],            

            );
           
            if ($this->Common_model->update_data("favicon", $con, $dat)) {
                $data = array('text' => "favicon updated !", 'icon' => "success");
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
            if ($this->Common_model->update_data("favicon", $con, $data)) {
                $data = array('text' => "favicon updated !", 'icon' => "success");
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
            if ($this->Common_model->update_data("favicon", $con, $data)) {
                $data = array('text' => "favicon updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);


    }
}
