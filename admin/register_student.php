<?php
require_once("../connection.php");
$con = connectionDB();





$data = $_POST['data'];
$matricula = $data['matricula'];
$ape_pat = $data['ape_pat'];
$ape_mat = $data['ape_mat'];
$nombres = $data['name'];
$curp = $data['curp'];
$genero = $data['genero'];
$est_civil = $data['civil'];
$estado = $data['estado'];
$municipio = $data['municipio'];
$colonia = $data['colonia'];
$direccion = $data['direccion'];
$telefono = $data['telefono'];
$celular = $data['celular'];
$email = $data['email'];
$fec_nacimiento = $data['date'];
$cve_dependencia = $data['dependencia'];
$cve_carrera = $data['carrera'];


$query = "insert into uni_alumnos (matricula, ape_pat, ape_mat, nombres, curp, genero, est_civil, estado, municipio, colonia, direccion, telefono, celular, email, fec_nacimiento, cve_dependencia, cve_carrera) values ('".$matricula."', '".$ape_pat."', '".$ape_mat."', '".$nombres."', '".$curp."', ".$genero.", '".$est_civil."', '".$estado."', '".$municipio."', '".$colonia."', '".$direccion."', '".$telefono."', '".$celular."', '".$email."', '".$fec_nacimiento."', ".$cve_dependencia.", ".$cve_carrera.")";

if(mysqli_query($con, $query)){
  //  header("location:admin/home.php");
    echo 1;
}else{
    echo 2;
    echo $query;
}

?>