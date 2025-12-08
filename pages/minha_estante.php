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
    <title>Minha Estante</title>

    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style_pisk.css">
    <link rel="stylesheet" type="text/css" href="../css/minha_estante.css">

</head>
<body>

    <?php require "../components/header.php"; ?>

    <section id="usuario">
        <img src="../images/login_icons/user_icon2.png" alt="Icone de Usuário">
        <h1 class="text"><?= $_SESSION['usuario_nome']; ?></h1>

    </section>

    <section id="livros-salvos">
        <div class="cabecalho">
            <h3 class="title">Livros salvos</h1>
        </div>
        
        <?php require_once "../components/listar_livros_salvos.php"; ?>
        
    </section>

    <?php require_once "../components/footer.php"; ?>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>