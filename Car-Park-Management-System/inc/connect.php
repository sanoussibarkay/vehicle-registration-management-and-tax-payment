<?php


$db_host		= 'remotemysql.com';
$db_user		= 'mxGxQeDMmY';
$db_pass		= '29L092KTIJ';
$db_database	= 'mxGxQeDMmY';


$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$servername = "remotemysql.com";
$username = "mxGxQeDMmY";
$password = "29L092KTIJ";
$dbname = "mxGxQeDMmY";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$connect=mysqli_connect("remotemysql.com","mxGxQeDMmY","29L092KTIJ","mxGxQeDMmY") or die(mysqli_error());
?>
