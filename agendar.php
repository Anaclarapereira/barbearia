<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
  <title>Tela de Agendamento</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container mt-3">
    <h2>Criar agendamento</h2>
    <form action="/criar_agendamento.php" method="post">
      <div class="mb-3 mt-3">

        <label for="data">Data do Agendamento:</label>
        <input type="date" class="form-control" name="data" placeholder="Enter email" name="data">

        <a href="index.php" class="btn btn-success"> + </a>
      </div>

      <div class="mb-3 mt-3">
        <label class="form-check-label">
          Serviço
        </label>
        <select class="form-select">
          <option>Selecione um serviço</option>
          <?php
          $sql = 'select * from servicos';
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<option>" . $row['servico'] . "</option>";
            }
          }
          ?>
        </select>
      </div>

      <div class="mb-3 mt-3">
        <label class="form-check-label">Barbeiro</label>
        <select class="form-select">
          <option>Selecione um barbeiro</option>
          <?php
          $sql = 'select * from usuario where id_grupo = 1'; // 1 é o barbeiro hem! 2  é o Cliente
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<option>" . $row['nome'] . "</option>";
            }
          }
          ?>

        </select>
      </div>

      <div class="mb-3 mt-3">
        <label class="form-check-label">Dia:</label>
        <select class="form-select">
          <option>Selecione um Dia</option>
          <option value="0">Domingo</option>
          <option value="1">Segunda-Feira</option>
          <option value="2">Terça-Feira</option>
          <option value="3">Quarta-Feira</option>
          <option value="4">Quinta-Feira</option>
          <option value="5">Sexta-Feira</option>
          <option value="6">Sábado</option>
        </select>
      </div>
      <div class="mb-3 mt-3">
        <label class="form-check-label">Horário:</label>
        <select class="form-select">
          <option>Selecione um Horário</option>
        </select>
      </div>


      <button type="submit" class="btn btn-primary">Agendar</button>
    </form>
  </div>

</body>

</html>

<?php
$conn->close();
?>