<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad34";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
	die("Conexión Fallida: " . mysqli_connect_error());
}