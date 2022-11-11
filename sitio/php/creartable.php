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
CODIGO INT(10) PRIMARY KEY,
NOMBRE VARCHAR(10),
MARCA VARCHAR(10),
PRECIO INT(15),
CANTIDAD INT(10)
)";

if (mysqli_query($conn, $sql)){
	echo "Tabla creada satisfactoriamente";
} else {
	echo "Error creando tabla tabla34: " . mysqli_error($conn);
}

mysqli_close($conn);
?>