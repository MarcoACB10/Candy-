<?php
require_once('conexion.php');
$con = mysqli_connect($hostname_escuela2, $username_escuela2, $password_escuela2, $database_escuela2);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ( isset( $_REQUEST['id'])) {
  
    $query = "DELETE FROM alumnos WHERE id = " . $_REQUEST['id'];
   
    $result = mysqli_query($con, $query);
   
    if ($result) {
        echo "Registro borrado correctamente";
       
        header('Location: index.php');
    } else {
        echo "Error al borrar el registro";
    }
}

mysqli_close($con);
?>