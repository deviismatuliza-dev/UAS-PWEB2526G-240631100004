<?php

include 'koneksi.php';

$id=$_GET['id'];

mysqli_query($conn,"DELETE FROM kontak WHERE id='$id'");

echo "<script>
alert('Data berhasil dihapus');
document.location='daftar.php';
</script>";

?>