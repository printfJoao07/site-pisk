<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }

    function cadastraLivro ($conexao, $id_autor, $titulo, $autor, $descricao, $posicaoAntiga, $posicaoNova){

        $sql = "INSERT INTO livros (id_autor, titulo, autor, descricao, estado, path_livro) VALUES (?, ?, ?, ?, 'e_edicao', ?)";
        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt){

            if (move_uploaded_file($posicaoAntiga, $posicaoNova)) {
                mysqli_stmt_bind_param($stmt, "issss", $id_autor, $titulo, $autor, $descricao, $posicaoNova);
                return mysqli_execute($stmt);

            } else {
                $_SESSION['mensagem'] = "Falha ao fazer upload do arquivo";

            }

        } else {
            $_SESSION['mensagem'] = "Livro não pode ser cadastrado! verifique a conexão";

        }

        return false;

    }

?>