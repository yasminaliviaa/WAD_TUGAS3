<?php
$conn = mysqli_connect("localhost","root","","toko_yasmin");

if (isset($_POST["submit"])){   
    if (tambah($_POST)> 0){
        echo "
            <script>
            alert('Sukses!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Coba lagi masih gagal!');
        document.location.href = 'index.php';
        </script>
        ";
    }
};

?>


<!DOCTYPE html>
<head>
    <title>Tambah Data Toko Foodies</title>
</head>
<body>
    <h1>Tambah Data Makanan</h1>
    <form action="" method="post">
        <ul>
        <li>
                <label for="gambar">Gambar  :</label><br>
                <input type="text" name="gambar" id="gambar"><br><br>
            </li>
            <li>
                <label for="namamakanan">Nama Makanan :</label><br>
                <input type="text" name="namamakanan" id="namamakanan">
            </li>
            <li>
                <label for="kodemakanan">Kode Makanan :</label><br>
                <input type="text" name="kodemakanan" id="kodemakanan">
            </li>
            <li>
                <label for="hargamakanan">Harga  :</label><br>
                <input type="text" name="hargamakanan" id="hargamakanan">
            </li>
            <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
        </ul>
    </form>
</body>
</html>