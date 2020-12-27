<!DOCTYPE html>
<html lang="es">
<?php 
	include 'template/cabecera-head.php';
?>
<body>
	<form method="POST" action="">
		<div class="container pt-4">
			<div class="card border-dark mb-3" style="width: 18rem;">
				<div class="card-header text-center">
					LOGIN
				</div>

				<div class="card-body">
					<div class="form-group">
	    				<label for="inpUsuario">Usuario/Correo</label>
    					<input type="text" class="form-control form-control-sm" name="txtUsuario" id="inpUsuario" placeholder="&#128100; Usuario/Correo" autocomplete="off">	
	 	 			</div>
	 	 			<div class="form-group">
    					<label for="inpClave">Contrase&ntilde;a</label>
    					<input type="text" class="form-control form-control-sm" name="txtClave" id="inpClave" placeholder="&#128274; Contrase&ntilde;a" autocomplete="off">	
	 	 			</div>
				</div>

				<div class="card-footer">
					<button type="submit" class="btn btn-primary btn-block btn-sm">
						<i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;INGRESAR
					</button>
				</div>
			</div>
		</div>
	</form>
	

	<?php 
		include 'template/code-js.php'; 
	?>
</body>
</html>