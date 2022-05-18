<?php
session_start();
require_once '../connection.php';
$con  = connectionDB();
//$username = $_POST['username'];
$username = 'A180410@UNACH.MX';
if(isset($username)){
   $query = "select mat.descripcion, alu.ape_mat, alu.cve_carrera, gr.cve_materia, gr.cve_carrera from uni_alumnos alu inner join uni_grupos gr on gr.cve_carrera = alu.cve_carrera inner join uni_materias mat on mat.cve_materia = gr.cve_materia where alu.email  = '".$username."'";
     $name = "horario";
     header('Content-type: application/vnd.ms-excel');
     header('Content-Disposition: attachment; filename='.$name);
     header('Pragma: no-cache');
     header('Expires: 0');
     echo '<table border=1';
     echo '<tr>';
     echo '<th colspan=4>Horario de '.$username.'</th>';
     echo '</tr>';
     echo '<tr><th>#</th><th>MATERIA</th></tr>';
     while($row = mysqli_fetch_array($result)){
          echo '<tr>';
          echo '<td>'.$row['cve_materia'].'</td>';
          echo '<td>'.$row['descripcion'].'</td>';
          echo '</tr>';

     }
     echo '</table>';
}

//$query = 
?>