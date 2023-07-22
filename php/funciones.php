<?php 
function nombre_usuario($idusuario){
	global $conexion;
	$rs =mysqli_query($conexion, "SELECT nombre, apellido FROM usuarios WHERE idusuario='$idusuario'");
	//query para que devuelva Nombre y Apellido
	$fila=mysqli_fetch_array($rs);//capturo la fila
	return$fila['nombre']."".$fila['apellido'];
}

	function revisa_login(){
		if(isset($_SESSION['idusuario'])==false){
			header('location:login.php');//redirecciona a index.php para que se vuelva a logear
		}
	}
	//isset>si la variable existe y tiene valor puesto ?>