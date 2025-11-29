<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }


    // Cadastro de usuário
    function cadastraUsuario ($conexao, $nome, $email, $senha, $funcao){

        $sqlConfere = "SELECT id FROM usuario WHERE email = ?";
        $stmtConfere = mysqli_prepare($conexao, $sqlConfere);

        if ($stmtConfere){
            mysqli_stmt_bind_param($stmtConfere, "s", $email);
            mysqli_stmt_execute($stmtConfere);

            $resultadoConfere = mysqli_stmt_get_result(stmtConfere);

            if ($resultadoConfere && mysqli_num_rows($resultadoConfere) > 0){
                $_SESSION['mensagem'] = "Email já cadastrado! Tente novamente com outro.";
                mysqli_stmt_close($stmtConfere);
                return false;

            }

            mysqli_stmt_close($stmtConfere);

        }


        // Incerção do usuário
        $sql = "INSERT INTO usuario (nome, email, senha, funcao) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt){
            mysqli_stmt_bind_param($stmt, "ssss", $nome, $email, password_hash($senha, PASSWORD_DEFAULT), $funcao);
            return mysqli_stmt_execute($stmt);

        }

        $_SESSION['mensagem'] = "Conta não pode ser criada, verifique a conexão.";
        return false;

    }


    // Login do usuário
    function logarUsuario ($conexao, $email){

        $sql = "SELECT * FROM usuario WHERE email = ?";
        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt){
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);

            $resultado = mysqli_stmt_get_result($stmt);
            $usuario = mysqli_fetch_assoc($resultado);
            mysqli_stmt_close($stmt);
            
            return $usuario;

        }

        return null;

    }

?>