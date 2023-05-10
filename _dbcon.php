<?php
    session_start();
    $connect = mysqli_connect("localhost", "root", "", "db") or die(mysqli_error($connection));    
    /*$connect = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_error($connection));*/
?>
