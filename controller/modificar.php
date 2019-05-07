<?php 
include 'database.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];

$insertar = "UPDATE notas SET titulo='$titulo', texto='$texto' WHERE id='$id'";

$resultado = mysqli_query($bd, $insertar);

if ($resultado) {
	header('location:../dashboard.php');
}else{
	echo "No se ha modificado la nota, algo ha fallado, por favor comuniquese con el administrador" . error_reporting(-1);;
}


 ?>