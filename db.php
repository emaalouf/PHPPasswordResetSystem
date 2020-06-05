<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root'); 
define('DB_PASS', 'mysql'); 
define('DB_NAME', 'databasename'); 
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Some error occurred during connection, Please try again! " . mysqli_error($con));  ;
?>
