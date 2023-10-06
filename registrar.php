<?php 
	include("con_db.php");

	if (isset($_POST['Enviar'])) {
		if (strlen($_POST['nombre']) >= 1 &&
			strlen($_POST['codigoPulsera'])  >= 1 &&
			strlen($_POST['email']) >= 1 &&
			strlen($_POST['telefono']) >= 1) {
				$nombre = ($_POST['nombre']);
				$codigoPulsera = ($_POST['codigoPulsera']);
				$email = ($_POST['email']);
				$telefono = ($_POST['telefono']);
				$consulta = "INSERT INTO `datosinvitado`(nombreInvitado, codigoPulsera, emailInvitado, numeroInvitado) VALUES ('$nombre','$codigoPulsera','$email','$telefono')";
				$resultado = mysqli_query($conex,$consulta);
				if ($resultado) {
					?>
					<h3 class="ok">Tus datos han sido enviados correctamente</h3>
					<?php
				}else{
					?>
					<h3 class="bad">Ups, ha ocurrido un error</h3>
					<?php
				}
		}else{
			?>
				<h3 class="bad">Por favor, completa los campos</h3>
			<?php
		}
	}
?>
