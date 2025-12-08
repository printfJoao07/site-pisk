<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página do Corretor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="../../css/style_pisk.css">

  <style>
    .sidebar {
      height: 100vh;
      width: 260px;
      background: linear-gradient(180deg, #681394, #4b0d6b);
      padding: 1.5rem 1rem;
      box-shadow: 2px 0 15px rgba(0,0,0,0.15);
    }

    .sidebar .navbar-brand {
      color: #ffe35e;
      font-weight: bold;
      font-size: 1.5rem;
      display: flex;
      align-items: center;
      margin-bottom: 2rem;
    }

    .sidebar .nav-link {
      color: #f8f9fa;
      font-size: 1.05rem;
      font-weight: 500;
      padding: 0.75rem 1rem;
      border-radius: 8px;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.3s ease-in-out;
    }

    .sidebar .nav-link:hover {
      background-color: rgba(255, 227, 94, 0.15);
      color: #ffe35e;
      transform: translateX(5px);
    }

    .sidebar .nav-link.active {
      background-color: #ffe35e;
      color: #681394;
      font-weight: bold;
    }

    .content {
      flex: 1;
      padding: 2rem;
      background-color: #ffffff;
      min-height: 100vh;
    }

    .content h1 {
      font-weight: 700;
      color: #343a40;
      margin-bottom: 1rem;
    }

    .content p {
      font-size: 1.1rem;
      color: #555;
    }
    .logo {
      height: 40px;   
      margin-right: 10px;  
      border-radius: 8px;  
    }

    @media (max-width: 768px) {
      .sidebar {
        width: 200px;
        padding: 1rem;
      }
      .sidebar .navbar-brand {
        font-size: 1.2rem;
      }
    }
  </style>
</head>
<body>

<?php require "../../components/header.php"; ?>

    <br><br><br>


  <div class="d-flex">
    <div class="sidebar d-flex flex-column">
      <a href="#" class="navbar-brand">
        <img src="../../images/logo_pisk.png" alt="Logo" class="logo">
        PISK EDITORA
      </a>
      <ul class="nav nav-pills flex-column mb-auto">
        <li>
          <a href="inicio.php" class="nav-link"><i class="bi bi-house-door"></i> Início</a>
        </li>
        <li class="nav-item">
          <a href="editor.php" class="nav-link"><i class="bi bi-journal-text"></i> Editor</a>
        </li>
        <li>
          <a href="revisor.php" class="nav-link active"><i class="bi bi-journal-check"></i> Revisor</a>
        </li>
      </ul>
    </div>

    <div class="content">
      <h1>Página do Corretor</h1>
      <p>Bem-vindo à área do corretor. Aqui você pode revisar e corrigir os textos.</p>
      <div class="card mt-4">
        <div class="card-header">
          Textos para Correção
        </div>
        <div class="card-body">
          <h5 class="card-title">Revisar Documentos</h5>
          <p class="card-text">Documentos para corrigir.</p>
          <a href="#" class="btn btn-primary" style="background-color: #681394; border-color: #681394;">Ver Documentos</a>
        </div>
      </div>
      <div class="card mt-4">
        <div class="card-header">
          Histórico de Correções
        </div>
        <div class="card-body">
          <h5 class="card-title">Meus Trabalhos</h5>
          <p class="card-text">Histórico do que você ja corrigiu.</p>
          <a href="#" class="btn btn-primary" style="background-color: #681394; border-color: #681394;">Ver Histórico</a>
        </div>
      </div>
    </div>
  </div>

    <?php require_once "../../components/footer.php"; ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>