<?php 

include('database.php');


$password_actual = $_POST['password_actual'];
$nueva_password = $_POST['nueva_password'];
$repite_password = $_POST['repite_password'];

$id = $_POST['id'];


$consulta = "SELECT * FROM users WHERE password='$password_actual'";

$ejecutar = $bd->query($consulta);

$validacion = mysqli_num_rows($ejecutar);

if ($validacion>0) {

	if ($nueva_password == $repite_password) {
		$consulta = "UPDATE `users` SET `password` = '$nueva_password'   WHERE `users`.`id` = '$id'; ";
		$resultado = $bd->query($consulta);
		if ($resultado) {
		echo '<script>
		alert("Cambio de password exitoso");
		window.history.go(-1)
		</script>';
		}
	}else{
		echo '<script>
		alert("Nueva password no coincide");
		window.history.go(-1)
		</script>';
	}
}else{
	echo '<script>
		alert("Password actual incorrecta");
		window.history.go(-1)
		</script>';

}


?>