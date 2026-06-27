<?php
include 'koneksi.php';

function tambahKontak($data){
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $no_hp = htmlspecialchars($data['no_hp']);
    $email = htmlspecialchars($data['email']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "INSERT INTO kontak VALUES
    ('','$nama','$no_hp','$email','$alamat')";

    return mysqli_query($conn,$query);
}

function editKontak($data){
    global $conn;

    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $no_hp = htmlspecialchars($data['no_hp']);
    $email = htmlspecialchars($data['email']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "UPDATE kontak SET
                nama='$nama',
                no_hp='$no_hp',
                email='$email',
                alamat='$alamat'
              WHERE id='$id'";

    return mysqli_query($conn,$query);
}
?>