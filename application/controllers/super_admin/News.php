<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
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



    function manage_news()
    {

        $data['title'] = 'News ';
        $data['breadcrums'] = ' News ';
        $data["news"] = $this->Common_model->all_data("news", "*");
        $this->load->view('super_admin/news/manage_news', $data);
    }


    function get_news_data()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            // print_r($val);
            

            $con = array("id" => $val['id']);
            $data["news"] = $this->Common_model->get_data("news", $con, "*");
            $this->load->view("super_admin/news/edit_news", $data);
        }
    }


    function update_news()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id", $val['id']);

            $dat = array(
                "news_limit"        => $val['limit'],
                "news_size"         => $val['size'],             

            );
           
           
            if ($this->Common_model->update_data("news", $con, $dat)) {
                $data = array('text' => "news updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);
    }

    function activate_news()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data = array("status" => 1);
            $con = array("id", $val['id']);
            if ($this->Common_model->update_data("news", $con, $data)) {
                $data = array('text' => "News updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);
    }


    function deactivate_news()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data = array("status" => 0);
            $con = array("id", $val['id']);
            if ($this->Common_model->update_data("news", $con, $data)) {
                $data = array('text' => "news updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        } else {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");
        }
        echo json_encode($data);


    }
}
