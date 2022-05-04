<?php
include('./connection.php');
$con = connectionDB();
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
session_start();
$_SESSION['username'] = $username;
if($username == 'admin123' && $password == 'admin123' && $role == 'student' || $role == 'teacher'){
    header("location:admin/home.php");
}

if($role == 'student'){
     $query = "select * from uni_alumnos where email = '".$username."' and matricula = '".$password."' and rol='".$role."'";
    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0){
        header("location:student/home.php");
    }else{
    ?><h1>BAD DATA</h1>
    <?php
    }
}elseif($role == 'teacher'){
    $query = "select * from uni_profesor where email = '".$username."' and teléfono = '".$password."' and rol='".$role."'";
    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0){
        header("location:teacher/teacher.php");
    }else{
    ?><h1>BAD DATA</h1>
    <?php
    }
}


?>

    