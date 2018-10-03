<?php

class Service_model  extends CI_Model  {
  public function __construct()
  {
       $this->load->database();
  }
  function insert($tabla, $data){

      $this->db->insert($tabla, $data);
   }

   function get_all(){
     $query = $this->db->get('contacts');
     return $query->result_array();
   }
}
?>
