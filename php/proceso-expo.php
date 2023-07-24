<?php
// Establecer la conexión con la base de datos
include_once('conexion.php');

// Obtener los datos enviados desde el formulario
$productos = isset($_POST['productos']) ? $_POST['productos'] : array();
$cantidad = $_POST['cantidad'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];   


// Insertar los datos en la tabla empleados
$sql = "CALL InsertarEmpleado('$producto', '$cantidad', '$destino', '$fecha')";

if ($conn->query($sql) === TRUE) {
    echo "Empleado registrado exitosamente.";
    header("Location: ../exportaciones.php");
} else {
    echo "Error al registrar al empleado: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
