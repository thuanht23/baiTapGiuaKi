<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'qlsv_nguyentaithuan';

    $conn = mysqli_connect($server, $user, $pass, $database);
    if (!$conn) {
        die("Kết nối thất bại. ");
    }
?>