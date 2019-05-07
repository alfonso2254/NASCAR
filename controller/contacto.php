<?php 
include('database.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


$insertar = "INSERT INTO contacto(nombre, correo, asunto, mensaje) VALUES ('$nombre', '$correo', '$asunto', '$mensaje')";

$ejecutar = mysqli_query($bd, $insertar);

if ($ejecutar) {
	header("location: ../contacto.php?id=correcto");
	}else{
		header("location: ../contacto.php?id=incorrecto");
	}