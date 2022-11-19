<?php
$servername = "localhost";
$username = "root";
$password = "12345678";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn){
	die("Conexión Fallida: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE bdunad34";
if (mysqli_query($conn, $sql)){
	echo "Base de datos creada satisfactoriamente";
} else {
	echo "Error creando base de datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?>