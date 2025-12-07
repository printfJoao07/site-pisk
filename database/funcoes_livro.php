<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }

    require_once "conexao.php";
    require_once "livroDAO.php";

    if (isset($_POST['cria_livro'])){
        $autor = mysqli_real_escape_string($conexao, trim($_POST['autor']));
        $titulo = mysqli_real_escape_string($conexao, trim($_SESSION['titulo']));
        $descricao = mysqli_real_escape_string($conexao, trim($_SESSION['descricao']));
        
        $arquivo = $_FILES['arquivo'];

        if ($arquivo['error']){
            $_SESSION['mensagem'] = "Erro ao enviar arquivo! " . $arquivo['error'];

        } else {
            $extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));

            if ($extensao != "docx" && $extensao != "pdf") {
                $_SESSION['mensagem'] = "Extensão de arquivo inválida!";

            } else {
                $posisaoAntiga = $arquivo['tmp_name'];
                $posisaoNova = "../archives/livros/" . uniqid() . "." . $extensao;

                if (cadastraLivro($conexao, $_SESSION['usuario_id'], $titulo, $autor, $descricao, $posisaoAntiga, $posisaoNova)) {
                    $_SESSION['mensagem'] = "Livro cadastrado com sucesso!";

                } else {
                    $_SESSION['mensagem'] = "Falha no cadastro do livro!";

                }

            }
        }

        header("Location: ../pages/seja_um_autor.php");
        exit;

    }
?>