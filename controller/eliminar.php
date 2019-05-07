<?php 
include('database.php');

$id = $_GET['id'];

$consulta = "DELETE FROM `notas` WHERE id=$id";

$resultado = mysqli_query($bd, $consulta);

if (!$resultado) {
	echo "Algo ha fallado, por favor comuniquese con el administrador.";
}else{
	header("location:../dashboard.php");
}



 ?>