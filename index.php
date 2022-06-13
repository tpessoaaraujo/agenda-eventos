<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Metadados HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Agenda de eventos com Node e Javascript">
    <meta name="author" content="Thiago Pessoa Araujo">
    <!-- Título da aplicação -->
    <title>Login - Minha Agenda</title>
    <!-- Conexões internas -->
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../agenda-eventos/css/style_login_and_registration.css">
    <!-- Bootstrap 5.2.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <header class="container">
            <h1>Faça login para continuar</h1>
        </header>
        <main class="container">
                <div class="col-9 centered">
                    <form action="../agenda-eventos/php/login.php" method="POST" id="formLogin">
                        <div class="row">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" required>
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" required>
                            <button type="submit" name="submit" class="btn btn-success">Entrar</button>
                        </div>
                    </form>
                    <p><a href="registration.php">Ainda não é cadastrado?</a></p>
                </div>
        </main>
    </div>
</body>
</html>