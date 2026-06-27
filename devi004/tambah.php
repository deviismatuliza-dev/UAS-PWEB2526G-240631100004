<?php

include 'function.php';

if(isset($_POST['simpan'])){

    if(tambahKontak($_POST)){
        echo "<script>
        alert('Data berhasil ditambahkan');
        document.location='daftar.php';
        </script>";
    }else{
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Kontak</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>

<body>

<?php include 'navbar.php'; ?>

<div class="container">

<div class="card">

<h2>Tambah Kontak</h2>

<form method="POST">

<label>Nama</label>

<input type="text" name="nama" required>

<label>No HP</label>

<input type="text" name="no_hp" required>

<label>Email</label>

<input type="email" name="email">

<label>Alamat</label>

<textarea name="alamat"></textarea>

<button type="submit" name="simpan">
Simpan
</button>

</form>

</div>

</div>

</body>

</html>