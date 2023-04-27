<?php
class Departamento{
    public $ID_Funcionario;
    public $departamento;
    public $salario;

    public function inserir(){
        $sql = "INSERT INTO tb_departamentos(ID_Funcionario,departamento,salario)VALUES(
            '".$this->ID_Funcionario."',
            '".$this->departamento."' ,
            '".$this->salario."'

        )";

      $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=cadastro_funcionario','root','');
      $conexao->exec($sql);
      echo "Regsitro departamento gravado";
         
    }
    public function listar(){
        $sql = "SELECT d.departamento,d.salario,f.nome,f.escolaridade
        FROM tb_departamentos d
        INNER JOIN tb_funcionarios f
        ON d.ID_Funcionario = f.ID_Funcionario;       
        
         ";
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=cadastro_funcionario','root','');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchALL();
        //retorna o array contendo todos os registros da tabela "tb_turmas"
        return $lista;
    }
}




?>