<?php 
session_start();
?>
<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/home.css">
	<title></title>
</head>
<body>
	<div class="navbar">
  <a href="#home">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn">Mas
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="kardex.php">Kardex</a>
     
    </div>
  </div> 
</div>
 Bienvenido <?php echo $_SESSION['username'] ?>


</body>
</html>