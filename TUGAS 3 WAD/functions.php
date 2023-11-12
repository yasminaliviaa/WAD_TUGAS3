<?php 

$conn = mysqli_connect('localhost:3306', 'root', '', 'resto'); 

function query($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
return $rows;
}

function tambah($data) {
    global $conn;

    $gambar = $data["gambar"];
    $namamakanan = $data["namamakanan"];
    $kodemakanan = $data["kodemakanan"];
    $hargamakanan = $data["hargamakanan"];

    $query = "INSERT INTO toko_foodies
        VALUES
        ('','$gambar','$namamakanan', '$kodemakanan', '$hargamakanan')
        ";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);
}

function hapus($no) {
    global $conn;
    mysqli_query($conn, "DELETE FROM toko_foodies WHERE no = $no");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $no = $data["no"];
    $gambarmakanan = $data["gambar"];
    $namamakanan = $data["namamakanan"];
    $kodemakanan = $data["kodemakanan"];
    $hargamakanan = $data["hargamakanan"];

    $query = "UPDATE toko_foodies SET
            gambar = '$gambar'
            namamakanan = '$namamakanan',
            kodemakanan = '$kodemakanan',
            hargamakanan = '$hargamakanan',
            WHERE no = $no
            ";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);   
}
?>