<?php

    $Kd_skema = $_POST['Kd_skema'];
    $id = $_POST['id'];
    $Nm_skema = $_POST['Nm_skema'];
    $jenis = $_POST['jenis'];
    $Jml_unit = $_POST['Jml_unit'];

    include "connect.php";
    $sql = "UPDATE skema SET
            Kd_skema = '$Kd_skema',
            Nm_skema = '$Nm_skema',
            jenis = '$jenis',
            Jml_unit = '$Jml_unit'
            WHERE id = '$id'
            ";
            
    if (mysqli_query($conn, $sql)) {
        header("Location: sertifikasi.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>