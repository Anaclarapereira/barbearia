<?php
include "connection.php";

echo "<pre>";

print_r($_POST);


$nome = $_POST['nome_do_servico'];
$descricao_do_servico = $_POST['descricao_do_servico'];
$valor_do_servico = $_POST['valor_do_servico'];


echo "<br>nome_do_servico $nome_do_servico";
echo "<br>descricao_do_servico $descricao_do_servico";
echo "<br>valor_do_servico $valor_do_servico";

$sql_usuario = "INSERT INTO usuarios (nome_do_servico , descricao_do_servico, valor_do_servico)
VALUES ('$nome_do_servico', '$descricao_do_servico', '$valor_do_servico')";


if ($conn->query($sql_usuario) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql_usuario . "<br>" . $conn->error;-
}

if ($conn->query($sql_dados_bancarios) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql_dados_bancarios . "<br>" . $conn->error;
}

$conn->close();



?>
