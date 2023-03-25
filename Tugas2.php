<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tugas 2</title>
</head>

<body>
    <div class="card1">
        <form class="form" method="post">
            <h2 class="heading1">PENDAPATAN PEGAWAI</h2>
            <fieldset style="border: darkturquoise groove 2px">
                <legend>Nama</legend>
                <input type="text" class="input" name="nama" placeholder="Masukkan Nama Anda">
            </fieldset>
            <fieldset style="border: darkturquoise groove 2px">
                <legend>Jabatan</legend>
                <input type="text" class="input" name="jabatan" placeholder="Masukkan Jabatan Anda">
            </fieldset>
            <fieldset style="border: darkturquoise groove 2px">
                <legend>Status</legend>
                <select name="status" class="input">
                    <option disabled> Pilih Status Anda </option>
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                </select>
            </fieldset>
            <fieldset style="border: darkturquoise groove 2px">
                <legend>Jumlah Anak</legend>
                <select name="jmlanak" class="input">
                    <option disabled> Jumlah Anak Anda </option>
                    <option value="0">Tidak Punya</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </fieldset>
            <fieldset style="border: darkturquoise groove 2px">
                <legend>Agama</legend>
                <select name="agama" class="input">
                    <option disabled> Pilih Agama Anda </option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                </select>
            </fieldset>
            <button class="btn" name="proses" type="submit">Hitung Gaji</button>
        </form>
    </div>

    <div class="card2">
        <h3 class="heading2">RINCIAN PENDAPATAN</h3>
        <?php
        error_reporting(0);

        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $jmlanak = $_POST['jmlanak'];
        $agama = $_POST['agama'];
        $tombol = $_POST['proses'];

        // Hitung gaji pegawai
        $gaji = 0;
        switch ($jabatan) {
            case "Manager":
                $gaji = 20000000;
                break;
            case "Asisten":
                $gaji = 15000000;
                break;
            case "Kepala Bagian":
                $gaji = 10000000;
                break;
            case "Staff":
                $gaji = 4000000;
                break;
            default:
                $gaji = "";
                break;
        }

        // Hitung Tunjangan Jabatan
        $tunjangan_jabatan = 0.2 * $gaji;

        // Hitung Tunjangan Keluarga
        $tunjangan_keluarga = 0;
        if ($status == "Menikah" && $jmlanak == "0")
            $tunjangan_keluarga = 0 * $gaji;
        else if ($status == "Menikah" && $jmlanak >= "1" && $jmlanak <= "2")
            $tunjangan_keluarga = 0.05 * $gaji;
        else if ($status == "Menikah" && $jmlanak >= "3" && $jmlanak <= "5")
            $tunjangan_keluarga = 0.1 * $gaji;
        else
            $tunjangan_keluarga = 0 * $gaji;

        // Menentukkan gaji kotor
        $gaji_kotor = $gaji + $tunjangan_jabatan + $tunjangan_keluarga;

        // Menentukkan Zakat
        $zakat = ($agama == "Islam" && $gaji_kotor >= 6000000) ? 0.025 * $gaji_kotor : 0;

        // Take Home Pay
        $THP = $gaji_kotor - $zakat;

        if (isset($tombol)) {
            ?>
            <p>Nama Pegawai :
                <?= $nama ?><br>
            <p>Jabatan :
                <?= $jabatan ?><br>
            <p>Status :
                <?= $status ?><br>
            <p>Jumlah Anak :
                <?= $jmlanak ?><br>
            <p>Agama :
                <?= $agama ?><br>
            <p>Gaji Pokok :
                <?= $gaji ?><br>
            <p>Tunjangan Jabatan :
                <?= $tunjangan_jabatan ?><br>
            <p>Tunjangan Keluarga :
                <?= $tunjangan_keluarga ?><br>
            <p>Gaji Kotor :
                <?= $gaji_kotor ?><br>
            <p>Zakat :
                <?= $zakat ?><br>
            <p>Take Home Pay :
                <?= $THP ?>
            <?php } ?>

    </div>
</body>

</html>