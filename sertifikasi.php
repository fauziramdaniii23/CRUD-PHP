<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikasi</title>
</head>
    <h2>Skema Sertifikasi</h2>
<body>
<nav>
        <a href="addSkema.php">[+]Tambah</a>
    </nav>
    <br>
    <table border=1>
        <tr>
            <th>no</th>
            <th>Kode Skema</th>
            <th>Nama Skema</th>
            <th>Jenis</th>
            <th>Jumlah Unit</th>
            <th colspan="2">Action</th>
        </tr>
<?php
include 'connect.php';
    $no=1;
        $ambildata = mysqli_query($conn,"SELECT * FROM skema");
        while($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
                <td>$no</td>
                <td>$tampil[Kd_skema]</td>
                <td>$tampil[Nm_skema]</td>
                <td>$tampil[jenis]</td>
                <td>$tampil[Jml_unit]</td>
                <td><a href='editSkema.php?id=$tampil[id]'>edit</a></td>
                <td><a href='deleteSkema.php?id=$tampil[id]'> hapus </a></td>
            </tr>";
            $no++;
        }
?>
    </table>
    <br>
    <a href="index.php">KEMBALI</a>
</body>
</html>