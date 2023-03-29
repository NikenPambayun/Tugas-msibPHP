<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css4/style4.css">
    <title>Tugas 4</title>
</head>

<body>
    <div class="card">
        <?php
        $ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "ILKOM" => "Ilmu Komputer", "TE" => "Teknik Elektro"];

        $ar_skill = ["HTML" => 10, "CSS" => 10, "Javascript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "MySQL" => 30, "Laravel" => 40];

        ?>
        <table>
            <p>FORM REGISTRASI</p>
            <tbody>
                <form method="POST">
                    <tr>
                        <td width="25%">NIM </td>
                        <td> : </td>
                        <td>
                            <input class="input" type="text" name="nim">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama </td>
                        <td> : </td>
                        <td>
                            <input class="input" type="text" name="nama">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin </td>
                        <td> : </td>
                        <td>
                            <input type="radio" name="jk" value="Laki-laki">Laki-Laki &nbsp;
                            <input type="radio" name="jk" value="Perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Program Studi </td>
                        <td> : </td>
                        <td>
                            <select class="input" name="prodi">
                                <?php

                                foreach ($ar_prodi as $prodi) {
                                    ?>
                                    <option value="<?= $prodi ?>"><?= $prodi ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Skill Programming </td>
                        <td> : </td>
                        <td>
                            <?php
                            foreach ($ar_skill as $skill => $s) {
                                ?>
                                <input type="checkbox" name="skill[]" value="<?= $skill ?>"><?= $skill ?>

                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td> : </td>
                        <td>
                            <input class="input" type="email" name="email">
                        </td>
                    </tr>
            <tfoot>
                <tr>
                    <th colspan="3">
                        <button name="proses">Submit</button>
                    </th>
                </tr>
            </tfoot>
            </form>
            </tbody>
        </table>
        </fieldset>
    </div>
    <div class="card2">
        <p>HASIL</p>
        <?php
        error_reporting(0);
        if (isset($_POST['proses'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $prodi = $_POST['prodi'];
            $skill = $_POST['skill'];
            $email = $_POST['email'];
        }
        ?>
        <table>
            <tr>
                <td width="25%"><b> NIM </td>
                <td> : </td>
                <td>
                    <?= $nim ?>
            </tr>
            <tr>
                <td><b> Nama </td>
                <td> : </td>
                </td>
                <td>
                    <?= $nama ?>
                </td>
            </tr>
            <tr>
                <td><b> Jenis Kelamin </td>
                <td> : </td>
                <td>
                    <?= $jk ?>
                </td>
            </tr>
            <tr>
                <td><b> Program Studi </td>
                <td> : </td>
                <td>
                    <?= $prodi ?>
                </td>
            </tr>
            <tr>
                <td><b> Skill </td>
                <td> : </td>
                <td>
                    <?php
                    foreach ($skill as $s) { ?>
                        <?= $s ?> ,
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td><b> Skor Skill </td>
                <td> : </td>
                <td>
                    <!-- membuat skor skill -->
                    <?php
                    $skor_skill = 0;
                    foreach ($skill as $s) {
                        if (isset($ar_skill[$s])) {
                            $skor_skill += $ar_skill[$s];
                        }
                    }
                    ?>
                    <?= $skor_skill ?>
                </td>
            </tr>
            <tr>
                <td><b> Kategori Skill </td>
                <td> : </td>
                </td>
                <td>
                    <!-- menentukkan kategori skill dengan function  -->
                    <?php 
                    function kategori($skor_skill){
                        if ($skor_skill >= 100 && $skor_skill <= 160) $hasil = 'Sangat Baik';
                        else if($skor_skill >= 60 && $skor_skill < 100) $hasil = 'Baik';
                        else if($skor_skill >= 40 && $skor_skill < 60) $hasil = 'Cukup';
                        else if($skor_skill > 0 && $skor_skill < 40) $hasil = 'Kurang';
                        else $hasil = 'Tidak Memadai';
                        return $hasil;
                    }

                    $hasil = kategori($skor_skill);
                    
                    ?>
                    <?= $hasil ?>
                </td>
            </tr>
            <tr>
                <td><b> Email </td>
                <td> : </td>
                </td>
                <td>
                    <?= $email ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>