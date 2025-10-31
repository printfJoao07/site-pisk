<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PISK Editora - Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=News+Cycle:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <style>
        body {
            background-image: url('/pisk/images/fundo.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .login-box {
            max-width: 400px;
            margin: auto;
            border-radius: 15px;
            overflow: hidden;
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
            font-family: 'News Cycle', sans-serif;
            font-weight: 700;
            font-size: 2rem;
            letter-spacing: 1px;
            margin-bottom: 5px;
            color: #ffe35e;
            margin-top: 0;
        }
        .subtitle {
            font-family: 'Montserrat', sans-serif;
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
        .header-logo {
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
                <img src="../images/logo-pisk.png" alt="Logo PISK Editora" class="header-logo" />
                <div>
                    <div class="logo-text">PISK EDITORA</div>
                    <div class="subtitle">Entre na sua conta</div>
                </div>
            </div>
            <div class="login-body">
                <form action="#" method="POST" novalidate>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text input-icon">
                                <img src="../images/icon1.jpg" alt="Ícone de E-mail" style="width: 2rem; height: 2rem;" />
                            </span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text input-icon">
                                <img src="../images/icon2.png" alt="Ícone de Senha" style="width: 2rem; height: 2rem;" />
                            </span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required />
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember" />
                        <label class="form-check-label" for="remember">Lembrar de mim</label>
                    </div>
                    <button type="submit" class="btn btn-login w-100 mb-3">ENTRE NA SUA CONTA</button>
                    <div class="footer-links text-center">
                        <a>Esqueceu a senha?</a>
                        <a href="cadastro.php">Criar conta</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
