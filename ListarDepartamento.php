<?php


//Inclui o arquivo que contém a classe Turma

require_once "classes/Departamento.php";
//Cria um novo objeto Turma
$departamento = new Departamento();
//chama o método "listar" e armazena o resultado em uma variavel
$lista = $departamento->listar();



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listarDepartamento.css">
    <title>Departamento</title>
</head>
<body>
    <header>
   
</header>
<main>

<table border= "2">
<tr>

        <th>DEPARTAMENTO</th>
        <th>SALARIO</th>
        <th>NOME</th>
         <th>ESCOLARIDADE</th>
        
      

        

   
    

</tr>
<?php foreach($lista as $linha): ?>   
    <tr>
  
        <td><?php echo $linha['departamento']?></td>
        <td><?php echo $linha['salario']?></td>
        <td><?php echo $linha['nome']?></td>
        <td><?php echo $linha['escolaridade']?></td>
        

      
     
</tr>
<?php endforeach ?>
</table>
</main>
    
</body>
</html>


