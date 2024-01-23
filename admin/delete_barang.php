<?php

    require "includes/header.php";

    $id = $_GET['id'];
    $query = mysqli_query($link, "DELETE FROM produk WHERE id_produk = '$id'");
    if($query){
        echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/barang.php'/>";
    }