<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial extends CI_Controller
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



    function manage_testimonial()
    {

        $data['title'] = 'Testimonial ';
        $data['breadcrums'] = ' Testimonial ';
        $data["testimonial"] = $this->Common_model->all_data("testimonial", "*");
        $this->load->view('super_admin/testimonials/manage', $data);
    }



    function get_testimonial_data()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            // print_r($val);

            $con = array("id" => $val['id']);
            $data["testimonial"] = $this->Common_model->get_data("testimonial", $con, "*");
            $this->load->view("super_admin/testimonials/edit", $data);
        }
    }



    function update_testimonial()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id", $val['id']);

            $dat = array(
                "testimonial_limit"   => $val['testimonial_limit'],
                "icon_size"           => $val['size'],
                "icon_width"          => $val['width'],
                "icon_height"         => $val['height'],
                "content"             => $val['content'],

            );
            if ($this->Common_model->update_data("testimonial", $con, $dat)) {
                $data = array('text' => "service updated !", 'icon' => "success");
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
            if ($this->Common_model->update_data("testimonial", $con, $data)) {
                $data = array('text' => "Testimonial updated !", 'icon' => "success");
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
            if ($this->Common_model->update_data("testimonial", $con, $data)) {
                $data = array('text' => "Testimonial updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);


    }


}
