<?php 
require_once('../../connection.php');
$con = connectionDB();
session_start();
$matricula = $_SESSION['matricula'];
$export = '';
$filename = 'kardex_'.$matricula.".xls";
if(isset($_POST["submit"]))
{
  $query = "select mat.descripcion, alu.matricula, alu.ape_mat,  alu.cve_carrera, gr.cve_materia, gr.cve_carrera from uni_alumnos alu inner join uni_grupos gr on gr.cve_carrera = alu.cve_carrera inner join uni_materias mat on mat.cve_materia = gr.cve_materia where alu.matricula  = '".$matricula."'";
 $res = mysqli_query($con, $query);
 if(mysqli_num_rows($res) > 0)
 {
 $export .= '
 <table> 
 <tr> 
 <th>#</th> 
 <th>Materia</th> 

 
 </tr>
 ';
 while($row = mysqli_fetch_array($res))
 {
 $export .= '
 <tr>
 <td>'.$row["cve_materia"].'</td> 
 <td>'.$row["descripcion"].'</td> 
 
  
 
 
 </tr>
 ';
 }
 $export .= '</table>';
 header('Content-Type: application/xls');
 header('Content-Disposition: attachment; filename='.$filename);
 echo $export;
 }
}
?>