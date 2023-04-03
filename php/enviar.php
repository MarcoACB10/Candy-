<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = 'Formulario Rellenado';
$mensaje = "Nombre: ".$nombre."<br> mcortes514703@itla.mx: $email<br> Mensaje:".$_POST['mensaje'];

if(mail('tuEmail', $asunto, $mensaje)){
echo "Correo enviado";

}

?>