<?php
    session_start();
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "prontonet_db";
    $db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(mysqli_connect_errno()){
        $e = "Database connection failed: ". 
        mysqli_connect_error() . 
        "(" . mysqli_connect_errno() . ")";
        $_SESSION['error']="Error Connecting to db";
    }

?>