<?php 
    session_start();
    
    define("LOCALHOST", "localhost");
    define("USER", "momo");
    define("PASSWORD", "123456");
    define("DATABASE", "login_php");
    define("SITEURL", "http://localhost/PHPLogin/");

    $conn = mysqli_connect(LOCALHOST, USER, PASSWORD, DATABASE) or die(mysqli_error('Failed to connect!'));
    $db_select = mysqli_select_db($conn, DATABASE) or die(mysqli_error('Failed to connect to database!')); 
?>