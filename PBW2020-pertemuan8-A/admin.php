<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tabel Mahasiswa</title>
    <?php
    include 'koneksi.php';
    ?>
</head>
<body>
    <h1 class="judul">Tabel Mahasiswa</h1>
    <div class="div_tabel">
        <!-- tulisan selamat datang dengan diikuti nama user yang login -->
        <h3>Selamat datang 
            "<?php session_start ();
            echo $_SESSION['nama_user'];?>"
        </h3>
        <a href="tambahdata.php"><h3>+Tambahkan data</h3></a>
        <table>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Alamat</th>
                <th colspan="2">Opsi</th>
            </tr>
            <!-- untuk menampilkan Data dari data base -->
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from tb_mhs");
            while($d = mysqli_fetch_array($data)){
            ?>
                <tr>
                    <?php $no++ ?>
                    <td><?php echo $d['NIM']?></td>
                    <td><?php echo $d['nama_mhs']?></td>
                    <td><?php echo $d['alamat_mhs']?></td>
                    <!-- tombol edit data -->
                    <td><a href="editdata.php?id_mhs=<?php echo $d['id_mhs'];?>"><input class="tombol_edit" type="button" value="edit"></a></td>
                    <!-- tombol delete -->
                    <td><a href="konfirm_delete.php?id_mhs=<?php echo $d['id_mhs'];?>"><input class="tombol_delete"type="button" value="delete"></a></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <!-- tombol logout -->
        <a href="logout.php"><input class="tombol_logout" type="button" value="Logout"></a>
        <!-- untuk menampilkan keterangan input, update atau delete yang berhasil -->
        <a>
            <?php 
            if(isset($_GET['pesan'])){
                $pesan = $_GET['pesan'];
                if($pesan == "input"){
                    echo "Data berhasil di input.";
                }else if($pesan == "update"){
                    echo "Data berhasil di update.";
                }else if($pesan == "hapus"){
                    echo "Data berhasil di hapus.";
                }
            }
            ?>
        </a>
    </div>
</body>
</html>