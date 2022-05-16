<?php 
require_once("../connection.php");
$con = connectionDB();
session_start();
if(isset($_SESSION['logged']) == true && isset($_SESSION['role']) == 'teacher' && isset($_SESSION['username'])){
  $username = $_SESSION['username'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/home.css">
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
</div>
<?php
$query = "select prof.cve_profesor, prof.ape_pat, prof.ape_mat, prof.nombre, prof.email,prof.cve_dependencia,
gru.cve_materia, um.descripcion 
from uni_profesor prof
inner join uni_grupos gru on gru.cve_profesor = prof.cve_profesor 
inner join uni_materias um on prof.cve_profesor = um.cve_materia 
where prof.email = '".$username."' limit 1";
$result = mysqli_query($con, $query);


?>

<br>

<div class="table-responsive">
  <table class="table">
    <thead class="black white-text">
      <tr>
        <th scope="col">Nombre</th>
        <!--
          cve_profesor
          ape_pat
          ape_mat
          nombre
          email
          telefono
          cve_dependencia
        -->
        <th scope="col">Paterno</th>
        <th scope="col">Materno</th>
        <th scope="col">Email</th>
        <th scope="col">Materia</th>
        
    </thead>
  </tr>
</div>
<?php
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $name = $row['nombre'];
    $ape_pat = $row['ape_pat'];
    $ape_mat = $row['ape_mat'];
    $email = $row['email'];
    $phone = $row['descripcion'];
    ?>
    <tr>
      <td><?php echo $row['nombre'];?></td>
      <td><?php echo $row['ape_pat'];?></td>
      <td><?php echo $row['ape_mat'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['descripcion'];?></td>
      <?php
  }
}
?>



</body>
</html>
<?php
  }
  else{
    header("location:../index.html");
  }