<?php 
    $connect = mysqli_connect("localhost","root","","to_do_list");

    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
?>