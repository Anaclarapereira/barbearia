<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cadastro de Usuários</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../Agenda/index.php">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Usuario/index.php">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Agendamento/index.php">Agendamentos</a>
                </li>
               
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        <?php

        if(isset($_GET['status'])){
            echo '
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Success!</strong> This alert box could indicate a successful or positive action.
                </div>
  ';
        }
        ?>
        <h2>Cadastrar Usuário</h2>
        <form action="cadastrar_usuario.php" method="post">


            <div class="mb-3 mt-3">
                <label for="email">Grupo do Usuário:</label>
                <select class="form-select" name="id_grupo">
                    <option>Selecione o grupo do usuário</option>
                    <option value="1">Admin</option>
                    <option value="2">Barbeiro</option>
                    <option value="3">Cliente</option>
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label for="email">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome do usuário" name="nome">
            </div>

            <div class="mb-3 mt-3">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" placeholder="Digite o e-mail do usuário"
                    name="email">
            </div>


            <div class="mb-3 mt-3">
                <label for="email">Data de Nascimento:</label>
                <input type="text" class="form-control" id="data_de_nascimento" placeholder=""
                    name="data_de_nascimento">
            </div>

            <div class="mb-3 mt-3">
                <label for="email">Nome do Banco:</label>
                <select class="form-select" name="nome_do_banco">
                    <option>Selecione um banco</option>
                    <option value="Nubank" selected>Nubank</option>
                </select>
            </div>


            <div class="mb-3 mt-3">
                <label for="email">Número da Agência:</label>
                <input type="text" class="form-control" id="numero_agencia"
                    placeholder="Digite o número da agência do barbeiro" name="numero_agencia">
            </div>

            <div class="mb-3 mt-3">
                <label for="email">Número do Conta:</label>
                <input type="text" class="form-control" id="numero_conta"
                    placeholder="Digite o número da conta do barbeiro" name="numero_conta">
            </div>

            <div class="mb-3 mt-3">
                <label for="email">Chave Pix:</label>
                <input type="text" class="form-control" id="chave_pix" placeholder="Digite a chave PIX do barbeiro"
                    name="chave_pix">
            </div>


            <button type="submit" class="btn btn-dark">Cadastrar</button>
        </form>
    </div>
    <head>
    <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>

        $(document).ready(function () {
            $('#nome').val('natiely');
            $('#email').val('natiely@mail.com');
            $('#data_de_nascimento').val('2000-01-01');
            $('#numero_agencia').val('5698');
            $('#numero_conta').val('55485547');
            $('#chave_pix').val('2198554563325');
        });
    </script>

</body>

</html>