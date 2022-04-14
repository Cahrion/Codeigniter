<?php

class Personel_model extends CI_Model{
    public function get(){
        return $this->db->get("personel")->result();
    }
    public function delete($id){
        return $this->db->where("id", $id)->delete("personel");
    }
}

?>