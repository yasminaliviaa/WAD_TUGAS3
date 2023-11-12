<?php   
require 'functions.php';
$resto = query("SELECT * FROM toko_foodies");
?>

<!DOCTYPE html>
<html lang="en">
    <head><title>HALAMAN ADMIN</title></head>
    <body>
        <h1>Daftar Makanan Toko Foodies</h1>
        <a href="tambah.php">Tambah Data Makanan</a>
        <br><br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama Makanan</th>
                <th>Kode Makanan</th>
                <th>Harga Makanan</th>
                <th>Aksi</th>
</tr>
<?php $i = 1;
        foreach($resto as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="120"></td>
            <td><?= $row["namamakanan"]; ?></td>
            <td><?= $row["kodemakanan"]; ?></td>
            <td><?= $row["hargamakanan"]; ?></td>
            <td>
                <a href="ubah.php?no=<?= $row["no"]; ?>" >Ubah</a> |
                <a href="hapus.php?no=<?= $row["no"]; ?>" onclick="
                return confirm('yakin');">Hapus</a>
                </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body> 
