<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
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
        $data['gallery_p'] = $this->Common_model->get_data("Gallary", $con, "*");
        return $data;
    }







    function off()
    {
        $msg = array("sowmthing went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data = array("gallery" => 0);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {
                $data = array("text" => "Gallery Off", "icon" => "success");
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

            $data = array("gallery" => 1);
            if ($this->Common_model->update_data("admin_menu", $con, $data)) {

                $data = array("text" => "Gallery On", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }



    function get_gallery()
    {
        
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $data=$this->permission();
            $val = $this->input->post();
            // print_r($val);
            $data['gallery'] = $this->Common_model->all_data_con("admin_gallery", $val, "*");
           
            $this->load->view("admin/page/menu_page/gallery_section/view_gallery", $data);
        }
        
        // echo "<h1>You are chutiya</h1>";
    }



    function add_gallery()
    { 
         $msg=array("Something went wrong");
         $data=$this->permission();
        
        if($this->input->is_ajax_request())
        {
            
          $val=$this->input->post();

          $config = [
            "upload_path"         => './uploads/gallery',
            "allowed_types"       => 'jpeg|jpg|png',
            // "max_size"         => $data['gallery_p']['image_size'],
            // "max_width"        => $data['gallery_p']['image_width'],
            // "max_height"       => $data['gallery_p']['image_height'],
            // "min_width"        => $data['gallery_p']['image_width'],
            // "min_height"       => $data['gallery_p']['image_height'],


        ];
       

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $dat =  $this->upload->data();

            $data2=array(
                "image"       =>$dat['file_name'],
                "menu_id"     =>$val['menu_id'],
                "created_at"  =>date("y-m-d H:i:s"),
                "status"     =>1,
            );
          
            if($this->Common_model->save_data("admin_gallery", $data2))
            {
                $data=array("text"=>"service saved successfully","icon"=>"success");
               
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
           $image=$this->Common_model->get_data("admin_gallery",$val,"image");
           if(!empty($image))
           {
            $image_path="uploads/gallery/".$image['image'];
              unlink( $image_path);
              $val['table']="admin_gallery";
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
        }
        else{
            $data=array("text"=>$msg,"icon"=>"error");

        }

        echo json_encode($data);

    }


    
}
