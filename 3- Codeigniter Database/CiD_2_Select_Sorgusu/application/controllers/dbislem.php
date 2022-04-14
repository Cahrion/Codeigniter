<?php
class Dbislem extends CI_Controller{
    public function index(){
        // Tüm sonuçları getirmek için kullanilacak olan metot..
        $rows = $this->db->get("personel")->result();
        // İlk kaydı getirmek için kullanilacak olan metot...
        // $rows = $this->db->get("personel")->row();

        $viewData = array("rows" => $rows);

        $this->load->view("dbislem", $viewData);
    }
}
?>