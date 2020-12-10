<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus</title>
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

        .kotak {
            width: 500px;
            height: 280px;
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

        tr {
            margin: 50px;
        }

        .tombol_ok {
            width: auto;
            height: 40px;
            border-radius: 5px;
            background-color: #4CAF50;
            margin-top: 15px;
            margin-left: 90px;
            color: white;
            font-family: 'Times New Roman';
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border: none;

        }

        .tombol_delete {
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
        
    </style>
</head>
<body>
    <div class="kotak">
        <h2 class="judul">Data yang akan Dihapus</h2>
        <?php
        include "koneksi.php";
        $id_mhs = $_GET['id_mhs'];
        $data = mysqli_query($koneksi,"SELECT * FROM tb_mhs WHERE id_mhs='$id_mhs'");
        while($d = mysqli_fetch_array($data)){
        ?>    
        <!-- menampilkan data yang akan dihapus -->
        <form action="hapus_aksi.php" method="get">
            <table>
                <tr>
                    <td>NIM</td>
                    <input type="hidden" name="id_mhs" value="<?php echo $d['id_mhs']; ?>">
                    <td>:<?php echo $d['NIM']?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:<?php echo $d['nama_mhs']?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:<?php echo $d['alamat_mhs']?></td>
                </tr>
            </table>
            <!-- tombol untuk menghapus -->
            <button class="tombol_ok" type="submit" value="">Hapus</button>
            <!-- tombol batal -->
            <button class="tombol_delete" type="button" value="">Batal</button>
        </form>
        <?php
        }    
        ?>
            
    </div>
    
</body>
</html>