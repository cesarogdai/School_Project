<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" type="text/css" href="styles/login_style.css">
	<title>Inicio</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
          	<!-- add accent at the end -->
            <h5 class="card-title text-center mb-5 fw-light fs-5">Iniciar Sesion</h5>
            <form action="" method="post">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username">
                <label for="floatingInput">Usuario</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" >
                <label for="floatingPassword">Contraseña</label>
              </div>

            
              <div class="d-grid">
                <button class="loginBtn btn btn-primary btn-login text-uppercase fw-bold" type="submit" id='btnCheck'>Iniciar Sesión</button>
              </div>
              <hr class="my-4">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php if(isset($_POST['btnCheck'])){
  if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
  $password = $_POST['password'];
  print("<h1>Username: ".$username);
  print("<br>");
  print("<h1>Password: ".$password);



  }
    
  }
  
  ?>



  <script type="text/javascript">
    $(document).ready(function(){
      $('.loginBtn').click(function(){
        let el = this;

        
      });
    });
  </script>
</body>
</html>
