<?php
    define("BASE_URL","http://localhost/AdiDonat/");
    define("WEBNAME", "Adi Donat");

    $host       = 'localhost';
    $user       = 'root';
    $password   = '';
    $db         = 'adidonat';

    $link = mysqli_connect($host, $user, $password, $db) or die(mysqli_error());

?>