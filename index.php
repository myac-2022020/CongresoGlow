<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Congreso Glow - Jovenes Macedonia</title>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Permanent+Marker&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="LogoJovenes.png">
</head>
<body style="background-color: #FFBE2F;">
	<div class="caja">
		<h1 class="titulo">REGISTRATE PARA EL CONGRESO</h1>
		<div class="cajaDatos">
			<form method="POST">
				<label class="textoIndicador">Ingresa Tu Nombre</label>
				<input type="text" name="nombre" class="cajaTexto" placeholder="Nombre Completo">
				<label class="textoIndicador">Ingresa Tu Código De Pulsera</label>
				<input type="text" name="codigoPulsera" class="cajaTexto" placeholder="Código De Pulsera">
				<label class="textoIndicador">Ingresa Un Correo De Contacto</label>
				<input type="email" name="email" class="cajaTexto" placeholder="Email">
				<label class="textoIndicador">Ingresa Un Número De Teléfono</label>
				<input type="text" name="telefono" class="cajaTexto" placeholder="Teléfono">
				<br>
				<br>
				<input type="submit" name="Enviar" class="enviarDatos">
			</form>
			<?php 
				include("registrar.php");
			?>
		</div>
	</div>
</body>
</html>
