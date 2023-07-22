<?php
// Incluir la conexión a la base de datos desde el archivo "conexion.php"
include('conexion.php');

// Verificar si se enviaron datos por el formulario
if (isset($_POST['txtCorreo']) && isset($_POST['txtContra'])) {
    // Obtener los datos enviados desde el formulario
    $correo = $_POST['txtCorreo'];
    $contra = $_POST['txtContra'];

    // Consulta para verificar el login del usuario en la base de datos
    $sql = "SELECT id_empleado FROM empleados WHERE correo = '$correo' AND contra = '$contra'";

    // Ejecutar la consulta
    $result = $conn->query($sql);

    // Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // Obtener el id_empleado del resultado de la consulta
    $row = $result->fetch_assoc();
    $id_empleado = $row['id_empleado'];

    // Iniciar sesión y guardar el id_empleado en una variable de sesión
    session_start();
    $_SESSION['id_empleado'] = $id_empleado;

    // Redirigir al usuario a la página de inicio después del login exitoso
    header("Location: ../index.php");
    exit; // Asegurar que el script se detenga después de la redirección
} else {
    // Login fallido, mostrar mensaje de error o redirigir a la página de login con mensaje de error
    echo "Usuario o contraseña incorrectos.";
}
}

// Cerrar la conexión
$conn->close();
