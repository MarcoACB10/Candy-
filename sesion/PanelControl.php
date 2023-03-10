<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Panel Control</title>
</head>
<body>
<h2>La sesion creada correctamente</h2>
<p>
<?php
if(isset($_POST['nombre'])){
$_SESSION['nombre'] = $_POST['nombre'];
echo "Bienvenido! Has iniciado sesion como:<b> ".$_POST['nombre']."</b>";
}else{
if(isset($_SESSION['nombre'])){
echo "Has iniciado Sesion como: ".$_SESSION['nombre'];
}else{
// Si la sesion cerro o no se creo se mostrará: el mensaje
echo "Acceso Restringido";
}
}
?></p>
<br>
<p><a href="Login.php">Ir a la página inicial</a></p>
<br>
<p><a href='CerrarSesion.php'>Cerrar Sesion</a></p>
</body>
</html>