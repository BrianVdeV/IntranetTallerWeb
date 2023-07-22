<?php
// Establecer la conexión con la base de datos
include_once('conexion.php');

// Obtener los datos enviados desde el formulario
$nombre = $_POST['txtNombre'];
$apellidos = $_POST['txtApellido'];
$correo = $_POST['txtCorreo'];
$contra = $_POST['txtContrasena'];

// Insertar los datos en la tabla empleados
$sql = "CALL InsertarEmpleado('$nombre', '$apellidos', '$correo', '$contra')";

if ($conn->query($sql) === TRUE) {
    echo "Empleado registrado exitosamente.";
    header("Location: ../login.php");
} else {
    echo "Error al registrar al empleado: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
