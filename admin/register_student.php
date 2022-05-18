<?php
require_once("../connection.php");
$con = connectionDB();
$data = $_POST['data'];

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

$query = 'insert into uni_alumnos matricula, ape_pat, ape_mat, nombres, curp, genero, est_civil, estado, municipio, colonia, direccion, telefono, celular, email, fec_nacimiento, cve_dependencia, cve_carrera values '.$data['matricula'].$data['ape_pat'].$data['ape_mat'].$data['name'].$data['curp'].$data['genero'].$data['est_civil'].$data['state'].$data['municipio'].$data['direccion'].$data['telefono'].$data['celular'].$data['email'].$data['date'].$data['dependencia'].$data['dependencia'];

if(mysqli_query($con, $query)){
  //  header("location:admin/home.php");
    echo 1;
}else{
    echo 2;
}

?>