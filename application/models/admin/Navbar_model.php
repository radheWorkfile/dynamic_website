<?php
class Navbar_model extends CI_Model
{

   function get_submenu()
   {
      $this->db->select("asm.*,am.menu");
      $this->db->from("admin_submenu as asm");
      $this->db->join("admin_menu as am", "am.id=asm.menu_id");
      $this->db->order_by("am.menu");

      return $this->db->get()->result_array();
   }

   function get_child_submenu()
   {
      $this->db->select("3rdm.*,asm.sub_menu,am.menu");

      $this->db->from("admin_3rd_menu as 3rdm");
      $this->db->join("admin_submenu as asm","asm.id=3rdm.submenu_id");      
      $this->db->join("admin_menu as am", "am.id=asm.menu_id");
      $this->db->order_by("am.menu");
      return $this->db->get()->result_array();
   }


}
