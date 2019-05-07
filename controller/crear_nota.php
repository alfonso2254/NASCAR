<?php 
session_start();

include 'database.php';

$usuario_id = $_SESSION['id'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];

$insertar = "INSERT INTO notas(titulo, texto, usuario_id) VALUES ('$titulo', '$texto', '$usuario_id')";

$resultado = mysqli_query($bd, $insertar);

if ($resultado) {
	header('location:../dashboard.php');
}else{
	echo "No se ha creado la nota, algo ha fallado, por favor comuniquese con el administrador";
}





 ?>