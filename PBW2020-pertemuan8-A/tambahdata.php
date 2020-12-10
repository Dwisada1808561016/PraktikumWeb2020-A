<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
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
        <h2 class="judul">Tambah Data</h2>
        <!-- menambah data dengan method post dan diarahkan ke tambah_aksi.php -->
        <form action="tambah_aksi.php" method="post">
            <label for="">NIM</label><br>
            <input type="text" name="NIM" id="" placeholder="Masukan NIM"><br>
            <label for="">Nama</label><br>
            <input type="text" name="nama" id="" placeholder="Masukan Nama"><br>
            <label for="">Alamat</label><br>
            <input type="text" name="alamat" id="" placeholder="Masukan Alamat"><br>
            <input type="submit" value="Tambah data">
        </form>
    </div>
    
</body>
</html>