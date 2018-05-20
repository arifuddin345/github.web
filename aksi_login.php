<?php

include 'koneksi.php';
//persiapan variabel
$username = $_POST['username'];
$password = $_POST['password'];

//cek dan ambil data dari database


$query = "SELECT * FROM akun WHERE username='".$username."'";
$select = mysqli_query($koneksi,$query);

if ($akun = mysqli_fetch_assoc($select)) {
//ambil password di database
$password_db = $akun['password'];	

//enkripsi hashong multi layer
//1.hash MDS
$hash_md5 = md5($password);
//2.hash bcrypt
$cek_bcyrpt = password_verify($hash_md5,$password_db);

	if ($cek_bcyrpt) {
//simpen data ke sesion
		session_start();
		$_SESSION['id']= $akun['id'];
		$_SESSION['username'] = $akun ['username'];
		//arahkan ke index
		header('location:index.php');
	}else{
		echo "Maaf password tidak cocok untuk akun ".$username."<br>";
		echo '<a herf="login.php">Kembali</a>';
	}
}else{
	echo "MAAF kami tidak menemukan useraname".$username." dalam database <br>";
	echo '<a herf="login.php">Kembali</a>';
}
?>