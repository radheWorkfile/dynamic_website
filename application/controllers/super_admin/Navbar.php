<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Navbar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('super_admin/common_model', 'Common_model');
        // $this->load->model('super_admin/dashboard_model', 'Dashboard_model');
        ($this->session->userdata('user_cate') != 2) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }
    function manage_navbar()
    {
        $data['title'] = 'Manage Navbar';
        $data['breadcrums'] = 'Manage Navbar';
        $data['navbar'] = $this->Common_model->all_data("navbar", "*");
        $this->load->view('super_admin/navbar/manage_navbar', $data);
    }

    function get_navbar_data()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            // print_r($val);
            // echo $val['id'];
            $con = array("id" => $val['id']);
            $data['navbar'] = $this->Common_model->get_data("navbar", $con, "navbar_limit,id");
            $this->load->view("super_admin/navbar/edit_navbar", $data);
        }
    }

    function update_navbar()
    {
        if($this->input->is_ajax_request())
        {
            $val=$this->input->post();
            $con=array("id" => $val["id"]);
            $dat=array("navbar_limit" => $val["limit"]);          
            $this->Common_model->update_data("navbar",$con,$dat);       
            
         $data = array('text' => "navbar Limit updated !", 'icon' => "success");

        }
        else{
         $data = array('text' => "somethimg went wrong !", 'icon' => "error");
      
        }
       
        echo json_encode($data);
    }



    function manage_2navbar()
    {
        $data['title'] = 'Manage 2Navbar';
        $data['breadcrums'] = 'Manage 2Navbar';
        $data['navbar'] = $this->Common_model->all_data("navbar", "*");


        $this->load->view('super_admin/navbar/manage_2navbar', $data);
    }


    function get_2navbar_data()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();           
            $con = array("id" => $val['id']);
            $data['navbar'] = $this->Common_model->get_data("navbar", $con, "2nd_navbar_limit,id");
            $this->load->view("super_admin/navbar/edit_2navbar", $data);
        }        
    }


    function update_2navbar()
    {
        if($this->input->is_ajax_request())
        {
            $val=$this->input->post();
            $con=array("id" => $val["id"]);
            $dat=array("2nd_navbar_limit" => $val["limit"]);          
            $this->Common_model->update_data("navbar",$con,$dat);     
           
         $data = array('text' => "navbar Limit updated !", 'icon' => "success");

        }
        else{
         $data = array('text' => "somethimg went wrong !", 'icon' => "error");
      
        }
        echo json_encode($data);
    }




    function activate_2navbar()
    {
        if($this->input->is_ajax_request())
        {
            $val=$this->input->post();
            $con=array("id" => $val["id"]);
            $dat=array("2nd_navbar_permission" =>1);          
            $this->Common_model->update_data("navbar",$con,$dat);     
           
         $data = array('text' => "navbar activated !", 'icon' => "success");

        }
        else{
         $data = array('text' => "somethimg went wrong !", 'icon' => "error");
      
        }
        echo json_encode($data);
    }



    function deactivate_2navbar()
    {
        if($this->input->is_ajax_request())
        {
            $val=$this->input->post();
            $con=array("id" => $val["id"]);
            $dat=array("2nd_navbar_permission" => 0);          
            $this->Common_model->update_data("navbar",$con,$dat);     
           
         $data = array('text' => "navbar deactivated !", 'icon' => "success");

        }
        else{
         $data = array('text' => "somethimg went wrong !", 'icon' => "error");
      
        }
        echo json_encode($data);        
    }


    function manage_3navbar()
    {
        $data['title'] = 'Manage 3Navbar';
        $data['breadcrums'] = 'Manage 3Navbar';
        $data['navbar'] = $this->Common_model->all_data("navbar", "*");


        $this->load->view('super_admin/navbar/manage_3navbar', $data);
    }

    function get_3navbar_data()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();           
            $con = array("id" => $val['id']);
            $data['navbar'] = $this->Common_model->get_data("navbar", $con, "3rd_navbar_limit,id");
            $this->load->view("super_admin/navbar/edit_3navbar", $data);
        }        
    }

    function update_3navbar()
    {
        if($this->input->is_ajax_request())
        {
            $val=$this->input->post();
            $con=array("id" => $val["id"]);
            $dat=array("3rd_navbar_limit" => $val["limit"]);          
            $this->Common_model->update_data("navbar",$con,$dat);     
           
         $data = array('text' => "navbar Limit updated !", 'icon' => "success");

        }
        else{
         $data = array('text' => "somethimg went wrong !", 'icon' => "error");
      
        }
        echo json_encode($data);
    }

    function activate_3navbar()
    {
        if($this->input->is_ajax_request())
        {
            $val=$this->input->post();
            $con=array("id" => $val["id"]);
            $dat=array("3rd_navbar_permission" =>1);          
            $this->Common_model->update_data("navbar",$con,$dat);     
           
         $data = array('text' => "navbar activated !", 'icon' => "success");

        }
        else{
         $data = array('text' => "somethimg went wrong !", 'icon' => "error");
      
        }
        echo json_encode($data);
    }



    function deactivate_3navbar()
    {
        if($this->input->is_ajax_request())
        {
            $val=$this->input->post();
            $con=array("id" => $val["id"]);
            $dat=array("3rd_navbar_permission" => 0);          
            $this->Common_model->update_data("navbar",$con,$dat);     
           
         $data = array('text' => "navbar deactivated !", 'icon' => "success");

        }
        else{
         $data = array('text' => "somethimg went wrong !", 'icon' => "error");
      
        }
        echo json_encode($data);        
    }





}
