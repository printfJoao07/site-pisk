<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
?>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg position-fixed vw-100">
    <div class="container-fluid ">

        <!-- Logo e nome da empresa como link para página inicial -->
        <div class="ps-xl-4 ps-lg-2 py-1 ">
            <a href="../site-pisk/index.php" class="nav navbar-brand"
            style="height: 50px">
                <img src="../site-pisk/images/logo_pisk.png" alt="Logo Pisk" width="auto" height="95%" >
                <h1 class="ms-xl-2 ms-lg-0 title">Pisk Editora</h1>
            </a>
        </div>

        <!-- Botão do menu (modelo hamburguer) -->
        <button 
          type="button" 
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu de opções/navegação e botões de cadastro e login -->
        <div class="collapse navbar-collapse  ms-xl-5 mx-lg-0 text" id="navbarSupportedContent">

          <!-- Links de navegação -->
          <ul class="navbar-nav mb-3 mb-lg-1">

            <li class="nav-item">
              <a href="../site-pisk/pages/minha_estante.php" class="nav-link">Minha Estante</a>
            </li>

            <li class="nav-item">
              <a href="../site-pisk/pages/catalogo.php" class="nav-link dropdown">Descobrir</a>
            </li>

            <li class="nav-item">
              <a href="../site-pisk/pages/autores.php" class="nav-link">Nossos Autores</a>
            </li>

            <li class="nav-item">
              <a href="../site-pisk/pages/seja_um_autor.php" class="nav-link">Seja um Autor!</a>
            </li>

          </ul>

          <form class="d-flex me-xl-4 me-lg-2 ms-auto" role="search">
            <button class="btn btn-outline-warning me-2" type="button" >
              <a href="../site-pisk/pages/login.php" class="nav-link">Entrar</a>
            </button>

            <button class="btn btn-warning" type="buttom">
              <a href="../site-pisk/pages/cadastro.php" class="nav-link">Cadasre-se</a>
            </button>
          </form>

        </div>

    </div>
</nav>

<!-- <nav class="navbar navbar-expand-lg bg-violet" data-bs-theme="dark">
  <div class="container-fluid ">

    <a class="navbar-brand w-25" href="../site-pisk/">
      <img src="../site-pisk/images/logo-pisk.png" alt="Logo Pisk" class="img-fluid me-4 ms-4" style="width: 60px; height: 60px" />
      <span class="h1 text-golden">
        Pisk Editora
      </span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Minha Estante</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Descobrir
          </a>
          <ul class="dropdown-menu bg-violet">
            <li><a class="dropdown-item" href="#">Romances</a></li>
            <li><a class="dropdown-item" href="#">Ficção e Ficção Científica</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Catálogo Completo</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Autores</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../site-pisk/pages/pagina-do-autor.php">Página do Autor</a>
        </li>
      </ul>

      <form class="d-flex me-4" role="search">
        <button class="btn btn-outline-warning me-2" type="button" >
          <a href="../site-pisk/pages/login.php" class="nav-link">Entrar</a>
        </button>

        <button class="btn btn-warning" type="nuttom">
          <a href="../site-pisk/pages/cadastro.php" class="nav-link">Cadasre-se</a>
        </button>

      </form>

    </div>
  </div>
</nav> -->