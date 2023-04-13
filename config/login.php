
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="Irenka Ferrusco Santillán">
    <link rel="icon" href="./img/marco.png">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@500&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

	    <header class="navegacion">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark  fixed-top text-uppercase pt-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img class="logo" src="../img/marco.png" alt="Reino floral">
                </a>
                <h1>Reino floral</h1>
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <section class="buttons">
                        <a href="pags/mapa.html" class=" tres bi bi-geo-fill" data-bs-toggle="tooltip"
                        title="Donde esncontrarlas"></a>
                        <a href="compras/index2.php" class=" bi bi-bag-heart-fill" data-bs-toggle="tooltip"
                        title="Tienda"></a>
                        <a href="../formulario.php" class="bi bi-card-text" data-bs-toggle="tooltip" title="Formulario"></a>
                    </section>
                </div>
            </div>
        </nav>
    </header>
<body>
          
          <section>
            <div class="form-box">
              <div class="form-value">
                <form  method="POST">
                  <h2>Inicio de seción</h2>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg>
                  <div class="inputbox">
                    <input type="text" class="form-control" id="ususario" name="usuario"required="true" maxlength="10" minlength="4">
                    <label for="">Usuario</label>
                  </div>
                  <div class="inputbox">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                      <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                    </svg>
                    <input type="Password" class="form-control"  id="password" name="password" required="true" maxlength="10" minlength="4">
                    <label for="">Contraseña</label>
                  </div>
                  <div class="forget">
                    <label for=""><input type="checkbox">
                    Recuerdamis datos</label>
                    <a href="#">¿Olvidaste tucontraseña?</a>
                  </div>
                  <button id="formulario">Entrar</button>
                  <div class="registrer">
                    <p>
                      ¿No tienes cuenta? Registrate 
                      <a href="#">
                        </a>
                      </p>
                  </div>
                </form>
            </div>
          </section>
          <br>
          <div id="alerta"></div>
<?php

?>


    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
          
</body>
</html>