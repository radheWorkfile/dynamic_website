<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
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

    function manage_banner()
    {

        $data['title'] = 'Banner ';
        $data['breadcrums'] = ' Banner ';
        $data["banner"] = $this->Common_model->all_data("banner", "*");
        $this->load->view('super_admin/banner/manage_banner', $data);
    }
    function get_banner_data()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data["banner"] = $this->Common_model->get_data("banner", $con, "*");
            $this->load->view("super_admin/banner/edit_banner", $data);

           
        }
    }


    function update_banner()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id", $val['id']);

            $dat = array(
                "banner_limit"   => $val['banner_limit'],
                "size"           => $val['size'],
                "width"          => $val['width'],
                "height"         => $val['height'],
            );
            if ($this->Common_model->update_data("banner", $con, $dat)) {
                $data = array('text' => "banner Limit updated !", 'icon' => "success");
            } else {
                $data = array('text' => "somethimg went wrong !", 'icon' => "error");
            }
        }
        else
        {
            $data = array('text' => "somethimg went wrong !", 'icon' => "error");

        }
        echo json_encode($data);
    }
}
