<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Skema</title>
    <style>
      label {
        display: block;
      }
    </style>
</head>
<body>
<h3>Edit Skema</h3>
    <?php
        include "connect.php";
       if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        include "connect.php";
        $sql = "SELECT * FROM skema WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $q = mysqli_fetch_array($result);
    } else {
        echo "ERROR: ID not provided.";
        exit;
    }
    ?>
    <form action="updateSkema.php" method="post">
      <div>
        <label>Kode Skema</label>
        <input type="text" name="Kd_skema" required  value="<?php echo $q['Kd_skema'] ?>" />
        <input type="hidden" name="id" required  value="<?php echo $q['id'] ?>" />
      </div>
      <div>
        <label>Nama skema</label>
        <input type="text" name="Nm_skema" required value="<?php echo $q['Nm_skema'] ?>"  />
      </div>
      <div>
        <label>Jenis</label>
        <input type="text" name="jenis" required  value="<?php echo $q['jenis'] ?>" />
      </div>
      <div>
        <label>Jumlah Unit</label>
        <input type="number" name="Jml_unit" required value="<?php echo $q['Jml_unit'] ?>" />
      </div>
      <div>
        <input type="submit" style="margin-top:3px;">
      </div>
    </form>
</body>
</html>