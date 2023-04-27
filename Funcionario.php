<?php
class Funcionario{
    public $id;
    public $nome;
    public $cpf;
    public $rg;
    public $email;
    public $senha;
    public $estado;
    public $cidade;
    public $bairro;
    public $ID_Funcionario;
    public $escolaridade;
    public $idade;

    public function inserir(){
        $sql = "INSERT INTO tb_funcionarios(nome,cpf,rg,email,senha,estado,cidade,bairro,ID_Funcionario,escolaridade,idade)VALUES(
            '".$this->nome."',
            '".$this->cpf."' ,
            '".$this->rg."',
            '".$this->email."' ,
            '".$this->senha."',
            '".$this->estado."' ,
            '".$this->cidade."',
            '".$this->bairro."' ,
            '".$this->ID_Funcionario."',
            '".$this->escolaridade."' ,
            '".$this->idade."' 
            )";

            $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=cadastro_funcionario','root','');
            $conexao->exec($sql);
            echo "registro gravado com sucesso";


    }

    
    public function listar(){
        $sql = "SELECT * FROM tb_funcionarios  order by nome DESC ";
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=cadastro_funcionario','root','');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchALL();
        //retorna o array contendo todos os registros da tabela "tb_turmas"
        return $lista;
       

    }

    


}




?>