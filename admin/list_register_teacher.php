<?php 
  session_start();
  $role = $_SESSION['role'];
  if($role == 'admin'){
    if($_SESSION['logged'] == true){
        include('../connection.php');
  $con = connectionDB();



?>

<!DOCTYPE html>
<html>
<head><meta charset="gb18030">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
        <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
       

            
            <link rel="stylesheet" type="text/css" href="./home.css">
    </head>
<body>
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="list_register_student.php">Alumnos Registrados</a></li>
      <li class="active"><a href="list_register_teacher.php">Profesores Registrados</a></li>
      <li><a href="kardex_student.php">Kardex de Alumnos</a></li>
      <li><a href="create_student.php">Registrar a un alumno</a></li>
      <li><a href="logout.php">Cerrar Sesión</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
 
</div>
  <?php
 
$query = "select prof.cve_profesor, prof.ape_pat, prof.ape_mat, prof.nombre, prof.email,prof.cve_dependencia,
prof.teléfono,
gru.cve_materia, um.descripcion 
from uni_profesor prof
inner join uni_grupos gru on gru.cve_profesor = prof.cve_profesor 
inner join uni_materias um on prof.cve_profesor = um.cve_materia ";
$result = mysqli_query($con, $query);
  ?>

<br>
<h3 class="text-center">Lista de Profesores</h3>
<div class="container" style="width:700px;">
<div class="table-responsive table-bordered">
  <table class="table table-hover table-dark">
    <thead class="black white-text"> 
      <tr class="success">
        <th width="10%">Nombres </th>
        <th width="10%">Paterno </th>
        <th width="10%">Materno </th>
        <th width="20%">Email </th>
        <th width="20%">Teléfono </th>
        <th width="40%">Materia </th>
      </tr>
    </thead>
    <tbody>
<?php
if($result){
  while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo $row['nombre'];?></td>
      <td><?php echo $row['ape_pat'];?></td>
      <td><?php echo $row['ape_mat'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['teléfono'];?></td>
      <td><?php echo $row['descripcion'];?></td>
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
<form method="post" action="excels/excel_teachers.php" >
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