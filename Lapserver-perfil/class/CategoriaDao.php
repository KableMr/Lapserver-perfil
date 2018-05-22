<?php

class CategoriaDao
{
    private $conexao;


    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function ListarCotegoria(){
        $query = "select * from categorias";
        $resultado = $this->conexao->query($query);
        $linhas = $resultado->fetchAll(PDO::FETCH_OBJ);
        return $linhas;
    }


}