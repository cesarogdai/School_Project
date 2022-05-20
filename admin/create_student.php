<?php
session_start();

//if($_SESSION['logged']) == true && $_SESSION['role']) == 'admin'){
$role = $_SESSION['role'];
if($role == 'admin'){
  require_once("../connection.php");
$con = connectionDB();
if(isset($_SESSION['logged']) == true ){

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
        <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
  <title>Registro</title>
  <link rel="stylesheet" type="text/css" href="styles/create_student.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="home.php">Home</a></li>
      <li><a href="list_register_student.php">Alumnos Registrados</a></li>
      <li><a href="list_register_teacher.php">Profesores Registrados</a></li>
      <li><a href="kardex_student.php">Kardex de Alumnos</a></li>
      <li class="active"><a href="create_student.php">Registrar a un alumno</a></li>
      <li><a href="logout.php">Cerrar Sesión</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
 
</div>
  <form action="" id="form">
  <div class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registro de Alumnos</h3>
            <form>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="matricula" class="form-control form-control-lg" />
                    <label class="form-label" for="matricula">Matricula</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="name" class="form-control form-control-lg" />
                    <label class="form-label" for="name">Nombres</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="ape_pat" />
                    <label for="ape_pat" class="form-label">Apellido Paterno</label>
                  </div>


                </div>

                <div class="col-md-6 mb-4">
                   <input type="text" class="form-control form-control-lg" id="ape_mat" />
                    <label for="ape_mat" class="form-label">Apellido Materno</label>

               
                

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email">Correo Electrónico</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="curp" class="form-control form-control-lg" />
                    <label class="form-label" for="curp">CURP</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="civil" class="form-control form-control-lg" name="civil" />
                    <label class="form-label" for="civil">Estado Civil</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" name="estado" id="estado" class="form-control form-control-lg" />
                    <label class="form-label" for="estado">Estado</label>
                  </div>

                </div>
              </div>
               <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="municipio" name="municipio" class="form-control form-control-lg" />
                    <label class="form-label" for="municipio">Municipio</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="colonia" name="colonia" class="form-control form-control-lg" />
                    <label class="form-label" for="colonia">Colonia</label>
                  </div>

                </div>
              </div>
               <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="direccion" name="direccion" class="form-control form-control-lg" />
                    <label class="form-label" for="direccion">Dirección</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="phone" name="phone" class="form-control form-control-lg" />
                    <label class="form-label" for="phone">Teléfono</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="celular" class="form-control form-control-lg"  name="celular" />
                    <label class="form-label" for="celular">Celular</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="date" id="fecha_nac" name="fecha_nac" class="form-control form-control-lg" />
                    <label class="form-label" for="fecha">Fecha Nacimiento</label>
                  </div>

                </div>
              </div>
               <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <!--
                    INGENIERÍA CIVIL
                    INGENIERÍA HIDRÁULICA
                    LICENCIATURA EN ADMINISTRACIÓN
                    LICENCIATURA EN GESTIÓN TURÍSTICA
                    LICENCIATURA EN SISTEMAS COMPUTACIONALES
                    INGENIERÍA EN DESARROLLO Y TECNOLOGÍAS DE SOFTWARE
                    LICENCIATURA EN QUÍMICO FARMACOBIÓLOGO
                    LICENCIATURA EN QUÍMICO FARMACOBIÓLOGO

                  -->
                  <div class="form-outline">
                    <label class="form-label" for="celular">Carrera</label>
                    <select name="carreras" id="carreras"> 
                      <option value="1">INGENIERÍA CIVIL</option>
                      <option value="2">INGENIERÍA HIDRÁULICA</option>
                      <option value="3">LICENCIATURA EN ADMINISTRACIÓN</option>
                      <option value="4">LICENCIATURA EN GESTIÓN TURÍSTICA</option>
                      <option value="5">LICENCIATURA EN SISTEMAS COMPUTACIONALES</option>
                      <option value="6"> INGENIERÍA EN DESARROLLO Y TECNOLOGÍAS DE SOFTWARE</option>
                      <option value="7">LICENCIATURA EN QUÍMICO FARMACOBIÓLOGO</option>


                    </select>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <!--
                    Facultad de Arquitectura
                    Facultad de Ingeniería
                    Facultad de Lenguas
                    Facultad de Contaduría y Administración
                  -->
                   
                    <label class="form-label" for="dependencia">Dependencia</label>
                    <select name="dependencia" id="dependencia"> 
                      
                      <option value="86213">Facultad de Arquitectura</option>
                      <option value="98024">Facultad de Ingeniería</option>
                      <option value="2719813">Facultad de Lenguas</option>
                      <option value="28137291">Facultad de Contaduría y Administración</option>
                    </select>
                  </div>

                </div>
              </div>




                 <h6 class="mb-2 pb-1">Genero: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radioName" id="female"
                      value="2" checked />
                    <label class="form-check-label" for="femaleGender">Mujer</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radioName" id="male"
                      value="1" />
                    <label class="form-check-label" for="maleGender">Hombre</label>
                  </div>


        

              <div class="mt-4 pt-2" align="center">
                <!--
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              -->
               <button type="button"   class='registerBtn btn btn-primary' name="register-btn" id="register-btn" >Registrar</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function(){
    $('.registerBtn').click(function(){

      let el = this;
      let name = $("#name").val();
      let matricula = $("#matricula").val();
      let ape_pat = $("#ape_pat").val();
      let ape_mat = $("#ape_mat").val();
      let curp = $("#curp").val();
      let civil = $("#civil").val();
      let municipio = $("#municipio").val();
      let colonia = $("#colonia").val();
      let direccion = $("#direccion").val();
      let genero = $('input[name=radioName]:checked', '#form').val();
      let estado = $("#estado").val();
      let celular = $("#celular").val();
      let telefono = $("#phone").val();
      let email = $("#email").val();
      let date = $("#fecha_nac").val();
      let carrera = $("#carreras").val();
      let dependencia = $("#dependencia").val();

      if(name =='' || matricula =='' || ape_pat == '' || ape_mat == '' ||
        curp == ''  || civil =='' || estado == '' || municipio == '' || colonia == '' || direccion == '' || telefono == '' || email == '' || date == '' || carrera == '' || 
        dependencia == '' || celular == ''){
        $("#modalempty").modal('toggle');
      }else{
      let data = {name, matricula, ape_pat, ape_mat, curp, civil, municipio, colonia, direccion, genero, estado, celular, telefono, email, date, carrera, dependencia};
      $("#modalsuccess").modal('toggle');
          $.ajax({
            url:'register_student.php',
            type:'post',
            data:{data:data},
            success: function(result){
              if(result == 1){
                $("#modalsuccess").modal('toggle');
               
                
              }if(result == 2){
                $("#modalerror").modal('toggle');
              }
            }
          });
        }
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function (){
   $('#modal_success').click(function(){
    window.location.href = 'home.php';
   });

  });
</script>


<div class="modal" tabindex="-1" role="dialog" id="modalerror">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sucedio algo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor verifique los datos</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="modalsuccess">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Se ha cargado el registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <p>Los datos han siddo cargados correctamente</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="modal_success" name="modal_success">Cerrar</button>
      </div>
    </div>
  </div>
</div>

 <div class="modal" tabindex="-1" role="dialog" id="modalempty">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Paso algo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <!--<span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor llene todos los campos</p>
      </div>
      <div class="modal-footer">
       <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>





</body>
</html>
<?php }}
else{
  header("location: ../index.html");
  session_destroy();
}
?>




