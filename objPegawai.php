<?php
require 'Pegawai.php';

$pegawai1 = new Pegawai('01111', 'Andi', 'Manager', 'Islam', 'Menikah');
$pegawai2 = new Pegawai('01112', 'Laura', 'Asisten', 'Katolik', 'Belum Menikah');
$pegawai3 = new Pegawai('01113', 'Ika', 'Kepala Bagian', 'Islam', 'Belum Menikah');
$pegawai4 = new Pegawai('01114', 'Budi', 'Staff', 'Islam', 'Menikah');
$pegawai5 = new Pegawai('01115', 'Akbar', 'Staff', 'Buddha', 'Belum Menikah');
$pegawai6 = new Pegawai('01116', 'Lubna', 'Staff', 'Kristen', 'Menikah');

$ar_pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5, $pegawai6];

foreach ($ar_pegawai as $pegawai) {
    $pegawai -> cetak();
}
?>