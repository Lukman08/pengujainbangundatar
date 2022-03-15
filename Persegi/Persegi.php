<?php
include 'BangunDatar.php';

Class Persegi extends BangunDatar{
    function hitungkeliling($sisi){
        if ($sisi == '') {
            return "Tidak boleh kosong!";
        }else{
        return $sisi*4;
        }
    }
    function hitungluas($sisi){
        if ($sisi == '') {
            return "Tidak boleh kosong!";
        }else{
        return $sisi*$sisi;
        }
    }
}
?>
