<?php
include('./connection.php');
$con = connectionDB();
/*$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];*/
$data = $_POST['data'];
session_start();
$_SESSION['username'] = $data['username'];
if($data['username'] == 'admin123' && $data['password'] == 'admin123'){
    header("location:admin/home.php");
}else{
    header("location:index.html");
    echo 1;
}

if($data['role'] == 'student'){
     $query = "select * from uni_alumnos where email = '".$username."' and matricula = '".$password."' and rol='".$role."'";
    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0){
        header("location:student/home.php");
    }else{
    echo 1;
    }
}elseif($data['role'] == 'teacher'){
    $query = "select * from uni_profesor where email = '".$data['username']."' and teléfono = '".$data['password']."' and rol='".$data['role']."'";
    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0){
        header("location:teacher/teacher.php");
    }else{
    echo 1;
    }
}


?>

    