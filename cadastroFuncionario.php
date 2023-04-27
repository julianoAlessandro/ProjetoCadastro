<?php

require_once "classes/Funcionario.php";

$funcionario = new Funcionario();

$funcionario ->nome= $_POST['nome'];
$funcionario->cpf = $_POST['cpf'];
$funcionario->rg = $_POST['rg'];
$funcionario->email = $_POST['email'];
$funcionario->senha = $_POST['senha'];
$funcionario->estado = $_POST['estado'];
$funcionario->cidade = $_POST['cidade'];
$funcionario->bairro = $_POST['bairro'];
$funcionario->ID_Funcionario = $_POST['ID_Funcionario'];
$funcionario->escolaridade = $_POST['escolaridade'];
$funcionario->idade = $_POST['idade'];

$funcionario -> inserir();

?>