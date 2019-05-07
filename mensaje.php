<?php include('head.php'); 
include('controller/database.php');
?>

<!--Table-->
<table style="width: 1200px; margin: 2% 0 5%  13%;" id="tablePreview" class="table table-hover table-sm table-bordered">
<!--Table head-->
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Asunto</th>
      <th>Mensaje</th>
    </tr>
  </thead>
  <!--Table head-->
  <!--Table body-->
  <tbody>
<?php 

$consulta = "SELECT * FROM contacto";
$ejecutar = mysqli_query($bd, $consulta);

while ($row = mysqli_fetch_assoc($ejecutar)) {
	
 ?>
    <tr>
      <th style="width: 10px;" scope="row"><?php echo $row['id'] ?></th>
      <td style="width: 200px;"><?php echo $row['nombre'] ?></td>
      <td style="width: 200px;"><?php echo $row['correo'] ?></td>
      <td style="width: 200px;"><?php echo $row['asunto'] ?></td>
      <td style="width: 900px"><?php echo $row['mensaje'] ?></td>
    </tr>
   
   <?php } ?>
  </tbody>
  <!--Table body-->
</table>
<!--Table-->





<?php include('footer.php'); ?>