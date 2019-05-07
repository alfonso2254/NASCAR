<?php 
include('database.php');

session_start();

$usuario = $_POST['usuario'];
$_SESSION['usuario'] = $usuario;
$password = $_POST['password'];

$consulta = "SELECT * FROM users WHERE usuario='$usuario' and password='$password' ";

$resultado = mysqli_query($bd, $consulta);

$imprimenombre = $resultado->fetch_assoc();

$_SESSION['nombre'] = $imprimenombre['nombre'];
$_SESSION['id'] = $imprimenombre['id'];

$fila= mysqli_num_rows($resultado);
if ($fila>0) {
	header("location:../dashboard.php");
}else{
	echo '<script>
		alert("Usted no se encuentra registrado");
		window.history.go(-1);
	</script>';
	exit();
}
mysqli_free_result($resultado);
mysql_close($db);


 ?>