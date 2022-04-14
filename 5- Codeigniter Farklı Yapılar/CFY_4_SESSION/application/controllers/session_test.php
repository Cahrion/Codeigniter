<?php

class Session_test extends CI_Controller{
    public function index(){
        $this->session->set_userdata("login_name", "kablosuzkedi");
    }
    public function set_session(){

        $list =  $this->session->userdata("personel_list");
        array_push($list, $name);

        $this->session->set_userdata("personel_list", $list);
        print_r(get_session());
    }
    public function get_session(){
        print_r($this->session->userdata("login_name"));
    }
    public function all_get_session(){
        print_r($this->session->all_userdata("login_name"));
    }
}

?>