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
  <?php 
  include('menu.html');
  ?>
  <form action="">
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
                    <input type="text" class="form-control form-control-lg" id="ape_mat" />
                    <label for="birthdayDate" class="form-label">Apellido Materno</label>
                  </div>


                </div>

                <div class="col-md-6 mb-4">
                   <input type="text" class="form-control form-control-lg" id="ape_pat" />
                    <label for="ape_pat" class="form-label">Apellido Paterno</label>

               
                

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="email" class="form-control form-control-lg" />
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
                    <input type="text" id="est_civil" class="form-control form-control-lg" />
                    <label class="form-label" for="civil">Estado Civil</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="estado" class="form-control form-control-lg" />
                    <label class="form-label" for="estado">Estado</label>
                  </div>

                </div>
              </div>
               <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="municipio" class="form-control form-control-lg" />
                    <label class="form-label" for="municipio">Municipio</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="colonia" class="form-control form-control-lg" />
                    <label class="form-label" for="colonia">Colonia</label>
                  </div>

                </div>
              </div>
               <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="direccion" class="form-control form-control-lg" />
                    <label class="form-label" for="direccion">Dirección</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="phone" class="form-control form-control-lg" />
                    <label class="form-label" for="phone">Teléfono</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="celular" class="form-control form-control-lg" />
                    <label class="form-label" for="celular">Celular</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="date" id="fecha_nac" class="form-control form-control-lg" />
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
                      <option value="lidts"> INGENIERÍA EN DESARROLLO Y TECNOLOGÍAS DE SOFTWARE</option>
                      <option value="civil">INGENIERÍA CIVIL</option>
                      <option value="hidra">INGENIERÍA HIDRÁULICA</option>
                      <option value="admin">LICENCIATURA EN ADMINISTRACIÓN</option>
                      <option value="turist">LICENCIATURA EN GESTIÓN TURÍSTICA</option>
                      <option value="sistemas">LICENCIATURA EN SISTEMAS COMPUTACIONALES</option>
                      <option value="quimico">LICENCIATURA EN QUÍMICO FARMACOBIÓLOGO</option>

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
                      
                      <option value="arquitectura">Facultad de Arquitectura</option>
                      <option value="ingenieria">Facultad de Ingeniería</option>
                      <option value="lenguas">Facultad de Lenguas</option>
                      <option value="contaduria">Facultad de Contaduría y Administración</option>
                    </select>
                  </div>

                </div>
              </div>




                 <h6 class="mb-2 pb-1">Genero: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="female"
                      value="option1" checked />
                    <label class="form-check-label" for="femaleGender">Mujer</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="male"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Hombre</label>
                  </div>


        

              <div class="mt-4 pt-2">
                <!--
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              -->
               <button type="button"  class='registerBtn btn btn-primary' name="register-btn" id="delete-btnbeca" >Click</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>

<script type="text/javascript">
  $(document).ready(function(){
    $('.registerBtn').click(function(){

      let el = this;
      let name = $("#name").val();
      let matricula = $("#matricula").val();
      let ape_pat = $("#ape_pat").val();
      let ape_mat = $("#ape_mat").val();
      let curp = $("#curp").val();
      let genero = $("#genero").val();
      let civil = $("#est_civil").val();
      let state = $("#state").val();
      let municipio = $("#municipio").val();
      let colonia = $("#colonia").val();
      let direccion = $("#direccion").val();
      let telefono = $("#phone").val();
      let email = $("#email").val();
      let date = $("#fecha_nac").val();
      let carrera = $("#carreras").val();
      let dependencia = $("#dependencia").val();
      let data = {name, matricula, ape_mat, ape_pat, curp, genero, civil, state, municipio, colonia, direccion, telefono, email, date, carrera, dependencia};
          $.ajax({
            url:'register_student.php',
            type:'post',
            data:{data:data},
            success: function(result){
              if(result == 1){
                alert("Ha ocurrido algo");
              }
            }
          });
    });
  });
</script>
<?php }}

elseif($role != 'admin' && $_SESSION['logged'] != true){
  header("location: ../index.html");
}
?>

</body>
</html>




