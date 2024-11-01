<?php
include "conexao.php";
    
echo "<pre>";
print_r($_POST);

$nome_usuario = $_POST ['nome_usuario'];
$data_de_nascimento = $_POST ['data_de_nascimento'];
$nome_do_banco = $_POST ['nome_do_banco'];
$numero_da_agencia = $_POST ['numero_da_agencia'];
$numero_da_Conta = $_POST ['numero_da_Conta'];
$chave_pix = $_POST ['chave_pix'];

$sql
?>