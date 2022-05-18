<?php
require_once("../connection.php");
$con = connectionDB();

/*

     
      let name = $("#name").val();
      let matricula = $("#matricula").val();
      let ape_pat = $("#ape_pat").val();
      let ape_mat = $("#ape_mat").val();
      let curp = $("#curp").val();
      let civil = $("#est_civil").val();
      let state = $("#state").val();
      let municipio = $("#municipio").val();
      let colonia = $("#colonia").val();
      let direccion = $("#direccion").val();
      let genero = $('input[name=radioName]:checked', '#form').val();
      let celular = $("#celular")
      let telefono = $("#phone").val();
      let email = $("#email").val();
      let date = $("#fecha_nac").val();
      let carrera = $("#carreras").val();
      let dependencia = $("#dependencia").val();
      let estado = $("#estado").val();
*/







$data = $_POST['data'];
$matricula = $data['matricula'];
$ape_pat = $data['ape_pat'];
$ape_mat = $data['ape_mat'];
$nombres = $data['name'];
$curp = $data['curp'];
$genero = $data['genero'];
$est_civil = $data['civil'];
$estado = $data['state'];
$municipio = $data['municipio'];
$colonia = $data['colonia'];
$direccion = $data['direccion'];
$telefono = $data['telefono'];
$celular = $data['celular'];
$email = $data['email'];
$fec_nacimiento = $data['date'];
$cve_dependencia = $data['dependencia'];
$cve_carrera = $data['carrera'];

/*
if ($carrera == 'civil') {$cve_car = 1;}
elseif($carrera == 'hidra'){$cve_car = 2;}
elseif($carrera == 'admin'){$cve_car = 3;}
elseif($carrera == 'turist'){$cve_car = 4;}
elseif($carrera == 'sistemas'){$cve_car = 5;}
elseif($carrera == 'lidts'){$cve_car = 6;}*/
/*
$cve_dep = '';
if($dependencia == 'arquitectura'){$cve_dep = "86213";}
elseif($dependencia == 'contaduria'){$cve_dep = "28137291";}
elseif($dependencia == 'ingenieria'){$cve_dep = "98024";}
elseif($dependencia == 'lenguas'){$cve_dep = "2719813";}*/

//$query = 'insert into uni_alumnos matricula, ape_pat, ape_mat, nombres, curp, genero, est_civil, estado, municipio, colonia, direccion, telefono, celular, email, fec_nacimiento, cve_dependencia, cve_carrera values '.$data['matricula'].",".$data['ape_pat'].",".$data['ape_mat'].",".$data['name'].",".$data['curp'].",".$data['genero'].",".$data['est_civil'].",".$data['state'].",".$data['municipio'].",".$data['direccion'].",".$data['telefono'].",".$data['celular'].",".$data['email'].",".$data['date'].",".$data['dependencia'];

$query = "insert into uni_alumnos matricula, ape_pat, ape_mat, nombres, curp, genero, est_civil, estado, municipio, colonia, direccion, telefono, celular, email, fec_nacimiento, cve_dependencia, cve_carrera values ('".$matricula."', '".$ape_pat."', '".$ape_mat."', '".$nombres."', '".$curp."', '".$genero."', '".$est_civil."', '".$estado."', '".$municipio."', '".$colonia."', '".$direccion."', '".$telefono."', '".$celular."', '".$email."', '".$fec_nacimiento."', '".$cve_dependencia."', '".$cve_carrera."')";

if(mysqli_query($con, $query)){
  //  header("location:admin/home.php");
    echo 1;
}else{
    echo 2;
    echo $query;
}

?>