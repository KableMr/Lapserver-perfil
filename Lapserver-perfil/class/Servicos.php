<?php
/**
 * Created by PhpStorm.
 * User: zeluis
 * Date: 14/05/2018
 * Time: 16:38
 */

class Servicos
{
    private $id;
    private $nome;
    private $descricao;
    private $dataInicio;
    private $dataTermino;
    private $telefone;
    private $email;
    private $categoria_id;


    public function __construct($nome, $descricao, $dataInicio, $dataTermino, $telefone, $email, $categoria_id)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->dataInicio = $dataInicio;
        $this->dataTermino = $dataTermino;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->categoria_id = $categoria_id;

    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    public function getDataTermino()
    {
        return $this->dataTermino;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCategoriaId()
    {
        return $this->categoria_id;
    }


}