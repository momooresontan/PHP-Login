<?php 
    include("config.php");
    session_destroy();
    header("Location: " .SITEURL. "index.php")
?>