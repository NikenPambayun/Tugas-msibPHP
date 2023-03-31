<?php
require_once 'Abstrak.php';

class Segitiga extends Bentuk2D{
    public $alas;
    public $tinggi;
    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang(){
        $nama =  'Segitiga';
        return $nama;
    }
    public function luasBidang(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function KelilingBidang(){
        $keliling = 3 * $this->alas;
        return $keliling;
    }
    public function cetak(){
        $this->namaBidang();
        echo '<br> Alas : '.$this->alas;
        echo '<br> Tinggi : '.$this->tinggi;
        echo '<br> Luas Segitiga : '.$this->luasBidang();
        echo '<br> Keliling Segitiga : '.$this->KelilingBidang();
        echo '<hr>';
    }
}
?>