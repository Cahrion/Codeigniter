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
    public function getCalculator($Deger1="a", $Deger2="a", $Islem="0"){
        if(($Deger1 == "a") || ($Deger2 == "a") || ($Islem == "0")){
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