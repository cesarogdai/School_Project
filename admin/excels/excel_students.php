<?php 
require_once('../../connection.php');
$con = connectionDB();
$export = '';
if(isset($_POST["submit"]))
{
$query = 'select alu.nombres, alu.matricula, alu.ape_pat, alu.ape_mat, alu.estado, alu.cve_carrera, car.cve_carrera, car.nombre_carrera from uni_alumnos alu inner join uni_carreras car on car.cve_carrera = alu.cve_carrera';
 $res = mysqli_query($con, $query);
 if(mysqli_num_rows($res) > 0)
 {
 $export .= '
 <table> 
 <tr> 
 <th> Matricula </th>
 <th>Nombres</th> 
 <th>Paterno</th> 
 <th>Materno</th> 
 <th>Estado</th>
 <th>Carrera</th>
 
 </tr>
 ';
 while($row = mysqli_fetch_array($res))
 {
 $export .= '
 <tr>
 <td>'.$row["matricula"].'</td> 
 <td>'.$row["nombres"].'</td>
 <td>'.$row["ape_pat"].'</td> 
 <td>'.$row["ape_mat"].'</td> 
 <td>'.$row["estado"].'</td> 
 <td>'.$row["nombre_carrera"].'</td> 

  
 
 
 </tr>
 ';
 }
 $export .= '</table>';
 header('Content-Type: application/xls');
 header('Content-Disposition: attachment; filename=estudiantes.xls');
 echo $export;
 }
}
?>