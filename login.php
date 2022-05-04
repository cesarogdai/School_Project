<?php
include('./conection.php');
$con = connectionDB();
$username = $_POST['username'];
$password = $_POST['password'];
session_start();
$_SESSION['username'] = $username;

//students
$queryStudents = "select * from uni_alumnos where email = '".$username."' and matricula = '".$password."'";

$result = mysqli_query($con, $queryStudents);
$rows = mysqli_num_rows($result);
if($rows){
    $_SESSION['name'] = $row['nombres'];
    header("location:home.php");
}else{
    ?>
    <h1 class="bad">Verifique sus datos </h1>
    <?php
}
?>
}
    