<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style type="text/css">
        body {
            background-color: #6278c0;
        }

        input[type=text] {
            width: 280px;
            height: 30px;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-left: 10px;
            font-family: 'Times New Roman';
            font-size: 12pt;
            border-radius: 5px;
            border: 1px solid #838383;
        }

        input[type=submit] {
            width: auto;
            height: 40px;
            border-radius: 5px;
            background-color: #4CAF50;
            margin-top: 15px;
            color: white;
            font-family: 'Times New Roman';
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border: none;
        }

        .tombol_kembali {
            width: 100px;
            height: 40px;
            border-radius: 5px;
            background-color:  #ff1616;
            margin-top: 15px;
            color: white;
            font-family: 'Times New Roman';
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border: none;
        }

        .kotak {
            width: 500px;
            height: 400px;
            margin: auto;
            margin-top: 50px;
            padding-top: 20px;
            background-color: #ffffff;
            border-radius: 5px;
        }

        .judul {
            text-align: center;
        }

        form{
            margin-left: 100px;
            font-size: 14pt;
            font-family: 'Times New Roman';
        }

    </style>
</head>
<body>
    <div class="kotak">
        <h2 class="judul">Edit Data</h2>
        <!-- koneksi ke data base dan melakukan pengambilan data menurut id data yang dipilih -->
        <?php
        include "koneksi.php";
        $id_mhs = $_GET['id_mhs'];
        $data = mysqli_query($koneksi,"SELECT * FROM tb_mhs WHERE id_mhs='$id_mhs'");
        while($d = mysqli_fetch_array($data)){
        ?>    
        <!-- form untuk pengeditan data -->
        <form action="edit_aksi.php" method="post">
            <input type="hidden" name="id_mhs" value="<?php echo $d['id_mhs']; ?>">
            <label for="">NIM</label><br>
            <input type="text" name="NIM" id="" value="<?php echo $d['NIM']; ?>"><br>
            <label for="">Nama</label><br>
            <input type="text" name="nama" id="" value="<?php echo $d['nama_mhs']; ?>"><br>
            <label for="">Alamat</label><br>
            <input type="text" name="alamat" id="" value="<?php echo $d['alamat_mhs']; ?>"><br>
            <input type="submit" value="Simpan">
            <?php 
            //SESSION akan dipanggil kembali untuk aksi yg dihasilkan masing2 tombol
            session_start ();
            if ($_SESSION['jabatan_user']=="admin")
            //jika role=admin
            {
            //alihkan halaman ke admin.php
            ?>
            <a href="admin.php"><input type="button" class="tombol_kembali" value="Kembali"></a>
            <?php
            } else if ($_SESSION['jabatan_user']=="pegawai")
            //jika role=pegawai
            {
            //alihkan halaman ke user.php
            ?>
            <a href="user.php"><input type="button"  class="tombol_kembali" value="Kembali"></a>
            <?php
            }
        ?>
        </form>
        <?php
        }    
        ?>
    </div>
    
</body>
</html>