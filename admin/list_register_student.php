<?php
require_once("../connection.php");
$con  = connectionDB();
session_start();
$role = $_SESSION['role'];
if($role == 'admin'){
if(isset($_SESSION['logged']) == true){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
           <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
        <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
	<title>Pagina de admin</title>
</head>

<body>
 <?php
 include('menu.html');?>
</body>
</html>

<?php }}
elseif($_SESSION['role'] !='admin' && $_SESSION['logged'] != true){
    header("location: ../index.html");
}?>