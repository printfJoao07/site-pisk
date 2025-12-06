<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<nav class="navbar navbar-dark bg-dark navbar-expand-lg position-fixed vw-100">
    <div class="container-fluid ">

        <!-- Logo e nome da empresa como link para página inicial -->
        <div class="ps-xl-4 ps-lg-2 py-1 ">
            <a href="/site-pisk/index.php" class="nav navbar-brand" style="height: 60px">
                <img src="/site-pisk/images/logo_pisk.png" alt="Logo Pisk" width="auto" height="100%" >
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
              <a href="/site-pisk/pages/minha_estante.php" class="nav-link">Minha Estante</a>
            </li>

            <li class="nav-item">
              <a href="/site-pisk/pages/catalogo.php" class="nav-link">Descobrir</a>
            </li>

            <li class="nav-item">
              <a href="/site-pisk/pages/autores.php" class="nav-link">Nossos Autores</a>
            </li>

            <li class="nav-item">
              <a href="/site-pisk/pages/seja_um_autor.php" class="nav-link">Seja um Autor!</a>
            </li>

          </ul>

          <?php
            if (isset($_SESSION['usuario_id'])){
              ?>

                <button id="logado" type="button" class="btn">
                  <img src="/site-pisk/images/login_icons/user_icon2.png" alt="Usuário logado">
                </button>

                <div id="menu" class="inativo">
                  <a href="/site-pisk/database/logout.php"> <i class="bi bi-box-arrow-left"></i> Log out</a>
                </div>
              
              <?php

            } else {
              ?>
                  
                <form class="d-flex me-xl-4 me-lg-2 ms-auto" role="search">
                  <button class="btn btn-outline-warning me-2" type="button" >
                    <a href="/site-pisk/pages/login.php" class="nav-link">Entrar</a>
                  </button>

                  <button class="btn btn-warning" type="buttom">
                    <a href="/site-pisk/pages/cadastro.php" class="nav-link">Cadasre-se</a>
                  </button>
                </form>

              <?php

            } ?>

        </div>

    </div>
</nav>

<script>

  document.getElementById('logado').addEventListener('click', () => {
    let menu = document.querySelector('#menu')

    menu.classList.toggle('ativo')
  })

</script>

