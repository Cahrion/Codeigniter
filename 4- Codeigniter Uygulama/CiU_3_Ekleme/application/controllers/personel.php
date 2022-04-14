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
        $this->load->view("ekle");
    }
    public function insert(){
        $title  = $this->input->post("title");
        $detail = $this->input->post("detail");

        // $data   = array(
        //     "title" => $title,
        //     "detail" => $detail
        // );
        $data = new stdClass();
        $data->title = $title;
        $data->detail = $detail;

        $insert = $this->db->insert("personel", $data);
        if($insert){
            redirect(base_url("personel"));
        }else{
            echo "İşleminiz Başarısız.";
        }
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