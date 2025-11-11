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
    <title>Pisk</title>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style_pisk.css">

</head>
<body>

    <?php require "components/header.php"; ?>

    <main>
        <div>

            <div class="item-carrossel ativo">
                <img src="images/bibliotecas_carroceo1.jpg" alt="Biblioteca">
            </div>

            <div class="item-carrossel">
                <img src="images/Laranja.jpeg" alt="Biblioteca">
            </div>

            <div class="item-carrossel">
                <img src="images/logo_pisk.png" alt="Biblioteca">
            </div>

            <button id="voltar"><</button>
            <button id="proximo">></button>

        </div>
    </main>
    
    <br><br><br><br>random_bytesrb
    random_bytesrbrhb
    <br><br><br><br><br><br>bzerrno
    <br><br><br><br><br><br>random_bytesrb
    random_bytesrbrhb
    <br><br><br><br><br><br>bzerrno
    <br><br><br><br><br><br>random_bytesrb
    random_bytesrbrhb
    <br><br><br><br><br><br>bzerrno
    <br><br><br><br><br><br>random_bytesrb
    random_bytesrbrhb
    <br><br><br><br><br><br>bzerrno
    <br><br><br><br><br><br>random_bytesrb
    random_bytesrbrhb
    <br><br><br><br><br><br>bzerrno
    <br><br>

    <script src="js/carrossel.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>