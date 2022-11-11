<?php
$servename = "localhost";
$username = "root";
$password = "12345678"
$dbname = "bdunad34";

$conn = mysqli_connect($servename, $username, $password, $dbname);
if (!$conn){
	die("Conexión Fallida: " . mysqli_connect_error());
}

$sql = "CREATE TABLE tabla34 (
codigo INT(10) PRIMARY KEY,
nombre VARCHAR(10),
marca VARCHAR(10),
precio INT(15),
cantidad INT(10)
)";

if (mysqli_query($conn, $sql)){
	echo "Tabla creada satisfactoriamente";
} else {
	echo "Error creando tabla tabla34: " . mysqli_error($conn);
}

mysqli_close($conn);
?>