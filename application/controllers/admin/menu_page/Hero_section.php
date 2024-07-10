<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hero_section extends CI_Controller
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
        $data['navbar'] = $this->Common_model->get_data("navbar", $con, "*");
        // $data['banner_p'] = $this->Common_model->get_data("banner", $con, "*");
        $data['hero_p'] = $this->Common_model->get_data("content_with_image",  array("id" => 1), "*");


        return $data;
    }








    function off()
    {
        $msg = array("sowmthing went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data = array("hero_section" => 0);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {
                $data = array("text" => "Hero Section Off", "icon" => "success");
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

            $data = array("hero_section" => 1);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {

                $data = array("text" => "Hero Section On", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }



    function get_data()
    {

        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $data = $this->permission();
            $val = $this->input->post();
            $data['hero'] = $this->Common_model->all_data_con("admin_hero_section", $val, "*");
            $this->load->view("admin/page/menu_page/hero_section/view_hero", $data);
        }

      
    }

    function add_data()
    {
       $data = $this->permission();


        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();

            /*=======image uploading start======= */

            $config['upload_path']          = './uploads/image/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = $data['hero_p']['image_size'];
            $config['max_width']            = $data['hero_p']['image_width'];
            $config['max_height']           = $data['hero_p']['image_height'];

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $image_name='';
            } else {
                $image_data =  $this->upload->data();
                $image_name = 'uploads/image/'.$image_data['file_name']; 
            }


            /*=======image uploading end======= */
            if($val['text']!='' || $val['header']!='' || !empty($image_data) )
            {
            $vals = array(
                'menu_id'       => $val['menu_id'],
                'header'        => $val['header'],
                'text'          => $val['text'],
                'image'         => $image_name,
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),

            );
            if ($this->Common_model->save_data("admin_hero_section", $vals)) {
                $data = array("text" => " saved successfully", "icon" => "success");
          
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        }
        else{
            $msg=array("Anyone fielled must be filled");
            $data = array("text" => $msg, "icon" => "error");

        }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        echo json_encode($data);
    }


    function activate_element()
    {

        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data = array("status" => 1);
            if ($this->Common_model->update_data("admin_hero_section", $con, $data)) {
                $data = array("text" => "Activated successfully", "icon" => "success");
            } else {
                $msg = array("something wENT wRONG");
                $data = array("text" =>  $msg, "icon" => "error");
            }
        } else {
            $msg = array("something wENT wRONG");
            $data = array("text" =>  $msg, "icon" => "error");
        }

        echo json_encode($data);
    }

    function deactivate_element()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data = array("status" => 0);
            if ($this->Common_model->update_data("admin_hero_section", $con, $data)) {
                $data = array("text" => "Deactivated successfully", "icon" => "success");
            } else {
                $msg = array("something wENT wRONG");
                $data = array("text" =>  $msg, "icon" => "error");
            }
        } else {
            $msg = array("something wENT wRONG");
            $data = array("text" =>  $msg, "icon" => "error");
        }

        echo json_encode($data);
    }


    function delete_data()
    {
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            // $data=$this->permission();
            $val = $this->input->post();
            $image = $this->Common_model->get_data("admin_hero_section", array("id" => $val['id']), "image");
            $image_path = $image['image'];
            unlink($image_path);
            $val['table'] = "admin_hero_section";
            if ($this->Common_model->del_data($val)) {
                $data = array("text" => "Deleted succesfully", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }

    function get_edit_hero_data()
    {
       $id= $this->input->post('id');
       $data = $this->permission();
       $data['hero']=$this->Common_model->get_data('admin_hero_section',array('id'=>$id),"*");
    //    print_r($data);
       $this->load->view("admin/page/menu_page/hero_section/hero_edit", $data);

    }


    function  update_data()
    {
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data = $this->permission();


            $config['upload_path']          = './uploads/image/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = $data['hero_p']['image_size'];
            $config['max_width']            = $data['hero_p']['image_width'];
            $config['max_height']           = $data['hero_p']['image_height'];
            $this->load->library('upload', $config);



            if ($this->upload->do_upload('image')) {
                $dat =  $this->upload->data();
            } else {
                $msg = array($this->upload->display_errors());
            }


            if (!empty($dat)) {
                $image = $this->Common_model->get_data("admin_hero_section", array("id" => $val['id']), "image");
                $image_path = $image['image'];
                unlink($image_path);
                $da = array(
                    "header"  => $val['header'],
                    "text"    => $val['text'],                 
                    "created_at"    => date("y-m-d H:i:s"),
                    "image"   => "uploads/image/".$dat['file_name'],
                );
            } else {
                $da = array(
                    "header"  => $val['header'],
                    "text"    => $val['text'],                    
                    "created_at"    => date("y-m-d H:i:s"),

                );
            }


            $con = array("id" => $val['id'], "menu_id" => $val['menu_id']);

            if ($this->Common_model->update_data("admin_hero_section", $con, $da)) {
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
