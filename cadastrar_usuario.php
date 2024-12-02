<?php
include "connection.php";

echo "<pre>";

print_r($_POST);


$nome = $_POST['nome'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$email = $_POST['email'];
$id_grupo = $_POST['id_grupo'];
$senha = $_POST['senha'];


$nome_do_banco = $_POST['nome_do_banco'];
$numero_da_agencia = $_POST['numero_da_agencia'];
$numero_da_conta = $_POST['numero_da_conta'];
$chave_pix = $_POST['chave_pix'];


// exit('<br>não inseriri');

$sql_usuario = "INSERT INTO usuario (nome , email, data_de_nascimento, id_grupo, senha)
VALUES ('$nome', '$email', '$data_de_nascimento', '$id_grupo', '$senha')";


$sql_dados_bancarios = "INSERT INTO dados_bancarios (nome_do_banco , numero_da_agencia , numero_da_conta , chave_pix )
VALUES ('$nome_do_banco', '$numero_da_agencia', '$numero_da_conta', '$chave_pix')";


if ($conn->query($sql_usuario) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql_usuario . "<br>" . $conn->error;
}

if ($conn->query($sql_dados_bancarios) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql_dados_bancarios . "<br>" . $conn->error;
}

$conn->close();



?>