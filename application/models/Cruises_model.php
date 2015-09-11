<?php
class Cruises_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function get_cabin (){
            
        $query = $this->db->get('cabin');
       
        return $query->result_array();
    } 
}

?>