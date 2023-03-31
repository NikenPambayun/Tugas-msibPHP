<?php
require_once 'Abstrak.php';

class PersegiPanjang extends Bentuk2D{
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang(){
        $nama =  'Persegi Panjang';
        return $nama;
    }
    public function luasBidang(){
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    public function KelilingBidang(){
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }
}
?>