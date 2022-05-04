<?php 
 	include('../connection.php');
 	$con = connectionDB();
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
        
       

            
            <link rel="stylesheet" type="text/css" href="./home.css">
    </head>
   <br>
   <br>
<body>
   

    <?php 
    //include ("header.php");
    $query = "select * from uni_profesor";

    
    $result = mysqli_query($con, $query);
    
    if($result)
    {?>
     <div class="table-responsive">
     
                    <table class="table">
                        <thead class="black white-text">
                    <tr >
                <th scope="col">cve_profesor</th>
                <!--idr, idAlumno, observacion,cuatrimestre,
                idGrupo, ciclo, periodo, envio, auxiliar-->
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombres</th>
              
                <th>Telefono</th>
                <th>Email</th>
               
                </thead>
                    </tr>
                </div>
                <?php
                if($result){
                while($row = mysqli_fetch_assoc($result)){
                $id = $row['cve_profesor'];
                
                $lastnamep = $row['ape_pat'];
                $lastnamem = $row['ape_mat'];
               
                $observacion = $row['nombre'];
                
                $email = $row['email'];
                $envio = $row['teléfono'];
               
                $arrayData = json_encode(array($matricula, $idGrupo));
                ?>
                <tr>
                    <td><?php echo $row['cve_profesor'];?></td>
                    <td><?php echo $row['ape_pat']; ?></td>
                    <td><?php echo $row['ape_mat']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['teléfono']; ?></td>
                    
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
    
        ?>
    </table>
    </div>

</body>
</html>