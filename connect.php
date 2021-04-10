<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "cse_fest";
$con = mysqli_connect($host, $username, $password) or die('Error!');
mysqli_select_db($con,$db);
?>