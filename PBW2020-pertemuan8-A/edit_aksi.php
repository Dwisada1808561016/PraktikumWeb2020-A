<?php
// memanggil koneksi.php
include  'koneksi.php';
// mengambil data dari edit yang telah dilakukan
$id_mhs= $_POST['id_mhs'];
$NIM= $_POST['NIM'];
$nama_mhs= $_POST['nama'];
$alamat_mhs= $_POST['alamat'];
// query proses update data
mysqli_query($koneksi,"UPDATE tb_mhs set NIM='$NIM', nama_mhs='$nama_mhs', alamat_mhs='$alamat_mhs' WHERE id_mhs='$id_mhs'");

session_start ();
// jika jabatan_user adalah admin maka akan dialihkan ke admin.php
if ($_SESSION['jabatan_user']=="admin")
{
    header("location:admin.php?pesan=update");
} 
// jika jabatan_user adalah pegawai maka akan dialihkan ke user.php
else if ($_SESSION['jabatan_user']=="pegawai")
{
    header("location:user.php?pesan=update");
}

?>