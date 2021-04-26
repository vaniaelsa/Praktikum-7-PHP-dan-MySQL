<html>
<head>
    <title>Tampil Kontak </title>
    <!-- file css yang disispkan -->
    <link rel="STYLESHEET" type="text/css" href="efek.css">
    <!-- pengaturan style untuk body,h1,h2,dan tabel1 -->
    <style>
        body {background-image: url("gambar/background.jpg"); 
              background-size: auto;
             }
        h1 {
            text-align: center;
            font-family: tahoma;
            color:black;
            background-color: lightcoral;
        }
        h2 {
            text-align: center;
            font-family: tahoma;
            color:black;
        }
        #tabel1, #tabel1 th, #tabel1 td{
            border: 2px solid navy;
            border-style:solid;
            width: 700px;
            }
        #tabel1 th{
            background-color: salmon;
            font-family: cursive;
            color:white;
            text-align: center;
            }
        #tabel1 td{
            background-color: lightsalmon;
            font-family:helvetica;
            color:black;
            text-align: center;
            height: 40px;
            }
    </style>
</head>

<body>


<h1> KONTAK </h1>
<TABLE align="center">
    <tr>
        <!-- berfungsi sebagai tombol untuk redirect ke halaman tambahontak.php -->
     <td> <div class="leftlinks">  <a href="tambahkontak.php"> Tambah Kontak </a> </div> </td>
        <!-- berfungsi sebagai tombol logout untuk redirect ke halaman index.php -->
     <td> <div class="leftlinks">  <a href="index.php"> Log Out </a> </div> </td>
    </tr>
</TABLE>
    
<h2>Tampil Kontak </h2>

<table id="tabel1" align="center">
    <tr>
        <!-- header tabel -->
    <th>NO</th>
    <th>NAMA</th>
    <th>JENIS KELAMIN</th>
    <th>EMAIL</th>
    <th>ALAMAT</th>
    <th>KOTA</th>
    <th>PESAN</th>
    </tr>

    <?php
    include 'koneksi.php';
    //deklarasi variabel kontak yang berisi query untuk menampilkan data pada tabel kontak 
    $kontak = mysqli_query($koneksi, "SELECT * FROM kontak");
    
    // deklarasi variabel no
    $no=1;

     // variabel kontak digunakan untuk perulangan
     //  variabel row mewakili nilai data pada tabel kontak
    foreach ($kontak as $row) {
        echo 
        "<tr>
        <td> $no </td>
        <td> ".$row['nama']." </td>
        <td> ".$row['jkel']." </td>
        <td> ".$row['email']." </td>
        <td> ".$row['alamat']." </td>
        <td> ".$row['kota']." </td>
        <td> ".$row['pesan']." </td>
        </tr>
        ";

        // menampilkan nomor urut otomatis
        $no++;
    }
    ?>
</table>
</body>
