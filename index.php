<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <h1 class="text-center">Data Peserta</h1>
    <div class="container-lg mt-3">
    <nav>
        <a href="pendaftaran.php">[+]Pendaftaran</a>
    </nav>
    <br>
    <nav>
    <form method="GET" action="pencarian.php" style="">
		<label>Pencarian : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit">cari
        </button>
	</form>
    </nav>
    <br>
    
    <div class="card">
    <table class="table table-bordered" class="">
        <tr>
            <th>no</th>
            <th>ID Peserta</th>
            <th>Kode Skema</th>
            <th>Nama Peserta</th>
            <th>jenis kelamin</th>
            <th>Alamat</th>
            <th>No Handphone</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
include 'connect.php';
    $no=1;
        $ambildata = mysqli_query($conn,"SELECT * FROM peserta");
        while($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
                <td>$no</td>
                <td>$tampil[id]</td>
                <td>$tampil[kd_skema]</td>
                <td>$tampil[Nm_peserta]</td>
                <td>$tampil[Jekel]</td>
                <td>$tampil[Alamat]</td>
                <td>$tampil[No_hp]</td>
                <td><a href='editPeserta.php?id=$tampil[id]'>edit</a></td>
                <td><a href='deletePeserta.php?id=$tampil[id]'> hapus </a></td>
            </tr>";
            $no++;
        }
?>
    </table>
</div>
<br>
<a href="sertifikasi.php">Halaman Sertifikasi</a>
    </div>
    <br>
    <script>type="text/javascript" src="js/bootstrap.js"</script>
</body>
</html>
