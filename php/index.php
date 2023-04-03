<?php
require_once('conexion.php');
$con = mysqli_connect($hostname_ejemplosesion, $database_ejemplosesion, $username_ejemplosesion, $password_ejemplosesion);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<form action="index.php" method="post">
    <?php
    $query = "SELECT * FROM inicio WHERE id = " . $_REQUEST['id'];
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>">
        <br>
        <label for="id">Id:</label>
        <input type="text" name="id" id="id" value="<?php echo $row['id']; ?>">
        <br>
        <input type="submit" value="Guardar" name="guardar">
        <?php
    }
    ?>
</form>
<?php
if ( isset( $_REQUEST['guardar'])) {
    $query = "UPDATE ejemplosesion SET nombre='" . $_POST['nombre'] . "', id='" . $_POST['id'] . "',WHERE id=" . $_REQUEST['id'];

    $result = mysqli_query($con, $query);
 
    if ($result) {
        echo "Registro  correctamente";
      
        header('Location: index.php');
    } else {
        echo "Error al  registro";
    }
}

mysqli_close($con);
?>