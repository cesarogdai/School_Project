<?php 
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