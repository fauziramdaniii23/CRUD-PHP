<?php

    $kd_skema = $_POST['kd_skema'];
    $id = $_POST['id'];
    $Nm_peserta = $_POST['Nm_peserta'];
    $Jekel = $_POST['Jekel'];
    $Alamat = $_POST['Alamat'];
    $No_hp = $_POST['No_hp'];

    include "connect.php";
    $sql = "UPDATE peserta SET
            kd_skema = '$kd_skema',
            Nm_peserta = '$Nm_peserta',
            Jekel = '$Jekel',
            Alamat = '$Alamat',
            No_hp = '$No_hp'
            WHERE id = '$id'
            ";
            
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>