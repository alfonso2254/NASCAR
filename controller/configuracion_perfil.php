<?php 

include('database.php');


$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$id = $_POST['id'];


$consulta = "UPDATE `users` SET `nombre` = '$nombre', `correo`='$correo'   WHERE `users`.`id` = '$id'; ";

$resultado = $bd->query($consulta);

if ($resultado) {
	header("location:../dashboard.php");
}





 ?>