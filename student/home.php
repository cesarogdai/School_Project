<?php
session_start();
$role = $_SESSION['role'];
$username = $_SESSION['username'];
if($role == 'student'){
  if(isset($_SESSION['logged']) == true){
    include("menu.html");

?>


<?php

require_once("../connection.php");
$con = connectionDB();
 $query = "select al.nombres, al.ape_pat, al.ape_mat, al.cve_carrera from uni_alumnos al where email = '".$username."'";
 
 $result = mysqli_query($con, $query);
 if($result){
  while($row = mysqli_fetch_assoc($result)){
    $name = $row['nombres'];
  }
 }
?>
<p>Bienvenido <b><?php echo $name;?></p></b>


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