<<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "trapesium.php";

// Class untuk run Testing.
class trapesiumtest extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        // Kita pakai class yang mau kita test.
        $trapesium = new trapesium();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $sisi = 6;
        $result = $trapesium->hitungKeliling($sisi);
        $expected = 24;

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        // Kita pakai class yang mau kita test.
        $trapesium = new trapesium();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $sisi = '';
        $result = $trapesium->hitungKeliling($sisi);
        $expected = "Tidak Boleh kosong!";

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {
        // Kita pakai class yang mau kita test.
        $trapesium = new trapesium();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $alasa = 5; // 4 Kata ..
        $alasb = 6;
        $tinggi = 8; // 4 Kata ..
        $result = $trapesium->hitungLuas($alasa,$alasb,$tinggi);
        $expected = 88;

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        // Kita pakai class yang mau kita test.
        $trapesium = new trapesium();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $alasa = ''; // 4 Kata ..
        $alasb = '';
        $tinggi = '';
        $result = $trapesium->hitungLuas($alasa,$alasb,$tinggi);
        $expected = "Tidak Boleh kosong!";

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\n Eksekusi setelah pengjujian \n";
    }

}