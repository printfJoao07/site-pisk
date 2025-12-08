<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>

    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/style_pisk.css">

</head>
<body class="bg-light" style="padding-top: 80px;">

    <?php require "../components/header.php"; ?>

    <div class="container py-4">
    <div class="row mb-4 g-3 align-items-center">
      <div class="col-12 col-md-4">
        <div class="dropdown w-100">
          <button class="btn btn-warning text-dark w-100 dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Gêneros
          </button>
          <ul class="dropdown-menu w-100">
            <li><a class="dropdown-item" href="#">Ficção</a></li>
            <li><a class="dropdown-item" href="#">Fantasia</a></li>
            <li><a class="dropdown-item" href="#">Suspense</a></li>
            <li><a class="dropdown-item" href="#">Romance</a></li>
            <li><a class="dropdown-item" href="#">Não Ficção</a></li>
          </ul>
        </div>
      </div>

      <!-- Barra de Pesquisa -->
      <div class="col-12 col-md-8">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Pesquisar livros..." />
          <button class="btn btn-primary" style="background-color:#3b2a7a; border-color:#3b2a7a;">Buscar</button>
        </div>
      </div>
    </div>

    <!-- Grade de Livros -->
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
      <!-- Modelo de Livro -->
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="card h-100 shadow-sm border-0" style="background-color: #ffffff;">
          <img src="../images/livros/apice.png" class="card-img-top img-fluid" alt="Capa do Livro" />
          <div class="card-body">
            <h5 class="card-title text-dark">Ápice</h5>
            <h6 class="card-subtitle mb-2 text-muted">João Eduardo</h6>
            <button class="btn btn-warning w-100 mt-3 text-dark">Adicionar à estante</button>
            <button class="btn btn-warning w-100 mt-3 text-dark">Ver a Obra</button>
          </div>
        </div>
      </div>

      <!-- Livro 2 -->
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="card h-100 shadow-sm border-0" style="background-color: #ffffff;">
          <img src="../images/livros/dominancia.png" class="card-img-top img-fluid" alt="Capa do Livro" />
          <div class="card-body">
            <h5 class="card-title text-dark">Dominância</h5>
            <h6 class="card-subtitle mb-2 text-muted">João Gabriel</h6>
            <button class="btn btn-warning w-100 mt-3 text-dark">Adicionar à estante</button>
            <button class="btn btn-warning w-100 mt-3 text-dark">Ver a Obra</button>
          </div>
        </div>
      </div>

      <!-- Livro 3 -->
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="card h-100 shadow-sm border-0" style="background-color: #ffffff;">
          <img src="../images/livros/poeira_em_auto_mar.png" class="card-img-top img-fluid" alt="Capa do Livro" />
          <div class="card-body">
            <h5 class="card-title text-dark">Poeira em Alto Mar</h5>
            <h6 class="card-subtitle mb-2 text-muted">Icaro de Salles</h6>
            <button class="btn btn-warning w-100 mt-3 text-dark">Adicionar à estante</button>
            <button class="btn btn-warning w-100 mt-3 text-dark">Ver a Obra</button>
          </div>
        </div>
      </div>

      <!-- Livro 4 -->
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="card h-100 shadow-sm border-0" style="background-color: #ffffff;">
          <img src="../images/livros/Cristal_Luz.png" class="card-img-top img-fluid" alt="Capa do Livro" />
          <div class="card-body">
            <h5 class="card-title text-dark">O Cristal da Luz</h5>
            <h6 class="card-subtitle mb-2 text-muted">Vera Santiago</h6>
            <button class="btn btn-warning w-100 mt-3 text-dark">Adicionar à estante</button>
            <button class="btn btn-warning w-100 mt-3 text-dark">Ver a Obra</button>
          </div>
        </div>
      </div>

      <!-- Livro 5 -->
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="card h-100 shadow-sm border-0" style="background-color: #ffffff;">
          <img src="../images/livros/Mare_Submersa.jpg" class="card-img-top img-fluid" alt="Capa do Livro" />
          <div class="card-body">
            <h5 class="card-title text-dark">Maré Submersa</h5>
            <h6 class="card-subtitle mb-2 text-muted">Ronan Blake</h6>
            <button class="btn btn-warning w-100 mt-3 text-dark">Adicionar à estante</button>
            <button class="btn btn-warning w-100 mt-3 text-dark">Ver a Obra</button>
          </div>
        </div>
      </div>

      <!-- Livro 6 -->
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="card h-100 shadow-sm border-0" style="background-color: #ffffff;">
          <img src="../images/livros/Ferro_Kepler.png" class="card-img-top img-fluid" alt="Capa do Livro" />
          <div class="card-body">
            <h5 class="card-title text-dark">Ferro de Kepler</h5>
            <h6 class="card-subtitle mb-2 text-muted">Ana Petrova</h6>
            <button class="btn btn-warning w-100 mt-3 text-dark">Adicionar à estante</button>
            <button class="btn btn-warning w-100 mt-3 text-dark">Ver a Obra</button>
          </div>
        </div>
      </div>

      <!-- Livro 7 -->
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="card h-100 shadow-sm border-0" style="background-color: #ffffff;">
          <img src="../images/livros/Rota_Ouro.png" class="card-img-top img-fluid" alt="Capa do Livro" />
          <div class="card-body">
            <h5 class="card-title text-dark">A Rota do Ouro Negro</h5>
            <h6 class="card-subtitle mb-2 text-muted">João Barreto</h6>
            <button class="btn btn-warning w-100 mt-3 text-dark">Adicionar à estante</button>
            <button class="btn btn-warning w-100 mt-3 text-dark">Ver a Obra</button>
          </div>
        </div>
      </div>

      <!-- Livro 8 -->
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="card h-100 shadow-sm border-0" style="background-color: #ffffff;">
          <img src="../images/livros/poder_pausa.png" class="card-img-top img-fluid" alt="Capa do Livro" />
          <div class="card-body">
            <h5 class="card-title text-dark">O Poder da Pausa</h5>
            <h6 class="card-subtitle mb-2 text-muted">Monica Alves</h6>
            <button class="btn btn-warning w-100 mt-3 text-dark">Adicionar à estante</button>
            <button class="btn btn-warning w-100 mt-3 text-dark">Ver a Obra</button>
          </div>
        </div>
      </div>

      <!-- Livro 9 -->
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="card h-100 shadow-sm border-0" style="background-color: #ffffff;">
          <img src="../images/livros/Ultimo_Valsar.png" class="card-img-top img-fluid" alt="Capa do Livro" />
          <div class="card-body">
            <h5 class="card-title text-dark">O Ultimo Valsar</h5>
            <h6 class="card-subtitle mb-2 text-muted">Isabela Conti</h6>
            <button class="btn btn-warning w-100 mt-3 text-dark">Adicionar à estante</button>
            <button class="btn btn-warning w-100 mt-3 text-dark">Ver a Obra</button>
          </div>
        </div>
      </div>

      <!-- Livro 10 -->
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="card h-100 shadow-sm border-0" style="background-color: #ffffff;">
          <img src="../images/livros/Cartas_Ny.png" class="card-img-top img-fluid" alt="Capa do Livro" />
          <div class="card-body">
            <h5 class="card-title text-dark">Cartas de Nova York</h5>
            <h6 class="card-subtitle mb-2 text-muted">Arthur de Lima</h6>
            <button class="btn btn-warning w-100 mt-3 text-dark">Adicionar à estante</button>
            <button class="btn btn-warning w-100 mt-3 text-dark">Ver a Obra</button>
          </div>
        </div>
      </div>

      <!-- Livro 11 -->
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="card h-100 shadow-sm border-0" style="background-color: #ffffff;">
          <img src="../images/livros/Cronista_Vazio.png" class="card-img-top img-fluid" alt="Capa do Livro" />
          <div class="card-body">
            <h5 class="card-title text-dark">O Cronista Vazio</h5>
            <h6 class="card-subtitle mb-2 text-muted">Elias Varga</h6>
            <button class="btn btn-warning w-100 mt-3 text-dark">Adicionar à estante</button>
            <button class="btn btn-warning w-100 mt-3 text-dark">Ver a Obra</button>
          </div>
        </div>
      </div>
      
      <!-- Livro 12 -->
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="card h-100 shadow-sm border-0" style="background-color: #ffffff;">
          <img src="../images/livros/bordado_secreto.png" class="card-img-top img-fluid" alt="Capa do Livro" />
          <div class="card-body">
            <h5 class="card-title text-dark">Bordado Secreto</h5>
            <h6 class="card-subtitle mb-2 text-muted">Gustavo Rocha</h6>
            <button class="btn btn-warning w-100 mt-3 text-dark">Adicionar à estante</button>
            <button class="btn btn-warning w-100 mt-3 text-dark">Ver a Obra</button>
          </div>
        </div>
      </div>

  </div>
  </div>

    
  <?php require_once "../components/footer.php"; ?>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>