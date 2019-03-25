<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $query = "DELETE FROM video WHERE id = $id";
    if($conn->query($query)){
        header("location: beranda.php");        
    } else {
        echo "Error : ".$conn->error;
    }
?>