<?php 
include 'koneksi.php';

$vusername = $_POST['username'];
$vpassword = $_POST['password'];

// deklarasi variabel
$query = "SELECT * FROM admin where username='$vusername' and password='$vpassword'";
// untuk mengeksekusi perintah query sql 
mysqli_query($koneksi, $query);
//mengalihkan atau redirect ke halaman tampilkontak.php
header("location:tampilkontak.php");
?>