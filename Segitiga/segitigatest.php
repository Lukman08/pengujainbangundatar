<<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Segitiga.php";


class SegitigaTest extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebelum pengujian \n";
    }

    public function testHitungkeliling()
    {
        $segitiga = new segitiga();
        $a = 4;
        $b = 2;
        $c = 6;
        $result = $segitiga->hitungKeliling($a,$b,$c);
        $expected = 12;

        
        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        $segitiga = new segitiga();
        $a = '';
        $b = '';
        $c = '';
        $result = $segitiga->hitungKeliling($a,$b,$c);
        $expected = "Tidak Boleh kosong!";
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {
        $segitiga = new segitiga();
        $alas = 5;
        $tinggi = 8;
        $result = $segitiga->hitungLuas($alas,$tinggi);
        $expected = 20;

        
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        $segitiga = new segitiga();
        
        $alas = '';
        $tinggi = '';
        $result = $segitiga->hitungLuas($alas,$tinggi);
        $expected = "Tidak Boleh kosong!";

        
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\n Eksekusi setelah pengujian \n";
    }

}