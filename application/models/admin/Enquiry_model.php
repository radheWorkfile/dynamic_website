<?php
class Enquiry_model extends CI_Model
{

   function all_data($table,$sel)
   {
       return $this-> db->select($sel)->order_by('status', 'ASC')->get($table)->result_array();
   }

}
