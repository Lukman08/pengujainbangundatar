<<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "trapesium.php";

// Class untuk run Testing.
class TrapesiumTest extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebelum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        $trapesium = new Trapesium();
        

        $sisi = 6;
        $result = $trapesium->hitungKeliling($sisi);
        $expected = 24;

        
        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        $trapesium = new Trapesium();
        
        
        $sisi = '';
        $result = $trapesium->hitungKeliling($sisi);
        $expected = "Tidak Boleh kosong!";

        
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {
        $trapesium = new Trapesium();
        
        
        $alasa = 5;
        $alasb = 6;
        $tinggi = 8;
        $result = $trapesium->hitungLuas($alasa,$alasb,$tinggi);
        $expected = 88;

        
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        $trapesium = new Trapesium();
        

        $alasa = '';
        $alasb = '';
        $tinggi = '';
        $result = $trapesium->hitungLuas($alasa,$alasb,$tinggi);
        $expected = "Tidak Boleh kosong!";

 
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\n Eksekusi setelah pengujian \n";
    }

}