<?php 
include('head.php'); 
?>

<div class="container">
	<h1 class="text-center my-4">Crea tu nueva nota</h1>

	<form class="form-inline my-4 my-lg-0 form-group" action="controller/crear_nota.php" method="post" >
		<h4 class="my-2">Titulo: <br></h4> 
	 	<input type="text" class="form-control my-2" style="width: 500px" name="titulo">
		<textarea class="form-control my-2" rows="6" style="width: 1200px;" name="texto" ></textarea>
		<input class="btn btn-success" type="submit" value="Crear"  name="">
	</form>
</div>


<?php include('footer.php');?>
