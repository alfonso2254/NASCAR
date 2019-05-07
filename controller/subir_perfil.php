<?php 
include ('database.php');
session_start();
$varsession = $_SESSION['usuario'];
$nombre= $_SESSION['nombre'];
$usuario_id = $_SESSION['id'];


$perfil = $_FILES['perfil'] ['tmp_name'];
$nombre_perfil = $_FILES['perfil'] ['name'];
$tipo_perfil = $_FILES['perfil'] ['type'];
$tamaño_perfil = $_FILES['perfil'] ['size'];


 $carpeta_destino = '../img/perfil/' . $nombre_perfil;

$resultado = move_uploaded_file($perfil, $carpeta_destino);

if ($resultado) {

	$consulta = "UPDATE `users` SET `img` = '$nombre_perfil' WHERE `users`.`id` ='$usuario_id' ";
	$resultado = $bd->query($consulta);
	header("location:../dashboard.php");

}else{
	echo "incorrecto";
}

 ?>