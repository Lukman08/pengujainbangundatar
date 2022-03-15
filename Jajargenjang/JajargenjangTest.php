<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Jajargenjang.php";

// Class untuk run Testing.
class JajargenjangTest extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebelum pengujian \n";
    }

    public function testHitungkeliling()
    {
        // Kita pakai class yang mau kita test.
        $jajargenjang = new Jajargenjang();
        $a = 4;
        $b = 2;
        $result = $jajargenjang->hitungKeliling($a,$b);
        $expected = 12;
        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        $jajargenjang = new Jajargenjang();
        $a = '';
        $b = '';
        $result = $jajargenjang->hitungKeliling($a,$b);
        $expected = "Tidak Boleh kosong!";
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {
        $jajargenjang = new Jajargenjang();
        $alas = 5; 
        $tinggi = 8; 
        $result = $jajargenjang->hitungLuas($alas,$tinggi);
        $expected = 40;
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        $jajargenjang = new Jajargenjang();
        $alas = '';
        $tinggi = '';
        $result = $jajargenjang->hitungLuas($alas,$tinggi);
        $expected = "Tidak Boleh kosong!";
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\n Eksekusi setelah pengujian \n";
    }

}