<?php
include('head.php');
		include 'controller/database.php';

 ?>


	<div class="container mt-4">
		<h4>Bienvenido, <?php echo $nombre; ?></h4>
		<h1 class="text-center my-4" >Sistemas de notas</h1>

		<a style="margin-left: 42%;" href="crear_nota.php"><button class="btn btn-success boton_crear_nota my-4">Crear Nota</button></a>

	</div>
	<div class="container">
		<div class="row">
				
				<div class="col-sm-12" style=" ">	
					 <div class="tarjeta " style=" display: -webkit-flex; display: inline-flex; -webkit-flex-wrap: wrap; flex-wrap: wrap;">
					
					<?php 
					$notas = "SELECT `notas`.* FROM `notas` WHERE usuario_id='$usuario_id' ORDER BY `fecha` DESC ";
					$resultado = $bd->query($notas);
					while ($row=$resultado->fetch_assoc()) {
						
					
					 ?>	
					

						<div class="card mb-4" style="width: 17rem; display: -webkit-flex; display: inline-flex; margin-left: 5px; align-items: center;">

					    <!--Card image-->
						    <div class="view overlay">
						      <img class="card-img-top" src="img/nota.jpg" alt="Card image cap">
						      <a href="#!">
						        <div class="mask rgba-white-slight"></div>
						      </a>
						    </div>

					    <!--Card content-->
						    <div class="card-body" style="height: 80%">
						    	<!--Date-->
						    	<?php $date = new DateTime($row['fecha']);
						    			$date= $date->format("d-m-Y")?>
						    	<span class="badge badge-dark">Creado: <?php echo $date;?></span>
						    	<!--Create-->
						    	<span class="badge badge-primary">by: <?php echo $nombre; ?></span>
						      <!--Title-->
						      <h4 class="card-title"><?php echo $row['titulo']; ?></h4>
						      <!--Text-->
						      <p class="card-text" style="padding: 10px" ><?php echo $row['texto']; ?></p>
						      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
						      <div class="box_botones" >
						      <a href="modificar.php?id=<?php echo $row['id'] ?>" class="btn btn-success botones">Editar</a>
						      <a href="controller/eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger botones" onclick="return confirm('Esta seguro de eliminar?')">Eliminar</a>
						      </div>
						    </div>

					 	 </div>
					  
						
					<?php } ?>	
					</div>						
				</div>

			</div>
		</div>

<?php include('footer.php');?>



