
    <?php
        //mengambil nilai dari input
        $nama   = $_POST['nama'];
        $makul  = $_POST['makul'];
        $absen  = $_POST['absen'];
        $tugasInd  = $_POST['tugasInd'];
        $tugasKlp  = $_POST['tugasKlp'];
        $uts    = $_POST['uts'];
        $uas    = $_POST['uas'];
        //persentasi dari masing-masing nilai
        $nilai_absen = $absen * 0.1;
        $nilai_tugasInd = $tugasInd * 0.2;
        $nilai_tugasKlp = $tugasKlp * 0.2;
        $nilai_uts   = $uts * 0.3;
        $nilai_uas   = $uas * 0.2;
        //pnilai akhhir 
        $nilai_akhir = $nilai_absen + $nilai_tugasInd + $nilai_tugasKlp + $nilai_uts + $nilai_uas;
        //kondisi grade 
        if ($nilai_akhir>=80){
        $grade = "A";
        }
        elseif ($nilai_akhir>=70){
        $grade = "B";
        }
        elseif ($nilai_akhir>=50){
        $grade = "C";
        }
        elseif ($nilai_akhir>=40){
        $grade = "D";
        }
        else{
        $grade = "E";
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Rekap Nilai</title>
</head>
<body>
    <div class="kotak">
        <h2 class="judul">Nilai Akhir Mahasiswa</h2> <br> <!-- judul tampulan -->
        <p>Nama           : <?php echo"$nama" ?>  </p>
        <p>Mata Kuliah    : <?php echo"$makul" ?> </p>
            <table> <!-- membuat tabel -->
                <tr>
                    <th>Nama Nilai</th>
                    <th>Angka</th>
                    <th>Persentasi</th>
                    <th>Nilai</th>
                </tr>
                <tr>
                    <td>Nilai Absen</td>
                    <td><?php echo"$absen" ?></td>
                    <td>10%</td>
                    <td><?php echo"$nilai_absen" ?></td>
                </tr>
                <tr>
                    <td>Nilai Tugas Individu</td>
                    <td><?php echo"$tugasInd" ?></td>
                    <td>20%</td>
                    <td><?php echo"$nilai_tugasInd" ?></td>
                </tr>
                <tr>
                    <td>Nilai Tugas Kelompok</td>
                    <td><?php echo"$tugasKlp" ?></td>
                    <td>20%</td>
                    <td><?php echo"$nilai_tugasKlp" ?></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td><?php echo"$uts" ?></td>
                    <td>30%</td>
                    <td><?php echo"$nilai_uts" ?></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td><?php echo"$uas" ?></td>
                    <td>30%</td>
                    <td><?php echo"$nilai_uas" ?></td>
                </tr>
            </table>
        <p>Nilai Akhir     : <?php echo"$nilai_akhir" ?>  </p>
        <p>Grade           : <?php echo"$grade" ?> </p>
    </div>
</body>
</html>