<?php
session_start();
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form actio="" method="POST">
<table align="center">
    <tr>
        <th>--FORM LOGIN--</th>
    </tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="nama" placeholder="Username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="pass" placeholder="Password"></td>
	</tr>
    <tr>
        <td><input type="submit" value="Login" name="tombollog"></td>
</form>
</body>
</html>

<?php
    if(isset($_POST['tombollog'])){
        $nama=$_POST['nama'];
        $pas=$_POST['pass'];

    $select=mysqli_query($koneksi,"select * from masuk where username='$nama' and password='$pas'");
    $row=mysqli_fetch_array($select);

    if(is_array($row)){
        $_SESSION["username"]=$row['username'];
        $_SESSION["password"]=$row['password'];
    }else{
        echo ("<script type='text/javascript'>
            alert('username atau password salah');document.location='javacsript:history.back(1)';
            </script>");
    }
    }
    if(isset($_SESSION["username"])){
        header("location:beranda.php");
    }
?>
