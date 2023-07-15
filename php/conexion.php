<?php
// Datos de conexión a la base de datos
$servername = "localhost:3306"; // Nombre del servidor
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "cultivos"; // Nombre de la base de datos

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Ejecutar consultas u operaciones en la base de datos

// Cerrar la conexión
$conn->close();
?>
