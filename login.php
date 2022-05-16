<?php
require_once('./connection.php');
$con = connectionDB();
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

session_start();


switch ($role) {
    case 'teacher':
         $query = "select * from uni_profesor where email = '".$username."' and teléfono = '".$password."'";
         $result = mysqli_query($con, $query);
           if($result && mysqli_num_rows($result) > 0){
          $_SESSION['logged'] = true;
        $_SESSION['role'] = 'teacher';
        $_SESSION['username'] = $username;
        echo 1;
    }else{
        echo 2;
    }
        break;
    case 'student':
      $query = "select * from uni_alumnos where email = '".$username."' and matricula = '".$password."'";
      $result = mysqli_query($con, $query);
      if($result && mysqli_num_rows($result) > 0){
        $_SESSION['logged'] = true;
        $_SESSION['role'] = 'student';
        $_SESSION['username'] = $username;
        echo 3;
      }else{
        echo 2;
      }
      break;
    
    case 'admin':
    if($username == 'admin' && $password == 'admin'){

    
    $_SESSION['role'] = 'admin';
    $_SESSION['logged'] = true;
    echo 4;}else{
        echo 2;
    }
    break;

}
?>