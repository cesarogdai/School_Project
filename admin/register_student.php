<?php
require_once("../connection.php");
$con = connectionDB();
$data = $_POST['data'];

//echo $data['name'];
/*matricula
ape_pat
ape_mat
nombres
curp
genero
est_civil
estado
municipio
colonia
direccion
telefono
celular
email
fec_nacimiento
cve_dependencia
cve_carrera
rol*/
/*86213	Facultad de Arquitectura
98024	Facultad de Ingeniería
2719813	Facultad de Lenguas
28137291	Facultad de Contaduría y Administración*/
/*1	INGENIERÍA CIVIL
2	INGENIERÍA HIDRÁULICA
3	LICENCIATURA EN ADMINISTRACIÓN
4	LICENCIATURA EN GESTIÓN TURÍSTICA
5	LICENCIATURA EN SISTEMAS COMPUTACIONALES
6	INGENIERÍA EN DESARROLLO Y TECNOLOGÍAS DE SOFTWARE
7	LICENCIATURA EN QUÍMICO FARMACOBIÓLOGO
8	LICENCIATURA EN QUÍMICO FARMACOBIÓLOGO*/

/*<option value="lidts"> INGENIERÍA EN DESARROLLO Y TECNOLOGÍAS DE SOFTWARE</option>
                      <option value="civil">INGENIERÍA CIVIL</option>
                      <option value="admin">LICENCIATURA EN ADMINISTRACIÓN</option>
                      <option value="turist">LICENCIATURA EN GESTIÓN TURÍSTICA</option>
                      <option value="sistemas">LICENCIATURA EN SISTEMAS COMPUTACIONALES</option>
                      <option value="quimico">LICENCIATURA EN QUÍMICO FARMACOBIÓLOGO</option>*/
$carrera = $data['carrera'];
$dependencia = $data['dependencia'];
$cve_car = 0;
if ($carrera == 'civil') {$cve_car = 1;}
elseif($carrera == 'hidra'){$cve_car = 2;}
elseif($carrera == 'admin'){$cve_car = 3;}
elseif($carrera == 'turist'){$cve_car = 4;}
elseif($carrera == 'sistemas'){$cve_car = 5;}
elseif($carrera == 'lidts'){$cve_car = 6;}

/*  
                      <option value="arquitectura">Facultad de Arquitectura</option>
                      <option value="ingenieria">Facultad de Ingeniería</option>
                      <option value="lenguas">Facultad de Lenguas</option>
                      <option value="contaduria">Facultad de Contaduría y Administración</option>*/
/*3	86213	Facultad de Arquitectura
5	98024	Facultad de Ingeniería
6	2719813	Facultad de Lenguas
4	28137291	Facultad de Contaduría y Administración*/

$cve_dep = '';
if($dependencia == 'arquitectura'){$cve_dep = "86213";}
elseif($dependencia == 'contaduria'){$cve_dep = "28137291";}
elseif($dependencia == 'ingenieria'){$cve_dep = "98024";}
elseif($dependencia == 'lenguas'){$cve_dep = "2719813";}

$query = 'insert into uni_alumnos matricula, ape_pat, ape_mat, nombres, curp, genero, est_civil, estado, municipio, colonia, direccion, telefono, celular, email, fec_nacimiento, cve_dependencia, cve_carrera values '.$data['matricula'].$data['ape_pat'].$data['ape_mat'].$data['name'].$data['curp'].$data['genero'].$data['est_civil'].$data['state'].$data['municipio'].$data['direccion'].$data['telefono'].$data['celular'].$data['email'].$data['date'].$cve_dep.$cve_car;

mysqli_query($con, $query);

?>