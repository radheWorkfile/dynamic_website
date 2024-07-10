<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/common_model', 'Common_model');

        date_default_timezone_set("Asia/Calcutta");

        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }

    function permission()
    {
        $con = array("id" => 1);
    //     $data['navbar'] = $this->Common_model->get_data("navbar", $con, "*");
          $data['seo_p'] = $this->Common_model->get_data("seo", $con, "*");

        return $data;
    }







    function off()
    {
        $msg = array("sowmthing went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data = array("seo" => 0);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {
                $data = array("text" => "Seo Off", "icon" => "success");
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

            $data = array("seo" => 1);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {

                $data = array("text" => "Seo On", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }

    function get_seo()
    {
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
           $data=$this->permission();

            $seo = $this->Common_model->get_data("admin_seo", $val, "*");

            if (!empty($seo)) {
                $data['seo'] = $seo;
            } else {
                $data['seo'] = $val;
            }



            $this->load->view("admin/page/menu_page/seo_section/edit_seo", $data);
        }
    }


    function  update_seo()
    {
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();

            $da=array(
                'page_title'       =>$val['title'],
                'meta_description' =>$val['description'],
                'meta_keywords'    =>$val['keywords'],
                'status'           =>1,
                'created_at'       =>date("y-m-d H:i:s"),

            );
           

            $con = array("id" => $val['id'], "menu_id" => $val['menu_id']);

            if ($val['id'] == false) {
                $da['menu_id'] = $val['menu_id'];
                $this->Common_model->save_data("admin_seo", $da);
                $data = array("text" => "Inserted Successfully", "icon" => "success");
            }
             else if ($this->Common_model->update_data("admin_seo", $con, $da))
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

