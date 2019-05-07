<?php 



 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>NASCAR</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/estilos_intro.css" rel="stylesheet">
</head>

<body>

  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('img/background_intro.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-indigo-strong d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row pt-lg-5 mt-lg-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft"
            data-wow-delay="0.3s">
            <h1 class="display-4 font-weight-bold">Proyecto Nascar</h1>
            <hr class="hr-light">
            <h6 class="mb-3">El Proyecto Nascar fue diseñado y construido desde cero por el programador Luis Alfonso Alarcon. Con la intención de aportar para la comunidad de IUTA - Informática. En el podrás registrarte, con la técnica CRUD para almacenar las notas de cada usuario. By: Alarcon... </h6>
            <a href="contacto.php" class="btn btn-outline-white">Contacto</a>
          </div>
          <!--Grid column-->
          <!--Aqui va el formulario-->
         <div class="col-md-6 col-xl-5 mb-4">
            <!--Form-->
            <div class="card wow fadeInRight form" data-wow-delay="0.3s">


              <div class="card-body z-depth-2">
                <!--Header-->
                <div class="toggle">
                  <span>Crear Cuenta</span>
                </div>
                <div class="formulario">
                <form action="controller/validar_login.php" method="POST">
                  <div class="text-center">
                    
                    <h4 class="dark-grey-text" style="margin-top: 10px">
                      <strong>Login:</strong>
                    </h4>
                    <hr>
                  </div>
                  <!--Body-->
                 

                  <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="text" id="form2" class="form-control" name="usuario">
                    <label for="form2">Usuario</label>
                  </div>

                  <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="password" id="form3" class="form-control" name="password">
                    <label for="form3">Password</label>
                  </div>

                               
                  
                  <div class="text-center mt-3">
                    <button class="btn btn-indigo">Ingresar</button>
                  </div>

                </form>

                </div>

                <div class="formulario">

                <form action="controller/registro_usuario.php" method="POST">

                   <div class="text-center">
                    
                    <h4 class="dark-grey-text" style="margin-top: 10px">
                      <strong>Formulario de Registro:</strong>
                    </h4>
                    <hr>
                  </div>
                 
                  <!--Body-->
                  <div class="md-form">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="form" class="form-control" name="nombre">
                    <input type="hidden" name="img" value="perfil_avatar.jpg">
                    <label for="form">Nombre</label>
                  </div>

                  <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="text" id="form1" class="form-control" name="correo">
                    <label for="form1">Correo</label>
                  </div>

                  <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="text" id="form5" class="form-control" name="usuario">
                    <label for="form5">Usuario</label>
                  </div>

                  <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="password" id="form4" class="form-control" name="password">
                    <label for="form4">Password</label>
                  </div>

                             
                  
                  <div class="text-center mt-3">
                    <button class="btn btn-indigo">Registrarse</button>
                  </div>
                </form>

                </div>

              </div>
            </div>
            <!--/.Form-->
          </div>

<!--Aqui va el formulario-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->
   <!-- /end your project here-->


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/formulario.js"></script>
</body>


</html>