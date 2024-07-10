<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Common extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/common_model', 'Common_model');
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }
    function chageStatus()
    {
        if ($this->input->is_ajax_request()) {
            $data = $this->input->post();
            //print_r($data);die;
            $this->Common_model->chageStatus($data);
            echo ($data['status'] == 1) ? "
				  <a style='color:green' href='javascript:void()'onClick='return changeStatus(\"" . $data['id'] . "\",\"0\",\"" . $data['table'] . "\",\"" . $data['loader'] . "\")'title='click to block user'><b><i class='fa fa-check'></i> </b></a>" : "
				  <a style='color:red'   href='javascript:void()'onClick='return changeStatus(\"" . $data['id'] . "\",\"1\",\"" . $data['table'] . "\",\"" . $data['loader'] . "\")'title='click to active user'><b><i class='fa fa-times'></i></b></a>";
        }
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        $data['breadcrums'] = 'Profile';
        $data['users'] = $this->Common_model->get_data('users',array('id' => $this->session->userdata('user_id')), 'id,name,email,password,mobile,address,photo');
        $this->load->view('admin/common/profile', $data);
    }

    public function update_profile()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('number', 'Mobile Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

        if ($this->form_validation->run() == TRUE) {
            $value = $this->input->post();
            $val = array(
                'name'        => $value['name'],
                'email'       => $value['email'],
                'password'    => empty($value['password']) ? $value['oldpassword'] : md5($value['password']),
                'show_ps'     => empty($value['password']) ? $value['oldpassword'] : $value['password'],
                'mobile'      => $value['number'],
                'address'     => $value['address'],
            );
            // print_r($val);die;
            $this->Common_model->update_data('users', array('id' => $value['id']), $val);
            $data = array('text' => "User Updated Successfully !", 'icon' => "success");
        } else {
            $msg = array(
                'name'      => form_error('name'),
                'email'     => form_error('email'),
                'number'    => form_error('number'),
                'address'   => form_error('address')
            );
            $data = array('text' => $msg, 'icon' => 'error');
        }
        echo json_encode($data);
    }
}
