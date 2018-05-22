<?php
require_once ("abre-sessao.php");

$pdo = Conectar();
$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$dataInicio = $_POST['dataInicio'];
$dataTermino = $_POST['dataTermino'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$categoria = $_POST['categoria_id'];

$servicos = new Servicos($nome, $descricao, $dataInicio, $dataTermino, $telefone, $email, $categoria);
$servicos->setId($id);


$servicosDao = new ServicosDao($pdo);

$cadastrar = $servicosDao->InserirServicos($servicos);
header("Location: index.php");
die();
