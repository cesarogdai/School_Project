<?php
/*Conexion a la db, se crea el metodo de conexión que se usa en todo el 
programa llamado connecinot*/

require_once('connections/config.php');

function connectionDB(){
	$conexion = new mysqli(SERVER, USER, PASS, DB);

	if($conexion->connect_error){
		$error = "<div class='error>";
		$error .= "Error de Conexión No.<b>".$conexion->connect_errno."</b> Mensaje del error: <mark>".$conexion->connect_error."</mark>";
		$error .= "/<div>";
	}
	else{

	}

	$conexion->query("SET CHARACTER SET UTF8");
	return $conexion;
}
?>
