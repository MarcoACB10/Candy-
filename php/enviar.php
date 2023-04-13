<?php
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$trip = $_POST['trip'];
	$menu2 = $_POST['menu2'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."\n Email: $email\n Mensaje:".$_POST['mensaje'];
   
	if(mail('iferrusco931394@itla.mx', $asunto, $mensaje)){
		echo "Correo enviado";
	}
?>