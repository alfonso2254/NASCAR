<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>NASCAR - Contactos</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/estilo_contacto.css" rel="stylesheet">
</head>

<body>

<?php 
  
  if (isset($_GET['id']) && !empty($_GET['id'])) {
    if ($_GET['id'] == "correcto") {
     echo '  <div onclick="quitar()" id="negro"></div>
  <div onclick="quitar()" id="dialogo"><p>Mensaje enviado correctamente!!!</p>
  <button id="boton" class="btn btn-outline-success btn-rounded waves-effect">Aceptar</button>
  </div>

  ' ;
    }elseif ($_GET['id']== "incorrecto") {
      echo '  <div  onclick="quitar()" id="negro"></div>
  <div onclick="quitar()" id="dialogo"><p>Su Mensaje no pudo enviarse</p>
  <button id="boton" class="btn btn-outline-danger btn-rounded waves-effect">Aceptar</button>
  </div>' ;
    }

  }




 ?>




  <!-- Full Page Intro -->
  <!-- Main navigation -->
<header>
  
  <!-- Full Page Intro -->
  <div class=" mt-1" data-jarallax='{"speed": 0.2}' style="background-image: url('img/background_contacto.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center" style="margin-top: -38px" >
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-12 mb-1 white-text text-center">
           <a href="dashboard.php"> <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown"
              data-wow-delay="0.3s"><strong>NASCAR INTRO</strong></h1></a>
            <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
            <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>LUIS ALFONSO ALARCON</strong></h5>
            
            <div>
            
            <?php include('tarjeta_contacto.php'); ?>
          </div>
          </div>




          <!--Grid column-->
        </div>
        <!--Grid row-->


      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>

<!--Alerta-->
  
<!--fin Alerta-->
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