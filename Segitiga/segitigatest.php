<<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "segitiga.php";

// Class untuk run Testing.
class segitigatest extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        // Kita pakai class yang mau kita test.
        $segitiga = new segitiga();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $a = 4; // 4 Kata ..
        $b = 2;
        $c = 6;
        $result = $segitiga->hitungKeliling($a,$b,$c);
        $expected = 12;

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        // Kita pakai class yang mau kita test.
        $segitiga = new segitiga();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $a = ''; // 4 Kata ..
        $b = '';
        $c = '';
        $result = $segitiga->hitungKeliling($a,$b,$c);
        $expected = "Tidak Boleh kosong!";

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {
        // Kita pakai class yang mau kita test.
        $segitiga = new segitiga();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $alas = 5; // 4 Kata ..
        $tinggi = 8; // 4 Kata ..
        $result = $segitiga->hitungLuas($alas,$tinggi);
        $expected = 20;

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        // Kita pakai class yang mau kita test.
        $segitiga = new segitiga();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $alas = ''; // 4 Kata ..
        $tinggi = '';
        $result = $segitiga->hitungLuas($alas,$tinggi);
        $expected = "Tidak Boleh kosong!";

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\n Eksekusi setelah pengjujian \n";
    }

}