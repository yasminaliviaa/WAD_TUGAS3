<?php
require 'functions.php';

$no = $_GET["no"];
$tes = query("SELECT * FROM toko_foodies where no = $no")[0];

if (isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}


?>

<!DOCTYPE html>
<head>
    <title>Ubah Data Toko Toko Foodies</title>
</head>
<body>
    <h1>Ubah Data Toko Foodies</h1>
    <form action="" method="post">
        <input type="hidden" name="no" value="<?= $tes["no"]; ?>">
        <ul>
        <label for="gambar">Gambar  :</label><br>
                <input type="text" name="gambar" id="gambar" required value = <?= $tes["gambar"]; ?>>
                <label for="gambar">Gambar Barang</label><br><br>
            </li>
            <li>
                <label for="namamakanan">Nama Makanan :</label><br>
                <input type="text" name="namamakanan" id="namamakanan" required value = <?= $tes["namamakanan"]; ?>>
            </li>
            <li>
                <label for="kodemakanan">Kode Makanan :</label><br>
                <input type="text" name="kodemakanan" id="kodemakanan" required value = <?= $tes["kodemakanan"]; ?>>
            </li>
            <li>
                <label for="hargamakanan">Harga  :</label><br>
                <input type="text" name="hargamakanan" id="hargamakanan" required value = <?= $tes["hargamakanan"]; ?>>
            </li>
            <li>
            <li>
                <button type="submit" name="submit">Ubah data</button>
            </li>
        </ul>
    </form>
</body>
</html>