<?php
/**
 * Created by PhpStorm.
 * User: zeluis
 * Date: 14/05/2018
 * Time: 15:08
 */

class ConhecimentoDao
{

    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function ListarConhecimento(){
        $query = "select * from conhecimento";
        $resultado = $this->conexao->query($query);
        $linhas = $resultado->fetchAll(PDO::FETCH_OBJ);
        return $linhas;
    }


}