<?php

include "../connection.php";
$sql = "SELECT * FROM usuarios ";
$result = $conn->query($sql);
// echo "<pre>";
// print_r([
//   'usuario' => $result->fetch_assoc()['id_usuario']
// ]);
// exit();

$grupos = [1=> "Administrador", 2 => "Barbeiro", 3 => "Clientes"];
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
    </nav>

<div class="container mt-3">
  <h2>Lista de usuários</h2>   
  <h1>
  <a href="preparar_cadastro.php"><button class='btn btn-dark'>Adicionar Usuário</button></a>
  </h1>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Grupo</th>
      </tr>
    </thead>
    <tbody>
      <?php
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row['id_usuario']."</td><td>".$row['nome']."</td><td>".$grupos[$row['id_grupo']]."</td></tr>";
        }
      }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>