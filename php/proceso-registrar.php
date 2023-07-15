<?php
// Establecer la conexión con la base de datos
include_once('conexion.php');

// Obtener los datos del formulario
$nombre = $_POST['txtNombre'];
$apellidos = $_POST['txtApellido'];
$correo = $_POST['txtCorreo'];
$contrasena = $_POST['txtContrasena'];

// Llamar al procedimiento almacenado
$sql = "CALL InsertarEmpleado('$nombre', '$apellidos', '$correo', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error al insertar los datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
