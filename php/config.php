<?php
    // session_start();

    #connecting to database usging PDO
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'ourmeal';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

?>