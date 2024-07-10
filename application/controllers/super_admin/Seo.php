<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seo extends CI_Controller
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



    function manage_seo()
    {

        $data['title'] = 'Seo ';
        $data['breadcrums'] = ' Seo ';
        $data["seo"] = $this->Common_model->all_data("seo", "*");
        $this->load->view('super_admin/seo/manage_seo', $data);
    }


    function get_seo_data()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            // print_r($val);
            

            $con = array("id" => $val['id']);
            $data["seo"] = $this->Common_model->get_data("seo", $con, "*");
            $this->load->view("super_admin/seo/edit_seo", $data);
        }
    }


    function update_seo()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id", $val['id']);

            $dat = array(
                "page_title_limit"            => $val['page_title_limit'],
                "description_limit"           => $val['description_limit'],
                "keyword_limit"               => $val['keyword_limit'],
                      

            );
           
            if ($this->Common_model->update_data("seo", $con, $dat)) {
                $data = array('text' => "seo updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);
    }

    function activate_seo()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data = array("status" => 1);
            $con = array("id", $val['id']);
            if ($this->Common_model->update_data("seo", $con, $data)) {
                $data = array('text' => "Seo updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);
    }


    function deactivate_seo()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data = array("status" => 0);
            $con = array("id", $val['id']);
            if ($this->Common_model->update_data("seo", $con, $data)) {
                $data = array('text' => "Seo updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);


    }
}
