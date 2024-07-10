<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cont_img_sec extends CI_Controller
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



    function manage_Cont_img_section()
    {

        $data['title'] = 'Image Content Section ';
        $data['breadcrums'] = ' Image Content Section';
        $data["section"] = $this->Common_model->all_data("content_with_image", "*");
        $this->load->view('super_admin/image_content/manage', $data);
    }



    function get_edit_data()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            // print_r($val);

            $con = array("id" => $val['id']);
            $data["section"] = $this->Common_model->get_data("content_with_image", $con, "*");
            $this->load->view("super_admin/image_content/edit", $data);
        }
    }



    function update_section()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id", $val['id']);

            $dat = array(
                "max_limit"   => $val['max_limit'],
                "image_size"           => $val['size'],
                "image_width"          => $val['width'],
                "image_height"         => $val['height'],
                "content"             => $val['content'],

            );
            if ($this->Common_model->update_data("content_with_image", $con, $dat)) {
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
            if ($this->Common_model->update_data("content_with_image", $con, $data)) {
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
            if ($this->Common_model->update_data("content_with_image", $con, $data)) {
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
