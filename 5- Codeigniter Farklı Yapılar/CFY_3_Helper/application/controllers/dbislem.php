<?php

class Dbislem extends CI_Controller{
    
    public function index(){
        $this->load->model("personel_model");
        $results = $this->personel_model->get();
        $results = $this->personel_model->delete(14);

        print_r($results);
    }
    public function model_usage(){
       $this->load->model("personel_model");

        // Veri Çekme
    // $result = $this->personel_model->get(array("id > " => 8));
    // $result = $this->personel_model->get_all(array("id > " => 8));
    // print_r($result);
        // Veri Silme
    // $delete = $this->personel_model->delete(array("id" => 8));
    // echo $delete;
        // Veri Ekleme
    // $data = new StdClass;
    // $data->title = "Aslıgül Kaya";
    // $data->detail = "Frontend Developer";
    // $result = $this->personel_model->insert($data);
    // echo $result;
        // Veri Güncelleme
    // $data = new StdClass;
    // $data->title = "Aslıgül Kaya";
    // $data->detail = "Python Developer";
    // $result = $this->personel_model->update($data, array("id" => 16));
    // echo $result;
        // Custom Query
    // $query = $this->personel_model->query("SELECT * FROM personel");
    // print_r($query);
        // Son eklenen ID getir.
    $data = new StdClass;
    $data->title = "Aslıgül Kaya";
    $data->detail = "Frontend Developer";
    $result = $this->personel_model->insert($data);
    $result = $this->personel_model->get_last_id();
    echo $result;

    
    }
}

?>