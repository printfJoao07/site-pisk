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
    <link rel="stylesheet" type="text/css" href="css/carrossel.css">
    <link rel="stylesheet" type="text/css" href="css/scroll_behavior.css">

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
                <div class="subitem">
                    <h1 class="title">P<span>í</span>ncel</h1>
                    <p class="long-text">O que define sua obra não são as ferramentas, mas sim as suas ideias</p>
                </div>
            </div>

            <div id="item-carr-4" class="item-carrossel">
                <div class="subitem">
                    <h1 class="title">Lapí<span>s</span></h1>
                    <p class="long-text">Até o mais simples tem sua complexidade oculta</p>
                </div>
            </div>

            <div id="item-carr-5" class="item-carrossel">
                <div class="subitem">
                    <h1 class="title">Noteboo<span>k</span></h1>
                    <p class="long-text">Avançando no uso das ferramentas junto com a tecnologia</p>
                </div>
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
                            <img src="images/livros/poder_pausa.png" alt="Poeira em Auto Mar">

                            <div>
                                <p class="text">Isso é um teste</p>
                                <p class="long-text">R$ isso é um teste</p>
                                <a href="pages/catalogo.php" class="btn">Mais informações!</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/Cronista_Vazio.png" alt="Ápice">

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
                            <img src="images/livros/Ultimo_Valsar.png" alt="O Último Valsar">

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Pequeno anúncio sobre a Pisk -->
        <div class="col-xl-4 col-lg-12 anuncio-container">
            <div class="anuncio">
                <div>
                    <img src="images/logo_pisk.png" alt="Logo da Pisk">
                    <h1 class="title">Pisk</h1>
                </div>

                <p class="long-text">Embarque no mundo da leitura com a gente!</p>

                <img src="images/mulher_com_livro.png" alt="Anúncio">
                
            </div>
        </div>
    </section>

    <br><br><br>

    <!-- Informações iniciais sobre a Pisk -->
    <section class="info">
        <div class="info">
            <div>
                <h1 class="title">Sobre nós</h1>
                <h3 class="text">Afinal, o que é a Pisk? 🤨</h3>
                <p class="long-text">Somos uma editora, ainda recém fundada, mas com grandes objetivos 😁</p>
                <p class="long-text">Nossa principal missão é promover a cultura brasileira atravéz de livros que fujam do padrão conhecido e superem espectativas e esteriótipos 😯</p>
                <p class="long-text">Em primeiro lugar, queremos nos estabilizar no mercado, para sermos uma das principais fornecedoras de livros do país, para que você possa achar com a gente um livro que queira ler a qualquer momento 😉</p>
                <p class="long-text">Além disso, queremos ser uma grande organizadora de eventos literários e ainda editar bons livros, como uma verdadeira referência no mercado 🤩</p>
            </div>

            <img src="images/grupo_de_trabalho.jpg" alt="">

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
        <h2 class="ps-5 title">Alguns de nossos autores de destaque</h2>

        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/fundadores/joao_gabriel.png" alt="" class="autor">
            <p class="text"></p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/fundadores/joao_eduardo.png" alt="" class="autor">
            <p class="text"></p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/autores/icaro_salles.jpg" alt="" class="autor">
            <p class="text"></p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/autores/isabela_conti.jpg" alt="" class="autor">
            <p class="text"></p>
        </div>        

        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/autores/vera_santiago.jpg" alt="" class="autor">
            <p class="text"></p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/autores/ronan_blake.jpg" alt="" class="autor">
            <p class="text"></p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/autores/elias_varga.jpg" alt="" class="autor">
            <p class="text"></p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img src="images/autores/arthur_lima.jpg" alt="" class="autor">
            <p class="text"></p>
        </div>        
    </section>

    <br><br><br>
    
    <!-- Mais algumas informações sobre a Pisk -->
    <section class="info">
        <div class="info">
            <img src="images/pena_tinteiro.jpg" alt="">

            <div>
                <h1 class="title">Competições literárias</h1>
                <p class="long-text">Nós da Pisk pretendemos elaborar futuras competições literárias, com direito a premios 😁</p>
                <p class="long-text">Nossa primeira competição está sendo planejada para outubro de 2026. Nela teremos diversas modalidades, como poesias, romances e até mesmo musicas, para da um ritimo no evento 🤭</p>
                <p class="long-text">Então já é bom ir se preparando, fique de olho nas próximas informações, nos vemos em outubro de 2026 e que vença o póximo Machado de Assis 😼</p>
            </div>

        </div>
    </section>

    <br><br><br>

    <!-- Livros de algun(s) gênero(s) específico(s) -->
    <section class="row">

        <div class="col-xl-8 col-lg-12 px-5">

            <!-- Gênero 1 -->
            <div class="lista">
                <h3 class="title">
                    Ficção
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
                            <img src="images/livros/Ferro_Kepler.png" alt="Poeira em Auto Mar">

                            <div>
                                <p class="text">Isso é um teste</p>
                                <p class="long-text">R$ isso é um teste</p>
                                <a href="pages/catalogo.php" class="btn">Mais informações!</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/Mare_Submersa.jpg" alt="Ápice">

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
                    Romance
                    <a href="pages/catalogo.php" class="h5 text float-end">veja mais</a>
                </h3>


                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3  ">
                        <div class="">
                            <img src="images/livros/Ultimo_Valsar.png" alt="O Último Valsar">

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/Cartas_Ny.png" alt="Cartas de Nova York">

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/poeira_em_auto_mar.png" alt="Poeira em Auto Mar">

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="">
                            <img src="images/livros/bordado_secreto.png" alt="Bordado Secreto">

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Pequeno anúncio sobre a Pisk -->
        <div class="col-xl-4 col-lg-12 anuncio-container">
            <div class="anuncio">
                <div>
                    <img src="images/logo_pisk.png" alt="Logo da Pisk">
                    <h1 class="title">Pisk</h1>

                </div>

                <p class="long-text">Preparesse sua pena e tinteiro para outubro de 2026</p>

                <img src="images/livro_aberto.jpg" alt="Anúncio" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                
            </div>
        </div>

    </section>

    <?php require_once "components/footer.php"; ?>

    <script src="js/carrossel.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js.map"></script>
    <script src="js/scroll_behavior.js"></script>
</body>
</html>