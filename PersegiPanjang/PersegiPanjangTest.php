<<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "PersegiPanjang.php";

// Class untuk run Testing.
class persegipanjangtest extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebelum pengujian \n";
    }

    public function testHitungkeliling()
    {
        // Kita pakai class yang mau kita test.
        $persegipanjang = new persegiPanjang();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $panjang = 4;
        $lebar = 2; // 4 Kata ..
        $result = $persegipanjang->hitungKeliling($panjang,$lebar);
        $expected = 12;

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        // Kita pakai class yang mau kita test.
        $persegipanjang = new persegipanjang();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $panjang = ''; // 4 Kata ..
        $lebar = '';
        $result = $persegipanjang->hitungKeliling($panjang,$lebar);
        $expected = "Tidak Boleh kosong!";

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {
        // Kita pakai class yang mau kita test.
        $persegipanjang = new persegipanjang();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $panjang = 4;
        $lebar = 2; // 4 Kata ..
        $result = $persegipanjang->hitungLuas($panjang,$lebar);
        $expected = 8;

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        // Kita pakai class yang mau kita test.
        $persegipanjang = new persegipanjang();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $panjang = '';
        $lebar = ''; // 4 Kata ..
        $result = $persegipanjang->hitungLuas($panjang,$lebar);
        $expected = "Tidak Boleh kosong!";

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\n Eksekusi setelah pengujian\n";
    }

}