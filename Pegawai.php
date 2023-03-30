<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this -> nip = $nip;
        $this -> nama = $nama;
        $this -> jabatan = $jabatan;
        $this -> agama = $agama;
        $this -> status = $status;
        self::$jml++;
    }

    // Hitung Gaji Pokok
    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            default: $gapok = 0;
        }
        return $gapok;
    }

    // Hitung Tunjangan Jabatan
    public function TunJab(){
       $tunjab =  0.2 * $this->setGajiPokok($this->jabatan);
       return $tunjab;
    }

    // Hitung Tunjangan Keluarga
    public function TunKel(){
        $tunkel = ($this->status == "Menikah")? 0.1 * $this->setGajiPokok($this->jabatan) : 0 ;
        return $tunkel;
    }

    // Hitung Gaji Kotor
    public function GajiKotor(){
        $gaji_kotor = $this->setGajiPokok($this->jabatan) + $this->TunJab() + $this->TunKel();
        return $gaji_kotor;
    }

    // Hitung Zakat
    public function ZakatProfesi(){
        $zakat = ($this->agama == "Islam" && $this->GajiKotor() >= 6000000)? 0.025 * $this->setGajiPokok($this->jabatan) : 0 ;
        return $zakat;
    }

    // Hitung Gaji Bersih
    public function GajiBersih(){
        $gaji_bersih = $this->GajiKotor() - $this->ZakatProfesi();
        return $gaji_bersih;
    }

    public function cetak(){
        echo '<b><u>'.self::PT.'</u></b>';
        echo '<br> NIP : '.$this -> nip;
        echo '<br> Nama Pegawai : '.$this -> nama;
        echo '<br> Jabatan : '.$this -> jabatan;
        echo '<br> Agama : '.$this -> agama;
        echo '<br> Status : '.$this -> status;
        echo '<br> Gaji Pokok : Rp. '.number_format($this->setGajiPokok($this->jabatan), 0, ',', '.');
        echo '<br> Tunjangan Jabatan : Rp. '.number_format($this->TunJab(), 0, ',', '.');
        echo '<br> Tunjangan Keluarga : Rp. '.number_format($this->TunKel(), 0, ',', '.');
        echo '<br> Gaji Kotor : Rp. '.number_format($this->GajiKotor(),0 , ',', '.');
        echo '<br> Zakat : Rp. '.number_format($this->ZakatProfesi(),0 , ',', '.');
        echo '<br> Gaji Bersih : Rp. '.number_format($this->GajiBersih(),0 , ',', '.');
        echo '<hr>';
    }
}
?>