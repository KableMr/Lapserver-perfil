<?php
require_once("abre-sessao.php");
require_once("../Lapserver2/models/Entidade.php");
try {

    if (!isset($_GET["arquivo_id"])) {
        throw new Exception("Falha ao carregar Arquivo!");
    }

    if (!$_GET["arquivo_id"]) {
        throw new Exception("Falha ao carregar Arquivo!!");
    }

    $pdo = Conectar();
    $stmt = $pdo->prepare("select * from arquivo where id = :id");
    $stmt->execute(array(
        ":id" => $_GET["arquivo_id"]
    ));
    $objs = $stmt->fetchAll(PDO::FETCH_OBJ);

    if (!($objs && is_array($objs) && count($objs))) {
        throw new Exception("Falha ao carregar Arquivo!!!");
    }

    $obj = $objs[0];

    header('Content-Type: ' . $obj->mime_type);
    header('Content-Disposition: inline; filename="' . $obj->nome . '"');

    echo $obj->conteudo;

    die();

} catch (Exception $ex) {
    echo "Ocorreu o seguinte erro: " . $ex->getMessage();
}