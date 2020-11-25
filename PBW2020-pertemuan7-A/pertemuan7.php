<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"><!-- menghubungkan ke css -->
    <title>Rekap Nilai</title> <!-- title  -->
</head>
<body>
    <div class="kotak">
        <form action="output.php" method="post" > <!-- mengarahkan ke output.php dengan method post -->
            <h2 class="judul">Hitung Nilai Akhir Mahasiswa</h2> <br>
            <!-- jtampilan input -->
            Nama Mahasiswa : <br>
            <input type="text" name="nama" placeholder="nama"><br> 
            Mata Kuliah : <br>
            <input type="text" name="makul" placeholder="mata kuliah"><br>
            Nilai Absen : <br>
            <input type="text" name="absen" placeholder="nilai absen"><br>
            Nilai Tugas Individu : <br>
            <input type="text" name="tugasInd" placeholder="nilai tugas individu"><br>
            Nilai Tugas Kelompok : <br>
            <input type="text" name="tugasKlp" placeholder="nilai tugas kelompok"><br>
            Nilai UTS : <br>
            <input type="text" name="uts" placeholder="nilai UTS"><br>
            Nilai UAS : <br>
            <input type="text" name="uas" placeholder="nilai UAS"><br><br>
            <input type="submit" value="Hitung">
        </form>
    </div>
</body>
</html>