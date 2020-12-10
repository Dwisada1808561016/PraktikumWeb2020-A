<?php
// koneksi ke database
include 'koneksi.php';
$id_mhs= $_GET['id_mhs'];
// query untuk update data ke dalam database
mysqli_query($koneksi, "DELETE FROM tb_mhs WHERE id_mhs='$id_mhs'");
// mengarahkan ke admin.php
header("location:admin.php?pesan=hapus");
?>