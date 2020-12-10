<?php 
// memulai session
session_start();
// memanggil koneksi.php agar terhubung ke database
include('koneksi.php');

// mengambil nilai dari username dan password yang telah dimasukkan
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from tb_user where nama_user='$username' and pswd_user='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['jabatan_user']=="admin"){

		// buat session login dan username
		$_SESSION['nama_user'] = $username;
		$_SESSION['jabatan_user'] = "admin";
		// alihkan ke halaman  admin
		header("location:admin.php");

	// cek jika user login sebagai pegawai
	}else if($data['jabatan_user']=="pegawai"){
		// buat session login dan username
		$_SESSION['nama_user'] = $username;
		$_SESSION['jabatan_user'] = "pegawai";
		// alihkan ke halaman pegawai
		header("location:user.php");
	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
?>