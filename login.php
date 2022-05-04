<?php
include('./connection.php');
$con = connectionDB();
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
session_start();
$_SESSION['username'] = $username;

if($role == 'student'){
    strtoupper($username);
    $query = "select * from uni_alumnos where email = '".$username." and matricula = '".$password."'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    if($rows > 0){
        header("location:student/home.php");
    }
}elseif($role == 'teacher'){
    $query = "select * from uni_profesor where email = '".$username."' and teléfono = '".$password."'";
    $result = mysqli_query($con, $query );
    $rows = mysqli_num_rows($result);
    if($rows > 0){
        header("location:teacher/teacher.php");
    }
}

?>

    