<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/common_model','Common_model');
        $this->load->model('admin/dashboard_model', 'Dashboard_model');
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }
    function dashbord_data()
    {
        $con=array("id"=>1);
        $data['enquiry']=$this->Common_model->all_data("admin_enquiry","*");
        $data['navbar'] = $this->Common_model->get_data("navbar", $con, "*");

        return $data;
    }
    function index()
    {
        $data=$this->dashbord_data();       
        $data['title'] = 'Dashboard';
        $data['breadcrumb'] = 'Dashboard';
        $this->load->view('admin/dashboard', $data);
    }




    // function profile()
    // {
    //     $data['title'] = 'Profile';
    //     $data['breadcrumb'] = 'profile';
    //     $data['profile']=$this->Dashboard_model->get_profile();
    //     $this->load->view('admin/profile', $data);
    // }
    // function add_profile()
    // {
    //     $data['title'] = 'Profile';
    //     $data['breadcrumb'] = 'add profile';
    //     // $data['profile']=$this->Dashboard_model->get_profile();
    //     $this->load->view('admin/profile/add_profile_form', $data);
    // }
    
    // function edit_profile()
    // {
    //     $data['title'] = 'Profile';
    //     $data['breadcrumb'] = 'edit profile';
    //     $data['profile']=$this->Dashboard_model->get_profile();
       
    //     $this->load->view("admin/profile/edit_profile_form", $data);
    // }
    // function update_profile_data()
    // {
    //     $dat=$this->input->post();
    //     $data=array(
    //         'company_name'=>$dat['h_name'],
    //         'phone'=>$dat['phone'],
    //         'email'=>$dat['email'],
    //         'company_address'=>$dat['h_address'],

    //     );
    //     if($this->Dashboard_model->update_profile($data))
    //     {
    //       redirect("admin/Dashboard/profile","refresh");
    //     }
    //     else{
    //         echo"not updated";
    //     }

        
    // }
}
