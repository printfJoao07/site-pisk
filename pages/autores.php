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


        <h2 class="mb-4 text-center fw-bold" style="color:#3b2a7a;">Nossos Autores</h2>


        <div class="row g-4">


            <!-- Autor 1 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-60 border-0">
                    <img src="../images/fundadores/joao_gabriel.png" class="card-img-top img-fluid" alt="Foto do Autor" />
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color:#f1c40f;">João Gabriel</h5>
                        <h6 class="text-muted mb-3">Escritor de Ficção</h6>
                        <p class="fw-semibold mb-2 text-warning">Livros Publicado:</p>


                        <!-- Lista de livros -->
                        <ul class="list-group small">
                            <li class="list-group-item" style="background-color:#fff8d6; font-weight:650;">Dominância</li>
                        </ul>


                    </div>
                </div>
            </div>


            <!-- Autor 2 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="../images/fundadores/joao_eduardo.png" class="card-img-top img-fluid" alt="Foto do Autor" />
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color:#f1c40f;">João Eduardo</h5>
                        <h6 class="text-muted mb-3">Escritor de Ficção</h6>
                        <p class="fw-semibold mb-2 text-warning">Livro Publicado:</p>


                        <ul class="list-group small">
                            <li class="list-group-item" style="background-color:#fff8d6; font-weight:650;">Ápice</li>
                        </ul>


                    </div>
                </div>
            </div>


            <!-- Autor 3 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="../images/autores/icaro_salles.jpg" class="card-img-top img-fluid" alt="Foto do Autor" />
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color:#f1c40f;">Icaro de Salles</h5>
                        <h6 class="text-muted mb-3">Romancista</h6>
                        <p class="fw-semibold mb-2 text-warning">Livro Publicado:</p>


                        <ul class="list-group small">
                            <li class="list-group-item" style="background-color:#fff8d6; font-weight:650;">Poeira em Alto Mar</li>
                        </ul>


                    </div>
                </div>
            </div>

            <!-- Autor 4 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="../images/autores/vera_santiago.jpg" class="card-img-top img-fluid" alt="Foto do Autor" />
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color:#f1c40f;">Vera Santiago</h5>
                        <h6 class="text-muted mb-3">Escritora de Fantasia</h6>
                        <p class="fw-semibold mb-2 text-warning">Livro Publicado:</p>


                        <ul class="list-group small">
                            <li class="list-group-item" style="background-color:#fff8d6; font-weight:650;">O Cristal da Luz</li>
                        </ul>


                    </div>
                </div>
            </div>


            <!-- Autor 5 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="../images/autores/ronan_blake.jpg" class="card-img-top img-fluid" alt="Foto do Autor" />
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color:#f1c40f;">Ronan Blake</h5>
                        <h6 class="text-muted mb-3">Escritor de Fantasia e Ficção</h6>
                        <p class="fw-semibold mb-2 text-warning">Livro Publicado:</p>


                        <ul class="list-group small">
                            <li class="list-group-item" style="background-color:#fff8d6; font-weight:650;">Maré Submersa</li>
                        </ul>


                    </div>
                </div>
            </div>

            <!-- Autor 6 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="../images/autores/ana_petrova.jpg" class="card-img-top img-fluid" alt="Foto do Autor" />
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color:#f1c40f;">Ana Petrova</h5>
                        <h6 class="text-muted mb-3">Escritora de Ficção</h6>
                        <p class="fw-semibold mb-2 text-warning">Livro Publicado:</p>


                        <ul class="list-group small">
                            <li class="list-group-item" style="background-color:#fff8d6; font-weight:650;">Ferro de Kepler</li>
                        </ul>


                    </div>
                </div>
            </div>

            <!-- Autor 7 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="../images/autores/joao_barreto.jpg" class="card-img-top img-fluid" alt="Foto do Autor" />
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color:#f1c40f;">João Barreto</h5>
                        <h6 class="text-muted mb-3">Mestre em História</h6>
                        <p class="fw-semibold mb-2 text-warning">Livro Publicado:</p>


                        <ul class="list-group small">
                            <li class="list-group-item" style="background-color:#fff8d6; font-weight:650;">A rota do Ouro Negro</li>
                        </ul>


                    </div>
                </div>
            </div>

            <!-- Autor 8 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="../images/autores/monica_alves.jpg" class="card-img-top img-fluid" alt="Foto do Autor" />
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color:#f1c40f;">Monica Alves</h5>
                        <h6 class="text-muted mb-3">Doutora em Psicologia</h6>
                        <p class="fw-semibold mb-2 text-warning">Livro Publicado:</p>


                        <ul class="list-group small">
                            <li class="list-group-item" style="background-color:#fff8d6; font-weight:650;">O Poder da Pausa</li>
                        </ul>


                    </div>
                </div>
            </div>

            <!-- Autor 9 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="../images/autores/isabela_conti.jpg" class="card-img-top img-fluid" alt="Foto do Autor" />
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color:#f1c40f;">Isabela Conti</h5>
                        <h6 class="text-muted mb-3">Romancista</h6>
                        <p class="fw-semibold mb-2 text-warning">Livro Publicado:</p>


                        <ul class="list-group small">
                            <li class="list-group-item" style="background-color:#fff8d6; font-weight:650;">O Último Valsar</li>
                        </ul>


                    </div>
                </div>
            </div>

            <!-- Autor 10 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="../images/autores/arthur_lima.jpg" class="card-img-top img-fluid" alt="Foto do Autor" />
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color:#f1c40f;">Arthur de Lima</h5>
                        <h6 class="text-muted mb-3">Romancista</h6>
                        <p class="fw-semibold mb-2 text-warning">Livro Publicado:</p>


                        <ul class="list-group small">
                            <li class="list-group-item" style="background-color:#fff8d6; font-weight:650;">Cartas de Nova York</li>
                        </ul>


                    </div>
                </div>
            </div>

            <!-- Autor 11 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="../images/autores/elias_varga.jpg" class="card-img-top img-fluid" alt="Foto do Autor" />
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color:#f1c40f;">Elias Varga</h5>
                        <h6 class="text-muted mb-3">Escritor de Suspense</h6>
                        <p class="fw-semibold mb-2 text-warning">Livro Publicado:</p>


                        <ul class="list-group small">
                            <li class="list-group-item" style="background-color:#fff8d6; font-weight:650;">O Cronista Vazio</li>
                        </ul>


                    </div>
                </div>
            </div>

            <!-- Autor 12 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="../images/autores/gustavo_rocha.jpg" class="card-img-top img-fluid" alt="Foto do Autor" />
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color:#f1c40f;">Gustavo Rocha</h5>
                        <h6 class="text-muted mb-3">Romancista</h6>
                        <p class="fw-semibold mb-2 text-warning">Livro Publicados:</p>


                        <ul class="list-group small">
                            <li class="list-group-item" style="background-color:#fff8d6; font-weight:650;">Bordado Secreto</li>
                        </ul>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php require_once "../components/footer.php"; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>