<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
  <title>Tesla</title>
  <!-- <link rel="stylesheet" href="css/debug.css"> -->
  <link rel="stylesheet" href="css/helpers.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="hero">
    <div class="container-fluid ">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">
          <img src="img/tesla.svg" style="width: 6.25rem; height: 1rem;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarNav">
          <ul class="navbar-nav desktop">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.php">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listado.php">Productos</a>
            </li>
          </ul>
          <ul class="navbar-nav desktop">
            <li class="nav-item">
              <a class="nav-link" href="perfil.php">Usuario<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#carritoModal">Carrito</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div>
        <h1>Perfil</h1>
    </div>
    <!-- Login Modal -->
    <div class="modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenteredLabel">Login</h5>

          </div>
          <div class="modal-body">
            <input class="form-control" type="text" placeholder="Email">
            <input class="form-control mt-2" type="text" placeholder="Contraseña">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Loguearse</button>
            <p class="" data-toggle="modal" data-target="#registroModal">Crear Cuenta</p>
          </div>
        </div>
      </div>
    </div><!-- Login Modal -->
    <!-- Registro Modal -->
    <div class="modal" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenteredLabel">Registro</h5>

          </div>
          <div class="modal-body">
            <input class="form-control" type="text" placeholder="Nombre">
            <input class="form-control mt-2" type="text" placeholder="Apellido">
            <input class="form-control mt-2" type="text" placeholder="Direccion">
            <input class="form-control mt-2" type="text" placeholder="Telefono">
            <input class="form-control mt-2" type="text" placeholder="Email">
            <input class="form-control mt-2" type="text" placeholder="Contraseña">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Registrarse</button>
          </div>
        </div>
      </div>
    </div><!-- Registro Modal -->

    <!-- Carrito Modal -->
    <div class="modal" id="carritoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title d-flex justify-content-center" id="exampleModalCenteredLabel">Carrito</h5>

          </div>
          <div class="modal-body">
            <h1>Carrito</h1>
          </div>
        </div>
      </div>
    </div><!-- Carrito Modal -->  
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>

</html>