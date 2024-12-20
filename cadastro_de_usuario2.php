<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../index.html">Inicio </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastro_da_agenda.php">Cadastrar Agendamento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Agendamento/listar_agendamentos.html">Listar Agendamentos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Usuario/cadastrar_usuario.html">Cadastrar Usuario</a>
      </li>
    </ul>
  </div>
</nav>

<body>

<div class="container mt-3">
  <h2>Cadastro de Usuario</h2>
  <form action="/action_page.php">
    
    <div class="mb-3 mt-3">
      <label for="email">Nome:</label>
      <input type="text" class="form-control" id="nome_usuario" placeholder="Digite aqui..." name="nome_usuario">
    </div>

    <div class="mb-3">
        <label for="pwd">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Digite aqui..." name="email">
      </div>

      <div class="mb-3">
        <label for="pwd">Data de Nascimento:</label>
        <input type="date" class="form-control" id="data_de_nascimento" placeholder="Digite aqui..." name="data_de_nascimento">
      </div>

    <div class="mb-3">
      <label for="pwd">Grupo:</label>
      <select class="form-select" id="sel1" name="grupo">
        <option value="1">Administrador</option>
        <option value="2">Barbeiro</option>
        <option value="3">Cliente</option>
      </select>
    </div>

    <div class="mb-3">
        <label for="pwd">Número do Banco:</label>
        <select class="form-select" id="sel1" name="numero_do_banco">
            <option>Itau</option>
            <option>Nubank</option>
            <option>Bradesco</option>
          </select>
      </div>

      <div class="mb-3">
        <label for="pwd">Número da Agência:</label>
        <input type="input" class="form-control" id="numero_agencia" placeholder="Digite aqui..." name="numero_agencia">
      </div>
      <div class="mb-3">
        <label for="pwd">Número da Conta:</label>
        <input type="input" class="form-control" id="numero_conta" placeholder="Digite aqui..." name="numero_conta">
      </div>
      <div class="mb-3">
        <label for="pwd">Chave Pix:</label>
        <input type="input" class="form-control" id="chave_pix" placeholder="Digite aqui..." name="chave_pix">
      </div>
    <div class="form-check mb-3">
       </div>
    <button type="submit" class="btn btn-dark">Cadastrar</button>
  </form>
</div>

</body>
</html>
