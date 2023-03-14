<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
<h3>Pendaftaran Peserta</h3>
<?php
    include 'connect.php';
    $query = mysqli_query($conn, "SELECT max(id) as idTerbesar FROM peserta");
    $data = mysqli_fetch_array($query);
    $idPeserta = $data[idTerbesar];
    $urutan = (int) substr($idPeserta, 6);
    $urutan++
    $idPeserta = sprintf("%03s", $urutan);
    ?>
<form action="" method="post">
    <table>
    <tr>
            <td>ID Peserta</td>
            <td><input type="text" name="id" value="<?php echo $idPeserta ?>"></td>
        </tr>
        <tr>
            <td>Kode Skema</td>
            <td>
                <select name="kd_skema">
                <?php
                include "connect.php";
                $sql = "SELECT * FROM skema";
                $result = mysqli_query($conn, $sql);
                foreach($result as $row) {
                    echo "<option value='${row['Kd_skema']}'>${row['Kd_skema']} - ${row['Nm_skema']}</option>";
                }
            ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama Peserta</td>
            <td><input type="text" name="Nm_peserta"></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td>
            <select name="Jekel">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
        </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat"></td>
        </tr>
        <tr>
            <td>No Handphone</td>
            <td><input type="text" name="No_hp"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="simpan"></td>
        </tr>
    </table>
        <a href="index.php">KEMBALI</a>
    
</form>    
</body>
</html>

<?php
include "connect.php";

if(isset($_POST['simpan'])){
    mysqli_query($conn,"INSERT INTO peserta set
    kd_skema ='$_POST[kd_skema]',
    Nm_peserta ='$_POST[Nm_peserta]',
    Jekel ='$_POST[Jekel]',
    Alamat ='$_POST[Alamat]',
    No_hp ='$_POST[No_hp]'");
    echo"Pendaftaran Peserta Berhasil Disimpan";
}
?>