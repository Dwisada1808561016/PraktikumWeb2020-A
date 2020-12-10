<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login CRUD</title>
</head>
<body>
    <h1 class="judul">TUGAS CRUD</h1>
    <div class="kotak">
        <!-- form login -->
        <form action="cek_login.php" method="post">
            <h2 class="judul">LOGIN</h2>
            <label for="">User Name :</label><br>
            <input type="text" value="" name="username" placeholder="Masukan Username"><br>
            <label for="">Password  :</label><br>
            <input type="password" name="password" id="" placeholder="Masukan Password"><br>
            <input type="submit" value="Login">
            <?php 
            
            // keterangan ketika password ataupub pasword tidak sesuai
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=="gagal"){
                    echo "<div >Username dan Password tidak sesuai!</div>";
                }
            }
            ?>
        </form>
    </div>
</body>
</html>