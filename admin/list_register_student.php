<?php

session_start();
$role = $_SESSION['role'];
if($role == 'admin'){
if(isset($_SESSION['logged']) == true){
  require_once("../connection.php");
$con  = connectionDB();

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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li class="active"><a href="list_register_student.php">Alumnos Registrados</a></li>
      <li><a href="list_register_teacher.php">Profesores Registrados</a></li>
      <li><a href="kardex_student.php">Kardex de Alumnos</a></li>
      <li><a href="create_student.php">Registrar a un alumno</a></li>
      <li><a href="logout.php">Cerrar Sesión</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
 
</div>
 <?php
 $query = 'select alu.nombres, alu.matricula, alu.ape_pat, alu.ape_mat, alu.estado, alu.cve_carrera, car.cve_carrera, car.nombre_carrera from uni_alumnos alu inner join uni_carreras car on car.cve_carrera = alu.cve_carrera';
 $result = mysqli_query($con, $query);?>

 <br>
 <h3 class="text-center">Lista de Alumnos</h3>
<div class="container" style="width:700px;">
<div class="table-responsive table-bordered">
  <table class="table table-hover table-dark">
    <thead class="black white-text"> 
      <tr class="success">
        <th width="10%">Matricula </th>
        <th width="10%">Nombres </th>
        <th width="10%">Paterno </th>
        <th width="20%">Materno </th>
        <th width="20%">Estado </th>
        <th width="40%">Carrera </th>
      </tr>
    </thead>
    <tbody>
<?php
if($result){
  while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo $row['matricula'];?></td>
      <td><?php echo $row['nombres']; ?></td>
      <td><?php echo $row['ape_pat'];?></td>
      <td><?php echo $row['ape_mat'];?></td>
      <td><?php echo $row['estado'];?></td>
      <td><?php echo $row['nombre_carrera'];?></td>
      <?php
  }
}
?>
</tr>
</tbody>
</table>
</div>
<br>
<div class="data" align="center">
<form method="post" action="excels/excel_students.php" >
    <input align="center" class="btn btn-primary" type="submit" name="submit" value="Descargar"/>
  </form>
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