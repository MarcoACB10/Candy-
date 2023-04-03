<?php
require_once('conexion.php');
$con = mysqli_connect($hostname_escuela2, $database_escuela2, $username_escuela2, $password_escuela2);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<form action="editar.php" method="post">
    <?php
    $query = "SELECT * FROM alumnos WHERE id = " . $_REQUEST['id'];
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>">
        <br>
        <label for="apellido">Apellidos:</label>
        <input type="text" name="apellido" id="apellido" value="<?php echo $row['apellido']; ?>">
        <br>
        <label for="edad">Edad:</label>
        <input type="text" name="edad" id="edad" value="<?php echo $row['edad']; ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
        <br>
        <input type="submit" value="Guardar" name="guardar">
        <?php
    }
    ?>
</form>
<?php
if ( isset( $_REQUEST['guardar'])) {
    $query = "UPDATE alumnos SET nombre='" . $_POST['nombre'] . "', apellido='" . $_POST['apellido'] . "', edad='" . $_POST['edad'] . "' WHERE id=" . $_REQUEST['id'];

    $result = mysqli_query($con, $query);
 
    if ($result) {
        echo "Registro editado correctamente";
      
        header('Location: index.php');
    } else {
        echo "Error al editar el registro";
    }
}

mysqli_close($con);
?>