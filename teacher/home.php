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
	<title></title>
</head>
<body>
	<div class="navbar">
  <a href="#home">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn">Mas
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="kardex.php">Kardex</a>
     
    </div>
  </div> 
  <a id="logout" href="logout.php">Cerrar Sesión</a>
</div>
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



 <div class="container" style="width:700px;">  
                <h3 class="text-center">KARDEX</h3><br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="10%">Nombres</th>  
                               <th width="50%">Paterno</th>
                               <th width="50%">Materno</th>
                               <th width="50%">Email</th>
                               <th width="50%">Materia</th>  
                          </tr>  
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
                     </table>  
                </div>  
</body>
</html>
<?php
  }}
  else{
    header("location:../index.html");
  }
?>