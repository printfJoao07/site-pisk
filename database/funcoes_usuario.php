<?php
    ob_start();

    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }

    require_once 'conexao.php';
    require_once 'usuarioDAO.php';



    if (isset($_POST['cria_usuario'])){

        $nome = mysqli_real_escape_string($conexao, trim($_POST['username']));
        $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
        $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
        $confirmaSenha = mysqli_real_escape_string($conexao, trim($_POST['confirmPassword']));
        $funcao = isset($_POST['funcao'])? mysqli_real_escape_string($conexao, trim($_POST['funcao'])) : null;

        if ($senha == $confirmaSenha){
            $senha = mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha'])));
            if (cadastraUsuario($conexao, $nome, $email, $senha, $funcao)){
                $_SESSION['mensagem'] = "Conta criada com sucesso!";
                header("Location: http://localhost/site-pisk/pages/minha_estante.php");
                exit;
                return null;

            }

        }else{
            $_SESSION['mensagem'] = "As senhas digitadas são diferentes! Por favor, tente novamente.";
            
        }
        
        header("Location: http://localhost/site-pisk/pages/cadastro.php");
        exit;

    }



    if (isset($_POST['logar'])){

        $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
        $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

        $usuario = logarUsuario($conexao, $email);

        if ($usuario){
            if (password_verify($senha, $usuario['senha'])){
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];
                $_SESSION['usuario_funcao'] = $usuario['funcao'];
                
                $_SESSION['mensagem'] = "Login realizado com sucesso!";
                
                if ($usuario['funcao'] == "admin" || $usuario['funcao'] == "editor" || $usuario['funcao'] == "revisor" || $usuario['funcao'] == "designer"){
                    header("Location: http://localhost/site-pisk/pages/funcionarios/inicio.php");
                    exit;

                }

                header("Location: http://localhost/site-pisk/pages/minha_estante.php");
                exit;

            }else{
                $_SESSION['mensagem'] = "Senha digitada incorreta!";
                header("Location: http://localhost/site-pisk/pages/login.php");
                exit;

            }
        }
        
        $_SESSION['mensagem'] = "Usuário não encontrado!";
        header("Location: http://localhost/site-pisk/pages/login.php");
        exit;
        
    }

?>