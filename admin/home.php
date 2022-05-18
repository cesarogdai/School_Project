<?php
session_start();

$role = $_SESSION['role'];
if($role == 'admin'){
if(isset($_SESSION['logged']) == true ){
  ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/home.css">
	<title>ADMIN</title>
</head>
<body>
	<?php
  include('menu.html');
  ?>
<?php echo $role = $_SESSION['role'] ?>

</body>
</html>
<?php
}}
else {
  header("location: ../index.html");
  session_destroy();
}
?>