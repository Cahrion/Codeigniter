<?php
class Formislem extends CI_Controller{
    public function index(){
        $this->load->view("form");
    }
    public function kaydet(){
        // $isim   = $this->input->post("isim");
        // $email  = $this->input->post("email");
        
        $isim   = $this->input->get("isim");
        $email  = $this->input->get("email");
        echo $isim . "<br>";
        echo $email;
    }
}


?>