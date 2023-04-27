<?php
require_once "classes/Departamento.php";
$departamento = new Departamento();

$departamento ->ID_Funcionario = $_POST['ID_Funcionario'];
$departamento ->departamento = $_POST['departamento'];
$departamento ->salario = $_POST['salario'];
$departamento -> inserir();

?>