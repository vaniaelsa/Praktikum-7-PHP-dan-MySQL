<?php
include 'koneksi.php';
//menyimpan data  dalam variabel
        $vnama=$_POST['nama'];
        $vjkel=$_POST['jkel'];
        $vemail=$_POST['email'];
        $valamat=$_POST['alamat'];
        $vkota=$_POST['kota'];
        $vpesan=$_POST['pesan'];

//query SQL untuk insert data pada tabel kontak
$query="INSERT INTO kontak set nama='$vnama',
jkel='$vjkel', 
email='$vemail', 
alamat='$valamat',
kota='$vkota', 
pesan='$vpesan'";

// untuk mengeksekusi perintah query sql 
mysqli_query($koneksi, $query);

//mengalihkan atau redirect ke halaman index.php
header("location:index.php");
?>