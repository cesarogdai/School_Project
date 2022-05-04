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
$row = mysqli_fetch_assoc($result);

if($row){
    $names = $row['nombres'];
}
while($row = mysqli_fetch_assoc($result)){
    $names = $row['nombres'];
    $_SESSION['name'] = $names;
    header("location:home.php");
}

    ?>
    <h1 class="bad">Verifique sus datos </h1>
    <?php
}
?>
}
    