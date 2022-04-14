<?php

class Personel extends CI_Controller{
    public function index(){
    $rows = $this->db->get("personel")->result();

    // $viewData = array("rows" => $rows);
    $viewData = new stdClass();
    $viewData->rows = $rows;

    $this->load->view("listeleme", $viewData);

    }

    public function insertPage(){
        echo "Ekleme Sayfası";
    }
    public function insert(){
        echo "Ekleme çalışması";
    }

    public function updatePage(){
        echo "Düzenleme Sayfası";
    }
    public function update(){
        echo "Düzenleme çalışması";
    }

    public function delete(){
        echo "silme çalışması";
    }
}
?>