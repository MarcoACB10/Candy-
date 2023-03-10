<?php
// Mostrar sesión
session_start();
//Cerrar sesión
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Cerrar Sesion</title>
</head>
<p><input type="submit" value="Iniciar session" /></p>
<p><a href="index.php.">Ir al index</a></p>
<body>
<h2>Has Cerrado Sesion correctamente</h2>
<br/>
<h2>Hasta pronto!</h2>
<p><a href="Login.php">Ir al Login</a></p>
</body>
</html>