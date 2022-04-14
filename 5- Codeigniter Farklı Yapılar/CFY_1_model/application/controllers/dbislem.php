<?php

class Dbislem extends CI_Controller{
    
    public function index(){
        echo "Index Sayfası";
    }
    public function model(){
        $this->load->model("personel_model");
        $results = $this->personel_model->get();
        $results = $this->personel_model->delete(14);

        print_r($results);
    }
}

?>