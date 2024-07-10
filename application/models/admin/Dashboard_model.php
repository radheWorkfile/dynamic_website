<?php
class Dashboard_model  extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    function get_profile()
    {
        $this->db->select('company_name,company_address,phone,email');
        $this->db->from('system_config');
        return $this->db->get()->row_array();
    }
    function update_profile($data)
    {
        $this->db->update('System_config',$data);
        return 1;
    }

   
}
