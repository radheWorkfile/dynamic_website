<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $con = array("id" => 1);
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
        // $data['news_p'] = $this->Common_model->get_data("news", $con, "*");
        $data['testimonial_p'] = $this->Common_model->get_data("testimonial", $con, "*");



        return $data;
    }







    function off()
    {
        $msg = array("sowmthing went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data = array("testimonial" => 0);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {
                $data = array("text" => "Testimonial Off", "icon" => "success");
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

            $data = array("testimonial" => 1);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {

                $data = array("text" => "testimonial On", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }



    function get_testimonial()
    {
        
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $data=$this->permission();
            $val = $this->input->post();
            // print_r($val);
            $data['testimonial'] = $this->Common_model->all_data_con("admin_testimonial", $val, "*");
           
            $this->load->view("admin/page/menu_page/testimonial_section/view_testimonial", $data);
        }
        
        // echo "<h1>You are chutiya</h1>";
    }



    function add_testimonial()
    { 
         $msg=array("Something went wrong");
         $data=$this->permission();
        if($this->input->is_ajax_request())
        {
            
          $val=$this->input->post();

          $config = [
            "upload_path"         => './uploads/image',
            "allowed_types"       => 'jpeg|jpg|png',
            "max_size"         => $data['testimonial_p']['icon_size'],
            "max_width"        => $data['testimonial_p']['icon_width'],
            "max_height"       => $data['testimonial_p']['icon_height'],

        ];

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $dat =  $this->upload->data();

            $data2=array(
                "image"       =>$dat['file_name'],
                "content"     =>$val['content'],
                "menu_id"     =>$val['menu_id'],
                "created_at"  =>date("y-m-d H:i:s"),
                "status"     =>1,
            );
           
           
            if($this->Common_model->save_data("admin_testimonial", $data2))
            {
                $data=array("text"=>"Testimonial saved successfully","icon"=>"success");
               
            }
            else{
                $data=array("text"=>$msg,"icon"=>"error");
               

            }
        }
        else
          {
            $msg = array($this->upload->display_errors());
            $data=array("text"=>$msg,"icon"=>"error");

        }

        }
        else{
            $data=array("text"=>$msg,"icon"=>"error");
        }
       echo json_encode($data);
    }

    function delete()
    {
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            // $data=$this->permission();
            $val = $this->input->post();
            $val['table']="admin_testimonial";
            
            $con=array("id"=>$val['id']);
            $image=$this->Common_model->get_data("admin_testimonial",$con,"image");
            $image_path="uploads/image/".$image['image'];
            unlink($image_path);

           if( $this->Common_model-> del_data($val))
           {
            $data=array("text"=>"Deleted succesfully","icon"=>"success");
           }
           else{
            $data=array("text"=>$msg,"icon"=>"error");

           }

           
           
        }
        else{
            $data=array("text"=>$msg,"icon"=>"error");

        }

        echo json_encode($data);

    }


    
}
