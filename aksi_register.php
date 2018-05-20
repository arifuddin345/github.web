<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$ulangi_password = $_POST['ulangi_password'];

//cek password dan ulangi password
if ($password==$ulangi_password) {
//enkripsi multi layer
//1.hash MDS
	$hash_md5 = md5($password);
//2.hash bcrypt
	$bcrypt = password_hash($hash_md5,PASSWORD_DEFAULT);
//input data kedatabase
	$query="INSERT INTO akun VALUES(NULL,'".$username."','".$bcrypt."')";
	$insert =mysqli_query ($koneksi,$query);
//cek apakah input berhasil
	if ($insert) {
		header('location:login.php');
	}else{
		echo "GAGAL INPUT VROH...<br>";
		echo '<a herf="location:login.php"></a>';
	}
}else{
	echo "Password dan ulangi password tidak sama <br>";
	echo '<a herf="daftar.php">Kembali</a>';
}
