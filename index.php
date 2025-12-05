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
    <main id="carrossel">
        <div>

            <div id="item-carr-1" class="item-carrossel ativo " >
                
                <div class="subitem">
                    <div>
                        <img src="images/logo_pisk.png" alt="Logo da pisk" class="logo-carrossel" />
                    </div>
                    <h1 class="title">Bem vindo à Pisk</h1>
                </div>
            </div>

            <div id="item-carr-2" class="item-carrossel">
                <div class="subitem">
                    <div>
                        <h1 class="title"><span>P</span>ena</h1>
                        <p class="long-text">Voltando a literatura classica, assim como sua forma de escrita.</p>
                    </div>

                    <img src="images/index_carrossel/mesa_tinteiro.jpeg" alt="Mesa com tinteiro">
                </div>

            </div>

            <div id="item-carr-3" class="item-carrossel">
                <img src="images/logo_pisk.png" alt="Biblioteca">
            </div>

            <button class="btn " id="voltar"><span>←</span></button>
            <button class="btn " id="proximo"><span>→</span></button>

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
                            <img src="images/livros/apice.png" alt="Ápice" class="img-lista">

                            <div>
                                <p class="text">Isso é um teste</p>
                                <p class="long-text">R$ isso é um teste</p>
                                <a href="pages/catalogo.php" class="btn">Mais informações!</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/dominancia.png" alt="Dominância">

                            <div>
                                <p class="text">Isso é um teste</p>
                                <p class="long-text">R$ isso é um teste</p>
                                <a href="pages/catalogo.php" class="btn">Mais informações!</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/poeira_em_auto_mar.png" alt="Poeira em Auto Mar">

                            <div>
                                <p class="text">Isso é um teste</p>
                                <p class="long-text">R$ isso é um teste</p>
                                <a href="pages/catalogo.php" class="btn">Mais informações!</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/apice.png" alt="Ápice">

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
                            <img src="images/livros/apice.png" alt="Ápice">

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/dominancia.png" alt="Dominância">

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/poeira_em_auto_mar.png" alt="Poeira em Auto Mar">

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/apice.png" alt="Ápice">

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Pequeno anúncio sobre a Pisk -->
        <div class="col-xl-4 col-lg-12 anuncio-container">
            <div class="anuncio">
                
            </div>
        </div>
    </section>

    <br><br><br>

    <!-- Informações iniciais sobre a Pisk -->
    <section class="info">
        <div class="info">

        </div>
    </section>

    <br><br><br>

    <!-- Os fundadores da Pisk -->
    <section class="row fundadores">
        <h2 class="title">Fundadores da Pisk</h2>

        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/fundadores/joao_eduardo.png" alt="João Eduardo" class="fundador">
            <p class="text">João Eduardo</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/fundadores/joao_gabriel.png" alt="João Gabriel" class="fundador">
            <p class="text">João Gabriel</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/fundadores/kauan.png" alt="Kauan Bruno" class="fundador">
            <p class="text">Kauan Bruno</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/fundadores/lucas.png" alt="Lucas" class="fundador">
            <p class="text">Lucas</p>
        </div>
    </section>

    <br><br><br>

    <!-- Alguns autores de destaque da Pisk -->
    <section class="row autores">
        <h2 class="title">Alguns de nossos autores de destaque</h2>

        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/login_icons/user_icon1.png" alt="" class="autor">
            <p class="text"></p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/login_icons/user_icon2.png" alt="" class="autor">
            <p class="text"></p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/login_icons/user_icon3.png" alt="" class="autor">
            <p class="text"></p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/login_icons/user_icon1.png" alt="" class="autor">
            <p class="text"></p>
        </div>        

        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/login_icons/user_icon2.png" alt="" class="autor">
            <p class="text"></p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/login_icons/user_icon3.png" alt="" class="autor">
            <p class="text"></p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/login_icons/user_icon1.png" alt="" class="autor">
            <p class="text"></p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/login_icons/user_icon2.png" alt="" class="autor">
            <p class="text"></p>
        </div>        
    </section>
    
    <!-- Mais algumas informações sobre a Pisk -->
    <section class="info">
        <div class="info">

        </div>
    </section>

    <!-- Livros de algun(s) gênero(s) específico(s) -->
    <section class="row">

        <div class="col-xl-8 col-lg-12 px-5">

            <!-- Gênero 1 -->
            <div class="lista">
                <h3 class="title">
                    Gênero 1
                    <a href="pages/catalogo.php" class="h5 text float-end">veja mais</a>
                </h3>


                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3  ">
                        <div class="">
                            <img src="images/livros/apice.png" alt="Ápice" class="img-lista">

                            <div>
                                <p class="text">Isso é um teste</p>
                                <p class="long-text">R$ isso é um teste</p>
                                <a href="pages/catalogo.php" class="btn">Mais informações!</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/dominancia.png" alt="Dominância">

                            <div>
                                <p class="text">Isso é um teste</p>
                                <p class="long-text">R$ isso é um teste</p>
                                <a href="pages/catalogo.php" class="btn">Mais informações!</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/poeira_em_auto_mar.png" alt="Poeira em Auto Mar">

                            <div>
                                <p class="text">Isso é um teste</p>
                                <p class="long-text">R$ isso é um teste</p>
                                <a href="pages/catalogo.php" class="btn">Mais informações!</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/apice.png" alt="Ápice">

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

            <!-- Gênero 2 -->
            <div class="lista">
                <h3 class="title">
                    Gênero 2
                    <a href="pages/catalogo.php" class="h5 text float-end">veja mais</a>
                </h3>


                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3  ">
                        <div class="">
                            <img src="images/livros/apice.png" alt="Ápice">

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/dominancia.png" alt="Dominância">

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/poeira_em_auto_mar.png" alt="Poeira em Auto Mar">

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/apice.png" alt="Ápice">

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Pequeno anúncio sobre a Pisk -->
        <div class="col-xl-4 col-lg-12 anuncio-container">
            <div class="anuncio">
                
            </div>
        </div>

    </section>

    <?php require_once "components/footer.php"; ?>

    <script src="js/carrossel.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js.map"></script>
</body>
</html>