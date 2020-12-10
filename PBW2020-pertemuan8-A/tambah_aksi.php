<?php
// koneksi ke database
include 'koneksi.php';
// mengambil data yang telah dimasukan 
$NIM = $_POST['NIM'];
$nama_mhs = $_POST['nama'];
$alamat_mhs = $_POST['alamat'];
// query untuk menambahkan data
mysqli_query($koneksi,"INSERT INTO tb_mhs VALUES('','$NIM','$nama_mhs','$alamat_mhs')");

session_start ();
// jika jabatan_user adalah admin maka akan dialihkan ke admin.php
if ($_SESSION['jabatan_user']=="admin")
{
    header("location:admin.php?pesan=input");
} 
// jika jabatan_user adalah pegawai maka akan dialihkan ke user.php
else if ($_SESSION['jabatan_user']=="pegawai")
{
    header("location:user.php?pesan=input");
}
?>