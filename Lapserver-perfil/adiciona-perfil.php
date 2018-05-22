<?php
require_once("abre-sessao.php");
require_once("../Lapserver2/models/Entidade.php");

$pdo = Conectar();

$foto_id = 0;
if ($_FILES && !empty($_FILES) && isset($_FILES["fotoPerfil"])) {
    $fotoPerfil = $_FILES["fotoPerfil"];

    $stmt = $pdo->prepare("insert into arquivo (nome, mime_type, conteudo) values (:nome, :mime_type, :conteudo); ");
    $stmt->execute(array(
        ":nome" => $fotoPerfil["name"],
        ":mime_type" => $fotoPerfil["type"],
        ":conteudo" => file_get_contents($fotoPerfil["tmp_name"])
    ));

    $stmt = $pdo->query("select last_insert_id() as novo_id");
    $objs = $stmt->fetchAll(PDO::FETCH_OBJ);

    $foto_id = $objs[0]->novo_id;
}
$id = $_POST['id'];
$table = $_POST['tabela'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$localizacao = $_POST['localizacao'];
$formacao = $_POST['formacao'];
$bio = $_POST['bio'];
$area_conhecimento= $_POST['conhecimento'];
$categoria_id = $_POST['categoria'];
$telefone = $_POST['telefone'];

$atualizar = AtualizarDados($pdo, $id, $table, $nome, $email, $localizacao, $formacao, $bio, $area_conhecimento,  $categoria_id, $foto_id, $telefone);
try{
    if($atualizar){
        header("Location: index.php");
    }else{
        throw new Exception("deu merda!");
    }
}catch (Exception $ex) {
    echo $ex->getMessage();
}
die();