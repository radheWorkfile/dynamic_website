<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
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

        $data['logo_p'] = $this->Common_model->get_data("logo", $con, "*");
        $data['favicon_p'] = $this->Common_model->get_data("favicon", $con, "*");
        $data['navbar'] = $this->Common_model->get_data("navbar", $con, "*");


        return $data;
    }





    function manage_setting()
    {
        $data = $this->permission();

        $data['title'] = 'Manage Profile ';
        $data['breadcrums'] = "Profile";
        $data["logo"] = $this->Common_model->get_data("admin_single_data", array("id" => 1), "logo");
        $data["favicon"] = $this->Common_model->get_data("admin_single_data", array("id" => 1), "favicon");
        $data["profile"] = $this->Common_model->get_data("system_config", array("id" => 1), "company_name,company_address,about_company,facebook,tweeter,instagram,linkedln,youtube,whatsapp");
        $data["contact"] = $this->Common_model->get_data("admin_single_data", array("id" => 1), "contact_number,email");
        $data["links"] = $this->Common_model->get_data("admin_page_link", array("id" => 1,"status"=>1), "*");


        $data["menu"] = $this->Common_model->all_data_con("admin_menu",array("status"=>1,"child"=>0),"*");
//         echo '<pre>';
//         print_r($data["menu"]);
// die;

        $this->load->view("admin/setting/manage", $data);
    }

    function update_logo()
    {
        $msg = array("Something went wrong");
        $data = $this->permission();
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();




            $config = [
                "upload_path"      => "./uploads/logo",
                "allowed_types"    => "jpeg|jpg|png",
                "max_size"         => $data['logo_p']['logo_size'],
                "max_width"         => $data['logo_p']['logo_width'],
                "max_height"        => $data['logo_p']['logo_height'],
            ];

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('logo')) {
                $dat = $this->upload->data();

                // unlinking file start

                $logo = $this->Common_model->get_data("admin_single_data", array("id" => 1), "logo");
                $logo_path = "uploads/logo/" . $logo['logo'];
                unlink($logo_path);
                // unlinking file end


                $data = array(
                    "logo"       => $dat['file_name'],
                    "status"     => 1,
                    "created_at" => date("y-m-d H:i:s"),
                );
                if ($this->Common_model->update_data("admin_single_data", array("id" => 1), $data)) {

                    $data = array("text" => "Successfully Updated", "icon" => "success");
                } else {
                    $data = array("text" => $msg, "icon" => "error");
                }
            } else {
                $msg = array($this->upload->display_errors());
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        echo json_encode($data);
    }



    function update_favicon()
    {
        $msg = array("Something went wrong");
        $data = $this->permission();
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();



            $config = [
                "upload_path"      => "./uploads/logo",
                "allowed_types"    => "jpeg|jpg|png",
                "max_size"         => $data['favicon_p']['favicon_size'],
                "max_width"         => $data['favicon_p']['favicon_width'],
                "max_height"        => $data['favicon_p']['favicon_height'],
            ];

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('favicon')) {
                $dat = $this->upload->data();

                // unlinking file start
                $favicon = $this->Common_model->get_data("admin_single_data", array("id" => 1), "favicon");
                $favicon_path = "uploads/logo/" . $favicon['favicon'];
                unlink($favicon_path);
                // unlinking file end

                $data = array(
                    "favicon"       => $dat['file_name'],
                    "status"        => 1,
                    "created_at"    => date("y-m-d H:i:s"),
                );
                if ($this->Common_model->update_data("admin_single_data", array("id" => 1), $data)) {

                    $data = array("text" => "Successfully Updated", "icon" => "success");
                } else {
                    $data = array("text" => $msg, "icon" => "error");
                }
            } else {
                $msg = array($this->upload->display_errors());
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        echo json_encode($data);
    }


    function update_profile()
    {
        $msg = array("Something went wrong");
        $data = $this->permission();
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();

            if ($this->Common_model->update_data("system_config", array("id" => 1), $val)) {

                $data = array("text" => "Successfully Updated", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        echo json_encode($data);
    }


    function update_contact()
    {
        $msg = array("Something went wrong");
      
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();

            if ($this->Common_model->update_data("admin_single_data", array("id" => 1), $val)) {

                $data = array("text" => "Successfully Updated", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        echo json_encode($data);
    }

    function update_homepage()
    {
        $msg = array("Something went wrong");
        $data = $this->permission();
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con=array("id"=>$val['menu_id']);
            $data=array("home_page"=>1);
           $old_homepage=$this->Common_model->get_data("admin_menu",array("home_page"=>1),"*");
           if(!empty($old_homepage))
           {
            $this->Common_model->update_data("admin_menu", array("id"=>$old_homepage['id']), array("home_page"=>0));

           }

            if ($this->Common_model->update_data("admin_menu", $con, $data)) {

                $data = array("text" => "Successfully Updated", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
     
        echo json_encode($data);
    }


    function update_linkss()
    { 
      

       $msg = array("Something went wrong");
      
        if ($this->input->is_ajax_request()) {
            $con =array("id"=>1);
            $val = $this->input->post();
            
           
          
            if ($this->Common_model->update_data("admin_page_link", $con, $val)) {

              $data = array("text" => "Successfully Updated", "icon" => "success");
            } else {
                 $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
     
    
        echo json_encode($data);

    }








}
