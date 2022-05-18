<?php
session_start();
require_once('../connection.php');
$con = connectionDB();
 $role = $_SESSION['role'];
 if($role == 'admin'){
   
     if(isset($_SESSION['logged']) == true){

        ?>

<!DOCTYPE html>
<html>
<head><meta charset="gb18030">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
        <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        

            <link href="styles/kardex_student.css" rel="stylesheet" type='text/css'>
    </head>
    <body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="list_register_student.php">Alumnos Registrados</a></li>
      <li><a href="list_register_teacher.php">Profesores Registrados</a></li>
      <li class="active"><a href="kardex_student.php">Kardex de Alumnos</a></li>
      <li><a href="create_student.php">Registrar a un alumno</a></li>
      <li><a href="logout.php">Cerrar Sesión</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
 
</div>
        
        
        <div class="form">
            <p><b>Kardex de Alumnos</p></b>

        </div>
        <style>
          
            
        </style>
        

        <form  action="" method="post" id="formSearch">
        <div class="data" align="center">
            <table class="table">
        <label class="form-label" for="formId" class="form-control">Ingrese la matricula</label>
        <input type="text" name="matricula_input" id="matricula_input" class="form-control"/>
        <hr>
       <button type="submit" name="matricula" id="matricula" class="idValue btn btn-success">Consultar</button>
        </div>
    </form>
   
    
                <?php
               
                
                if(isset($_POST['matricula'])){
                 $matricula = isset($_POST['matricula_input'])? $_POST['matricula_input'] : "";
                 
                $query = "select mat.descripcion, alu.matricula, alu.ape_mat,  alu.cve_carrera, gr.cve_materia, gr.cve_carrera from uni_alumnos alu inner join uni_grupos gr on gr.cve_carrera = alu.cve_carrera inner join uni_materias mat on mat.cve_materia = gr.cve_materia where alu.matricula  = 'A180410'";

                $result = mysqli_query($con, $query);

                    if($matricula == ""){
                    ?><h3>Por favor ingrese algo</h3>
                

                    <?php }
                    else if(!$result){
                      ?>
                <h3>No se encontraron registros</h3>
                
                <?php 
           	 }
                   elseif($matricula != "" && $result)
                    { ?>
 <div class="container" style="width:600px;">  
                <h3 class="text-center">Kardex de <?php echo $matricula;?></h3><br />  
                <div class="table-responsive table-bordered" >  
                     <table class="table table-dark">  
                      <thead>
                          <tr class="success">  
                               <th scope="col">#</th>  
                               <th scope="col">Materia</th>
                              
                          </tr>  
                        </thead>
                        <tbody>
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
                         </tbody>   
                     </table>  
                </div>  
              </div>
       <?php      
        }}
        ?>        

        <hr>
       
        
        
        
         <script type="text/javascript">
            $(document).ready(function () {
                $('.delete').click(function () {
                    var el = this;
                    var deleteid = $(this).data('id');     
                    bootbox.confirm("¿Desea borrar el registro?", function (result) {

                        if (result) {
                            $.ajax({
                                url: 'controlcentral/Eliminar_Ciclo/ajax.php',
                                type: 'POST',
                                data: {id: deleteid},
                                success: function (response) {
                                    if (response == 1) {
                                        $(el).closest('tr').css('background', 'tomato');
                                        $(el).closest('tr').fadeOut(800, function () {
                                            $(this).remove();
                                        });
                                        bootbox.alert("Se ha borrado exitosamente");
                                      
                                        
                                    }
                                     else {
                                        bootbox.alert('No se pudo borrar');
                                      
                                    }

                                }
                            });
                        }

                    });

                });
            });
        </script>
             
    </body>
</html>
<?php 
}
}else{
    header("location: ../index.html");
    session_destroy();
}
?>