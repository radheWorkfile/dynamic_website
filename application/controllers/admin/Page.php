<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
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
        $data['news_p'] = $this->Common_model->get_data("news", $con, "*");
        $data['service_p'] = $this->Common_model->get_data("service", $con, "*");
        $data['testimonial_p'] = $this->Common_model->get_data("testimonial", $con, "*");
        $data['hero_section'] = $this->Common_model->get_data("content_with_image", array('id'=>1), "*");


        $data['seo_p'] = $this->Common_model->get_data("seo", $con, "*");
        $data['gallery_p'] = $this->Common_model->get_data("gallary", $con, "*");





        return $data;
    }

     
    // menu page start++++++++++++++++++============
    function manage_page($id)
    {
        $data = $this->permission();
        // echo" hello muhammad<pre>";
        // print_r($data);
        // die;
        $con = array("id" => $id);
        $menu = $this->Common_model->get_data("admin_menu", $con, "*");
        $data['menu'] = $menu;
        $data['title'] = 'Manage ' . $menu['menu'] . ' Page';
        $data['breadcrums'] = $menu['menu'];
        $data['banner'] = $this->Common_model->all_data("admin_banner", "*");
        $this->load->view("admin/page/menu_page/manage_menupage", $data);
    }

    function banner_off()
    {
        $msg = array("sowmthing went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data = array("banner" => 0);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {
                $data = array("text" => "Banner Off", "icon" => "success");
            } else {
                $data = array("text" =>  $msg, "icon" => "error");
                echo $this->db->last_query();
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
            $con = array("id" => $val['id']);
            $data = array("banner" => 1);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {
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
            $con = array("menu_id" => $val['id'], "submenu_id" => 0, "child_submenu_id" => 0);
            $data = $this->permission();
            $data['banner'] = $this->Common_model->all_data_con("admin_banner", $con, "*");
            $data['total_banner'] = $this->Common_model->all_data("admin_banner", "*");

            $this->load->view("admin/page/menu_page/view_banner", $data);
        }
    }


    function add_banner()
    {
        $msg = array("Somthing went wrong");
        if ($this->input->is_ajax_request()) {
            $data = $this->permission();
            $val = $this->input->post();
            $url=(!empty($val['button_url']))?$val['button_url']:0;


            // some problem is here start
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

                // array to insert in banner table
                $dat = array(
                    "banner_text"       => $val['banner_text'],
                    "menu_id"           => $val['menu_id'],
                    "button_url"        => $url,
                    "button_text"       => $val['button_text'],
                    "button_color"       => $val['button_color'],

                    "banner"             => $val1['file_name'],
                    "created_at"         => date('y-m-d H:i:s'),
                    "status"              => 1,
                );

              
                
                if($this->Common_model->save_data("admin_banner", $dat))
                {

                    $data = array("text" => "Banner uploaded succesfully", "icon" => "success");
                }
                else{
                  $data = array("text" => $msg, "icon" => "error");
                }


            } else {
                $msg1=array($this->upload->display_errors());

                $data = array('text' => $msg1, "icon" => "error");
            }
            // some problem is here end

           
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        // echo $data['text'];
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

// ===================menu page end+++++++++++++++++++==================================

 // ==================== SHUBPAGE STARTED HERE=========================================================

    function manage_subpage($menu_id, $id)
    {

        $data = $this->permission();
        // echo" hello muhammad<pre>";
        // print_r($data);
        // die;
        $con = array("id" => $id, "menu_id" => $menu_id);
        $submenu = $this->Common_model->get_data("admin_submenu", $con, "*");

        $data['submenu'] = $submenu;
        $data['title'] = 'Manage ' . $submenu['sub_menu'] . ' Page';
        $data['breadcrums'] = $submenu['sub_menu'];
       

        $this->load->view("admin/page/submenu_page/manage_submenupage", $data);
    }

    function sub_banner_off()
    {

        $msg = array("sowmthing went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id'], "menu_id" => $val['menu_id']);
            $data = array("banner" => 0);
            if ($this->Common_model->update_data("admin_submenu", $con, $data)) {
                $data = array("text" => "Banner Off", "icon" => "success");
            } else {
                $data = array("text" =>  $msg, "icon" => "error");
                echo $this->db->last_query();
            }
        } else {
            $data = array("text" =>  $msg, "icon" => "error");
        }

        echo json_encode($data);
    }

    function sub_banner_on()
    {
        $msg = array("sowmthing went wrong");

        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();

            $con = array("id" => $val['id'], "menu_id" => $val['menu_id']);
            $data = array("banner" => 1);
            if ($this->Common_model->update_data("admin_submenu", $con, $data)) {
                $data = array("text" => "Banner On", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }

    function  get_sub_banner()
    {


        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("menu_id" => $val['menu_id'], "submenu_id" => $val['id'], "child_submenu_id" => 0);
            $data = $this->permission();
            $data['banner'] = $this->Common_model->all_data_con("admin_banner", $con, "*");
            $data['total_banner'] = $this->Common_model->all_data("admin_banner", "*");
            // print_r( $data['total_banner']);
            // die;
            $this->load->view("admin/page/submenu_page/view_banner", $data);
        }
    }


    function add_subpage_banner()
    {
        $msg = array("Somthing went wrong");
        if ($this->input->is_ajax_request()) {
            $data = $this->permission();

            $val = $this->input->post();

            // some problem is here start
            $config = [
                "upload_path"      => "uploads/banner/",
                "allowed_types"    => 'jpeg|jpg|png',
                "max_size"         => $data['banner_p']['size'],
                "max_width"        => $data['banner_p']['width'],
                "max_height"       => $data['banner_p']['height'],
            ];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('banner')) {

                $val1 = $this->upload->data();

                $dat = array(
                    "banner_text" => $val['banner_text'],
                    "menu_id" => $val['menu_id'],
                    "submenu_id" => $val['submenu_id'],
                    "banner"    =>$val1['file_name'],     
                    "created_at" => date('y-m-d H:i:s'),
                    "status" => 1,
    
                );
                if($this->Common_model->save_data("admin_banner", $dat))
                {
                $data = array("text" => "Banner uploaded succesfully", "icon" => "success");
                }
                else{
                $data = array('text' => $msg, "icon" => "error");

                }


            } else {

                $data = array('text' => $this->upload->display_errors(), "icon" => "error");
            }
            // some problem is here end

            
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        // echo $data['text'];
        echo json_encode($data);
    }


    // ============================SHUBPAGE End here====================================================================

    // =====================child subpage  start=========================================

      function manage_child_subpage($id,$submenu_id){
        $data = $this->permission();
       
        $con = array("id" => $id, "submenu_id" => $submenu_id);
        $child_submenu = $this->Common_model->get_data("admin_3rd_menu", $con, "*");

        $data['child_submenu'] = $child_submenu;
        $data['title'] = 'Manage <i class="text-danger"> ' . $child_submenu['3rd_menu'] . '</i> Page';
        $data['breadcrums'] = $child_submenu['3rd_menu'];
         $this->load->view("admin/page/child_submenu_page/manage_child_submenu_page",$data);
      }

    // child subpage end============================================








}
