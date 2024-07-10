<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
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
        $data['banner_p'] = $this->Common_model->get_data("banner", $con, "*");

        return $data;
    }

    function manage_banner($id,$parant_id)
    {
        $data = $this->permission();
        // echo" hello muhammad<pre>";
        // print_r($data);
        // die;
        $con = array("id" => $id,"submenu_id"=>$parant_id);
        $child_submenu = $this->Common_model->get_data("admin_3rd_menu", $con, "*");
        $data['child_submenu'] = $child_submenu;
        $data['title'] = 'Manage ' . $child_submenu['3rd_menu'] . ' Page';
        $data['breadcrums'] = $child_submenu['3rd_menu'];
        // $data['banner'] = $this->Common_model->all_data("admin_banner", "*");
        $this->load->view("admin/page/child_submenu_page/manage_child_submenu_page", $data);
    }





    function banner_off()
    {
        $msg = array("sowmthing went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id'],'submenu_id'=> $val['parent_id']);
            $data = array("banner" => 0);
            if ($this->Common_model->update_data("admin_3rd_menu", $con, $data)) {
                $data = array("text" => "Banner Off", "icon" => "success");
            } else {
                $data = array("text" =>  $msg, "icon" => "error");
                
            }
        } else {
            $data = array("text" =>  $msg, "icon" => "error");
        }

        echo json_encode($data);
    }


    function banner_on()
    {
       
        $msg = array("sowmthing went wrong");

        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id'],'submenu_id'=> $val['parent_id']);

            $data = array("banner" => 1);
            if ($this->Common_model->update_data("admin_3rd_menu", $con, $data)) {
               
                $data = array("text" => "Banner On", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }

    function  get_banner()
    {


        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array( "menu_id"=>0, "submenu_id" => $val['parent_id'], "child_submenu_id" => $val['id']);
            $data = $this->permission();
            $data['banner'] = $this->Common_model->all_data_con("admin_banner", $con, "*");
            $data['total_banner'] = $this->Common_model->all_data("admin_banner", "*");         
           
           
            $this->load->view("admin/page/child_submenu_page/view_banner", $data);
        }
    }







    function add_banner()
    {
        $msg = array("Somthing went wrong");
        if ($this->input->is_ajax_request())
         {
            $data = $this->permission();
            $val = $this->input->post();
           
            $config = [
                "upload_path"      =>"uploads/banner/",
                "allowed_types"    =>'jpeg|jpg|png',
                "max_size"         => $data['banner_p']['size'],
                "max_width"        => $data['banner_p']['width'],
                "max_height"       => $data['banner_p']['height'],
            ];


            $this->load->library('upload', $config);

            if ($this->upload->do_upload('banner')) {
                $val1 = $this->upload->data();
                // making key value pair to insert in banner table
                $dat = array(
                "banner_text" => $val['banner_text'],
                "child_submenu_id" => $val['child_submenu_id'],
                "submenu_id" => $val['submenu_id'],
                "banner" => $val1['file_name'],
                "created_at" => date('y-m-d H:i:s'),
                "status" => 1,

            );
            if($this->Common_model->save_data("admin_banner", $dat))
            {
                $data = array("text" => "Banner uploaded succesfully", "icon" => "success");
            }
            else{
            $data = array("text" =>$msg, "icon" => "error");
            }

            }
             else
              {

                 $msg1=array( $this->upload->display_errors());
                $data = array('text' =>$msg1, "icon" => "error");
            }
           
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        echo json_encode($data);
    }



    function delete()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
           $ban= $this->Common_model->get_data("admin_banner",$val,"*");
           if($ban)
           {
            $image_path="uploads/banner/".$ban['banner'];
            if(file_exists($image_path))
            {
                unlink($image_path);

                $val['table'] = "admin_banner";
                if ($this->Common_model->del_data($val)) {
                    $data = array("text" => "Deleted successfully", "icon" => "success");
                } else {
                    $data = array("text" => "Not Deleted", "icon" => "error");
                }

            }}
         
        } else {
            $data = array("text" => "Something went wrong", "icon" => "error");
        }
        echo json_encode($data);
    }

    







}
