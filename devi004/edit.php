<?php
include 'koneksi.php';
include 'function.php';

$id=$_GET['id'];

$data=mysqli_query($conn,"SELECT * FROM kontak WHERE id='$id'");
$row=mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    if(editKontak($_POST)){
        echo "<script>
        alert('Data berhasil diubah');
        document.location='daftar.php';
        </script>";
    }else{
        echo "<script>alert('Data gagal diubah');</script>";
    }

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Kontak</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>

<body>

<?php include 'navbar.php'; ?>

<div class="container">

<div class="card">

<h2>Edit Kontak</h2>

<form method="POST">

<input type="hidden"
name="id"
value="<?= $row['id']; ?>">

<label>Nama</label>

<input
type="text"
name="nama"
value="<?= $row['nama']; ?>"
required>

<label>No HP</label>

<input
type="text"
name="no_hp"
value="<?= $row['no_hp']; ?>"
required>

<label>Email</label>

<input
type="email"
name="email"
value="<?= $row['email']; ?>">

<label>Alamat</label>

<textarea
name="alamat"><?= $row['alamat']; ?></textarea>

<button
type="submit"
name="update">
Update
</button>

</form>

</div>

</div>

</body>
</html>