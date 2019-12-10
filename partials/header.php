<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">
        <img src="img/tesla.svg" style="width: 6.25rem; height: 1rem;">
    </a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-md-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faq.php">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listado.php">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="perfil.php">Usuario</a>
            </li>
            <?php if(!isset($_SESSION['email'])): ?>
                <a class="nav-link" href="registro.php">Registro</a>
                <a class="nav-link" href="login.php">Login</a>
                <?php endif; ?>
                <?php if(isset($_SESSION['email'])): ?>
                <a class="nav-link" href="logout.php">Log out</a>
                <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="#">Carrito</a>
            </li>
        </ul>
    </div>
</nav>