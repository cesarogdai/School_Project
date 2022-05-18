<?php 
session_start();
require_once("../connection.php");
$con = connectionDB();

$role = $_SESSION['role'];
$username = $_SESSION['username'];

if($role == 'student'){
    if(isset($_SESSION['logged']) == true){
        

   $query = "select mat.descripcion, alu.matricula,
alu.ape_mat, 
alu.cve_carrera, gr.cve_materia, gr.cve_carrera
from uni_alumnos alu 
inner join uni_grupos gr on gr.cve_carrera = alu.cve_carrera 
inner join uni_materias mat on mat.cve_materia = gr.cve_materia 
where alu.email  = '".$username."'";
        $result= mysqli_query($con, $query);

        ?>
 <!DOCTYPE html>  
 <html>  
      <head>  
            
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  


      <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a  href="home.php">Home</a>
  <a href="kardex.php" class="active">Kardex</a>
  <a href="logout.php">Cerrar Sesión</a>
  
</div>

<div style="padding-left:16px">

</div>

      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 class="text-center">KARDEX DE <?php echo $username;?> </h3><br />  
                <div class="table-responsive table-bordered">  
                     <table class="table table-hover table-dark">  
                          <tr class="success">  
                               <th width="10%">#</th>  
                               <th width="50%">MATERIA</th>  
                          </tr>  
                          <?php   
                          while($row = mysqli_fetch_array($result))  
                          {  $matricula = $row['matricula'];
                          ?>  
                          <tr>  
                            
                               <td><?php echo $row['cve_materia']; ?></td>  
                               <td><?php echo $row['descripcion']; ?></td>  
                          </tr>  
                          <?php                           
                          }  
                          ?>  
                     </table>  
                </div>  
                <!--
               <div align="center">  
                     <button name="create_excel" id="create_excel" class="btn btn-success" data-id="<?php echo $username;?>">Create Excel File</button>  
                </div>  
           </div>  -->
           <br />  

<div class="data" align="center">
<form method="post" action="excel/download.php" >
    <input align="center" class="btn btn-primary" type="submit" name="submit" value="Descargar"/>
  </form>
</div>

 </body>  
 </html>  
 <?php
}
}
else{
     header("location: ../index.html");
     session_destroy();
}
?>







 