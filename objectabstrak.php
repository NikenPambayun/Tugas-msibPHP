<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';
?>

<body>
    <div class="card">
        <p>Tugas 6 - Inheritance</p>
    <table>
        <thead>
            <th>Nama Bidang</th>
            <th>Luas Bidang</th>
            <th>Keliling Bidang</th>
        </thead>
        <tbody>
            <?php
                $lingkaran = new Lingkaran(7);
                $persegipanjang = new PersegiPanjang(5, 5);
                $segitiga = new Segitiga(10, 20);
                
                $bangundatar = [$lingkaran, $persegipanjang, $segitiga];
                
                foreach ($bangundatar as $bd) {
                    echo '<tr>';
                    echo '<td>'.$bd->namaBidang();
                    echo '<td>'.$bd->luasBidang();
                    echo '<td>'.$bd->KelilingBidang();
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
    </div>
</body>

<style>
body{
    background-color: black;
    display: flex;
    justify-content: center;
}
.card{
    background-color: beige;
    padding: 10px;
    border: 5px solid burlywood;
    border-radius: 50px;
    width: 60%;
    height: 50%;
}
p{
    letter-spacing: 5px;
    text-align: center;
    font-size: 20pt;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: chocolate;
}
table{
    width: 100%;
    padding: 10px;
}
td{
    padding: 10px;
}
</style>