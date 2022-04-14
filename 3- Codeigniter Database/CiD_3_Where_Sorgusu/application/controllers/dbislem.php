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
    public function where(){
        // AND 

        // $rows = $this
        // ->db
        // ->where("id >", 1)
        // ->where("id <", 4)
        // ->where("detail !=", "")
        // ->get("personel")
        // ->result();

        $where = array(
            "id >"      => 1, 
            "detail !=" => ""
        );

        // OR 

        // $rows = $this
        //     ->db
        //     ->or_where($where)
        //     ->get("personel")
        //     ->result();

        // OR IN

        $rows = $this
            ->db
            ->where("id", 4)
            ->or_where_in("title", array("kablosuzkedi","felakettin"))
            ->get("personel")
            ->result();
            
        echo $this->db->last_query();
        $viewData = array("rows" => $rows);

        $this->load->view("dbislem", $viewData);
    }
}
?>