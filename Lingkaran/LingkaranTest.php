<<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "lingkaran.php";

// Class untuk run Testing.
class lingkarantest extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        // Kita pakai class yang mau kita test.
        $lingkaran = new lingkaran();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $r = 4; // 4 Kata ..
        $result = $lingkaran->hitungKeliling($r);
        $expected = 25.12;

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        // Kita pakai class yang mau kita test.
        $lingkaran = new lingkaran();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $r = '';
        $result = $lingkaran->hitungKeliling($r);
        $expected = "Tidak Boleh kosong!";

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {
        // Kita pakai class yang mau kita test.
        $lingkaran = new lingkaran();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $r = 2; // 4 Kata ..
        $result = $lingkaran->hitungLuas($r);
        $expected = 12.56;

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        // Kita pakai class yang mau kita test.
        $lingkaran = new lingkaran();
        
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $r = ''; // 4 Kata ..
        $result = $lingkaran->hitungLuas($r);
        $expected = "Tidak Boleh kosong!";

        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\n Eksekusi setelah pengjujian \n";
    }

}