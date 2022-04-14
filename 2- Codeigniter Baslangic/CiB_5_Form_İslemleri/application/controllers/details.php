<?php

class Details extends CI_Controller{
    public function index(){
        echo "Details Controlers Page";
    }
    public function urun(){
        echo "Details Controllers urun Page";
    }
    public function getParams($Param1 = "0", $Param2= "0"){
        echo "1. Params: " . $Param1;
        echo "2. Params: " . $Param2;
    }
    public function getParameters(){
        $Controller = $this->uri->segment(1); // Controller adı
        $Metot= $this->uri->segment(2); // Metot adı
        $Sayi1 = $this->uri->segment(3); // Ilk parametre
        $Sayi2 = $this->uri->segment(4); // Ikinci parametre
        $Islem = $this->uri->segment(5); // Ucuncu parametre
        echo $Controller . "<br>";
        echo $Metot . "<br>";
        echo $Sayi1 . "<br>";
        echo $Sayi2 . "<br>";
        echo $Islem;
    }
    // uri metodu ile getCalculatorUri
    public function getCalculatorUri(){ 
        $Deger1 = $this->uri->segment(3); // Ilk parametre
        $Deger2 = $this->uri->segment(4); // Ikinci parametre
        $Islem = $this->uri->segment(5); // Ucuncu parametre
        if(($Deger1 == "") || ($Deger2 == "") || ($Islem == "")){
            echo "Lütfen doğru sayılar giriniz";
        }else{
            echo "Sonuc: ";
            if($Islem == "toplama"){
                echo $Deger1 + $Deger2;
            }else if($Islem == "cikarma"){
                echo $Deger1 - $Deger2;
                
            }else if($Islem == "carpma"){
                echo $Deger1 * $Deger2;
            }else if($Islem == "bolme"){
                if($Deger2 != 0){
                    echo $Deger1 / $Deger2;
                }else{
                    echo "Bölen değer 0 olamaz";
                }
            }else{
                echo "Lütfen belirtilen değerler arasında seçim yapınız.\n (toplama,cikarma,carpma,bolme)";
            }
            
        }
    }
}

?>