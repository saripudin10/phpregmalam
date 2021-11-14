<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SELAMAT DATANG <?php echo $_SESSION['username'];?></h2>
    <header>
        <ul>
            <a href="view_anggota.php"><li>Anggota</li></a>
            <a href="view_barang.php"><li>Id Barang</li></a>
            <a href="view_kategori.php"><li>Id Kategori</li></a>
        </ul>
    </header>
<p><a href="logout.php">log out</P></a>
</body>
</html>