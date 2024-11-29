<?php

$chave_pix = $_POST['chave_pix'];
$numero_conta = $_POST['numero_conta'];
$numero_agencia = $_POST['numero_agencia'];
$numero_do_banco = $_POST['numero_do_banco'];
$grupo = $_POST['grupo'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$email = $_POST['email'];
$nome_usuario = $_POST['nome_usuario'];

$sql_inserir_usuario = "INSERT INTO usuarios (nome , email, data_de_nascimento, id_grupo)
VALUES ('$nome', '$email', '$data_de_nascimento', $id_grupo)";


$conn->query($sql_inserir_usuario);

?>