<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Skema</title>
</head>
<h2>Tambah Skema</h2>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>Kode Skema</td>
            <td><input type="text" name="Kd_skema"></td>
        </tr>
        <tr>
            <td>Nama Skema</td>
            <td><input type="text" name="Nm_skema"></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td><input type="text" name="jenis"></td>
        </tr>
        <tr>
            <td>Jumlah Unit</td>
            <td><input type="text" name="Jml_unit"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="simpan"></td>
        </tr>
    </table>
        <a href="sertifikasi.php">KEMBALI</a>
    
</form>    
</body>
</html>

<?php
include "connect.php";

if(isset($_POST['simpan'])){
    mysqli_query($conn,"INSERT INTO skema set
    Kd_skema ='$_POST[Kd_skema]',
    Nm_skema ='$_POST[Nm_skema]',
    jenis ='$_POST[jenis]',
    Jml_unit ='$_POST[Jml_unit]'");
    echo"Berhasil Disimpan";
}
?>