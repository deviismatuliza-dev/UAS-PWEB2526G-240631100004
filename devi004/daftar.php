<?php
include 'koneksi.php';

$data = mysqli_query($conn,"SELECT * FROM kontak ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kontak</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

<div class="card">

<h2>Daftar Kontak</h2>

<table>

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>No HP</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php
$no=1;
while($row=mysqli_fetch_assoc($data)){
?>

<tr>

<td><?= $no++; ?></td>
<td><?= $row['nama']; ?></td>
<td><?= $row['no_hp']; ?></td>
<td><?= $row['email']; ?></td>
<td><?= $row['alamat']; ?></td>

<td>

<a class="btn-edit"
href="edit.php?id=<?= $row['id']; ?>">
Edit
</a>

<a class="btn-hapus"
href="hapus.php?id=<?= $row['id']; ?>"
onclick="return confirm('Yakin ingin menghapus data ini?')">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</div>

</body>
</html>