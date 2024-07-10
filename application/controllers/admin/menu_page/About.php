<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
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
            $data = array("about" => 0);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {
                $data = array("text" => "About Off", "icon" => "success");
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

            $data = array("about" => 1);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {

                $data = array("text" => "About On", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }

    function get_about()
    {
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();

            $about = $this->Common_model->get_data("admin_about", $val, "*");

            if (!empty($about)) {
                $data['about'] = $about;
            } else {
                $data['about'] = $val;
            }



            $this->load->view("admin/page/menu_page/about_section/edit_about", $data);
        }
    }


    function  update_about()
    {
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();

            $config = [
                "upload_path"         => './uploads/image',
                "allowed_types"       => 'jpeg|jpg|png',
            ];
            $this->load->library('upload', $config);



            if ($this->upload->do_upload('image')) {
                $dat =  $this->upload->data();
            } else {
                $msg = array($this->upload->display_errors());
            }

                  $url=(!empty($val['button_url']))?$val['button_url']:0;
            if (!empty($dat)) {
                $image = $this->Common_model->get_data("admin_about", array("id" => $val['id']), "about_image");
                $image_path = "uploads/image/" . $image['about_image'];
                unlink($image_path);
                
                $da = array(
                    "about_header"       => $val['header'],
                    "about_text"         => $val['header_text'],
                    "button_url"         => $url,
                    "button_text"        => $val['button_text'],
                    "button_color"       => $val['button_color'],
                    "status"             => 1,
                    "created_at"         => date("y-m-d H:i:s"),
                    "about_image"       => $dat['file_name'],
                );
            } else {
                $da = array(
                    "about_header"       => $val['header'],
                    "about_text"         => $val['header_text'],
                    "button_url"         => $url,
                    "button_text"        => $val['button_text'],
                    "button_color"       => $val['button_color'],
                    "status"             => 1,
                    "created_at"         => date("y-m-d H:i:s"),

                );
            }



            $con = array("id" => $val['id'], "menu_id" => $val['menu_id']);

            if ($val['id'] == false) {
                $da['menu_id'] = $val['menu_id'];
                $this->Common_model->save_data("admin_about", $da);
                $data = array("text" => "Inserted Successfully", "icon" => "success");
            } else if ($this->Common_model->update_data("admin_about", $con, $da)) {
                $data = array("text" => "updated Successfully", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        echo json_encode($data);
    }
}
