<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Summernote extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/common_model', 'Common_model');

        date_default_timezone_set("Asia/Calcutta");

        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }

    // function permission()
    // {
    //     $con = array("id" => 1);
    //     $data['navbar'] = $this->Common_model->get_data("navbar", $con, "*");
    //     $data['banner_p'] = $this->Common_model->get_data("banner", $con, "*");

    //     return $data;
    // }







    function off()
    {
        $msg = array("sowmthing went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data = array("sumernote" => 0);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {
                $data = array("text" => "summernote Off", "icon" => "success");
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

            $data = array("sumernote" => 1);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {

                $data = array("text" => "Summernote On", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }

    function get_summernote()
    {
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();

            $summernote = $this->Common_model->get_data("admin_summernote", $val, "*");

            if (!empty($summernote)) {
                $data['summernote'] = $summernote;
            } else {
                $data['summernote'] = $val;
            }



            $this->load->view("admin/page/menu_page/summernote_section/edit_summernote", $data);
        }
    }


    function  update_summernote()
    {
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $da=array('content'=>$val['content']);
            $con = array("id" => $val['id'], "menu_id" => $val['menu_id']);

            if ($val['id'] == false) {
                $da['menu_id'] = $val['menu_id'];
                $da['status'] = 1;

                $this->Common_model->save_data("admin_summernote", $da);
                $data = array("text" => "Inserted Successfully", "icon" => "success");
            }
             else if ($this->Common_model->update_data("admin_summernote", $con, $da))
              {
                $data = array("text" => "updated Successfully", "icon" => "success");
            } 
            else
             {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        echo json_encode($data);
    }
}

