<?php 
require_once('../../connection.php');
$con = connectionDB();
$export = '';
if(isset($_POST["submit"]))
{
$query = "select prof.cve_profesor, prof.ape_pat, prof.ape_mat, prof.nombre, prof.email,prof.cve_dependencia,
prof.teléfono,
gru.cve_materia, um.descripcion 
from uni_profesor prof
inner join uni_grupos gru on gru.cve_profesor = prof.cve_profesor 
inner join uni_materias um on prof.cve_profesor = um.cve_materia ";
 $res = mysqli_query($con, $query);
 if(mysqli_num_rows($res) > 0)
 {
 $export .= '
 <table> 
 <tr> 
 <th>Nombres</th> 
 <th>Paterno</th> 
 <th>Materno</th> 
 <th>Email</th>  
 <th>Teléfono</th> 
 <th>Materia</th> 
 
 </tr>
 ';
 while($row = mysqli_fetch_array($res))
 {
 $export .= '
 <tr>
 <td>'.$row["nombre"].'</td> 
 <td>'.$row["ape_pat"].'</td> 
 <td>'.$row["ape_mat"].'</td> 
 <td>'.$row["email"].'</td> 
 <td>'.$row["teléfono"].'</td> 
 <td>'.$row["descripcion"].'</td> 

  
 
 
 </tr>
 ';
 }
 $export .= '</table>';
 header('Content-Type: application/xls');
 header('Content-Disposition: attachment; filename=maestros.xls');
 echo $export;
 }
}
?>