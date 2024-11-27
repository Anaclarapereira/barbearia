<?php
include "../connection.php";
// echo "<pre>";
// print_r($_POST['servico']);
// exit();

$dias_da_semana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];

$data_agendamento = $_POST['data'];  // Data do agendamento enviada pelo formulário
$servico = $_POST['servico'];
$id_usuario = $_POST['id_usuario'];

// Verificar o dia da semana baseado na data
$dayofweek = date('w', strtotime($data_agendamento));
/* 
 SELECT (selecione)
 (Tabela.coluna) usuarios.nome, agendasdia_da_semana, agendashorario, agendasid_agenda, usuarios.id_usuario

  FROM agenda

  INNER JOIN usuarios ON usuarios.id_usuario = agendasid_usuario
 (juntando coluna id_usuario das duas tabelas na tabela usuarios)

 WHERE agendasdia_da_semana = $dayofweek
 ($dayofweek é o dia da semana que a pessoa colocar no cadastro da agenda exemplo: domingo = 0)

 AND agendasid_agenda NOT IN (SELECT agendasid_agenda  FROM agendamentos 
 (O NOT IN exclui os id_agenda já agendados para a data específica.)

  SELECT agendasid_agenda 
  FROM agendamentos 
  (juntando a coluna id_agenda das duas tabelas na tabela agendamentos) INNER JOIN agenda ON agendamentos.id_agenda = agendasid_agenda

 ('data' vem da pagina de cadastrar agendamentos) WHERE agendamentos.data = '$data_agendamento'
 )
 (aqui ordena por ordem crescente os horarios agendados) ORDER BY agendashorario*/

$sql = "
SELECT 
usuarios.nome, agendas.dia_da_semana, agendas.horario, agendas.id_agenda, usuarios.id_usuario 
FROM agendas
INNER JOIN usuarios ON usuarios.id_usuario = agendas.id_usuario
WHERE agendas.dia_da_semana = $dayofweek
AND agendas.id_agenda NOT IN (
    SELECT agendas.id_agenda 
    FROM agendamentos 
    INNER JOIN agendas ON agendamentos.id_agenda = agendas.id_agenda
    WHERE agendamentos.data = '$data_agendamento'
)
ORDER BY agendas.horario

";

// Executa a consulta no banco de dados
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Agendamentos Disponíveis</title>
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
                    <a class="nav-link active" href="../Agendamento/agendar.php">Criar Agendamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Usuario/index.html">Cadastrar Usuário</a>
                </li>
               
            </ul>
        </div>
    </nav>

<div class="container mt-3">
    <h2>Lista de Agendamentos Disponíveis para o dia: <?php echo $data_agendamento; ?></h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Barbeiro</th>
                <th>Dia da Semana</th>
                <th>Horário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    // Cada linha terá um formulário próprio para enviar os dados
                    echo "
                    <tr>
                            <td>".$row['nome']."</td>
                            <td>".$dias_da_semana[$row['dia_da_semana']]."</td>
                            <td>".$row['horario']."</td>
                            <td>
                                <input type='hidden' name='id_usuario' value='".$row['id_usuario']."'>
                                <input type='hidden' name='id_agenda' value='".$row['id_agenda']."'>
                                <input type='hidden' name='data' value='$data_agendamento'>
                                <a  href='insert_agendamento.php?id_agenda=".$row['id_agenda']."&data=".$data_agendamento."&id_usuario=".$id_usuario."&id_servico=".$servico."'  ><button type='submit' class='btn btn-primary'>Agendar</button></a>
                            </td>
                    </tr>
                    ";
                }
            } else {
                echo "<tr><td colspan='4'>Não há agendamentos disponíveis para essa data.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>