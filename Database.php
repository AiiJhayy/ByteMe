<?php 
$hostName= "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "employer-seeker";
$connect = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName) or die("Connection Failed");
if (!$connect) {
    die("SOMETHING WENT WRONG;");
}
