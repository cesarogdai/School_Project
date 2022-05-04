<?php
require_once("../connection.php");
$con  = connectionDB();
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
<hr>
<body>

<body>
	<div class="form">
	<p><b></p></b>
	</div>
	
	<form action="" method="post" id="formSearch">
	<div class="data" align="center">
		
	<label class="form-label" for="formId" class="form-control">Ingrese el cve</label>
	<input type="text" name="grupoId" id="grupoId" class="form-control"/>
	<hr>
	
	<button type="submit" name="grupo_id" id="grupo_id" class="idGroup btn btn-warning">Consultar</button>
	<hr>
	</form>
	
	<?php 
	if(isset($_POST['grupo_id'])){
	$idGrupo = isset($_POST['grupoId']) ? $_POST['grupoId'] : "";
	$query = 'select * from uni_alumnos where cve_carrera = '.$idGrupo;
	
	$result = mysqli_query($con, $query);
	if($idGrupo == ""){
	?><h3>Por favor ingrese algo</h3>
	<?php }
	else if(!$result){
	?>
	<h3>No se encontraron registros</h3>
	<?php
	}
	else if($idGrupo != "" && $result)
	{?>
	 <div class="table-responsive">
	 
                    <table class="table">
	                    <thead class="black white-text">
                	<tr >
                <th scope="col">Matricula</th>
                <!--idr, idAlumno, observacion,cuatrimestre,
                idGrupo, ciclo, periodo, envio, auxiliar-->
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Estado</th>
              
                <th>Telefono</th>
                <th>Correo</th>
               
                </thead>
                	</tr>
                </div>
                <?php
                if($result){
                while($row = mysqli_fetch_assoc($result)){
                $matricula = $row['matricula'];
                
                $name = $row['nombres'];
                $lastname = $row['ape_pat'];
               
                $observacion = $row['observacion'];
                
                $period = $row['periodo'];
                $envio = $row['envio'];
                $aux = $row['auxiliar'];
                $arrayData = json_encode(array($matricula, $idGrupo));
                ?>
                <tr>
                	<td><?php echo $row['matricula'];?></td>
                	<td><?php echo $row['nombres']; ?></td>
                	<td><?php echo $row['ape_pat']; ?></td>
                	<td><?php echo $row['estado']; ?></td>
                
                	<td><?php echo $row['telefono']; ?></td>
                	<td><?php echo $row['email']; ?></td>
                	
                	<td><button type="button" data-id='<?=$arrayData ?>' class="deleteGrupo btn btn-danger" name="delete-btngrupo" id="delete-btngrupo"><i class="fa fa-trash"></i></button></td>
                	</tr> 
                <?php
                }
                }
                else{
                ?><h3>No se encontraron registros</h3>
                <?php
                }
		}
	}
		?>
	</table>
	</div>
	
        
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