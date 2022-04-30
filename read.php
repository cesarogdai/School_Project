 <?php
        require_once ('includes/bootstrap.php');
      //require_once('includes/jquery.php');
        //require_once('includes/jqueryefects.php');
        $con=conexionMySQL();
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
        
        

            <link href="controlcentral/Eliminar_Ciclo/style.css" rel="stylesheet" type='text/css'>
    </head>
   
        <hr>
    <body>
        
        <div class="form">
            <p><b>ELIMINACIÓN DE ESTUDIANTES DE LA BASE DE CONTROL ESCOLAR QUE NO INICIAN EL CICLO ESCOLAR</p></b>

        </div>
        <style>
          
            
        </style>
        

        <form  action="" method="post" id="formSearch">
        <div class="data" align="center">
            <table class="table">
        <label class="form-label" for="formId" class="form-control">Ingrese un ID</label>
        <input type="text" name="searchId" id="inputId" class="form-control"/>
        <hr>
       <button type="submit" name="search_id" id="search_id" class="idValue btn btn-success">Consultar</button>
        </div>
    </form>
   
    
                <?php
               
                
                if(isset($_POST['search_id'])){
                 $idSearch = isset($_POST['searchId'])? $_POST['searchId'] : "";
                 
                $query = "SELECT al.idAlumno, al.Nombre, al.Apellidos, al.Email, al.Matricula, cal.Alumnos_idAlumno, mk.idpros FROM alumnos al, calificaciones cal, mkprospectos
                    mk WHERE al.idAlumno = cal.Alumnos_idAlumno AND al.idpros = mk.idpros AND al.idAlumno =".$idSearch." limit 1";
                $result = mysqli_query($con, $query);

                    if($idSearch == ""){
                    ?><h3>Por favor ingrese algo</h3>
                

                    <?php }
                    else if(!$result){
                      ?>
                <h3>No se encontraron registros</h3>
                
                <?php 
           	 }
                   elseif($idSearch != "" && $result)
                    { ?>
                        <div class="p-3 mb-2 bg-danger bg-gradient text-white">
                    <table class="table">
	                    <thead class="black white-text">
                	<tr >
                    <th scope="col">ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Acción</th>
                    </thead>
                </tr>
                </div>
                <?php
                
                if($result){
                     while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['idAlumno'];
                    $name = $row['Nombre'];
                    $lastname = $row['Apellidos'];
                    $email = $row['Email'];
                    ?>
                    <tr>
                         <td><?php echo $row['idAlumno'];?></td>
                        <td><?php echo $row['Nombre'];?></td>
                        <td><?php echo $row['Apellidos'];?></td>
                        <td><?php echo $row['Email'];?></td>
                        <td>
                        <button type="button" data-id='<?= $id ?>' class='delete btn btn-danger' name="delete-btn" id=delete-btn><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php
                }
                    }
                else{
                ?><h3>No se encontraron registros</h3>
                <?php }
            }
            
              
        }
                    ?>
            </table>
        </div>  
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