<!DOCTYPE html>
<html>
<head>
    <title>Form Input Kontak </title>
    <link rel="STYLESHEET" type="text/css" href="efek.css">
    <style>
        body {background-image: url("background.jpg"); 
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
    </style>
</head>

<body>
    <h1> FORM TAMBAH KONTAK</h1>

    <TABLE align="center">
    <tr>
        <!-- berfungsi sebagai tombol untuk redirect ke halaman index.php -->
     <td> <div class="leftlinks">  <a href="index.php"> Kembali </a> </div> </td>
    </tr>
    </TABLE>
    
    <h2> Tambah Kontak </h2>
    <form action="simpankontak.php" method="post">
    <table align="center">

     <tr>
         <!-- form input nama -->
        <td>NAMA</td>
        <td> <input type="text"  name="nama" > </td>
    </tr>   

    <tr>
        <!-- form input jenis kelamin -->
        <td> JENIS KELAMIN </td>
        <td> <input type="text"  name="jkel" > </td>
    </tr>

    <tr>
        <!-- form input email -->
        <td> EMAIL </td>
        <td> <input type="email" name="email" > </td>
    </tr>

    <tr>
        <!-- form input alamat -->
        <td>ALAMAT </td>
        <td> <input type="text" name="alamat"> </td>
    </tr>

    <tr>
        <!-- form input kota -->
        <td> KOTA </td>
        <td> <input type="text"  name="kota" > </td>
    </tr>
    
    <tr>
        <!-- form input pesan -->
        <td> PESAN </td>
        <td> <input type="text" name="pesan"> </td>
    </tr>
    
    <tr>
        <td colspan="2">
            <!-- tombol simpan -->
        <button type="submit" value="simpan"> SIMPAN </button>
        </td>
    </tr>
    </table>
    </form>
</body>
</html>