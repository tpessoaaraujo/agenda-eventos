<?php

    include_once('php/config.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(name,email,password)
    VALUES ('$name','$email','$password')");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Metadados HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Agenda de eventos com Node e Javascript">
    <meta name="author" content="Thiago Pessoa Araujo">
    <!-- Título da aplicação -->
    <title>Cadastro - Minha Agenda</title>
    <!-- Conexões internas -->
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style_login_and_registration.css">
    <!-- Bootstrap 5.2.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid" style="height: 60%;">
        <header class="container">
            <h1>Faça seu cadastro</h1>
        </header>
        <main class="container">
                <div class="col-9 centered">
                    <form action="registration.php" method="POST" id="formLogin">
                        <div class="row">
                            <label for="name">Nome completo</label>
                            <input type="text" name="name" id="name" required>
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" required>
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" required>
                            <button type="submit" name="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </form>
                    <p><a href="index.php">Já tem cadastro?</a></p>
                </div>
        </main>
    </div>
</body>
</html>