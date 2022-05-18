<?php 
session_start();
require_once("../connection.php");
$con = connectionDB();

$role = $_SESSION['role'];
$username = $_SESSION['username'];

if($role == 'student'){
    if(isset($_SESSION['logged']) == true){
        include("./menu.html");

   $query = "select mat.descripcion, 
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
           <title>Webslesson Tutorial | Export HTML table to Excel File using Jquery with PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 class="text-center">KARDEX</h3><br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="10%">#</th>  
                               <th width="50%">MATERIA</th>  
                          </tr>  
                          <?php   
                          while($row = mysqli_fetch_array($result))  
                          {  
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
     
 <script>  
 $(document).ready(function(){  
      $('#create_excel').click(function(){  
           username = $(this).attr("data-id");
          // console.log(username);
           $.ajax({
               url: 'download.php',
               type:'post',
               data:{username:username},
               success: function(result){
                    console.log(result);

               }
           });
      });  
 });  
 </script>  

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







 