<?php include('controller/database.php');
session_start();
$varsession = $_SESSION['usuario'];
$nombre= $_SESSION['nombre'];
$usuario_id = $_SESSION['id'];
 if ($varsession == null || $varsession=='') {
  echo '<script>
    alert("Usted no tiene autorización");
    window.location.assign("index.php");
  </script>';
  die();
}

echo "string";
       
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
  <link href="css/estilos_dashboard.css" rel="stylesheet">
  


</head>

<body>

  <?php 

   $consulta = "SELECT * FROM users WHERE id='$usuario_id'";
        $resultado = $bd->query($consulta);
        $row = $resultado->fetch_assoc();

   ?>

  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1 btn-dark">
  <a class="navbar-brand" href="dashboard.php">NASCAR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Inicio
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="crear_nota.php">Crear Nota</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a href="mensaje.php" class="nav-link waves-effect waves-light">
          <i class="fas fa-envelope"></i>
        </a>
      </li>
      <li class="nav-item avatar dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <img src="<?php echo "img/perfil/" . $row['img'] ?>" class="rounded-circle z-depth-0"
            alt="avatar image" style="width: 50px; height: 50px">
        </a>
        <div id="segun" class="dropdown-menu dropdown-menu-right dropdown-secondary"
          aria-labelledby="navbarDropdownMenuLink-55">
          
          <a class="dropdown-item"  data-toggle="modal" data-target="#modalLoginAvatar">Mi cuenta</a>
          <a class="dropdown-item" href="controller/cerrar_session.php" >Cerrar Session</a>
        </div>
      </li>
    </ul>
  </div>
</nav>


<!--/.Navbar -->



<!--Personalizar usuario-->

<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img  style="width: 130px; height: 129px;" src="<?php echo "img/perfil/".$row['img'] ?>" alt="avatar" class="rounded-circle img-responsive">
      </div>
       
          <form  action="controller/subir_perfil.php" method="POST" enctype="multipart/form-data">
            <label  id="boton_perfil" for="perfil" class=""><i class="fas fa-camera"></i></label>
            <input onclick="cambiar()" type="file" style="display: none;" id="perfil" name="perfil" value="<?php echo $row['img'] ?>">
            <input type="submit" class="btn btn-outline-primary" id="boton_cambiar_imagen" value="Cambiar imagen">
          </form>       
       
      <!--Body-->
      <div class="modal-body text-center mb-1">

        <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" id="opciones" onclick="quitarr_fomr2()" class="btn btn-pink btn-rounded toggle1 form-check-label active">Perfil</button>
      <button type="button" id="opciones" onclick="quitarr_fomr1()" class="btn btn-pink btn-rounded toggle2">Seguridad</button>
    </div>

        <h5 class="mt-1 mb-2"><?php echo $nombre ?></h5>

        <!--Consulta para el fomulario perfil-->
        


        <!--Formulario Perfil-->
         <div id="formulario1" class="formulario_perfil">
          <form action="controller/configuracion_perfil.php" method="POST">
            
            <div class="md-form ml-0 mr-0">
              <input type="text" type="text" id="nombre" name="nombre" class="form-control form-control-sm validate ml-0" value="<?php echo $row['nombre'] ?>">
              <label data-error="wrong" for="nombre" class="ml-0">Nombre</label>
            </div>

            <div class="md-form ml-0 mr-0">
              <input type="email" type="text" id="correo" name="correo" class="form-control form-control-sm validate ml-0" value="<?php echo $row['correo'] ?>">
              <input type="hidden" name="id" value="<?php echo $usuario_id ?>">
              <label data-error="wrong"  for="correo" class="ml-0">Correo</label>
            </div>

            

             <div class="text-center mt-4">
              <button class="btn btn-cyan mt-1">Aceptar <i class="fas fa-sign-in ml-1"></i></button>
            </div>
          </form>
        </div>

        <!--Fin Formulario perfil-->



       <!--Formulario Seguridad-->

        <div  id="formulario2" class="formulario_seguridad">
          <form action="controller/configuracion_seguridad.php" method="POST">
            <div class="md-form ml-0 mr-0">
              <input type="password" type="text" id="password_actual" name="password_actual" class="form-control form-control-sm validate ml-0">
              <label data-error="wrong" for="password_actual" class="ml-0">Password actual</label>
            </div>

            <div class="md-form ml-0 mr-0">
              <input type="password" type="text" id="nueva_password" name="nueva_password" class="form-control form-control-sm validate ml-0">
              <label data-error="wrong" for="nueva_password" class="ml-0">Nueva Password</label>
            </div>

            <div class="md-form ml-0 mr-0">
              <input type="password" type="text" id="repite_nueva_password" name="repite_password" class="form-control form-control-sm validate ml-0">
              <label data-error="wrong" for="repite_nueva_password" class="ml-0">Repite nueva Password</label>
            </div>

            <input type="hidden" name="id" value="<?php echo $usuario_id ?>">

             <div class="text-center mt-4">
              <button class="btn btn-cyan mt-1">Aceptar <i class="fas fa-sign-in ml-1"></i></button>
            </div>
          </form>
        </div>


       

        <!--Fin formulario Seguridad-->

       

      </div>

    </div>
    <!--/.Content-->
  </div>
</div>

