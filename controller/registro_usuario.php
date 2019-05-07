<?php 
include('database.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$img = $_POST['img'];

$insert = "INSERT INTO `users`(`nombre`, `correo`, `usuario`, `password`, `img` ) VALUES ('$nombre', '$correo', '$usuario', '$password', '$img')";

$verificar_correo = mysqli_query($bd, "SELECT * FROM users WHERE correo = '$correo' ");
if (mysqli_num_rows($verificar_correo) > 0) {
	echo '<script>
		alert("El correo ya se encuentra registrado");
		window.history.go(-1)
		</script>';
		exit;
}
$verificar_usuario = mysqli_query($bd, "SELECT * FROM users WHERE usuario = '$usuario' ");
if (mysqli_num_rows($verificar_usuario) > 0 ) {
	echo '<script>
		alert("El usuario ya se encuentra registrado");
		window.history.go(-1);
		</script>';
		exit;
}

$resultado = mysqli_query($bd, $insert);

if ($resultado) {
	header("location:../index.php");
}else{
	echo "Ocurrió un error, por favor comuníquese con el administrador";
}





 ?>