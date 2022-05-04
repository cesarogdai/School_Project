<?php

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
