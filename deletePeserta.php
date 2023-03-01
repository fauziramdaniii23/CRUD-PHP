<?php
    $id = $_GET['id'];

    include "connect.php";
    
    $sql = "DELETE FROM peserta
            WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

?>