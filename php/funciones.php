<?php 
function nombre_usuario($idempleado){
	global $conn;
	$rs =mysqli_query($conn, "SELECT nombre, apellido FROM empleados WHERE id_empleado='$idempleado'");
	//query para que devuelva Nombre y Apellido
	$fila=mysqli_fetch_array($rs);//capturo la fila
	return$fila['nombre']." ".$fila['apellido'];
}

	function revisa_login(){
		if(isset($_SESSION['id_empleado'])==false){
			header('location:login.php');//redirecciona a index.php para que se vuelva a logear
		}
	}
	//isset>si la variable existe y tiene valor puesto ?>