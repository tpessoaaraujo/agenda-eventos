<?php
  session_start();
  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('Location: index.php');
  } else {
    $login = $_SESSION['email'];
  }
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
    <title>Minha Agenda</title>
    <!-- Conexões internas -->
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style_agenda.css">
    <script src="js/script.js" defer></script>
    <!-- Bootstrap 5.2.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <header class="container">
          <div class="row">
            <h1 class="col-10">Minha Agenda</h1>
            <a href="/php/logout.php" class="col-1 btn btn-danger" id="logout" style="height: 35px; margin: 8px">Sair</a>
          </div>
        </header>
        <main>
            <div class="row col-6 border rounded d-none" id="novoEvento">
                <div class="col-12">
                  <form action="agenda.php" method="POST" id="formNovoEvento">
                    <div class="row">
                      <div class="col-12">
                        <h2>Novo Evento</h2>
                      </div>
                    </div>
                    <div class="row g-3">
                      <div class="col-12">
                        <label for="nomeEvento" class="form-label">Nome do Evento</label>
                        <input type="text" name="nomeEvento" id="nomeEvento" class="form-control">
                      </div>
                      <div class="col-12">
                        <label for="dataEvento" class="form-label">Data do Evento</label>
                        <input type="date" name="dataEvento" id="dataEvento" class="form-control">
                      </div>
                      <div class="col-6">
                        <label for="horaInicio" class="form-label">Hora de Início</label>
                        <input type="time" name="horaInicio" id="horaInicio" class="form-control">
                      </div>
                      <div class="col-6">
                        <label for="horaTermino" class="form-label">Hora de término</label>
                        <input type="time" name="horaTermino" id="horaTermino" class="form-control">
                      </div>
                      <div class="col-6"><button type="button" class="btn btn-danger w-100" id="btnCancelarNovoEvento">Cancelar</button></div>
                      <div class="col-6"><button type="submit" name="submit" class="btn btn-success w-100">Salvar</button></div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row my-2 mx-5 py-2">
                <div class="col">
                  <h2>
                    Eventos
                  </h2>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-primary" id="btnNovoEvento">Novo Evento</button>
                </div>
              </div>
              <div class="row my-2 mx-5 py-2">
                <div class="col-12">
                  <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Início</th>
                            <th scope="col">Término</th>
                            <th scope="col">Evento</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="tabelaEventos">
                      
                    </tbody>
                  </table>
                </div>
              </div>
        </main>
        <footer>

        </footer>
    </div>
</body>
</html>