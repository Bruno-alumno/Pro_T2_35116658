<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand me-auto barra" href="<?php echo base_url ('principal')?>">
        <!-- logo de la empresa -->
    <img src="<?php echo base_url ('assets/img/logo.jpg')?>" alt="logo" width="75" height="30" class="img-fluid"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca_de">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registrarse">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="Buscar">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
</html>