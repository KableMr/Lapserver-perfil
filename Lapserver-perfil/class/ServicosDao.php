<?php
/**
 * Created by PhpStorm.
 * User: zeluis
 * Date: 14/05/2018
 * Time: 16:25
 */

class ServicosDao
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }


    public function InserirServicos(Servicos $servicos){
        $query = "insert into servicos (nome, descricao, dataInicio, dataTermino, telefone, email, categoria_id, profissionais_id) values ('{$servicos->getNome()}', '{$servicos->getDescricao()}', '{$servicos->getDataInicio()}', '{$servicos->getDataTermino()}', '{$servicos->getTelefone()}', '{$servicos->getEmail()}', {$servicos->getCategoriaId()}, {$servicos->getId()})";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }
    public function ListarServicos($id){
        $query = "select * from servicos where profissionais_id = $id";
        $resultado = $this->conexao->query($query);
        $linhas = $resultado->fetchAll(PDO::FETCH_OBJ);
        return $linhas;
    }


}