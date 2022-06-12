<?php
$dbserver = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "operamini_database";

$conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname );

if (!$conn)
{
 	die("Connection error : ". mysqli_connect_error());
}