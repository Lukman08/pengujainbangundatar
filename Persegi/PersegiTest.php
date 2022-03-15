<?php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Persegi.php";

// Class untuk run Testing.
class PersegiTest extends TestCase {
    private static $persegi;
    public static function setUpBeforeClass(): void {
        PersegiTest::$persegi = new Persegi();
    }
    public function testHitungKeliling(){
        $persegi = new persegi();
        $sisi = 2;
        $result = $persegi->hitungKeliling($sisi);
        $expected = 8;

        //Assert.assertEquals
        $this->assertEquals($expected, $result);
    }
    // public function testHitungKelilingKosong(){
    //     $persegi = new persegi();
    //     $sisi = '';
    //     $result = $persegi->hitungKeliling($sisi);
    //     $expected = "Tidak boleh kosong!";

    //     //Assert.assertEquals
    //     $this->assertEquals($expected, $result);
    // }
    public function testHitungLuas(){
        $persegi = new persegi();
        $sisi = 2;
        $result = $persegi->hitungLuas($sisi);
        $expected = 4;

        //Assert.assertEquals
        $this->assertEquals($expected, $result);
    }
    // public function testHitungLuasKosong(){
    //     $persegi = new persegi();
    //     $sisi = '';
    //     $result = $persegi->hitungLuas($sisi);
    //     $expected = "Tidak boleh kosong!";

    //     //Assert.assertEquals
    //     $this->assertEquals($expected, $result);
    // }
}
?>