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
    public function like(){

        $like = array(
            "title"     => "ettin",
            "detail"    => "ok"
        );

        // $rows = $this->db->like("title", "ettin")->get("personel")->result();
        // $rows = $this->db->like($like)->get("personel")->result();
        // $rows = $this->db->or_like($like)->get("personel")->result();
        // $rows = $this->db->not_like($like)->get("personel")->result();
        $rows = $this->db->or_not_like($like)->get("personel")->result();


        echo $this->db->last_query() . "<br>";
        $viewData = array("rows" => $rows);
        $this->load->view("dbislem", $viewData);
    }
    public function orderBy(){

        // $rows = $this->db->order_by("title", "asc")->get("personel")->result();
        // $rows = $this->db->order_by("id", "desc")->get("personel")->result();
        // $rows = $this->db->order_by("id", "random")->get("personel")->result();

        $rows = $this
            ->db
            ->order_by("detail", "asc")
            ->order_by("id", "desc")
            ->get("personel")
            ->result();

        echo $this->db->last_query() . "<br>";
        $viewData = array("rows" => $rows);
        $this->load->view("dbislem", $viewData);
    }
    public function limit(){

        $rows = $this->db->limit(2)->get("personel")->result();
        $rows = $this->db->limit(2,1)->get("personel")->result();
            // SELECT * FROM "personel" LIMIT 1,2
            // Ters olarak alıyor 1'den başla 2 karakter al (1,2) | başlangıç 0 olarak alınır.

        echo $this->db->last_query();
        $viewData = array("rows" => $rows);
        $this->load->view("dbislem", $viewData);
    }
    public function query(){
        $rows = $this
                ->db
                ->where("id >", 1)
                ->like("title", "etti")
                ->order_by("id", "desc")
                ->limit(1)
                ->get("personel")
                ->result();

        echo $this->db->last_query() . "<br>";
        $viewData = array("rows" => $rows);
        $this->load->view("dbislem", $viewData);
    }
    public function custom_query(){

        $rows = $this->db->query("SELECT * FROM `personel` WHERE `id` > 1")->result();

        print_r($rows);
        echo $this->db->last_query() . "<br>";
        $viewData = array("rows" => $rows);
        $this->load->view("dbislem", $viewData);
    }
}
?>