<?php
//Inclui o arquivo que contém a classe Turma

require_once "classes/Funcionario.php";
//Cria um novo objeto Turma
$funcionario = new Funcionario();
//chama o método "listar" e armazena o resultado em uma variavel
$lista = $funcionario->listar();



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listarDepartamento.css">
    <title>Sistema Academico</title>
</head>
<body>

<table border= "2">
<tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
         <th>RG</th>
        <th>EMAIL</th>
        <th>SENHA</th>
        <th>ESTADO</th>
        <th>CIDADE</th>
        <th>BAIRRO</th>
        <th>ID_FUNCIONARIO</th>
        <th>ESCOLARIDADE</th>
        <th>IDADE</th>
      

        

   
    

</tr>
<?php foreach($lista as $linha): ?>   
    <tr>
  
        <td><?php echo $linha['id']?></td>
        <td><?php echo $linha['nome']?></td>
        <td><?php echo $linha['cpf']?></td>
        <td><?php echo $linha['rg']?></td>
        <td><?php echo $linha['email']?></td>
        <td><?php echo $linha['senha']?></td>
        <td><?php echo $linha['estado']?></td>
        <td><?php echo $linha['cidade']?></td>
        <td><?php echo $linha['bairro']?></td>
        <td><?php echo $linha['ID_Funcionario']?></td>
        <td><?php echo $linha['escolaridade']?></td>
        <td><?php echo $linha['idade']?></td>

      
     
</tr>
<?php endforeach ?>
</table>

    
</body>
</html>