<?php
session_start();

if(isset($_SESSION['logged']) == true && isset($_SESSION['role']) == 'admin'){

  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/home.css">
	<title>ADMIN</title>
</head>
<body>
	<div class="navbar">
  <a href="#home">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn">Mas
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <!--- Registro de Alumnos

        - Vista de alumnos registrados
        - Vista de profesores registrados
        - Vista de kardex de alumnos-->
      <a href="list_register_student.php">Alumnos Registrados</a>
      <a href="list_register_teacher.php">Profesores Registrados</a>
      <a href="kardex_student.php">Kardex de Alumnos</a>      
      <a href="create_student.php">Registrar a un alumno</a>
     
    </div>
  </div> 
</div>


</body>
</html>
<?php
}

else{
  header('location:../index.html');
}
?>