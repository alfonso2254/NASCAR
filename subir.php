<?php 
require 'head.php';
?>

<div class="container">
	<div class="row">
		<div class="md-6" >
		<form class="md-form" action="controller/subir_perfil.php" method="POST"  enctype="multipart/form-data">
		  <div class="file-field" >
		    <div class="mb-4">
		      <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
		        class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar" style="width: 300px; height: 300px;" >
		    </div>
		    <div class="file-upload-errors-container">
		     <div class="file-upload-wrapper">
  <input type="file" id="input-file-max-fs" class="file_upload" />
</div>
		    </div>
		  </div>
		  <input type="submit" class="btn btn-success" value="Subir"></input>
		</form>	
		</div>
	</div>
</div>

<div class="file-upload-wrapper">
  <input type="file" id="input-file-max-fs" class="file-upload" data-max-file-size="2M" />
</div>




<?php
require 'footer.php';
 ?>