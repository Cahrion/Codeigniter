<?php

    function topla($sayi1, $sayi2){
        return $sayi1 + $sayi2;
    }
    // 2021-09-16 => 16 Eylül 2021
    function get_full_date($date){
        $aylar = array("Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık");
        
        $tmp_date = explode("-", $date);
        $newDate = $tmp_date[2] . " " . $aylar[$tmp_date[1] - 1] . " " . $tmp_date[0];
        echo $newDate;
    }

?>