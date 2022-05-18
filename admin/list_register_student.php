<?php
require_once("../connection.php");
$con  = connectionDB();
session_start();
$role = $_SESSION['role'];
if($role == 'admin'){
if(isset($_SESSION['logged']) == true){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
           <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
	<title>Pagina de admin</title>
</head>

<body>
 <?php
 include('menu.html');?>
 <?php
 $query = 'select alu.nombres, alu.matricula, alu.ape_pat, alu.ape_mat, alu.estado, alu.cve_carrera, car.cve_carrera, car.nombre_carrera from uni_alumnos alu inner join uni_carreras car on car.cve_carrera = alu.cve_carrera';
 $result = mysqli_query($con, $query);?>

 <br>
   <div class="container" style="width:700px;">  
                <h3 class="text-center">Lista de Alumnos</h3><br />  
                <div class="table-responsive table-bordered">  
                     <table class="table table-hover table-dark">  
                      <thead>
                          <tr class="success">  
                               <th width="10%">Matricula</th>  
                               <th width="50%">Nombres</th>  
                               <th width="30%">Paterno</th>
                               <th width="30%">Materno</th>
                               <th width="30%">Estado</th>
                               <th width="30%">Carrera</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php   
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                            
                               <td><?php echo $row['matricula']; ?></td>  
                               <td><?php echo $row['nombres']; ?></td>  
                               <td><?php echo $row['ape_pat']; ?></td>
                               <td><?php echo $row['ape_mat']; ?></td>
                               <td><?php echo $row['estado']; ?></td>
                               <td><?php echo $row['nombre_carrera']; ?></td>
                          </tr>  
                          <?php                           
                          }  
                          ?>  
                          </tbody>  
                     </table>  
                </div>  



</body>
</html>

<?php 
  }
}

else{
  header("location: ../index.html");
  session_destroy();
}
?>