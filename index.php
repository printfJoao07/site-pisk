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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="css/style_pisk.css">
    <link rel="stylesheet" type="text/css" href="css/index_style.css">

</head>
<body>

    <?php require "components/header.php"; ?>

    <!-- Carrossel inicial da página -->
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

            <button class="btn btn-outline-warning rounded-circle " id="voltar"><span>←</span></button>
            <button class="btn btn-outline-warning rounded-circle " id="proximo"><span>→</span></button>

        </div>
    </main>

    <!-- Listagem de livros (últimos lançamentos e bestsellers) e anúncio da Pisk -->
    <section class="row">
        <div class="col-xl-8 col-lg-12 px-5">

            <!-- Ultimos lançamentos -->
            <div class="lista">
                <h3 class="title">
                    Últimos Lançamentos
                    <a href="pages/catalogo.php" class="h5 text float-end">veja mais</a>
                </h3>


                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3  ">
                        <div class="">
                            <img src="images/apice.png" alt="Ápice" class="img-lista">

                            <div>
                                <p class="text">Isso é um teste</p>
                                <p class="long-text">R$ isso é um teste</p>
                                <a href="pages/catalogo.php" class="btn">Mais informações!</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/dominancia.png" alt="Dominância">

                            <div>
                                <p class="text">Isso é um teste</p>
                                <p class="long-text">R$ isso é um teste</p>
                                <a href="pages/catalogo.php" class="btn">Mais informações!</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/poeira_em_auto_mar.png" alt="Poeira em Auto Mar">

                            <div>
                                <p class="text">Isso é um teste</p>
                                <p class="long-text">R$ isso é um teste</p>
                                <a href="pages/catalogo.php" class="btn">Mais informações!</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/apice.png" alt="Ápice">

                            <div>
                                <p class="text">Isso é um teste</p>
                                <p class="long-text">R$ isso é um teste</p>
                                <a href="pages/catalogo.php" class="btn">Mais informações!</a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <br>

            <!-- Bestsellers -->
            <div class="lista">
                <h3 class="title">
                    Bestsellers
                    <a href="pages/catalogo.php" class="h5 text float-end">veja mais</a>
                </h3>


                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3  ">
                        <div class="">
                            <img src="images/apice.png" alt="Ápice">

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/dominancia.png" alt="Dominância">

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/poeira_em_auto_mar.png" alt="Poeira em Auto Mar">

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/apice.png" alt="Ápice">

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="col-xl-4 col-lg-12 anuncio-container">
            <div class="anuncio">
                
            </div>
        </div>
    </section>

    <br><br><br>

    <section class="info">
        <div class="info">

        </div>
    </section>

    <br><br><br>

    <section class="fundadores">
        <h2 class="title">Fundadores da Pisk</h2>

        <div>
            <img src="images/fundadores/joao_eduardo.png" alt="João Eduardo" class="fundador">
            <img src="images/fundadores/joao_gabriel.png" alt="João Gabriel" class="fundador">
            <img src="images/fundadores/kauan.png" alt="Kauan Bruno" class="fundador">
            <img src="images/fundadores/lucas.png" alt="Lucas" class="fundador">
        </div>
    </section>
    
    

    <script src="js/carrossel.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js.map"></script>
</body>
</html>