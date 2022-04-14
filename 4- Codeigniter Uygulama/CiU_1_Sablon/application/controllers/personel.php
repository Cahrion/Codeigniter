<?php

class Personel extends CI_Controller{
    public function index(){
        echo base_url();
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