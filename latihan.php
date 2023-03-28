<?php
$m1 = ['NIM' => '01111021', 'nama' => 'Andi', 'nilai' => 80];
$m2 = ['NIM' => '01111022', 'nama' => 'Rika', 'nilai' => 29];
$m3 = ['NIM' => '01111023', 'nama' => 'Sinta', 'nilai' => 50];
$m4 = ['NIM' => '01111024', 'nama' => 'Lala', 'nilai' => 40];
$m5 = ['NIM' => '01111025', 'nama' => 'Sandi', 'nilai' => 90];
$m6 = ['NIM' => '01111026', 'nama' => 'Robi', 'nilai' => 75];
$m7 = ['NIM' => '01111027', 'nama' => 'Budi', 'nilai' => 30];
$m8 = ['NIM' => '01111028', 'nama' => 'Ali', 'nilai' => 85];
$m9 = ['NIM' => '01111029', 'nama' => 'Sintia', 'nilai' => 55];
$m10 = ['NIM' => '01111030', 'nama' => 'Indri', 'nilai' => 98];

$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', ' Predikat'];

// Hitung Jumlah Mahasiswa
$jml_data = count($mahasiswa);

// Hitung Nilai Tertinggi dan Terendah
$nilai_mhs = array_column($mahasiswa, 'nilai');
$max_nilai = max($nilai_mhs);
$min_nilai = min($nilai_mhs);

// Hitung Nilai Rata-Rata
$jml_nilai = array_sum($nilai_mhs);
$avg = $jml_nilai / $jml_data;

$keterangan = [
    'Jumlah Data' => $jml_data,
    'Nilai Tertinggi' => $max_nilai,
    'Nilai Terendah' => $min_nilai,
    'Rata-Rata Nilai Mahasiswa' => $avg,
]

?>

<table style="width: 100%; background-color: lightsteelblue;" border="1">
    <thead>
        <?php
        foreach ($ar_judul as $judul) {
        ?>
        <th><?= $judul ?></th>
        <?php } ?>
    </thead>

    <tbody>
        <?php
        $no = 1;
        foreach ($mahasiswa as $mhs) {
        $ket = ($mhs['nilai']>= 60) ? 'Lulus' : "Tidak Lulus";
        $warna = ($ket == 'Lulus') ? 'lightblue' : 'deeppink';
        // grade
        if($mhs ['nilai']>= 80 && $mhs ['nilai']<= 100) $grade = 'A';
        else if($mhs ['nilai']>= 75 && $mhs ['nilai']< 80) $grade = 'B';
        else if($mhs ['nilai']>= 60 && $mhs ['nilai']< 75) $grade = 'C';
        else if($mhs ['nilai']>= 30 && $mhs ['nilai']< 60) $grade = 'D';
        else if($mhs ['nilai']>= 0 && $mhs ['nilai']< 30) $grade = 'E';
        else $grade;

        // predikat
        switch ($grade) {
            case "A":
                $predikat = "Memuaskan";
                break;
            case "B":
                $predikat = "Bagus";
                break;
            case "C":
                $predikat = "Cukup";
                break;
            case "D":
                $predikat = "Kurang";
                break;
            case "E":
                $predikat = "Buruk";
                break;
            default:
                $predikat = "";
            }                
        ?>
        <tr bgcolor = "<?= $warna ?>">
            <td><?= $no ?></td>
            <td><?= $mhs['NIM'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['nilai'] ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
        </tr>
        <?php $no++; } ?>
    </tbody>

    <tfoot>
    <?php
        foreach ($keterangan as $ket => $hasil) {
        ?>

        <tr>
            <th colspan="3"><?= $ket ?></th>
            <th colspan="4"><?= $hasil ?></th>
        </tr>

        <?php } ?>
    </tfoot>
</table>