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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/style_pisk.css">

</head>
<body>

        <?php 
        
        require "../components/header.php"; 
        
        if (isset($_SESSION['usuario_id'])){
        ?>

            <h1 class="text text-center">Seja um de nossos autores hoje mesmo!</h1>
            <h3 class="long-text text-center"><a href="#info" class="text-decoration-none text-center">Mais informações abaixo</a></h3>
            
            <section id="forms">
                <form action="../database/funcoes_livro.php" method="POST" enctype="multipart/form-data">
                    <h2 class="text text-center">Cadastre o seu livro aqui</h2>

                    <label for="titulo" class="long-text">Título</label>
                    <input type="text" name="titulo" id="titulo" placeholder="Digite o título do seu livro" class="form-control" required />

                    <label for="descricao" class="long-text">Descrição</label>
                    <input type="text" name="descricao" id="descricao" placeholder="Digite a descrição do seu livro" class="form-control" required height="60px" />

                    <label for="arquivo" class="long-text">Adicione o arquivo com o conteúdo do seu livro aqui</label>
                    <input type="file" name="arquivo" id="arquivo" class="form-control" required />

                </form>
            </section>

        <?php
        } else {
        ?>
            <br><br><br><br><br><br><br>
            <h1 class="text text-center">Ops! Parece que você não esta logado!</h1>
            <p class="long-text fs-5 text-center"><a href="login.php">Faça login!</a></p>
            <p class="long-text fs-5 text-center">ou</p>
            <p class="long-text fs-5 text-center"><a href="cadastro.php">Crie uma conta!</a></p>

        <?php            
        } ?>



    

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>