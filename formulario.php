<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Flores</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="img/marco.png">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
</head>
<body>
	<div class="header">
		<div class="shape">
			<svg viewBox="0 0 1500 200">
				<path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024, -81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
			</svg>
		</div>
	</div>
	<header class="navegacion">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark  fixed-top text-uppercase pt-4">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img class="logo" src="marco.png" alt="Reino floral">
				</a>
				<h1>Reino floral</h1>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<section class="buttons">
					<a href="pags/mapa.html" class=" tres bi bi-geo-fill" data-bs-toggle="tooltip" title="Donde esncontrarlas"></a>
					<a href="pags/video.html" class="cuatro bi bi-youtube" data-bs-toggle="tooltip" title="Video"></a>
					<a href="index.html" class="bi bi-flower2" data-bs-toggle="tooltip" title="Inicio"></a>
				</section>
			</div>
		</nav>
	</header>
	<form method='POST' action='/php/enviar.php'>
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name='nombre' id="nombre" placeholder="nombre...">
		</div>
		<br>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" name='email' id="email" placeholder="email...">
		</div>
		<br>
		<label for="start">Fecha de nacimiento:</label>
		<br>
		<input type="date" id="start" name="trip" value="2018-07-22" min="1600-01-01" max="2018-12-31">
       	<br>
       	<br>
       	<select name="menu2">
       		<option>-</option>
  			<option>Masculino</option>
  			<option>Femenino</option>
		</select>

		<br>
		<br>

		<div class="form-group">
			<label for="exampleTextarea">Mensaje</label>
			<textarea class="form-control" name='mensaje' id="mensaje" rows="3"></textarea>
		</div>
		<br>
		<input type="checkbox" required> Acepto la política de privacidad.
		<br>
		<br>
		<button class="btn btn-primary" type="submit">Enviar</button>
	</form>
	<br>
	<br>
	<br>
</body>
</html>