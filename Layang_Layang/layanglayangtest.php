<<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "layanglayang.php";

// Class untuk run Testing.
class layanglayangtest extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        // Kita pakai class yang mau kita test.
        $layanglayang = new layanglayang();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $a = 4; // 4 Kata ..
        $b = 2;
        $result = $layanglayang->hitungKeliling($a,$b);
        $expected = 12;

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        // Kita pakai class yang mau kita test.
        $layanglayang = new layanglayang();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $a = ''; // 4 Kata ..
        $b = '';
        $result = $layanglayang->hitungKeliling($a,$b);
        $expected = "Tidak Boleh kosong!";

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {
        // Kita pakai class yang mau kita test.
        $layanglayang = new layanglayang();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $d1 = 5; // 4 Kata ..
        $d2 = 8; // 4 Kata ..
        $result = $layanglayang->hitungLuas($d1,$d2);
        $expected = 20;

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        // Kita pakai class yang mau kita test.
        $layanglayang = new layanglayang();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $d1 = ''; // 4 Kata ..
        $d2 = '';
        $result = $layanglayang->hitungLuas($d1,$d2);
        $expected = "Tidak Boleh kosong!";

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\n Eksekusi setelah pengjujian \n";
    }

}