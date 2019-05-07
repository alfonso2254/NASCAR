
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>NASCAR - Contacto</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/estilo_tarjeta_contacto.css" rel="stylesheet">
</head>

<body>

  <!-- Full Page Intro -->
 <!-- Section: Contact v.1 -->
<section class="my-1">

  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 mb-lg-0 mb-4">

      <!-- Form with header -->
      <div class="card" id="ejemplo" style="width: 400px" >
        <div class="card-body" >
          <form action="controller/contacto.php" method="POST">
          <!-- Header -->
          <div class=" black accent-1 etiqueta_contacto" >
            <h3 class="mt-4"><i class="fas fa-envelope" style="margin-top: 15px"></i>Contacto:</h3>
          </div>
          <p class="dark-grey-text mt-2">Puedes enviar criticas constructivas al programador</p>
          <!-- Body -->
          <div class="md-form">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="form-name" class="form-control" name="nombre">
            <label for="form-name">Nombre</label>
          </div>
          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="form-email" class="form-control" name="correo">
            <label for="form-email">Correo</label>
          </div>
          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="form-Subject" class="form-control" name="asunto">
            <label for="form-Subject">Asunto</label>
          </div>
          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea id="form-text" class="form-control md-textarea" rows="3" name="mensaje"></textarea>
            <label for="form-text">Mensaje</label>
          </div>
          <div class="text-center">
            <button class="btn btn-light-blue">Enviar</button>
          </div>
        </div>
      </div>
      <!-- Form with header -->
      </form>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">


      <!--Google map-->
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 350px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d693.6600717694802!2d-66.98652842744796!3d10.426818195603833!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2af525804fa4bd%3A0x4dfcf57ccf808e1d!2zMTDCsDI1JzM2LjciTiA2NsKwNTknMTIuMyJX!5e0!3m2!1ses-419!2sve!4v1557076412249!5m2!1ses-419!2sve" frameborder="0"
          style="border:0" allowfullscreen></iframe>
      </div>
      <!-- Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating dark accent-1">
            <i class="fas fa-map-marker-alt"></i>
          </a>
          <p>Caracas Caricuao</p>
          <p class="mb-md-0">Venezuela</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating dark accent-1">
            <i class="fas fa-phone"></i>
          </a>
          <p>+58 4242282602</p>
          <p class="mb-md-0">05 Mayo 2019 12:48pm</p>
        </div>
        <div class="col-md-4 ">
          <a class="btn-floating dark accent-1">
            <i class="fas fa-envelope"></i>
          </a>
          <p>alfonso22542254@gmail.com</p>
          <p class="mb-0">alfonso-2254@hotmail.com</p>
        </div>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<



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