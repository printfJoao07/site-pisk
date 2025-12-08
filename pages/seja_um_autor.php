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
    <title>Seja Um Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/autor.css">
    <link rel="stylesheet" type="text/css" href="../css/style_pisk.css">
    <link rel="stylesheet" type="text/css" href="../css/cadastro_livro.css">
    
    
</head>

<body>
    <?php include "../components/header.php"; ?>
        
    <div class="top-contact">
        <h1>Quer se tornar um Autor?</h1>
        <h4 class="mt-3">Fale com nossa equipe editorial:</h4>
        <a href="mailto:contato@sualivraria.com">atendimento@piskeditora.com.br</a>
        <p></p>
        <a href="tel:+5531999999999" style="color: #FFD700; font-weight: bold; font-size: 1.4rem;">(31) 99888-7777</a>       
    </div>

            <section id="forms">
                <form action="../database/funcoes_livro.php" method="POST" enctype="multipart/form-data">
                    <h2 class="text text-center">Cadastre o seu livro aqui</h2>

                    <br>
                    
                    <div>
                        <label for="titulo" class="long-text">Título</label>
                        <input type="text" name="titulo" id="titulo" placeholder="Digite o título do seu livro" maxlength="120" class="form-control" required />
                    </div>

                    <div>
                        <label for="autor" class="long-text">Autor</label>
                        <input type="text" name="autor" id="autor" placeholder="Digite o título do seu livro" maxlength="120" class="form-control" required />
                    </div>

                    <div>
                        <label for="descricao" class="long-text">Descrição</label>
                        <input type="text" name="descricao" id="descricao" placeholder="Digite a descrição do seu livro" maxlength="255" class="form-control" required />
                    </div>

                    <div>
                        <label for="arquivo" class="long-text">Adicione o arquivo com o conteúdo do seu livro aqui (.docx ou .pdf)</label>
                        <input type="file" name="arquivo" id="arquivo" class="form-control" required />
                    </div>

                    <button type="submit" name="cria_livro" class="btn text">Enviar</button>

                </form>
            </section>

    <div class="container py-5">

        <div class="big-info-box text-center">
            <h2 class="fw-bold mb-3">Como Funciona?</h2>
            <p class="fs-5">
                Você envia seu manuscrito, escolhe um plano de publicação e nossa equipe cuida do resto:
                revisão, capa, página do autor, divulgação e muito mais.
            </p>
        </div>

        

        <section class="mb-5">
            <h3 class="section-title mb-3 text-center">O que você precisa para começar?</h3>
            <ul class="fs-5 dark-purple text-center list-unstyled">
                <li>✔ Um manuscrito (mesmo em desenvolvimento)</li>
                <li>✔ E-mail válido para contato</li>
                <li>✔ Escolher um dos nossos planos abaixo</li>
                <li>✔ Estar de acordo com nossos termos editoriais</li>
            </ul>
        </section>

        <!-- Planos -->
        <h3 class="section-title text-center mb-4">Planos de Publicação</h3>

        <div class="row g-4">

            <!-- Plano Gratuito -->
            <div class="col-md-4">
                <div class="card card-plan p-3">
                    <h4 class="text-center dark-purple fw-bold">Plano Gratuito</h4>
                    <h1 class="text-center fw-bold">R$ 0</h1>
                    <ul class="mt-3 dark-purple">
                        <li>Publicação digital no site</li>
                        <li>Página de autor básica</li>
                        <li>Divulgação limitada</li>
                        <li>Suporte por e-mail</li>
                    </ul>
                    <div class="text-center mt-3">
                        <button class="btn btn-yellow">Começar</button>
                    </div>
                </div>
            </div>

            <!-- Plano Essencial -->
            <div class="col-md-4">
                <div class="card card-plan p-3">
                    <h4 class="text-center dark-purple fw-bold">Plano Essencial</h4>
                    <h1 class="text-center fw-bold">R$ 39,99</h1>
                    <ul class="mt-3 dark-purple">
                        <li>Publicação digital + física sob demanda</li>
                        <li>Divulgação nas nossas redes</li>
                        <li>Capa simples incluída</li>
                        <li>Relatórios mensais</li>
                    </ul>
                    <div class="text-center mt-3">
                        <button class="btn btn-yellow">Assinar</button>
                    </div>
                </div>
            </div>

            <!-- Plano Profissional -->
            <div class="col-md-4">
                <div class="card card-plan p-3">
                    <h4 class="text-center dark-purple fw-bold">Plano Profissional</h4>
                    <h1 class="text-center fw-bold">R$ 109,90</h1>
                    <ul class="mt-3 dark-purple">
                        <li>Capa profissional + revisão completa</li>
                        <li>Destaque na página inicial</li>
                        <li>Consultoria editorial mensal</li>
                        <li>Estatísticas avançadas</li>
                        <li>Campanha publicitária ampliada</li>
                    </ul>
                    <div class="text-center mt-3">
                        <button class="btn btn-yellow">Assinar</button>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php require_once "../components/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>