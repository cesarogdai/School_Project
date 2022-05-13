<?php
include('./connection.php');
$con = connectionDB();
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$num = $_POST['num'];

session_start();
$_SESSION['variable'] = false;
$_SESSION['role'] = 'none';

if(isset($_POST[$username]) && isset($_POST[$password] && isset($_POST[$role]))){
    switch ($role) {
        case 'teacher':
        $query = "select * from uni_profesor where email = '".$username."' and teléfono = '".$password."' and rol='".$role."'";
        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0){
        header("location:teacher/teacher.php");
        $_SESSION['logged'] = true;
        $_SESSION['role'] = $role;
        }
        break;
        
        case 'student':
        $query = "select * from uni_alumnos where email = '".$username."' and matricula = '".$password."' and rol='".$role."'";
        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0){
            header("location:student/home.php");
            $_SESSION['logged'] = true;
            $_SESSION['role'] = $role;
        }
        break;
        
    }

    if($username == 'admin01' && $password == 'admin01' && $role){
        header("location:admin/home.php");
        $_SESSION['logged'] = true;
        $_SESSION['role'] = 'admin';
    }
}

?>

    