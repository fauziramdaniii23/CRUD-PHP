<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peserta</title>
    <style>
      label {
        display: block;
      }
    </style>
</head>
<body>
<h3>Edit Peserta</h3>
    <?php
        include "connect.php";
       if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        include "connect.php";
        $sql = "SELECT * FROM peserta WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $q = mysqli_fetch_array($result);
    } else {
        echo "ERROR: ID not provided.";
        exit;
    }
    ?>
    <form action="updatePeserta.php" method="post">
      <div>
        <label>Kode Skema</label>
        <select name="kd_skema" required  value="<?php echo $q['kd_skema'] ?>">
        <?php
                include "connect.php";
                $sql = "SELECT * FROM skema";
                $result = mysqli_query($conn, $sql);
                foreach($result as $row) {
                    echo "<option value='${row['Kd_skema']}'>${row['Kd_skema']} - ${row['Nm_skema']}</option>";
                }
            ?>
    </select>
        <input type="hidden" name="id" required  value="<?php echo $q['id'] ?>" />
      </div>
      <div>
        <label>Nama Peserta</label>
        <input type="text" name="Nm_peserta" required value="<?php echo $q['Nm_peserta'] ?>"  />
      </div>
      <div>
        <label>Jenis Kelamin</label>
        <select name="Jekel" required  value="<?php echo $q['Jekel'] ?>">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
      </div>
      <div>
        <label>Alamat</label>
        <input type="text" name="Alamat" required value="<?php echo $q['Alamat'] ?>" />
      </div>
      <div>
        <label>No Handphone</label>
        <input type="text" name="No_hp" required value="<?php echo $q['No_hp'] ?>" />
      </div>
      
      <div>
        <input type="submit" style="margin-top:3px;">
      </div>
    </form>
</body>
<br>
<a href="index.php">KEMBALI</a>
</html>