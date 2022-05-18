<?php 
require_once("../connection.php");
$con = connectionDB();
session_start();
$role = $_SESSION['role'];
if($role == 'teacher'){


if(isset($_SESSION['logged']) == true && isset($_SESSION['username'])){
  $username = $_SESSION['username'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/home.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>
<?php
include 'menu.html';
?>
<br>
<?php


if(isset($_POST['logout'])){
  session_destroy();
  header("location: ../index.html");

}
$query = "select prof.cve_profesor, prof.ape_pat, prof.ape_mat, prof.nombre, prof.email,prof.cve_dependencia,
gru.cve_materia, um.descripcion 
from uni_profesor prof
inner join uni_grupos gru on gru.cve_profesor = prof.cve_profesor 
inner join uni_materias um on prof.cve_profesor = um.cve_materia 
where prof.email = '".$username."' limit 1";
$result = mysqli_query($con, $query);


?>

<br>



 <div class="container" style="width:600px;">  
                <h3 class="text-center">Información del Docente</h3><br />  
                <div class="table-responsive table-bordered" >  
                     <table class="table table-dark">  
                      <thead>
                          <tr>  
                               <th scope="col">Nombres</th>  
                               <th scope="col">Paterno</th>
                               <th scope="col">Materno</th>
                               <th scope="col">Email</th>
                               <th scope="col">Materia</th>  
                          </tr>  
                        </thead>
                        <tbody>
                          <?php   
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                            
                               <td><?php echo $row['nombre']; ?></td>  
                               <td><?php echo $row['ape_pat']; ?></td>  
                               <td><?php echo $row['ape_mat']; ?></td>  
                               <td><?php echo $row['email']; ?></td>  
                               <td><?php echo $row['descripcion']; ?></td>  
                          </tr>  
                          <?php          
                          
                          }  
                          ?>
                         </tbody>   
                     </table>  
                </div>  
              </div>
</body>
</html>
<?php
  }}
  else{
    header("location:../index.html");
  }
?>