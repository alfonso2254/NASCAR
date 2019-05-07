<?php include('head.php');
include('controller/database.php');

$id = $_GET['id'];
$consulta = "SELECT * FROM notas WHERE id='$id'";
$resultado = $bd->query($consulta);
$row = $resultado->fetch_assoc();

 ?>



<div class="container">
	<h1 class="text-center my-4">Modificar nota</h1>

	<form class="form-inline my-4 my-lg-0 form-group" action="controller/modificar.php" method="post" >
		<h4 class="my-2">Titulo: <br></h4> 
	 	<input type="text" class="form-control my-2" style="width: 500px" name="titulo" value="<?php echo $row['titulo']; ?>">
		<textarea class="form-control my-2" rows="6" style="width: 1200px;" name="texto" ><?php echo $row['texto']; ?></textarea>
		<input class="btn btn-success" type="submit" value="Modificar" >
		<input type="hidden" name="id" id="id" value="<?php echo $row['id'];?>">
	</form>
</div>

<?php include('footer.php');?>