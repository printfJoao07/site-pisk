<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PISK Editora - Cadastro</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=News+Cycle:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../css/style_pisk.css">

    <style>
        body {
            background-image: url('../images/login_icons/fundo.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;

        }
        .login-box {
            max-width: 400px;
            margin: auto;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            background: linear-gradient(145deg, #ffffff, #f5f5f5);
            border: 1px solid rgba(0,0,0,0.05);
            max-height: 90vh;
            overflow-y: auto;
        }
        .login-header {
            background: linear-gradient(135deg, #343a40, #681394);
            color: white;
            padding: 20px 20px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }
        .logo-text {
            font-weight: 700;
            font-size: 2rem;
            letter-spacing: 1px;
            margin-bottom: 5px;
            color: #ffe35e;
        }
        .subtitle {
            font-weight: 500;
            font-size: 1rem;
            opacity: 0.9;
            width: 100%;
            margin-top: 5px;
        }
        .login-body {
            padding: 20px;
            background-color: white;
        }
        .form-control:focus {
            border-color: #6a5acd;
            box-shadow: 0 0 0 0.25rem rgba(106, 90, 205, 0.25);
        }
        .btn-login {
            background: linear-gradient(135deg, #efd87eff, #ffe35e);
            border: none;
            color: #343a40;
            font-weight: 600;
            padding: 12px;
            font-family: 'Montserrat', sans-serif;
        }
        .btn-login:hover {
            opacity: 0.9;
        }
        .input-icon {
            color: #6a5acd;
            background-color: #f8f9fa;
        }
        .footer-links a {
            color: #6a5acd;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .footer-links a:hover {
            color: #2a3f5f;
            text-decoration: underline;
        }
        .logo {
            display: block;
            box-sizing: border-box;
            width: 50px;
            height: 50px;
            object-fit: contain;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="login-header">
                <img src="../images/logo_pisk.png" alt="Logo PISK Editora" class="logo" />
                <div>
                    <div class="logo-text title">PISK EDITORA</div>
                    <div class="subtitle text">Crie sua conta</div>
                </div>
            </div>
            <div class="login-body">
                <form action="/pisk/database/cadastra-usuario.php" method="POST" novalidate>
                    <div class="mb-3">
                        <label for="username" class="form-label">Nome de Usuário</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text input-icon">
                                <img src="../images/login_icons/user_icon2.png" alt="Ícone de Usuário" style="width: 2rem; height: 2rem;" />
                            </span>
                            <input type="text" class="form-control" id="username" name="username" placeholder="seu nome" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text input-icon">
                                <img src="../images/login_icons/email_icon1.jpg" alt="Ícone de E-mail" style="width: 2rem; height: 2rem;" />
                            </span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text input-icon">
                                <img src="../images/login_icons/password_icon.png" alt="Ícone de Senha" style="width: 2rem; height: 2rem;" />
                            </span>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="••••••••" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirmar Senha</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text input-icon">
                                <img src="../images/login_icons/password_icon.png" alt="Ícone de Confirmar Senha" style="width: 2rem; height: 2rem;" />
                            </span>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="••••••••" required />
                        </div>
                    </div>
                    <button type="submit" name="cria-usuario" class="btn btn-login w-100 mb-3">CADASTRAR-SE</button>
                    <div class="footer-links text-center">
                        <div>Já tem uma conta? <a href="login.php" class="ms-1">Faça login</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
