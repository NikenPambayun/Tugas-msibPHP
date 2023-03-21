<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tugas 1</title>
</head>

<body>
    <form class="form" method="post">
        <p class="heading">JAJAR GENJANG</p>
        <table>
            <thead>
                <tr>
                    <th>Menghitung Luas</th>
                    <th>Menghitung Keliling</th>
                </tr>
            </thead>

            <tbody align="center">
                <td>
                    <input type="number" class="input" name="a" placeholder="Masukkan Alas">
                    <input type="number" class="input" name="t" placeholder="Masukkan Tinggi">
                    <button class="btn" name="luas" type="submit">Hitung Luas</button>
                </td>

                <td>
                    <input type="number" class="input" name="a2" placeholder="Masukkan Alas">
                    <input type="number" class="input" name="b" placeholder="Masukkan Sisi Miring">
                    <button class="btn" name="keliling" type="submit">Hitung Keliling</button>
                </td>
            </tbody>
        </table>

        <?php
        if (isset($_POST['luas'])) {
            $alas = $_POST['a'];
            $tinggi = $_POST['t'];

            $luasJG = $alas * $tinggi;
            echo 'Hasil Perhitungan Luas Jajar Genjang';
            echo '<br> Diketahui :';
            echo '<br> Alas : ' . $alas;
            echo '<br> Tinggi : ' . $tinggi;

            echo '<br> Maka Luasnya = ' . $luasJG;
        }
        if (isset($_POST['keliling'])) {
            $alas2 = $_POST['a2'];
            $sisimiring = $_POST['b'];

            $kelJG = 2 * ($alas2 + $sisimiring);
            echo 'Hasil Perhitungan Keliling Jajar Genjang';
            echo '<br> Diketahui :';
            echo '<br> Alas : ' . $alas2;
            echo '<br> Sisi Miring : ' . $sisimiring;

            echo '<br> Maka Kelilingnya = ' . $kelJG;
        }
        ?>
    </form>
</body>

</html>