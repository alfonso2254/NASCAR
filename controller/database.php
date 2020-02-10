<?php 
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$db = 'system_notas';
$bd=mysqli_connect($servidor,$usuario,$password,$db);

if (!$bd) {
	echo "Error al conectarse con la base de datos, por favor comuniquese con el administrador.";
}

 ?>